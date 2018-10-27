<?php require 'core/init.php'; 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <meta name="google-site-verification" content="X4bVncAiQgZ6BvGXhf0xbmhi42ErLbo3BrDwQCPvJZA" />
    <link rel="shortcut icon" href="img/favicon.png">
    <title>NLP - Neuro Linguistucs Programming</title>

<link rel="icon" type="image/png" sizes="32x32" href="img/favicon32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon16.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">


    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
    <link rel="stylesheet" href="css/seq-slider/sequencejs-theme.sliding-horizontal-parallax.css" />

    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
	<style>

	
		@media only screen and (max-width: 768px) {
    .headhide {
        display: none;
    }
	    .aeroplane {
        width:100%;
		margin-top:95px;
    }

    }
	@media only screen and (min-width: 768px) {
    .headshow {
        display: none;
		background-color: #ffffff;
		
    }

    }
	
	</style>
	  <?php include('sidequery.php'); ?>
	
  </head>

  <body>
  <?php include('header.php'); ?>
  	<?php include('mobileheader.php'); ?>	    
<!--header end-->

    <!-- Sequence Modern Slider -->
    <div id="sequence-theme" class="sequence-inner">
      <div id="sequence">

        <ul class="sequence-canvas">

          <li class="animate-in" style="display: list-item; z-index: 3;">
            <div class="info" style="">
              <h2>
               Neuro Linguistic Programming
              </h2>
              <p>
                  I will deal with NLP, Counseling, Psychology, Guidance, Phobias, energize your mind, motivation, VAK methods and etc.
              </p>
            </div>
			
            <img class="sky" src="img/seq-slider/close.jpg" alt="Blue Sky" style="">
            <img class="aeroplane" src="img/nlp12.png" alt="Aeroplane" style="">
          </li>

        </ul>
      </div>
    </div>
    <!--/sequence-theme-->
    <!-- End of Sequence Modern Slider -->



	<?php include('queryform.php'); ?>	


		<?php 
			
			   $what = '*';
		           $table = 'audio';
                           $where = 'a_status = 1';
				
		                   $data = $gps_admin->fetch($what,$table,$where);
				
                           foreach ($data as $value){ 
						   $audio = $value['a_audio'];
						   
						   }
		
		?>
		  <source src="audio/<?php echo $audio; ?>" type="audio/mpeg">

	
		<div style="visibility: hidden">	
		<audio controls autoplay>
		 <source src="admin/audio/<?php echo $audio; ?>" type="audio/mpeg">
		
		Your browser does not support the audio element.
		</audio>
		</div>
	
	
    <div class="container">


      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              welcome to NLP
            </h1>

          </div>


          <div class="feature-box">
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="img/1.png" alt="" width="100" height="100">

                </em>
                <h4>
                  <b>What Is NLP?</b>
                </h4>
              </div>
              <p class="text-center">
                NLP is used for personal development and for success in business. NLP is the practice of understanding how people organise their thinking, feeling, language and behaviour to produce the results they do. NLP provides people with a methodology to model outstanding performances achieved by geniuses and leaders in their field. <br/>

A key element of NLP is that we form our unique internal mental maps of the world as a product of the way we filter and perceive information absorbed through our five senses from the world around us.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="img/2.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>NLP Training</b>
                </h4>
              </div>
              <p class="text-center">
			  <address>
			  
			  The training of NLP patterning<br>
			  NLP Practitioner<br>
			  NLP Advanced Tools<br>
			  NLP Master Practitioner<br>
			  NLP Trainers Certification<br>
			 </address>
               
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="img/3.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>NLP Seminars</b>
                </h4>
              </div>
              <p class="text-center">
                DD-MM-YYY , Tirupati
			    
              </p>
            </div>
          </div>

          <!--feature end-->
        </div>
        </div>


    </div>


    <!--property start-->
    <div class="property gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 text-center wow fadeInLeft">
            <img src="img/nlp.jpg" alt=""  >
          </div>
          <div class="col-lg-12 col-sm-12 wow fadeInRight">
            <h1>
             NLP 
            </h1>
            <hr>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              <strong>Neuro: </strong>

              Each individual has established their own unique mental filtering system for processing the millions of bits of data being absorbed through the senses. Our first mental map of the world is constituted of internal images, sounds, tactile awareness, internal sensations, tastes and smells that form as result of the neurological filtering process. The first mental map is called ‘First Access’ in NLP.
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              <strong>Linguistic: </strong>

              We then assign personal meaning to the information being received from the world outside. We form our second mental map by assigning language to the internal images, sounds and feelings, tastes and smells, thus forming everyday conscious awareness. The second mental map is called the Linguistic Map (sometimes known as Linguistic Representation)
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              <strong>Programming: </strong>

              The behavioural response that occurs as a result of neurological filtering processes and the subsequent linguistic map.
            </p>
            <hr>

          </div>
        </div>
      </div>
    </div>
    <!--property end-->
    
    
  <?php include('footer.php'); ?>

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
    <script src="js/superfish.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>

    <!-- Sequence Moder -slider js -->
    <script src="js/seq-slider/jquery.sequence-min.js">
    </script>
    <script src="js/seq-slider/sequencejs-options.sliding-horizontal-parallax1.js">
    </script>
    <!-- end of sequence slider js-->

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>
    <script>
      $('a.info').tooltip();
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });



      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>
  </body>
</html>