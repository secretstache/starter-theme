    
@foreach( $column->modules as $key => $module )

    @php
        
        $classes = $builder->getCustomClasses( "module", '', $key, $module );
        $id = $builder->getCustomID( $module );

    @endphp

    @switch( $module->acf_fc_layout )

        @case( 'headline' )

            @include( 'modules.headline', [ 'classes' => $classes, 'id' => $id, 'headline' => $module->headline, 'subheadline' => $module->subheadline ] )
            @break

        @case( 'text_editor' )

            @include( 'modules.text-editor', [ 'classes' => $classes, 'id' => $id, 'text_editor' => $module->text_editor_inner_text ] )
            @break
            
        @case( 'buttons' )
            
            @foreach ($module->buttons as $button)
                
                @php 

                    $target = $button->option_button_target;
                    $inner_classes = ( $button->option_html_classes ) ? " " . $button->option_html_classes : '';
                    $inner_id = $builder->getCustomID( $button );
                
                @endphp

                @include( 'modules.button', [ 'classes' => $classes, 'id' => $id, 'source' => $button->button_source, 'inner_classes' => $inner_classes, 'inner_id' => $inner_id, 'label' => $button->button_label, 'size_class' => $button->option_button_size, 'target' => $target ] )
                
            @endforeach

            @break

        @case( 'image' )

            @include( 'modules.image', [ 'classes' => $classes, 'id' => $id, 'src' => $module->image_inner->url, 'alt' => $module->image_inner->alt, 'add_image_link' => $module->option_add_image_link, 'source' => $module->option_image_link_source ] )
            @break

        @case( 'video' )

            @include( 'modules.video', [ 'classes' => $classes, 'id' => $id, 'video' => $module->video ] )
            @break

        @case( 'form' )

            @include( 'modules.form', [ 'classes' => $classes, 'id' => $id, 'form_id' => $module->form ] )
            @break

        @endswitch {{-- $module->acf_fc_layout --}}

@endforeach {{-- $modules as $module --}}