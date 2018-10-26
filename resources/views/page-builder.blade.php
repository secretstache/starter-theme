@if( !post_password_required() )

		@if( $hero_unit_columns )

			@php
				$classes = $builder->getHeroUnitClasses(
					"custom",
					$hero_unit_columns->option_html_classes,
					$hero_unit_columns->option_html_id,
					$hero_unit_columns->option_background,
					$hero_unit_columns->option_background_color,
					$hero_unit_columns->option_hero_unit_height
				);

				$style = ( $hero_unit_columns->option_background == 'Image' && !is_null( $hero_unit_columns->option_background_image ) ) ? ' style="background-image: url(' . $hero_unit_columns->option_background_image->url . ')" ' : '';
				$columns_width = 12 / count( $hero_unit_columns->columns );

			@endphp

        	@include( 'templates.hero-unit', [ 'column' => $hero_unit_columns, 'classes' => $classes, 'style' => $style, 'columns_width' => $columns_width ] )

		@endif {{-- $hero_unit_columns --}}
		

		@if( $templates )

			@foreach( $templates as $template )

				@switch( $template->acf_fc_layout )
					
					@case('columns')
						
						@php 
						
							$classes = $builder->getTemplateClasses(
								"custom",
								$template->option_html_classes,
								$template->option_html_id,
								$template->option_background,
								$template->option_background_color
							);

							$style = ( $template->option_background == 'Image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';
							$columns_width = ( !is_null( $template->option_columns_width ) ) ? $template->option_columns_width : ( 12 / count( $template->template_columns ) );
							
						@endphp

						@include( 'templates.columns', [ 'classes' => $classes, 'style' => $style, 'columns_width' => $columns_width ] )
						@break

				@endswitch {{-- $template->acf_fc_layout --}}
			
			@endforeach {{-- $templates as $template  --}}

    	@endif {{-- $templates --}}
    
    @endif {{-- !post_password_required() --}}