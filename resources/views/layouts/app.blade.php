<!doctype html>

<html {{ get_language_attributes() }}>

	@include('partials.head')

	<body {{ body_class() }} >

		<div class="off-canvas-wrapper">

			@include('partials.offcanvas')

			<div class="off-canvas-content" data-off-canvas-content>

				@php do_action('get_header') @endphp

				@include('partials.header')
				
				@if( is_page() )

					@php
							$args = (object)array(
								"option_background"	=> $option_background,
								"option_background_color" => $option_background_color,
								"option_background_image" => $option_background_image,
								"option_background_video" => $option_background_video,
								"option_html_classes" => $option_html_classes,
								"option_html_id" => $option_html_id,
							);

							$classes = $builder->getCustomClasses( "hero-unit", '', '', $args );
							$id = $builder->getCustomID( $args );
							$style = ( $args->option_background == 'image' && !is_null( $args->option_background_image ) ) ? ' style="background-image: url(' . $args->option_background_image->url . ')" ' : '';
						
					@endphp

					@include( 'templates.hero-unit', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )


	@endif {{-- $hero_unit_columns --}}


				<div class="wrap container" role="document">

					<main class="content" id="main">

						@yield('content')

						@if (App\display_sidebar())

							<aside class="sidebar">
								@include('partials.sidebar')
							</aside>

						@endif

					</main>

				</div>

				@php do_action('get_footer') @endphp

					@include('partials.footer')

				@php wp_footer() @endphp

			</div>

		</div>

	</body>

</html>
