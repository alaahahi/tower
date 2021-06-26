
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
        <h2 class="text-center text-white bg-company" style="background-color: #ffc107"> Lana City</h2>
        <div class="marquee1">
        <span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ </span>
        <span class="badge bg-red">100M <i class="fa fa-arrow-down"></i> 550$  </span> 
        <span class="badge bg-green">90M <i class="fa fa-arrow-up"></i> 600$ </span> 
        <span class="badge bg-red">65M <i class="fa fa-arrow-down"></i>  700$ </span> 
        <span class="badge bg-green">House <i class="fa fa-arrow-up"></i>  400$</span> 
        <span class="badge bg-red">villa <i class="fa fa-arrow-down"></i> 250$ </span> 
        </div>
            <div class="splide">
	<div class="splide__track">
		<ul class="splide__list">
        <li class="splide__slide">
        <div class="row" >
        <div class="col-md-5 rowcolor" id="panel_window">
        <h2 class="text-center"><span class="badge bg-green">150M <i class="fa fa-arrow-up"></i>  500$ Per 1M Buy Now</span></h2>
            <div  width="100%"  id="chart">
            </div>
            </div>
        <div class="col-md-7 animated zoomIn vanim text-center" id='mediaSection' isVisible="1">
        <img src="Towers.jpg" width="90%" height="90%" alt="" id="client_image">
        </div>
        </div>
        </li>
        <li class="splide__slide">
        <div class="row" >
        <div class="col-md-5 rowcolor" id="panel_window">
        <h2 class="text-center"><span class="badge bg-red">100M <i class="fa fa-arrow-down"></i>  550$ Per 1M Buy Now</span></h2>
            <div  width="100%"  id="chart1">
            </div>
            </div>
        <div class="col-md-7 animated zoomIn vanim text-center" id='mediaSection' isVisible="1">
        <img src="1.jpg" width="90%" height="90%" alt="" id="client_image">
        </div>
        </div>
        </li>
        <li class="splide__slide">
        <div class="row" >
        <div class="col-md-5 rowcolor" id="panel_window">
        <h2 class="text-center"><span class="badge bg-green">50M <i class="fa fa-arrow-up"></i>  600$ Per 1M Buy Now</span></h2>
            <div  width="100%"  id="chart2">
            </div>
            </div>
        <div class="col-md-7 animated zoomIn vanim text-center" id='mediaSection' isVisible="1">
        <img src="img/3.jpg" width="90%" height="90%" alt="" id="client_image">
        </div>
        </div>
        </li>
		</ul>
	</div>
</div>

        </div>
    </div>
    <div class="carousel-item">
    <div class="row" >
    <h2 class="text-center text-white" style="background-color: #0a58ca">Lalav City</h2>
        <div class="marquee2">
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

            <div class="col-md-7 animated zoomIn vanim text-center" id='mediaSection' isVisible="1">
            <video width="90%" height="90%" autoplay loop>
    <source src="2.mp4" type="video/mp4" />
</video>
            </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row" >
    <h2 class="text-center text-white" style="background-color: #dc3545">Alphatech City</h2>
        <div class="marquee3">
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
            <div class="col-md-7 animated zoomIn vanim text-center" id='mediaSection' isVisible="1">
            <video width="90%" height="90%" autoplay loop>
    <source src="1.mp4" type="video/mp4" />
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
    </footer>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>


    <script>
$_marquee = $('div.marquee');
$_marquee1 = $('div.marquee1');
$_marquee2 = $('div.marquee2');
$_marquee3 = $('div.marquee3');
            function initMarquee() {
                $_marquee.marquee({
                    duration: 20000,
                    gap: 100,
                    delayBeforeStart: 0,
                    direction:'left'
                    
                });
            };

               function initMarquee1() {
                $_marquee1.marquee({
                    duration:20000,
                    gap: 100,
                    delayBeforeStart: 0,
                    direction:'right'
                });
                
            };
            function initMarquee2() {
                $_marquee2.marquee({
                    duration:10000,
                    gap: 100,
                    delayBeforeStart: 0,
                    direction: 'right' 
                });
                
            };
            function initMarquee3() {
                $_marquee3.marquee({
                    duration:10000,
                    gap: 100,
                    delayBeforeStart: 0,
                    direction:'right'
                });
                
            };

        $(document).ready(function() {
            var myCarousel = document.querySelector('#carouselExampleIndicators')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 10000,
  wrap: false
})
  
            var options = {
  chart: {
    type: 'line'
  },
  series: [{
    name: 'sales',
    data: [30,40,45,50,49,60,70,91,125,100,30,40,45,50,49,60,70,91,80,100,30,40,45,60,49,60,70,91,125,100,]
  }],
  xaxis: {
    categories: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]
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
                direction  : 'ttb',
	            height: '35%',
            } ).mount();
            chart.render();
chart1.render();
chart2.render();
chart3.render();
chart4.render(); 

initMarquee();
initMarquee1();     
initMarquee2();
initMarquee3();   
        });
        


    </script>

</body>

</html>
