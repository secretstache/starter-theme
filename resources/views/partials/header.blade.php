@php

$is_landing_page = is_page_template('views/template-landing-page.blade.php') ? true : false;
$alignment = $is_landing_page ? 'center' : 'justify';
$link = $is_landing_page ? false : true;

@endphp

<header class="site-header">

	<div class="grid-container">

		<div class="grid-x grid-margin-x align-middle align-{{ $alignment }}">

			<div class="brand cell shrink">

				@if ($link)
					<a href="{{home_url()}}">
				@endif

					@if ($logo = get_field('brand_logo', 'options'))

						@if ($icon = get_field('brand_icon', 'options'))
							<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="logo show-for-medium">
							<img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="icon hide-for-medium">
						@else
							<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="logo">
						@endif

					@else
						<span class="site-title">{{ get_bloginfo('name') }}</span>
					@endif

				@if($link)
					</a>
				@endif

			</div>

			@if ( !$is_landing_page && has_nav_menu('primary_navigation') )

				<nav class="primary-navigation cell shrink">

					@php wp_nav_menu( $builder->getMenuArgs('primary_navigation') ); @endphp

					<button class="hamburger hide-for-medium" type="button" data-toggle="offCanvas" aria-expanded="false" aria-controls="offCanvas">
						<span class="hamburger-line hamburger-line1"></span>
						<span class="hamburger-line hamburger-line2"></span>
						<span class="hamburger-line hamburger-line3"></span>
					</button>

				</nav>

			@endif

		</div>
	</div>
</header>
