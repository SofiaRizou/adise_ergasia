<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		// get latest movies
	$.ajax({
		dataType: "json",
		url: "http://www.omdbapi.com/?s=2018&apikey=5aa13f92"
	})
	.done(function(data){
       // console.log("<img src="+'"'+data["Search"][0]["Poster"]+'"'+" style=width:150px;>");
       //  $("#poster1").append("<img src="+'"'+data["Search"][0]["Poster"]+'"'+" style=width:150px;>");
		$.each(data["Search"],function(index,item){
            //console.log(item["Title"]);
          $("#col"+index).append(item["Title"]);
          $("#poster"+index).append("<img src="+'"'+item["Poster"]+'"'+" style=width:150px;>");
            if (index==5){
               return false;
            }
       })
	})
	.fail(function() {
		console.log("ajax error.fail");
	});
	
	</script>
	
	
	
</head>
<body>


<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" >
						<button type="button" class="close" data-dismiss="modal" >&times;</button>	
						
					</div>
					<div id="modal-title" style="width:100%"></div>
					<p class="col-xs-6" style="margin-right:25px;" id="desMovie" style="width:100%">
							</p>
							<p class="col-xs-4" style="width:100%">
							<img src="#" id="imgMovie">
							</p>
				</div>
		</div>
	</div>
<!-- //Modal1 -->











    <header class="site-header">
       

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="#latest_movies">Latest movies</a></li>
                                <li><a href="#search_movie">Search movie</a></li>
                                <li><a href="#search_by_category">Search by category</a></li>
								<li><a href="#login">Login</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="images/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>OMDB Movies</h1>
                                    <h4>Find your favorites movies!</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#search_movie" class="btn gradient-bg mr-2">Search Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="images/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="images/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
			<div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Latest movies</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
				
                
                <div class="col-xs-4" style="margin-right:25px;" id="col1">
					<p id="poster1"></p>
				</div>
                <div class="col-xs-4" style="margin-right:25px;" id="col2">
					<p id="poster2"></p>
				</div>
                <div class="col-xs-4" style="margin-right:25px;" id="col3">
					<p id="poster3"></p>
				</div>
                
				
				
				
				
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome" id="search_movie">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 ">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Search movie</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <input type="text" id="search_text"/>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <button type="button" class="btn gradient-bg mr-2" id="search_btn" onclick="getMoviebyTitle()">Search!</button>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->
                
                
                
                
                
                
                <div class="container">
    <div class="col-md-12">
         <h1>Results</h1>

        <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
							<div class="col-sm-3">
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
							 <div class="col-sm-3">
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->

                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev" >‹</a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next" onclick=""›</a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>
                    
                </div><!-- .col -->
                <script>
                        // get movie by title search
                        var res=[];
                    
                    function getMoviebyTitle(){
                    $(".carousel-inner .row .col-sm-3").empty();

                    $.ajax({
                        dataType: "json",
                        url: "http://www.omdbapi.com/?s="+$("#search_text").val()+"&apikey=5aa13f92"
                    })
                    .done(function(data){
                        res=data["Search"];
                        var items=$(".carousel-inner .row .col-sm-3");
                        var i=0;
                        while (i<res.length){
							items.eq(i).append("<div>"+res[i]["Title"]+"</div>");
							items.eq(i).append("<a href=#x><img src="+'"'+res[i]["Poster"]+'"'+" style=width:100px; class=img-responsive ></a>");
							items.eq(i).append("<button type=button class=btn gradient-bg mr-2 data-toggle=modal data-target=#myModal onclick=getMoviebyID("+'"'+res[i]["imdbID"]+'"'+","+'"'+res[i]["Poster"]+'"'+")>Read more...</button>");
                            i++;
                        }
                     })
                    .fail(function() {
                        console.log("ajax error.fail");
                    });
                    }
                    
                    
                    
               </script>
                
                
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
    
    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
			<div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Movie details</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
				
                
                <div class="col-xs-4" style="margin-right:25px;" >
                <img src="#" id="imgMovie">
				</div>
                <div class="col-xs-6" style="margin-right:25px;" id="desMovie">
				</div>
                
                
				<script>
                function getMoviebyID(mID,mUrl){
                    $("#desMovie").empty();
					$("#modal-title").empty();
                        $.ajax({
                        dataType: "json",
                        url: "http://www.omdbapi.com/?i="+mID+"&apikey=5aa13f92"
                    })
                        .done(function(data){
                            $("#imgMovie").attr("src",mUrl);
                            $("#modal-title").append("<h4>"+data["Title"]+"</h4>")
                            $("#desMovie").append("<p>"+data["Plot"]+"</p>")
                            $("#desMovie").append("<button onclick=saveMovie()>Add to favorite</button>")
                        })
                    }
                </script>
				
				
				
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    
    
    

    


    <footer class="site-footer">


        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>