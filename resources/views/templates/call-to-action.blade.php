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

								@php

									$module = (object)array(
										"acf_fc_layout" => "buttons"
									);

									$wrapper_id = $builder->getCustomID( $module );
									$wrapper_classes = $builder->getCustomClasses( "module", $template->buttons[0]->option_button_alignment, $key, $module );

								@endphp

								@include( 'modules.button', [ 'buttons' => $template->buttons, 'wrapper_id' => $wrapper_id, 'wrapper_classes' => $wrapper_classes ] )

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endif
