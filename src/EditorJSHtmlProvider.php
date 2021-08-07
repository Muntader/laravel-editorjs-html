<?php

namespace Ankitech\LaravelEditorjsHtml;

use Illuminate\Support\ServiceProvider;

class EditorJSHtmlProvider extends ServiceProvider
{
    public function boot()
    {
        $viewsDirectory = __DIR__ . '/Views/components';

        $this->loadViewsFrom($viewsDirectory, 'components');

        $this->publishes([$viewsDirectory => base_path('resources/views/vendor/editorjs')], 'views');
    }

    public function register()
    {
        $this->app->bind('EditorJSHtml', function ($app) {
            return new EditorJSHtml();
        });
    }
}
