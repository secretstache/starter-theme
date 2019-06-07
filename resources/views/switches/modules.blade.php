    
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

                @include( 'modules.button', [ 'button' => $button ] )
                
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

        @case( 'map' )

            @include( 'modules.map', [ 'classes' => $classes, 'id' => $id ] )
            @break

        @endswitch {{-- $module->acf_fc_layout --}}

@endforeach {{-- $modules as $module --}}