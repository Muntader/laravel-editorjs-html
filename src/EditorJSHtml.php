<?php

namespace Ankitech\LaravelEditorjsHtml;

use EditorJS\EditorJS;
use EditorJS\EditorJSException;
use Illuminate\Support\Facades\View;

class EditorJSHtml
{
    public $blocks = [];
    private $json_data;

    public function __construct(String $data)
    {
        /**
         * Count elements in data array
         */
        if (empty($data)) {
            throw new EditorJSException('Input array is empty');
        }

        $this->json_data = $data;
    }

    public function render()
    {
        $validateFile = __DIR__ . '/editor-validate.json';
        $validate = file_get_contents($validateFile);
        try {
            // Initialize Editor backend and validate structure
            $editor = new EditorJS($this->json_data, $validate);

            // Get sanitized blocks (according to the rules from configuration)
            $blocks = $editor->getBlocks();
            $renderedBlocks = array();
            for ($i = 0; $i < count($blocks); $i++) {
                $renderedBlocks[] = View::make('vendor.editorjs.' . $blocks[$i]['type'], array(
                    'block' => (object)$blocks[$i]['data']
                ))->render();
            }
            return view('vendor.editorjs.article', ['blocks' => $renderedBlocks]);
        } catch (EditorJSException $e) {
            throw new $e->getMessage();
        }
    }
}
