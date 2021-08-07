Editorjs-html you can convert the output object of EditorJs to HTML using editor-js/editorjs-php validation
<br>
Note: The components work with Tailwind classes

<h2>Support Blocks</h2>

<ul>
  <li>Header</li>
  <li>Paragraph</li>
  <li>Table</li>
  <li>List</li>
  <li>Delimiter</li>
  <li>Code</li>
  <li>Quote</li>
  <li>Embed</li>
  <li>Image</li>
  <li>Checklist</li>
  <li>Link</li>
  <li>Raw</li>
</ul>

<h2>Installation</h2>
composer require ankitech/laravel-editorjs-html

<h2>Usage</h2>
<pre>
$convertToHtml = new EditorJSHtml($request->input('editorjs_data'));
$convertToHtml->render(); return html view
</pre>
