<!doctype html>

<html {{ get_language_attributes() }}>

	@include('partials.head')

	<body {{ body_class() }} >

		@if ( $gtm = get_field("google_tag_manager_id", "options") )
			@php do_action("ssm_gtm_body_insert", $gtm); @endphp
		@endif

		<div class="off-canvas-wrapper">

			@include('partials.offcanvas')

			<div class="off-canvas-content" data-off-canvas-content>

				@php do_action('get_header') @endphp

				@include('partials.header')

				<div class="wrap container" role="document">

					<main class="content">

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
