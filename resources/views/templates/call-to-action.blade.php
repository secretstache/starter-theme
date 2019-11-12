@if( $template->option_status )

    <section {!! $id !!} {!! $classes !!}>

        @if ( $template->cta_style == 'full' )

            <div class="grid-container">

                <div class="grid-x grid-margin-x align-center align-middle has-2-cols">

                    <div class="cell small-11 medium-12 large-9">

                        <div class="inner">

                            @if ( $headline = $template->cta_headline )

                                <h3 class="headline">
                                    {!! $headline !!}
                                </h3>

                            @endif

                            @if ( $subheadline =  $template->cta_description )
                                <p>{!! $subheadline !!}</p>    
                            @endif

                        </div>

                    </div>

                    <div class="cell small-11 medium-12 large-3">
                                
                        @if ( $template->cta_include_button )

							<div class="inner">

								@php
									$module = (object)array(
										"acf_fc_layout" => "buttons"
									);
									
									$wrapper_id = $builder->getCustomID( $module );
									$wrapper_classes = $builder->getCustomClasses( "module", '', $key, $module );
								@endphp

								@include( 'modules.button', [ 'buttons' => array( $template->button ), 'wrapper_id' => $wrapper_id, 'wrapper_classes' => $wrapper_classes ] )

							</div>

						@endif


                    </div>

                </div>

            </div>

            @elseif( $template->cta_style == 'compressed' )

            <div class="grid-container">

                <div class="grid-x grid-margin-x align-center align-middle has-2-cols">

                    <div class="cell small-11 medium-12 large-9">

                        <div class="inner">

                            @if ( $headline = $template->cta_headline )

                                <p class="yellow-option-text">{!! $headline !!}</p>   

                            @endif 

                        </div>

                    </div>

                    <div class="cell small-11 medium-12 large-3">
                                
                        @if ( $template->cta_include_button )

							<div class="inner">

								@php
									$module = (object)array(
										"acf_fc_layout" => "buttons"
									);
									
									$wrapper_id = $builder->getCustomID( $module );
									$wrapper_classes = $builder->getCustomClasses( "module", '', $key, $module );
								@endphp

								@include( 'modules.button', [ 'buttons' => array($template->button), 'wrapper_id' => $wrapper_id, 'wrapper_classes' => $wrapper_classes ] )

							</div>

                        @endif
                        
                    </div>

                </div>

            </div>
            
        @endif

    </section>

@endif
