<div {!! $classes !!} {!! $id !!}>

        <div class="grid-x grid-margin-x">

            @if ( $module->icons )

                @foreach ( $module->icons as $item_icon)

                    <div class="cell small-11 medium-6 large-4 icon-block">

                        <div class="round-icon">

                            <img src="{!! $item_icon->icon_image->url !!}" alt="" class="editable-svg">

                        </div>

                        <p class="icon-text">{!! $item_icon->icon_text !!}</p>

                    </div>

                @endforeach
                
            @endif

        </div>

</div>