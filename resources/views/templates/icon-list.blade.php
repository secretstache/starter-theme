@if ( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!}>

        <div class="grid-container">

            @if( $template->option_include_template_header )

			    @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif

            <div class="grid-x grid-margin-x align-center">

                @if ( $template->icon_list)
                        
                    @foreach ( $template->icon_list as $icon )

                        <div class="cell small-11 medium-4 icon-list-item underline">

                            <div class="grid-x grid-margin-x">

                                <div class="cell small-2">

                                    <div class="inner">

                                        <img src="{!! $icon->icon_list_image->url !!}" alt="" class="editable-svg">

                                    </div>

                                </div>

                                <div class="cell small-10">

                                    <div class="inner">

                                        <h4>{!! $icon->icon_list_headline !!}</h4>
                                        <p>{!! $icon->icon_list_description !!}</p>

                                    </div>

                                </div>
                                        
                            </div>

                        </div>

                    @endforeach

                @endif

            </div>

        </div>

    </section>

@endif