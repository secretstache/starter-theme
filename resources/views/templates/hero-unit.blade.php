<section {!! $classes !!} {!! $style !!} >

    @if( $option_background == 'Video' && !is_null( $option_background_video ) )

        @include( 'partials.video-background', [ 'option_background_video' => $option_background_video ] )

    @endif

    @if( !empty( $columns ) )

            <div class="grid-container">
                <div class="main grid-x grid-margin-x {{ "align-" . $x_alignment . " align-" . $y_alignment . " has-" . $count . "-cols" }} ">

                    @foreach( $columns as $key => $column )

                        <div class="cell small-11 medium-{{ $columns_width . ' i-' . $key }}">
                            <div class="inner">

                                @foreach( $column->modules as $key => $module )

                                    @switch( $module->acf_fc_layout )

                                        @case( 'button' )
                                                
                                            @php 

                                                $classes = $builder->getModuleClasses( 
                                                    "custom",
                                                    $module->option_html_classes,
                                                    $module->option_html_id,
                                                    $key
                                                );

                                                $target = ( $module->option_target == 'new_tab' ) ? '_blank' : '_self';
                                            
                                            @endphp

                                            @include( 'modules.button', [ 'classes' => $classes, 'url' => $module->button_url, 'label' => $module->button_label, 'target' => $target ] )
                                            @break

                                        @case( 'html_editor' )

                                            @php

                                                $classes = $builder->getModuleClasses( 
                                                    "custom",
                                                    $module->option_html_classes,
                                                    $module->option_html_id,
                                                    $key
                                                );

                                            @endphp

                                            @include( 'modules.html-editor', [ 'classes' => $classes, 'html_editor' => $module->html_editor_inner_text ] )
                                            @break
                                        
                                        @case( 'image' )

                                            @php

                                                $classes = $builder->getModuleClasses( 
                                                    "custom",
                                                    $module->option_html_classes,
                                                    $module->option_html_id,
                                                    $key
                                                );

                                            @endphp

                                            @include( 'modules.image', [ 'classes' => $classes, 'src' => $module->image_inner->url, 'alt' => $module->image_inner->alt ] )
                                            @break

                                    @endswitch {{-- $module->acf_fc_layout --}}

                                @endforeach {{-- $modules as $module --}}

                            </div> {{-- inner --}}
                        </div> {{-- cell --}}

                    @endforeach {{-- $columns as $key => $column --}}

                </div> {{-- main --}}
            </div>  {{-- grid-container --}}

        @endif {{-- !empty( $columns ) --}}

</section>