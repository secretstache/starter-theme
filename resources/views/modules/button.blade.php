<div {!! $id !!} {!! $classes !!} >

	@if ( $source == 'internal' )

		@if ( $label && $button->button_page_id )

			<a {!! $inner_id !!} class="button {!! $size_class !!}{!! $inner_classes !!}" href="{!! get_permalink( $button->button_page_id ) !!}" target="{!! $target !!}"> {!! $label !!} </a>
		
		@endif

	@elseif( $source == 'custom' )

		@if ( $label && $button->button_url )
		
			<a {!! $inner_id !!} class="button {!! $size_class !!}{!! $inner_classes !!}" href="{!! $button->button_url !!}" target="{!! $target !!}"> {!! $label !!} </a>

		@endif

	@endif

</div>