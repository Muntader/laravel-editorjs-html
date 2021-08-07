<div class="flex flex-col">
    @for ($i = 0; $i < count($block->items); $i++)
        <div class="item flex mb-2">
            <div>
                @if(!$block->items[$i]['checked'])
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                         fill="#5f6368">
                        <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/>
                        <path
                            d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                         class="fill-current text-green-600 hover:text-black transition delay-100 duration-200 ease-in-out">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                @endif
            </div>
            <div class="ml-1">
                <p>{{$block->items[$i]['text']}}</p>
            </div>
        </div>
    @endfor
</div>
