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

		@include( 'switches.templates' )

	@endif {{-- $templates --}}

@endif {{-- !post_password_required() --}}