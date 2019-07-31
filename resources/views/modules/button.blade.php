
<div {!! $wrapper_id !!} {!! $wrapper_classes !!} >

	@if ( $button->button_source == 'internal' )

		@if ( $button->button_label && $button->button_page_id )
			<a {!! $inner_id !!} class="button{!! $inner_classes !!}{!! $size_class !!}" href="{!! get_permalink( $button->button_page_id ) !!}" target="{!! $button->option_button_target !!}"> {!! $button->button_label !!} </a>
		@endif

	@else

		@if ( $button->button_label && $button->button_url )
			<a {!! $inner_id !!} class="button{!! $inner_classes !!}{!! $size_class !!}" href="{!! $button->button_url !!}" target="{!! $button->option_button_target !!}"> {!! $button->button_label !!} </a>
		@endif

	@endif

</div>

