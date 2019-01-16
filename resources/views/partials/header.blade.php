@php 

$alignment = is_page_template('landing-page.php') ? 'center' : 'justify';
$link = is_page_template('landing-page.php') ? false : true;

@endphp

@if ( !is_page_template('landing-page.php') && has_nav_menu('primary_navigation') )
	
	<div class="off-canvas right" id="offCanvas" data-toggler=".is-active">
		
		@php wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'container' => FALSE, 'items_wrap' => '<ul class="vertical menu">%3$s</ul>', 'walker' => new Foundation_Nav_Walker ) ); @endphp
		
		<button class="button off-canvas-close" data-toggle="offCanvas">
			<img src="{{ get_stylesheet_directory_uri() . '/dist/images/x.svg' }}" alt="Close" class="editable">
		</button>
	
	</div>

@endif

<header class="site-header">

	<div class="grid-container">

		<div class="grid-x grid-margin-x align-middle align-{{ $alignment }}">
			
			<div class="brand cell shrink">
			
				@if ($link)

					<a href="{{home_url()}}">

						@if ($logo = get_field('brand_logo', 'options'))
			
							@if ($icon = get_field('brand_icon', 'options'))
								<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="logo show-for-medium">
								<img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="icon hide-for-medium">
							@else
								<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="logo">
							@endif
						
						@else
							<span class="site-title">{{get_bloginfo('name')}}</span>
						@endif
						
					</a>
						
				@endif
		
			</div>
	
			@if ( !is_page_template('landing-page.php') && has_nav_menu('primary_navigation') )
			
				<nav class="primary-navigation cell shrink">

					@php wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'container' => FALSE, 'items_wrap' => '<ul class="horizontal menu show-for-medium dropdown" data-dropdown-menu>%3$s</ul>', 'walker' => new Foundation_Nav_Walker ) ); @endphp
				
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
