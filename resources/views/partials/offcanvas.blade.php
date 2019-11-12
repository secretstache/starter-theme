<div class="off-canvas" id="offCanvas" data-off-canvas data-transition="overlap">

    <div class="grid-container">

        <div class="grid-x grid-margin-x align-center">

            <div class="cell small-11 medium-12">

                @php wp_nav_menu( $builder->getMenuArgs('offcanvas') ); @endphp
    
                <button class="close-button off-canvas-close" data-toggle="offCanvas" role="button">
                    Close<span></span>
                </button>

            </div>

        </div>

    </div>

</div>