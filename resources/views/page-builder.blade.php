@if( !post_password_required() )

	@if( $hero_unit_columns && !empty( $hero_unit_columns->columns ) )

		@php

			$classes = $builder->getCustomClasses( "hero-unit", '', $hero_unit_columns );
			$id = $builder->getCustomID( $hero_unit_columns );
			$style = ( $hero_unit_columns->option_background == 'Image' && !is_null( $hero_unit_columns->option_background_image ) ) ? ' style="background-image: url(' . $hero_unit_columns->option_background_image->url . ')" ' : '';

		@endphp

		@include( 'templates.hero-unit', [ 'column' => $hero_unit_columns, 'classes' => $classes, 'id' => $id, 'style' => $style ] )

	@endif {{-- $hero_unit_columns --}}
	

	@if( $templates )

		@php $column_index = 0; @endphp
	
		@foreach( $templates as $template )

			@switch( $template->acf_fc_layout )
				
				@case('columns')
					
					@php 
					
						$classes = $builder->getCustomClasses( "template", '', $template );
						$id = $builder->getCustomID( $template );
						$style = ( $template->option_background == 'Image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';
						$columns_width = $builder->getColumnsWidth( $column_index );
						
						$column_index++;
						
					@endphp

					@include( 'templates.columns', [ 'classes' => $classes, 'id' => $id, 'style' => $style, 'columns_width' => $columns_width ] )
					@break

			@endswitch {{-- $template->acf_fc_layout --}}
		
		@endforeach {{-- $templates as $template  --}}

	@endif {{-- $templates --}}

@endif {{-- !post_password_required() --}}