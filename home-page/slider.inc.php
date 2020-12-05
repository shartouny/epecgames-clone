<!-- <div class="container mt-5">
        <div class="owl-carousel owl-theme owl-loaded">
                <div class="row">
                    <div class="col-md-8 bg-light">
                            <div class="owl-item">
                            <img src="http://placehold.it/1200x600" class="img-fluid" alt="">

                            </div>
                            <div class="owl-item">Your Content</div>
                            <div class="owl-item">Your Content</div>
                    </div>
                    <div class="col-md-4 bg-success" id="here">

                        <div class="owl-nav">
                            <div class="owl-prev">prev</div>
                            <div class="owl-next">next</div>
                        </div>
                    </div>
                </div>
        </div>
    </div> -->
<script src="../libraries and plugins/jquery.cycle2.min.js"></script>
<style>
    .cycle-pager span {
        font-family: arial;
        font-size: 25px;
        width: 16px;
        height: 16px;
        display: inline-block;
        color: #ddd;
        cursor: pointer;
    }

</style>

<div class="mt-5">
    <div class="container">


        <div class="row">
            <div class="col-md-8 pr-0">
                <div class="cycle-slideshow" 
                data-cycle-fx=scrollHorz 
                data-cycle-timeout=2000 
                data-cycle-whatever="#custom-caption" 
                data-cycle-whatever-template=" {{cycleTitle}}" 
                data-cycle-caption="#parg" 
                data-cycle-caption-template=" {{cycleBlabla}}" 
                data-cycle-next="#next" 
                data-cycle-prev="#prev" 
                data-cycle-pager="#pager1">
                    <img class="img-fluid" src="https://cdn2.unrealengine.com/newsfeed-post-image-primary-faded-combined-1636x920-551771652.png" data-cycle-blabla="{{title: hello, desc:whatever, button:blabla}}">
                    <img class="img-fluid" src="https://cdn2.unrealengine.com/en-egs-black-friday-store-featuredcarousel-1920x1080-613599254.jpg" data-cycle-blabla="asdadasd">
                    <img class="img-fluid" src="https://cdn2.unrealengine.com/fm21-epic-news-headline-image-1920x1080-493296322.png" data-cycle-title="Spriasdasdasdng">
                    <img class="img-fluid" src="https://cdn2.unrealengine.com/egs-social-cdprojekt-cyberpunk2077-news-2560x1440-639115049.jpg" data-cycle-blabla="Sprasdasdading">
                </div>

            </div>
            <div class="col-md-4 bg-dark pl-0">
                <div class="container p-5">
                    <div class="row">
                    
                        <div class="col-6">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-dark" id="prev"><i class="fa fa-chevron-left"></i></button>
                                <button class="btn btn-dark" id="next"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="col-6 justify-content-end">
                            <div >
                                <div class="cycle-pager" id=pager1></div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-5">
                        <div class="cycle-pager" id=parg></div>
                        <div id="custom-caption" class="center"></div>
                    </div>
                </div>
            </div>
            <script>
                var progress = $('#progress'),
                    slideshow = $('.cycle-slideshow');

                slideshow.on('cycle-initialized cycle-before', function(e, opts) {
                    progress.stop(true).css('width', 0);
                });

                slideshow.on('cycle-initialized cycle-after', function(e, opts) {
                    if (!slideshow.is('.cycle-paused'))
                        progress.animate({
                            width: '100%'
                        }, opts.timeout, 'linear');
                });

                slideshow.on('cycle-paused', function(e, opts) {
                    progress.stop();
                });

                slideshow.on('cycle-resumed', function(e, opts, timeoutRemaining) {
                    progress.animate({
                        width: '100%'
                    }, timeoutRemaining, 'linear');
                });
            </script>
            <!-- <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-8 pr-0">
                            <img src="http://placehold.it/1200x600&text=slide1" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 pr-0">
                            <h1 class="animate__animated animate__backInUp" style="animation-delay: 1s">discription 1</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-8 pr-0">
                            <img src="http://placehold.it/1200x600&text=slide2" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 pr-0">
                            <h1 class="animate__animated animate__backInUp" style="animation-delay: 1s">discription 2</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-8 pr-0">
                            <img src="http://placehold.it/1200x600&text=slide3" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 pr-0">
                            <h1 class="animate__animated animate__backInUp" style="animation-delay: 1s">discription 3</h1>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="mt-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="col-sm-8 pr-0">
                    <div class="">
                        <img src="http://placehold.it/1200x600" class="img-fluid" alt="">
                    </div>
                    <div class="">
                        <img src="http://placehold.it/1200x600" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
            <style>
                #here .owl-nav{
                    display: flex;
                    width: auto;
                }
            </style>
            <div class="col-md-4 bg-success">
                <div class="owl-loaded"  id="here">
                    <div class="owl-nav">
                        <div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
                        <div class="owl-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->