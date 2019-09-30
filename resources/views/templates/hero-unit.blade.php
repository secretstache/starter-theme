<section {!! $id !!} {!! $classes !!} {!! $style !!} >

    @if( $column->option_background == 'video' && !is_null( $column->option_background_video ) )

        @include( 'partials.video-background', [ 'video' => $column->option_background_video ] )

    @endif

    @if( $column->option_include_template_header )

		@include( 'partials.template-header', [ 'headline' => $column->option_template_headline, 'subheadline' => $column->option_template_subheadline ] )

    @endif

    @if( !empty( $column->columns ) )

            <div class="grid-container">

                <div class="main grid-x grid-margin-x {{ "align-" . $column->option_x_alignment . " align-" . $column->option_y_alignment . " has-" . count( $column->columns ) . "-cols" }} ">

                    @foreach( $column->columns as $key => $column )

                        @php $id = ( $column->option_html_id ) ? 'id="' . $column->option_html_id . '"' : '' @endphp
                        @php $custom_classes = ( $column->option_html_classes ) ? " " . $column->option_html_classes : '' @endphp

						<div {!! $id !!} class="cell small-11 {{ $column->option_mobile_sort_order }}{{ $custom_classes }}">

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
