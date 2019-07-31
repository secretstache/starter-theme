@if( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!} >

        <div class="grid-container">

            <div class="grid-x grid-margin-x align-center">

                <div class="cell small-11 medium-12">

                    <div class="inner">

                        <div class="content">

                            @if ( $headline = $template->headline )

                                <header class="component stack-order-1">
                                    <h2 class="headline">
                                        {!! $headline !!}
                                    </h2>
                                </header>

                            @endif

                            @if ( $subheadline = wpautop( $template->subheadline ) )

                                <div class="component default">
                                    {!! $subheadline !!}
                                </div>

                            @endif

                            @if ( $template->buttons )

								@foreach ($template->buttons as $button)

									@php

										$module = (object)array(
											"acf_fc_layout" => "buttons"
										);

										$wrapper_id = $builder->getCustomID( $module );
										$wrapper_classes = $builder->getCustomClasses( "module", $button->option_button_alignment, $key, $module );

										$inner_id = $builder->getCustomID( $button );
										$inner_classes = ( $button->option_html_classes ) ? " " . $button->option_html_classes : '';
										$size_class = ($button->option_button_size) ? " " . $button->option_button_size : '';

									@endphp

									@include('modules.button', ["button" => $button, 'inner_id' => $inner_id, 'inner_classes' => $inner_classes, 'size_class' => $size_class ] )

								@endforeach



								@foreach ($module->buttons as $button)

									@include( 'modules.button', [ 'button' => $button, 'inner_id' => $inner_id, 'inner_classes' => $inner_classes, 'size_class' => $size_class ] )

								@endforeach



                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endif
