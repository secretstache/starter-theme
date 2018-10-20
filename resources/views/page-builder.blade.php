@if( !post_password_required() )

		@if( $hero_unit_columns )

			@php
				$main_column = $hero_unit_columns;

				$classes = $builder->getHeroUnitClasses(
					"custom",
					$main_column->option_html_classes,
					$main_column->option_html_id,
					$main_column->option_background,
					$main_column->option_background_color,
					$main_column->option_hero_unit_height
				);

				$style = $builder->getInlineStyles(
					$main_column->option_background,
					$main_column->option_background_image
				);

				$video_background = $builder->getVideoBackground(
					$main_column->option_background,
					$main_column->option_background_video
				);

				$columns_width = 12 / count( $main_column->columns ) ;

			@endphp

        	@include( 'templates.hero-unit', [ 'classes' => $classes, 'style' => $style, 'video_background' => $video_background, 'columns' => $main_column->columns, 'count' => count( $main_column->columns ), 'x_alignment' => $main_column->option_x_alignment, 'y_alignment' => $main_column->option_y_alignment, 'columns_width' => $columns_width ] )

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

							$style = $builder->getInlineStyles(
								$template->option_background,
								$template->option_background_image
							);

							$video_background = $builder->getVideoBackground(
								$template->option_background,
								$template->option_background_video
							);

							$header = $builder->getTemplateHeader(
								$template->option_include_template_header,
								$template->option_template_headline,
								$template->option_template_subheadline
							);

							$columns_width = ( !is_null( $template->option_columns_width ) ) ? $template->option_columns_width : ( 12 / count( $template->template_columns ) );
							
						@endphp

						@include( 'templates.columns', [ 'classes' => $classes, 'style' => $style, 'video_background' => $video_background, 'header' => $header, 'columns' => $template->template_columns, 'count' => count( $template->template_columns ), 'x_alignment' => $template->option_x_alignment, 'y_alignment' => $template->option_y_alignment, 'columns_width' => $columns_width ] )
						@break

				@endswitch {{-- $template->acf_fc_layout --}}
			
			@endforeach {{-- $templates as $template  --}}

    	@endif {{-- $templates --}}
    
    @endif {{-- !post_password_required() --}}