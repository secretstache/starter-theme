@if ( $template->option_status )
    
    <section {!! $id !!} {!! $classes !!} {!! $style !!}>

        <div class="grid-container">

            @if( $template->option_include_template_header )

			    @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif

            <div class="grid-x grid-margin-x block-grid align-center small-up-2 medium-up-4">

                @if ( $template->our_partners_to_show)
                    
                    @foreach ( $template->our_partners_to_show as $item)

                        <div class="cell small-11 medium-12">

                            <div class="inner">

                                @if ( $photo_partners = get_field( 'partner_image', $item ) )

                                    <div class="partner" style="background-image:url('{!! $photo_partners['url'] !!}')"></div>
                                    
                                @endif

                            </div>

                        </div>
                        
                    @endforeach
                    
                @endif

            </div>

        </div>
    
    </section>
    
@endif