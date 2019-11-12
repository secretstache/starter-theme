@if( $template->option_status )

    <section {!! $id !!} {!! $classes !!} {!! $style !!} >

        <div class="grid-container">

            @if( $template->option_include_template_header )

			    @include( 'partials.template-header', [ 'headline' => $template->option_template_headline, 'subheadline' => $template->option_template_subheadline, "include_header_icon" => $template->include_header_icon,  "header_icon" => $template->header_icon ] )

            @endif
            
            <div class="grid-x grid-margin-x align-center block-grid">

                @if ( $template->team_members_to_show )

                    @foreach ($template->team_members_to_show as $member_id)
                                
                        <div class="cell small-11 medium-4">

                            <div class="inner">

                                <div class="image">

                                    @if ( $photo_team = get_field( 'thumbnail_team_member', $member_id ) )
                                        <img src="{!! $photo_team['url'] !!}" alt="">
                                    @endif
                                
                                    <div class="overlay">

                                        @if ($title = get_the_title( $member_id ))
                                            <p class="name">{!! $title !!}</p>  
                                        @endif
                                    
                                        @if ( $role = get_field( 'role_team_member', $member_id ))
                                        <p class="position">{!! $role !!}</p>  
                                        @endif

                                    </div>

                                </div>

                                <div class="mobile-info">

                                    @if ($title = get_the_title( $member_id ))
                                        <p class="name">{!! $title !!}</p>  
                                    @endif
                                
                                    @if ( $role = get_field( 'role_team_member', $member_id ))
                                    <p class="position">{!! $role !!}</p>  
                                    @endif
                                    
                                </div>

                            </div>

                        </div>

                    @endforeach

                @endif
            
            </div>

        </div>

    </section>
    
@endif