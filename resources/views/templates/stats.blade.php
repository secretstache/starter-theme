@if( $template->option_status )

   <section {!! $id !!} {!! $classes !!} {!! $style !!} >

        @if( $template->option_include_template_header )

			@include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

        @endif
        
        <div class="grid-container">

            <div class="grid-x grid-margin-x align-center" id="counter">

                @if ( $template->stats )

                    @foreach ( $template->stats as $item )

                        <div class="cell small-6 medium-3">

                            <div class="inner">

                                <h4 class="counter" data-count="{!! $item->stats_number !!}">0</h4>

                                <p>{!! $item->stats_label !!}</p>

                                @if ( $template->include_dash)

                                    <div class="underline"></div>
                                    
                                @endif

                            </div>

                        </div>
                        
                    @endforeach
                    
                @endif

            </div>

        </div>

    </section>

@endif