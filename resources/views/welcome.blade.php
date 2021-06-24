
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View window</title>
    <link media="all" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/waiting_window.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<style>
.marquee1{
    font-size: 30px;
	background-image: linear-gradient(359deg,rgb(31 6 239 / 55%) 0%,rgb(255 255 255 / 38%) 100%);
}
.bg-green{
    background-color:green;
}
.bg-red{
    background-color:red;
}
.bg-company{
    background-color:#0a58ca;
}
</style>
<body>
   

    <div class="fullscreen">
        <div class="row brand">
            <div class="col-md-1 animated fadeInRight loganmi">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo.png') }}" width="200" alt="" />
                </a>
            </div>
        </div>
        <div class="row" >
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row" >
        <h2 class="text-center text-white">Lana City</h2>
        <div class="marquee1">
        <span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ </span>
        <span class="badge bg-red">100M <i class="fa fa-arrow-down"></i> 550$  </span> 
        <span class="badge bg-green">90M <i class="fa fa-arrow-up"></i> 600$ </span> 
        <span class="badge bg-red">65M <i class="fa fa-arrow-down"></i>  700$ </span> 
        <span class="badge bg-green">House <i class="fa fa-arrow-up"></i>  400$</span> 
        <span class="badge bg-red">villa <i class="fa fa-arrow-down"></i> 250$ </span> 
        </div>
            <div class="col-md-5 rowcolor" id="panel_window">
            <div class="splide">
	<div class="splide__track">
		<ul class="splide__list">
        <li class="splide__slide">
        <h2 class="text-center"><span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ Per 1M Buy Now</span></h2>
            <div  width="100%"  id="chart">
            </div></li>
        <li class="splide__slide"><div  width="100%"  id="chart1">
        <h2 class="text-center"><span class="badge bg-red">100M <i class="fa fa-arrow-down"></i> 550$  Per 1M Buy Now </span> </h2>
        </div></li>
        <li class="splide__slide">
        <h2 class="text-center"><span class="badge bg-green">90M <i class="fa fa-arrow-up"></i> 600$ Per 1M Buy Now</span> </h2>
            <div  width="100%"  id="chart2">
            </div></li>
		</ul>
	</div>
</div>
          
            </div>

            <div class="col-md-7 animated zoomIn vanim" id='mediaSection' isVisible="1">
                <img src="" width="90%" height="90%" alt="" class="divhide" id="client_image">
                <video width="100%" height="100%" class="videos" id="video" controls loop autoplay muted>
                    <source src="fh.MP4" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row" >
    <h2 class="text-center text-white">News City</h2>
        <div class="marquee1">
        <span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ </span>
        <span class="badge bg-red">100M <i class="fa fa-arrow-down"></i> 550$  </span> 
        <span class="badge bg-green">90M <i class="fa fa-arrow-up"></i> 600$ </span> 
        <span class="badge bg-red">65M <i class="fa fa-arrow-down"></i>  700$ </span> 
        <span class="badge bg-green">House <i class="fa fa-arrow-up"></i>  400$</span> 
        <span class="badge bg-red">villa <i class="fa fa-arrow-down"></i> 250$ </span> 
        </div>
            <div class="col-md-5 rowcolor " id="panel_window">
                <div class="row" width="100%"  id="chart3"></div>
            </div>

            <div class="col-md-7 animated zoomIn vanim" id='mediaSection' isVisible="1">
                <img src="" width="90%" height="90%" alt="" class="divhide" id="client_image">
                <video width="100%" height="100%" class="videos" id="video" controls loop autoplay muted>
                    <source src="fh.MP4" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row" >
    <h2 class="text-center text-white">Alphatech City</h2>
        <div class="marquee1">
        <span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ </span>
        <span class="badge bg-red">100M <i class="fa fa-arrow-down"></i> 550$  </span> 
        <span class="badge bg-green">90M <i class="fa fa-arrow-up"></i> 600$ </span> 
        <span class="badge bg-red">65M <i class="fa fa-arrow-down"></i>  700$ </span> 
        <span class="badge bg-green">House <i class="fa fa-arrow-up"></i>  400$</span> 
        <span class="badge bg-red">villa <i class="fa fa-arrow-down"></i> 250$ </span> 
        </div>
            <div class="col-md-5 rowcolor" id="panel_window">
                <div class="row" width="100%"  id="chart4"></div>
            </div>

            <div class="col-md-7 animated zoomIn vanim" id='mediaSection' isVisible="1">
                <img src="" width="90%" height="90%" alt="" class="divhide" id="client_image">
                <video width="100%" height="100%" class="videos" id="video" controls loop autoplay muted>
                    <source src="fh.MP4" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
    </div>
    
    <footer class="footer">
        <div class="marquee">
        <div >
        <span class="badge bg-company">Lana City</span>
        <span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ </span>
        <span class="badge bg-red">100M <i class="fa fa-arrow-down"></i> 550$  </span> 
        <span class="badge bg-green">90M <i class="fa fa-arrow-up"></i> 600$ </span> 
        <span class="badge bg-red">65M <i class="fa fa-arrow-down"></i>  700$ </span> 
        <span class="badge bg-green">House <i class="fa fa-arrow-up"></i>  400$</span> 
        <span class="badge bg-red">villa <i class="fa fa-arrow-down"></i> 250$ </span> 
        <span class="badge bg-company">News City</span>
        <span class="badge bg-green">200M <i class="fa fa-arrow-up"></i>  500$ </span>
        <span class="badge bg-red">120M <i class="fa fa-arrow-down"></i> 550$  </span> 
        <span class="badge bg-green">100M <i class="fa fa-arrow-up"></i> 600$ </span> 
        <span class="badge bg-red">55M <i class="fa fa-arrow-down"></i>  700$ </span> 
        <span class="badge bg-green">House <i class="fa fa-arrow-up"></i>  420$</span> 
        <span class="badge bg-red">villa <i class="fa fa-arrow-down"></i> 210$ </span> 
        </div>
  </div>
    </footer>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>


    <script>
        
        $(document).ready(function() {
  
  
            var options = {
  chart: {
    type: 'line'
  },
  series: [{
    name: 'sales',
    data: [30,40,45,50,49,60,70,91,125]
  }],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);
var chart1 = new ApexCharts(document.querySelector("#chart1"), options);
var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
var chart3 = new ApexCharts(document.querySelector("#chart3"), options);
var chart4 = new ApexCharts(document.querySelector("#chart4"), options);

new Splide( '.splide',{
                'cover'      : true,
                type     : 'loop',
                autoplay    : true,
            } ).mount();
            chart.render();
chart1.render();
chart2.render();
chart3.render();
chart4.render();
$_marquee = $('div.marquee');
$_marquee1 = $('div.marquee1');
            function initMarquee() {
                $_marquee.marquee({
                    duration: 5000,
                    gap: 50,
                    delayBeforeStart: 0,
                    direction:'left'
                });
            };

            $(window).on('resize', function() {
                $_marquee.marquee('destroy');
                initMarquee();
            });

            setInterval(function() {
                location.reload();
            }, 10800000);

            initMarquee();

            function initMarquee1() {
                $_marquee1.marquee({
                    duration: 5000,
                    gap: 50,
                    delayBeforeStart: 0,
                    direction: ($('html').attr('lang') == 'ar') ? 'right' : 'left'
                });
            };

            $(window).on('resize', function() {
                $_marquee1.marquee('destroy');
                initMarquee();
            });

            setInterval(function() {
                location.reload();
            }, 10800000);

            initMarquee1();
            
        });
        


    </script>

</body>

</html>
