<section id="slider"><!--slider-->
<div class="container">
    <div class="row col">
    <div class="col-sm-9">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#slider-carousel" data-slide-to="1"></li>
                <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
                <?php
                $all_sliders = DB::table('tbl_slider')->where('publication_status', 1)->get();
                    $i=1;
                    foreach ($all_sliders as $all_slider) {
                       if ($i == 1) {
                     ?>
                <div class="item active">
                    <?php }else { ?>
                        <div class="item">
                        <?php } ?>
                    <div class="col-sm-6">
                        <h1><span>COMPU</span>-SHOP</h1>
                        <h2>For New Technologies</h2>
                        <p>We Are Introduce The New Technologies In All World 
                           , We Arrived to The Top . </p>
                        <button type="button" class="btn btn-default get">Read More...</button>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ URL::to($all_slider->slider_image) }}" style="width: 500px; height: 380px;" class="girl img-responsive" alt="" />
                        <img src=""  class="pricing" alt="" />
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
            
        </div>
    </div>
</div>
</section><!--/slider-->