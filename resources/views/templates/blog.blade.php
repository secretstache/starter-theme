@if ( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!}>

        <div class="grid-container">

            @if( $template->option_include_template_header )

                @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif

        </div>

        <div class="grid-x align-center">

            @if ( $template->articles_to_show )

                @foreach ( $template->articles_to_show as $key => $article_id )

                @php
                    $apex_class = ( $key % 4 <= 1 ) ? ' apex-left' : ' apex-right';
                @endphp

                @if ( $key % 4 <= 1 )

                    <div class="cell small-12 medium-6 large-6 blog-card">

                        <div class="grid-x">

                            <div class="cell small-12 medium-12 large-6">

                                @if ( $photo = get_the_post_thumbnail_url( $article_id ) )
                                    <div class="blog-image" style="background-image: url('{!! $photo !!}');"></div>
                                @endif

                            </div>

                            <div class="cell small-12 medium-12 large-6 {!! $apex_class !!}">
                                
                                <div class="blog-preview">
                                    @php
                                    $categories = wp_get_post_terms( $article_id, 'article_category' );
                                    $category_name = $categories[0]->name
                                    @endphp 

                                    <h4 class="post-subheadline">{!! $category_name !!}</h4>
                                    
                                    @if ( $title = get_the_title( $article_id ))
                                    <h3 class="post-headline">{!! $title !!}</h3>                                        
                                    @endif

                                    @if ( $description = get_field( 'article_description', $article_id ) )
                                        <p class="post-preview">{!! substr( $description, 0, 100 ) !!}</p>
                                    @endif
                                    
                                    <div class="button-wrap">
                                        <a class="read-more" href="">read more</a>
                                    </div>
                                    
                                </div>

                            </div>

                        </div>

                    </div>

                    @else

                        <div class="cell small-12 medium-6 large-6 blog-card">

                            <div class="grid-x">

                                <div class="cell small-12 medium-12 large-6 {!! $apex_class !!}">
                                    
                                    <div class="blog-preview">
                                        @php
                                        $categories = wp_get_post_terms( $article_id, 'article_category' );
                                        $category_name = $categories[0]->name
                                        @endphp 

                                        <h4 class="post-subheadline">{!! $category_name !!}</h4>
                                        
                                        @if ( $title = get_the_title( $article_id ))
                                        <h3 class="post-headline">{!! $title !!}</h3>                                        
                                        @endif

                                        @if ( $description = get_field( 'article_description', $article_id ) )
                                            <p class="post-preview">{!! substr( $description, 0, 100 ) !!}</p>
                                        @endif
                                        
                                        <div class="button-wrap">
                                            <a class="read-more" href="">read more</a>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="cell small-12 medium-12 large-6">

                                    @if ( $photo = get_the_post_thumbnail_url( $article_id ) )
                                        <div class="blog-image" style="background-image: url('{!! $photo !!}');"></div>
                                    @endif

                                </div>

                            </div>

                        </div>
                        
                    @endif

                @endforeach

            @endif
                
        </div>

    </section>

@endif