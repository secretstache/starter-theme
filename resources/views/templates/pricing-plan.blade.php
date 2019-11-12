@if ( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!}>

        <div class="grid-container text-center">

            @if( $template->option_include_template_header )

			    @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif

            <p class="pricing-header">{!! $template->disclaimer !!}</p>

            <div class="grid-x grid-margin-x grid-margin-y has-4-cols align-center">

                @if ( $template->pricingplans )

                    @foreach ( $template->pricingplans as $plan)

                        <div class="cell small-11 medium-6 large-3">

                            <div class="inner">

                                <h3 class="plan-name">{!! $plan->plan_name !!}</h3>

                                    <ul>

                                        @foreach ( $plan->plan_feature as $feature )

                                            @php $active_class = ( $feature->plan_cheked ) ? " checked" : ''; @endphp
                                        
                                            <li class="{!! $active_class !!}"> {!! $feature->feature !!} </li>
                                        
                                        @endforeach

                                    </ul>

                                    <p class="price">
                                        <sup>$</sup>
                                        {!! $plan->price !!}
                                        
                                        <span>monthly</span>
                                    </p>

                                    @php

                                        $module = (object)array(
                                            "acf_fc_layout" => "buttons"
                                        );
                                        
                                        $wrapper_id = $builder->getCustomID( $module );
                                        $wrapper_classes = $builder->getCustomClasses( "module", '', $key, $module );
                                        
                                    @endphp

                                    @include( 'modules.button', [ 'buttons' => array( $plan->button ), 'wrapper_id' => $wrapper_id, 'wrapper_classes' => $wrapper_classes ] )

                            </div>

                        </div>
                        
                    @endforeach
                        
                @endif

            </div>

        </div>

    </section>
    
@endif