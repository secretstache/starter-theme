@php

$is_landing_page = is_page_template('views/template-landing-page.blade.php') ? true : false;
$alignment = $is_landing_page ? 'center' : 'justify';
$link = $is_landing_page ? false : true;

@endphp

<div class="sticky-container" data-sticky-container>

	<header class="site-header sticky" data-sticky data-margin-top="0" data-sticky-on="small">

		<div class="grid-container navbar">

			<div class="grid-x grid-margin-x align-center">

				<div class="grid-x align-middle align-justify cell small-11 medium-12">

					<div class="brand cell shrink" role="banner">

						@if ($link)
							<a href="{{home_url()}}">
						@endif

							@if ($logo = get_field('brand_logo', 'options'))

								<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="editable-svg logo replaced-svg">

							@else
								<span class="site-title">{{ get_bloginfo('name') }}</span>
							@endif

						@if($link)
							</a>
						@endif

					</div>

					@if ( !$is_landing_page && has_nav_menu('primary_navigation') )

						<nav class="primary-navigation cell shrink grid-x align-middle" role="navigation">

							@php wp_nav_menu( $builder->getMenuArgs('primary_navigation') ); @endphp

							<div class="hamburger hide-for-large" data-toggle="offCanvas" aria-expanded="false" aria-controls="offCanvas">

								<button class="hamburger-button" type="button" role="button">
									<span class="hide">Menu toggle</span>
									<span class="hamburger-line hamburger-line1"></span>
									<span class="hamburger-line hamburger-line2"></span>
									<span class="hamburger-line hamburger-line3"></span>
								</button>

							</div>

						</nav>

					@endif

				</div>

			</div>

		</div>

	</header>

</div>
