@if ( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!}>

        <div class="grid-container">

            @if( $template->option_include_template_header )

                @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif

            @if ( $types = $template->project_types_to_show )

                <ul class="tabs" data-tabs id="properties-tabs" role="tablist">

                    @foreach ( $types as $key => $type_id)

                        @php 
                            $type = get_term( $type_id, 'project_type' );

                            $active_class = ( $key == 0 ) ? "tabs-title is-active" : 'tabs-title'; 
                            $data_aria_selected = ( $key == 0 )	? "aria-selected=\"true\"" : "";
                            $hidden_class = ( $key > 3 ) ? " tab-hidden" : "";
                        @endphp
                      
                        <li class="{!! $active_class !!} {!! $hidden_class !!}">

                            <a href="#{!! $type->slug !!}" {!! $data_aria_selected !!} data-tabs-target="{!! $type->slug !!}">{!! $type->name !!}</a>

                        </li>
                        
                    @endforeach

                    @if ( count( $types ) > 4 )
                        <li class="tabs-add"><a>+</a></li>
                    @endif

                </ul>

                <div class="tabs-content" data-tabs-content="properties-tabs">

                    @foreach ( $types as $key => $type_id)

                        @php 
                            $type = get_term( $type_id, 'project_type' );
                        
                            $active_class = ( $key == 0 ) ? "tabs-panel is-active" : 'tabs-panel'; 
                            $data_aria_selected = ( $key == 0 )	? "aria-selected=\"true\"" : "";
                        @endphp

                        <div class="{!! $active_class !!}" id="{!! $type->slug !!}">

                            <div class="grid-x align-center">

                                @php

                                    $args = array(
                                        'post_type' => 'trl_project', 
                                        'numberposts' => '-1',
                                        'tax_query' => array( 
                                            array( 
                                                'taxonomy' => 'project_type',
                                                'terms' => $type->term_id,
                                                'field' => 'term_id',
                                                'operator' => 'IN'
                                            )
                                        )
                                    );

                                    $posts = get_posts( $args );
                                    
                                @endphp

                                @if ( $posts && !empty( $posts ) )

								    @foreach ($posts as $post)
                                
										@php $project_id = $post->ID; @endphp

                                            <div class="cell small-12 medium-6 large-3">

                                                <div class="inner">

                                                    @if ( $thumbnail = get_the_post_thumbnail_url( $project_id ) )

                                                        <div class="portfolio-item text-center align-center" style="background-image: url('{!! $thumbnail !!}')">
                                                    
                                                            <div class="hover">

                                                                <div class="hover-text">

                                                                    <p class="portfolio-category">{!! get_the_title( $project_id ) !!}</p>

                                                                    @if ( $description = get_field( 'description', $project_id) )
                                                                        <p class="porftolio-name">{!! strip_tags( substr( $description, 0, 30 ) ) !!}</p>
                                                                    @endif
                                                                    
                                                                </div>

                                                            </div>

                                                        </div>
                                                        
                                                        <div class="mobile-text text-center">

                                                            <p class="portfolio-category-mob">{!! get_the_title( $project_id ) !!}</p>

                                                            @if ( $description = get_field( 'description', $project_id) )
                                                                <p class="portfolio-name-mob">{!! strip_tags( substr( $description, 0, 30 ) ) !!}</p>
                                                            @endif

                                                        </div>

                                                    @endif

                                                </div>

                                            </div>

                                    @endforeach

                                @endif

                            </div>

                        </div>

                    @endforeach

                </div>
                
            @endif

        </div>

    </section>
    
@endif