@php
    $tag = 'ul';

    if ($block->style == 'ordered') {
        $tag = 'ol';
    }
@endphp

<div class="article-enlil-editor-list ml-6">
    <{{$tag}} class
    =" {{$tag === 'ol' ? 'list-decimal' : 'list-disc'}}">

    @for ($i = 0; $i < count($block->items); $i++)
        <li>{{$block->items[$i]}}</li>
    @endfor
</{{$tag}}>

</div>
