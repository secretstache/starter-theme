@php $is_landing_page = is_page_template('views/template-landing-page.blade.php') ? true : false; @endphp

<footer class="site-footer">

	@if( !$is_landing_page )

		<div class="grid-container">

			<div class="grid-x grid-margin-x">

				<div class="cell small-12 medium-4">
 
					@if ( ( $headline_footer = get_field( 'headline_footer', 'options' ) ) && ( $description_footer = get_field( 'description_footer', 'options' ) ) && ( $brand_logo = get_field( 'brand_logo', 'options' ) ) )

						<h3 class="footer-title-first">
							{!! $headline_footer !!}
						</h3>

						<div class="module text-editor">
							{!! $description_footer !!}
						</div>

						<div class="footer-logo">
							<img src="{!! $brand_logo['url'] !!}" alt="NewTrial" class="editable-svg logo replaced-svg">
						</div>
						
					@endif
				
				</div>

				<div class="cell small-12 medium-2">

						<h3 class="footer-title">Links</h3>

						@if ( has_nav_menu('footer_navigation') )

							<ul class="menu vertical">
								@php wp_nav_menu( $builder->getMenuArgs('footer_navigation') ); @endphp
							</ul>

						@endif

				</div>

				<div class="cell small-12 medium-3">

					<h3 class="footer-title">Twitter widget</h3>

					<div class="module twitter-widget">

						<div class="tweet">

							<p>
								Looking for an awesome CREATIVE WordPress Theme? 
								Esquise was updated and optimized to run even better. 
								Find it here: http://t.co/0WWEMQEQ48
							</p>

							<div class="date">
								<img src="{{ App\asset_path('images/cms/twitter-b.svg') }}" alt="Twitter">
								<p>01 day ago</p>
							</div>

						</div>

						<div class="tweet">

							<p>
								Looking for an awesome CREATIVE WordPress Theme? 
								Esquise was updated and optimized to run even better. 
								Find it here: http://t.co/0WWEMQEQ48
							</p>

							<div class="date">
								<img src="{{ App\asset_path('images/cms/twitter-b.svg') }}" alt="Twitter">
								<p>05 day ago</p>
							</div>

						</div>

					</div>

				</div>

				<div class="cell small-12 medium-3">

					<h3 class="footer-title">Instagram widget</h3>

					<div class="module insta-widget">

						<div class="grid-x">

							<div class="small-4">

								<div class="square" style="background-image: url({{ App\asset_path('images/cms/overseas.jpg') }})">

									<div class="hover">

										<img src="{{ App\asset_path('images/cms/look.svg') }}" alt="" class="look-icon">

									</div>

								</div>
								
							</div>

							<div class="small-4">

								<div class="square" style="background-image: url({{ App\asset_path('images/cms/overseas.jpg') }})">

									<div class="hover">

										<img src="{{ App\asset_path('images/cms/look.svg') }}" alt="" class="look-icon">

									</div>

								</div>
								
							</div>

							<div class="small-4">

								<div class="square" style="background-image: url({{ App\asset_path('images/cms/overseas.jpg') }})">

									<div class="hover">

										<img src="{{ App\asset_path('images/cms/look.svg') }}" alt="" class="look-icon">

									</div>

								</div>
								
							</div>

							<div class="small-4">

								<div class="square" style="background-image: url({{ App\asset_path('images/cms/overseas.jpg') }})">

									<div class="hover">

										<img src="{{ App\asset_path('images/cms/look.svg') }}" alt="" class="look-icon">

									</div>

								</div>
								
							</div>

							<div class="small-4">

								<div class="square" style="background-image: url({{ App\asset_path('images/cms/overseas.jpg') }})">

									<div class="hover">

										<img src="{{ App\asset_path('images/cms/look.svg') }}" alt="" class="look-icon">

									</div>

								</div>
								
							</div>

							<div class="small-4">

								<div class="square" style="background-image: url({{ App\asset_path('images/cms/overseas.jpg') }})">

									<div class="hover">

										<img src="{{ App\asset_path('images/cms/look.svg') }}" alt="" class="look-icon">

									</div>

								</div>
								
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="grid-x grid-margin-x align-center">

				<div class="cell small-12 medium-6">

					@if ( $copyright = get_field('copyright', 'options') )

						<div class="footer-section text-left">

							{!! $copyright !!}
						
						</div>

					@endif

				</div>

				<div class="cell small-12 medium-6">

					<ul class="socials footer-section">

						@if ( $facebook = get_field('facebook_username', 'options') )

							<li>
								<a target="_blank" href="https://facebook.com/{{ $facebook }}">
									<img src="{{ App\asset_path('images/cms/fb.svg') }}" alt="Facebook">
								</a>
							</li>

						@endif

						@if ( $twitter = get_field('twitter_username', 'options') )

							<li>
								<a target="_blank" href="https://twitter.com/{{ $twitter }}">
									<img src="{{ App\asset_path('images/cms/twitter-b.svg') }}" alt="Twitter">
								</a>
							</li>

						@endif

						@if ( $dribbble = get_field('dribbble', 'options') )

							<li>
								<a target="_blank" href="{{ $dribbble }}">
									<img src="{{ App\asset_path('images/cms/dribbble.svg') }}" alt="Dribbble">
								</a>
							</li>

						@endif

						@if ( $behance = get_field('behance', 'options') )

							<li>
								<a target="_blank" href="{{ $behance }}">
									<img src="{{ App\asset_path('images/cms/behance.svg') }}" alt="Behance">
								</a>
							</li>

						@endif

						@if ( $pinterest = get_field('pinterest', 'options') )

							<li>
								<a target="_blank" href="{{ $pinterest }}">
									<img src="{{ App\asset_path('images/cms/pinterest.svg') }}" alt="Pinterest">
								</a>
							</li>

						@endif

						@if ( $google_plus = get_field('google_plus', 'options') )

							<li>
								<a target="_blank" href="{{ $google_plus }}">
									<img src="{{ App\asset_path('images/cms/g-plus.svg') }}" alt="Google Plus">
								</a>
							</li>

						@endif

					</ul>

				</div>

			</div>

		</div>

	@endif

</footer>
