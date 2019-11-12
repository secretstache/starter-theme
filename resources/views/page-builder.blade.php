@if( !post_password_required() )

	@php $is_landing_page = is_page_template('views/template-landing-page.blade.php') ? true : false; @endphp


	@if( $templates )

		@include( 'switches.templates' )

	@endif {{-- $templates --}}

@endif {{-- !post_password_required() --}}