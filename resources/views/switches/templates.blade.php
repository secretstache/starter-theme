@php $column_index = 0; @endphp

@foreach( $templates as $template )

    @switch( $template->acf_fc_layout )

        @case('columns')

            @php

                $classes = $builder->getCustomClasses( "template", 'template-columns', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';
                $columns_width = $builder->getColumnsWidth( $column_index );

                $column_index++;

            @endphp

            @include( 'templates.columns', [ 'classes' => $classes, 'id' => $id, 'style' => $style, 'columns_width' => $columns_width ] )
            @break

        @case('call_to_action')
        
            @php
                $bg = ($template->cta_style == 'compressed') ? " bg-lighter-black" : "";

                $classes = $builder->getCustomClasses( "template", 'template-cta' . $bg, '', $template );
                $id = $builder->getCustomID( $template );

            @endphp

            @include( 'templates.call-to-action', [ 'classes' => $classes, 'id' => $id ] )
            @break

        @case('stats')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-stats', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.stats', [ 'classes' => $classes, 'id' => $id, 'style' => $style  ] )
            @break

        @case('team_members')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-team', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.team', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )
            @break

        @case('testimonials')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-testimonials', '', $template );
                $id = $builder->getCustomID( $template );

            @endphp

            @include( 'templates.testimonials', [ 'classes' => $classes, 'id' => $id ] )
            @break

        @case('our_partners_to_show')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-partners', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.partners', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )
            @break

        @case('icon_list')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-icon-list', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.icon-list', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )
            @break

        @case('pricing_plan')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-pricing-plan', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.pricing-plan', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )
            @break

        @case('related_projects')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-portfolio', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.portfolio', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )
            @break

        @case('articles_to_show')

            @php
                
                $classes = $builder->getCustomClasses( "template", 'template-blog', '', $template );
                $id = $builder->getCustomID( $template );
                $style = ( $template->option_background == 'image' && !is_null( $template->option_background_image ) ) ? ' style="background-image: url(' . $template->option_background_image->url . ')" ' : '';

            @endphp

            @include( 'templates.blog', [ 'classes' => $classes, 'id' => $id, 'style' => $style ] )
            @break

    @endswitch

@endforeach
