    
@foreach( $column->modules as $key => $module )

    @php
        
        $classes = $builder->getCustomClasses( "module", '', $key, $module );
        $id = $builder->getCustomID( $module );

    @endphp

    @switch( $module->acf_fc_layout )

        @case( 'buttons' )
            
            @foreach ($module->buttons as $button)
                
                @php 

                    $size_class = ( $button->option_button_size == "large" ) ? 'large' : 'small';
                    $target = $button->option_button_target;
                    $inner_classes = ( $button->option_html_classes ) ? " " . $button->option_html_classes : '';
                    $inner_id = $builder->getCustomID( $button );
                
                @endphp

                @include( 'modules.button', [ 'classes' => $classes, 'id' => $id, 'source' => $button->button_source, 'inner_classes' => $inner_classes, 'inner_id' => $inner_id, 'label' => $button->button_label, 'size_class' => $size_class, 'target' => $target ] )
                
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