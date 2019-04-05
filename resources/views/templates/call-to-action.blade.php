@if( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!} >

        <div class="grid-container">

            <div class="grid-x grid-margin-x align-center">

                <div class="cell small-11 medium-12">

                    <div class="inner">

                        <div class="content">
                            
                            @if ( $headline = $template->cta_headline )

                                <header class="component stack-order-1">
                                    <h2 class="headline">
                                        {!! $headline !!}
                                    </h2>
                                </header>

                            @endif

                            @if ( $subheadline = wpautop( $template->cta_subheadline ) )

                                <div class="component default">
                                    {!! $subheadline !!}
                                </div>
                                
                            @endif
                            
                            @if ( $template->cta_source == 'internal' )

                                @if ( $template->cta_button_label && $template->cta_page_id )

                                    <div class="component buttons"><a class="button" href="{{ get_permalink( $template->cta_page_id) }}">{!! $template->cta_button_label !!}</a></div>
                                
                                @endif
                                
                            @elseif( $template->cta_source == 'custom' )

                                @if ( $template->cta_button_label && $template->cta_button_url )

                                    <div class="component buttons"><a class="button" href="{{ $template->cta_button_url }}" target="_blank">{!! $template->cta_button_label !!}</a></div>
                                
                                @endif

                            @endif

                        
                        </div>
            
                    </div>
            
                </div>
            
            </div>

        </div>
    
    </section>

@endif