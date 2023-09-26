<div class="sectionOne">
    
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/images/carouselimg1.png" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
            <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/images/carouselimg2.png" alt="Chicago" width="1100" height="500">
            </div>
        </div>
        
        <!-- Left and right controls -->
    </div>
</div>
<div class="sectionTwo">
    <div class="text-center">
        <h1 data-wow-duration="0.5s" class="ShopByCategorytitle">Shop By Category</h1>
        <br>
        <p>
            Our fashion jewellery is inspired by minimalism,focused on minimal 
        <br>simplicity, 
            perfect for everyday wear and cherished for years.
        </p>
    </div>
</div>
<div class="sectionThree">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-4 active">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 1</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
            <div class="carousel-item col-md-4">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 2</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
            <div class="carousel-item col-md-4">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 3</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
            <div class="carousel-item col-md-4">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 4</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
            <div class="carousel-item col-md-4">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 5</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
            <div class="carousel-item col-md-4">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 6</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
            <div class="carousel-item col-md-4">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Card 7</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                    a little bit longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
                </div>
            </div>
            </div>
        </div>
        
        </div>
    </div>
</div>
<script>
    (function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end 
        if (e.direction == "left") {
          $(
            ".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);
</script>