@if( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!} >

        @if( $template->option_background == 'Video' && !is_null( $template->option_background_video ) )
    
            @include( 'partials.video-background', [ 'video' => $template->option_background_video ] )

        @endif
        
        @if( $template->option_include_template_header )
        
                @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline ] )
        
        @endif {{-- $option_include_template_header --}}

        @if( !empty( $template->template_columns ) )

            <div class="grid-container">
                <div class="main grid-x grid-margin-x {{ "align-" . $template->option_x_alignment . " align-" . $template->option_y_alignment . " has-" . count( $template->template_columns ) . "-cols" }} ">

                    @foreach( $template->template_columns as $key => $column )

                        <div class="cell small-11 medium-{{ $columns_width . ' i-' . $key }}">
                            <div class="inner">

                                @foreach( $column->modules as $key => $module )

                                    @php
                                        
                                        $classes = $builder->getCustomClasses( "module", $key, $module );
                                        $id = $builder->getCustomID( $module );
                                    
                                    @endphp

                                    @switch( $module->acf_fc_layout )

                                        @case( 'button' )
                                                
                                            @php $target = ( $module->option_target == 'new_tab' ) ? '_blank' : '_self'; @endphp

                                            @include( 'modules.button', [ 'classes' => $classes, 'id' => $id, 'url' => $module->button_url, 'label' => $module->button_label, 'target' => $target ] )
                                            @break

                                        @case( 'html_editor' )

                                            @include( 'modules.html-editor', [ 'classes' => $classes, 'id' => $id, 'html_editor' => $module->html_editor_inner_text ] )
                                            @break
                                        
                                        @case( 'image' )

                                            @include( 'modules.image', [ 'classes' => $classes, 'id' => $id, 'src' => $module->image_inner->url, 'alt' => $module->image_inner->alt ] )
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

@endif