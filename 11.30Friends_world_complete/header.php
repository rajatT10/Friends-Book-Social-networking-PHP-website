<body>
<div id="myCarousel" class="carousel slide">
<!-- Carousel indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0"
class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<!-- Carousel items -->
<div class="carousel-inner">
<div class="item active">
<img src="img/banner01.jpg" alt="First slide">
</div>
<div class="item">
<img src="img/banner02.jpg" alt="Second slide">
</div>
<div class="item">
<img src="img/banner03.jpg" alt="Third slide">
</div>
</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel"
data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel"
data-slide="next">&rsaquo;</a>
<!-- Controls buttons -->
<div style="text-align:center;">
<input type="button" class="btn start-slide" value="Start">
<input type="button" class="btn pause-slide" value="Pause">
<input type="button" class="btn prev-slide" value="Previous Slide">
<input type="button" class="btn next-slide" value="Next Slide">
<input type="button" class="btn slide-one" value="Slide 1">
<input type="button" class="btn slide-two" value="Slide 2">
<input type="button" class="btn slide-three" value="Slide 3">
</div>
</div>
<script>
$(function(){
// Initializes the carousel
$(".start-slide").click(function(){
$("#myCarousel").carousel('cycle');
});
// Stops the carousel
$(".pause-slide").click(function(){
$("#myCarousel").carousel('pause');
});
// Cycles to the previous item
$(".prev-slide").click(function(){
$("#myCarousel").carousel('prev');
});
// Cycles to the next item
$(".next-slide").click(function(){
$("#myCarousel").carousel('next');
});
// Cycles the carousel to a particular frame
$(".slide-one").click(function(){
$("#myCarousel").carousel(0);
});
$(".slide-two").click(function(){
$("#myCarousel").carousel(1);
});
$(".slide-three").click(function(){
$("#myCarousel").carousel(2);
});
});
</script>
</body>
</html>