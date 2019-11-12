
@foreach( $column->modules as $key => $module )

    @php

		$id = $builder->getCustomID( $module );
        $classes = $builder->getCustomClasses( "module", '', $key, $module );

    @endphp

    @switch( $module->acf_fc_layout )

        @case( 'header' )

        @php

            $classes = $builder->getCustomClasses( "module", 'component-header', $key, $module );

        @endphp

            @include( 'modules.header', [ 'classes' => $classes, 'id' => $id, 'headline' => $module->headline, 'subheadline' => $module->subheadline ] )
            @break

        @case( 'text-editor' )

            @include( 'modules.text-editor', [ 'classes' => $classes, 'id' => $id, 'text_editor' => $module->text_editor_inner_text ] )
            @break

        @case( 'buttons' )

				@php

					$wrapper_id = $builder->getCustomID( $module );
					$wrapper_classes = $builder->getCustomClasses( "module", $module->buttons[0]->option_button_alignment, $key, $module );

				@endphp

                @include( 'modules.button', [ 'buttons' => $module->buttons, 'wrapper_id' => $wrapper_id, 'wrapper_classes' => $wrapper_classes ] )

            @break

        @case( 'figure' )

            @include( 'modules.figure', [ 'classes' => $classes, 'id' => $id, 'src' => $module->image_inner->url, 'alt' => $module->image_inner->alt, 'add_image_link' => $module->option_add_image_link, 'source' => $module->option_image_link_source ] )
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

         @case( 'icons' )

            @include( 'modules.icons', [ 'classes' => $classes, 'id' => $id ] )
            @break

        @case( 'testimonial' )

            @include( 'modules.testimonial', [ 'classes' => $classes, 'id' => $id, 'testimonial_id' => $module->testimonial ] )
            @break


        @endswitch {{-- $module->acf_fc_layout --}}

@endforeach {{-- $modules as $module --}}
