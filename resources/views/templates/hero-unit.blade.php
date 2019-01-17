<section {!! $id !!} {!! $classes !!} {!! $style !!} >

    @if( $column->option_background == 'Video' && !is_null( $column->option_background_video ) )

        @include( 'partials.video-background', [ 'video' => $column->option_background_video ] )

    @endif

    @if( !empty( $column->columns ) )

            <div class="grid-container">
                <div class="main grid-x grid-margin-x {{ "align-" . $column->option_x_alignment . " align-" . $column->option_y_alignment . " has-" . count( $column->columns ) . "-cols" }} ">

                    @foreach( $column->columns as $key => $column )

                        <div class="cell small-11">
                            <div class="inner">

                                @if( !empty( $column->modules ) )

                                    @foreach( $column->modules as $key => $module )

                                        @php
                                            
                                            $classes = $builder->getCustomClasses( "module", $key, $module );
                                            $id = $builder->getCustomID( $module );
                                        
                                        @endphp

                                        @switch( $module->acf_fc_layout )

                                            @case( 'buttons' )
                                                
                                                @foreach ($module->buttons as $button)
                                                    
                                                    @php 
                                                    
                                                        $target = ( $button->option_target == 'new_tab' ) ? '_blank' : '_self'; 
                                                        $classes = $builder->getCustomClasses( "module", $key, $button );
                                                        $id = $builder->getCustomID( $button );    
                                                    
                                                    @endphp

                                                    @include( 'modules.button', [ 'classes' => $classes, 'id' => $id, 'url' => $button->button_url, 'label' => $button->button_label, 'target' => $target ] )
                                                    
                                                @endforeach

                                                @break

                                            @case( 'html_editor' )

                                                @include( 'modules.html-editor', [ 'classes' => $classes, 'id' => $id, 'html_editor' => $module->html_editor_inner_text ] )
                                                @break

                                            @case( 'image' )

                                                @include( 'modules.image', [ 'classes' => $classes, 'id' => $id, 'src' => $module->image_inner->url, 'alt' => $module->image_inner->alt ] )
                                                @break

                                            @case( 'header' )

                                                @include( 'modules.header', [ 'classes' => $classes, 'id' => $id, 'headline' => $module->headline, 'subheadline' => $module->subheadline ] )
                                                @break

                                        @endswitch {{-- $module->acf_fc_layout --}}


                                    @endforeach {{-- $modules as $module --}}

                                @endif {{--  !empty( $column->modules --}}

                            </div> {{-- inner --}}
                        </div> {{-- cell --}}

                    @endforeach {{-- $columns as $key => $column --}}

                </div> {{-- main --}}
            </div>  {{-- grid-container --}}

         @endif {{-- !empty( $columns ) --}}

</section>