<div class="grid-container">

    <div class="grid-x grid-x-margin align-center">

        <div class="cell small-11 medium-12">

            <header class="section-header align-center">

				@if ( $headline )
	                <h2 class="headline"> {!! $headline !!} </h2>
				@endif

				@if ($include_header_icon)

					<p class="fancy">
						<span>
							<img src="{!! $header_icon->url !!}" alt="" class="section-icon">
						</span>
					</p>

				@endif
					
				@if ( $subheadline )
                	<h3 class="subheadline"> {!! $subheadline !!} </h3>
				@endif

			</header>

		</div>

	</div>

</div>
