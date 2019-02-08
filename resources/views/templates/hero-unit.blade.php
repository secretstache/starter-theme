<section {!! $id !!} {!! $classes !!} {!! $style !!} >

    @if( $column->option_background == 'Video' && !is_null( $column->option_background_video ) )

        @include( 'partials.video-background', [ 'video' => $column->option_background_video ] )

    @endif

    @if( !empty( $column->columns ) )

            <div class="grid-container">
                <div class="main grid-x grid-margin-x {{ "align-" . $column->option_x_alignment . " align-" . $column->option_y_alignment . " has-" . count( $column->columns ) . "-cols" }} ">

                    @foreach( $column->columns as $key => $column )

                        <div class="cell small-11">
                            <div class="inner">

                                @if( !empty( $column->modules ) )

                                    @include( 'switches.modules' )

                                @endif {{--  !empty( $column->modules --}}

                            </div> {{-- inner --}}
                        </div> {{-- cell --}}

                    @endforeach {{-- $columns as $key => $column --}}

                </div> {{-- main --}}
            </div>  {{-- grid-container --}}

         @endif {{-- !empty( $columns ) --}}

</section>