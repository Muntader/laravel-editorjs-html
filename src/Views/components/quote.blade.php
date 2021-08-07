@php
    if ($block->alignment == 'center') {
          $centerClass = 'text-center';
      } elseif($block->alignment == 'left') {
          $centerClass = 'text-left';
      }else{
          $centerClass = 'text-right';
      }
@endphp

<blockquote
    class="relative p-4 pb-2 text-xl italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 article-enlil-editor-quote">
    <div class="stylistic-quote-mark" aria-hidden="true" style="">

        <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 0 24 24" width="60px"
             fill="#bdb2a1">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
        </svg>
    </div>
    <p class="mb-4 m-8 mb-2 text-lg text-gray-500 {{$centerClass}}">{{ $block->text}}</p>
    @if (!empty($block->caption))
        <p class="mb-4 text-gray-500 text-right text-sm {{$centerClass}}">{{ $block->caption}}</p>
    @endif
</blockquote>
