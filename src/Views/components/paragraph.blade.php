@php
    if ($block->alignment == 'center') {
        $centerClass = 'text-center';
    } elseif($block->alignment == 'left') {
        $centerClass = 'text-left';
    }else{
        $centerClass = 'text-right';
    }
@endphp

<p class="{{$centerClass}}">
    {{$block->text}}
</p>
