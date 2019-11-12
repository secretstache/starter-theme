<div {!! $id !!} {!! $classes !!}>

    @if ( $testimonial_id )

        @if ( $description = get_field( 'quote', $testimonial_id ) )

            <blockquote>{!! $description !!}</blockquote>
            
        @endif
        
        @if ( ($role = get_field( 'role_testimonials', $testimonial_id ) ) && ( $name = get_the_title( $testimonial_id ) ) )

                <cite>{!! $name !!}
            
                    <span> - {!! $role !!}</span>

                </cite>

        @endif
        
    @endif

</div>




