@php
	$id = ($button->option_html_id) ? 'id="' . $button->option_html_id . '"' : '';
	$option_class = ($button->option_html_classes) ? " " . $button->option_html_classes : '';
	$size_class = ($button->option_button_size) ? " " . $button->option_button_size : '';
@endphp

@if ( $button->button_source == 'internal' )

	@if ( $button->button_label && $button->button_page_id )
		<a {!! $id !!} class="button{!! $option_class !!} {!! $size_class !!}" href="{!! get_permalink( $button->button_page_id ) !!}" target="{!! $button->option_button_target !!}"> {!! $button->button_label !!} </a>
	@endif

@else

	@if ( $button->button_label && $button->button_url )
		<a {!! $id !!} class="button{!! $option_class !!} {!! $size_class !!}" href="{!! $button->button_url !!}" target="{!! $button->option_button_target !!}"> {!! $button->button_label !!} </a>
	@endif

@endif
