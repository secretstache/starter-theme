<section {!! $id !!} {!! $classes !!} {!! $style !!} >

    @if( $option_background == 'video' && !is_null( $option_background_video ) )

        @include( 'partials.video-background', [ 'video' => $option_background_video ] )

    @endif
    
    <div class="grid-container">

        <div class="grid-x grid-margin-x align-center">

            <div class="cell small-11 medium-12">

                <header class="module stack-order-1 text-center">

                    <div class="hero-unit-slider">

                        @foreach ($header_hero_unit as $slide)

                            <div class="slide">

                                <h2 class="headline">
                                    {!! $slide->hero_unit_headline!!} 
                                </h2>
                            
                                <p class="subheadline">{!! $slide->hero_unit_subheadline !!}</p>

                                    @if ($include_scroll_to_next_section)

                                        @php

                                            $module = (object)array(
                                                "acf_fc_layout" => "buttons"
                                            );

                                            $button = (object)array(
                                                "button_source" => "custom",
                                                "button_label" => "Enter",
                                                "button_url"  => "#main",
                                                "option_button_size" => "medium",
                                                "option_button_target" => "_self",
                                                "option_html_classes" => "",
                                                "option_html_classes" => "button-round white scroll-down"
                                            );

                                            $wrapper_id = $builder->getCustomID( $module );
                                            $wrapper_classes = $builder->getCustomClasses( "module", "", $key, $module );
                                        
                                        @endphp

                                        @include( 'modules.button', [ 'buttons' => array( $button ), 'wrapper_id' => $wrapper_id, 'wrapper_classes' => $wrapper_classes ] )

                                    @endif
                                
                            </div>

                        @endforeach
                    
                    </div>

                </header>

            </div>

        </div>
    
    </div>

</section>