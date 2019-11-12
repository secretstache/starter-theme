@if( $template->option_status )

	<section {!! $id !!} {!! $classes !!} {!! $style !!} >

        @if( $template->option_background == 'video' && !is_null( $template->option_background_video ) )

            @include( 'partials.video-background', [ 'video' => $template->option_background_video ] )

        @endif

        @if( $template->option_include_template_header )

			    @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif

        @if( !empty( $template->template_columns ) )

            <div class="grid-container">

                <div class="grid-x grid-margin-x {{ "align-" . $template->option_x_alignment . " align-" . $template->option_y_alignment . " has-" . count( $template->template_columns ) . "-cols" }} ">

                    @foreach( $template->template_columns as $key => $column )

						@php
							$width = ($columns_width != null) ? explode( '_', $columns_width )[$key] : 12 / count( $template->template_columns );
							$width = ( count( $template->template_columns ) == 1 && $width == 10 ) ? 12 : $width;

							$medium_order_class = ( $key == 1 && $template->template_columns[0]->option_mobile_sort_order == 'medium-order-1' ) ? 'medium-order-2' : $column->option_mobile_sort_order;

							$id = ( $column->option_html_id ) ? 'id="' . $column->option_html_id . '"' : '';
							$custom_classes = ( $column->option_html_classes ) ? " " . $column->option_html_classes : '';
							$column_i = $key+1;
						@endphp

                        <div {!! $id !!} class="cell small-11 medium-{{ $width . ' i-' . $column_i }} {{ $medium_order_class }}{{ $custom_classes }}" >

                            <div class="inner">

								@if( !empty( $column->modules ) )

									@include( 'switches.modules' )

								@endif

							</div>

                        </div>

                    @endforeach

				</div>

            </div>

        @endif

    </section>

@endif
