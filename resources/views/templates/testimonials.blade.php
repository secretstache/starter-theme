@if ( $template->option_status )

    <section {!! $id !!} {!! $classes !!}>

        <div class="grid-container">

        @if( $template->option_include_template_header )

			@include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

        @endif

            <div class="grid-x grid-margin-x align-center has-1-cols">

                <div class="cell small-11 medium-12">

                    <div class="inner">

                        <div class="testimonials-carousel">

                            @if ( $template->testimonials_to_show )

                                <div class="single-item">

                                    @foreach ($template->testimonials_to_show as $testimonial_id)
                                
                                        <div class="item">

                                            @if ( $photo = get_the_post_thumbnail_url( $testimonial_id ) )
                                            <img src="{!! $photo !!}" alt="" class="testimonial-photo">   
                                            @endif

                                            <div class="testimonial-wrap">

                                                @if ( $quote = get_field( 'quote', $testimonial_id ) )
                                                    <p class="testimonial-text">{!! strip_tags($quote) !!}</p>
                                                @endif

                                            <p class="fancy"><span><img src="{{ App\asset_path('images/cms/shape-2.svg') }}" alt="" class="section-icon"></span></p>

                                                @if ( $testimonial_name = get_post_field( 'post_title', $testimonial_id ) )
                                                    <p class="name">{!! $testimonial_name !!}</p>  
                                                @endif

                                                @if ( $testimonial_role = get_field( 'role_testimonials', $testimonial_id ) )
                                                    <p class="position">{!! $testimonial_role !!}</p>
                                                @endif
                                                
                                            </div>

                                        </div>
                                        
                                    @endforeach
                                    
                                </div>
                                
                            @endif
                            
                            <div class="slick-dots"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    
@endif