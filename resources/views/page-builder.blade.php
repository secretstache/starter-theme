@if( !post_password_required() )

	@if( $hero_unit_columns )

		@php

			$classes = $builder->getCustomClasses( "hero-unit", '', $hero_unit_columns );
			$id = $builder->getCustomID( $hero_unit_columns );
			$style = ( $hero_unit_columns->option_background == 'Image' && !is_null( $hero_unit_columns->option_background_image ) ) ? ' style="background-image: url(' . $hero_unit_columns->option_background_image->url . ')" ' : '';
			$columns_width = 12 / count( $hero_unit_columns->columns );

		@endphp

		@include( 'templates.hero-unit', [ 'column' => $hero_unit_columns, 'classes' => $classes, 'id' => $id, 'style' => $style, 'columns_width' => $columns_width ] )

	@endif {{-- $hero_unit_columns --}}
	

	@if( $templates )

		@foreach( $templates as $template )

			@switch( $template->acf_fc_layout )
				
				@case('columns')
					
					@php 
					
						$classes = $builder->getCustomClasses( "template", '', $template );
						$id = $builder->getCustomID( $template );
						$style = ( $template->option_background == 'Image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';
						$columns_width = ( !is_null( $template->option_columns_width ) ) ? $template->option_columns_width : ( 12 / count( $template->template_columns ) );
						
					@endphp

					@include( 'templates.columns', [ 'classes' => $classes, 'id' => $id, 'style' => $style, 'columns_width' => $columns_width ] )
					@break

			@endswitch {{-- $template->acf_fc_layout --}}
		
		@endforeach {{-- $templates as $template  --}}

	@endif {{-- $templates --}}

@endif {{-- !post_password_required() --}}