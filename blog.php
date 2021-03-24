<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gabhera- blog Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Gabhera</div>
    <div class="address-bar">3481 Melrose Place | Kakinada, AP 533005 | 123.456.7890</div>

    <!-- Navigation -->
    <!-- the below line is to call nav.php should be test on the server,,future purpose -->
    <?php// require_once'nav.php'; //?>
    
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Gabhera</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <p>This is our blog where we write some interesting stuff as articles. The articles are more likely to change week to week, we hope you 
                enjoy them and learn something new from it :)</p>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpeg" alt="">
                    <h2>Indian Cuisine
                        <br>
                        <small><i>by Lakshman</i></small>
                    </h2>
                    <p>The traditional food of India has been widely appreciated for its fabulous use of herbs and spices. Indian cuisine is known for its large assortment of dishes. The cooking style varies from region to region and
                     is largely divided into South Indian & North Indian cuisine. India is quite famous for its diverse multi cuisine available in a large number of restaurants and hotel resorts, which is reminiscent of unity in diversity. 
                     The staple food in India includes wheat, rice and pulses with chana (Bengal Gram) being the most important one. In modern times Indian pallete has undergone a lot of change. In the last decade, as a result of globalisation, 
                     a lot of Indians have travelled to different parts of the world and vice versa there has been a massive influx of people of different nationalities in India. This has resulted in Indianisation of various international cuisines.
                      Nowadays, in big metro cities one can find specialised food joints of international cuisines. To know more about the Indian traditional food, read on.</p>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read more</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpeg" alt="">
                    <h2>Billiards
                        <br>
                        <i><small>by monish</small></i>
                    </h2>
                    <p>Also known as cue sports, billiards is very popular all over the world. It is often confused with snooker which is also a cue sport but differ in its historical divergence and terminologies that are used in the play.
                    In popular culture, it is common to see people lunging on a billiards table in scenes depicting a club, bar or a five star hotel. Our own Bollywood is no exception to this. The game has thus etched on to the psyche of the people.
                    Historically, the umbrella term was billiards. While that familiar name is still employed by some as a generic label for all such games, the word's usage has splintered into more exclusive competing meanings in various parts of the world.
                    For example, in British and Australian English, billiards usually refers exclusively to the game of English billiards, while in American and Canadian English it is sometimes used to refer to a particular game or class of gamesBilliards makes an
                    interesting indoor sport and you can get the equipment for your home to enjoy with friends and family.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read more</button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-4.jpeg" alt="">
                    <h2>Art of posing
                        <br>
                        <i><small>by palan</small></i>
                    </h2>
                    <p>’Performing for the Camera’ leaps straight into the golden age of performance art, with Yves Klein’s famous image Leap into the Void. Emphasising the staged trickery of the photograph, the curators have chosen to position the ’making of’ 
                    images alongside the seminal shot. Here, it is revealed Klein isn’t actually leaping to his death – a group of subsequently edited-out friends are nervously waiting to catch him in a sheet.
                    This photograph, along with dozens of others featured in the first half of the show, come from a collection donated to Tate last year by photographers Harry Shunk and János Kender. Now, the walls of the gallery tell tales of the couple’s obsession
                     with live performance art. Bodies twist, dance and peacock, and their cameras are the audience.</p>
                     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read more</button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Indian Cuisine</h4>
		  </div>
		  <div class="modal-body">
			<p>The traditional food of India has been widely appreciated for its fabulous use of herbs and spices. Indian cuisine is known for its large assortment of dishes. The cooking style varies from region to region and
                     is largely divided into South Indian & North Indian cuisine. India is quite famous for its diverse multi cuisine available in a large number of restaurants and hotel resorts, which is reminiscent of unity in diversity. 
                     The staple food in India includes wheat, rice and pulses with chana (Bengal Gram) being the most important one. In modern times Indian pallete has undergone a lot of change. In the last decade, as a result of globalisation, 
                     a lot of Indians have travelled to different parts of the world and vice versa there has been a massive influx of people of different nationalities in India. This has resulted in Indianisation of various international cuisines.
                    Nowadays, in big metro cities one can find specialised food joints of international cuisines. To know more about the Indian traditional food, read on.
                    Bengali Food

                    Bengali cuisine is appreciated for its fabulous use of panchphoron, a term used to refer to the five essential spices, namely mustard, fenugreek seed, cumin seed, aniseed, and black cumin seed. The specialty of Bengali food lies in the perfect blend of sweet and spicy flavors. 

                    Gujarati Food

                    The traditional Gujarati food is primarily vegetarian and has a high nutritional value. The typical Gujarati thali consists of varied kinds of lip smacking dishes. Gujarati cuisine has so much to offer and each dish has an absolutely different cooking style.
                    Kashmiri Food

                    Kashmiri food that we have today in the restaurants has evolved over the years. Highly influenced by the traditional food of the Kashmiri pundits, it has now taken some of the features of the cooking style adopted in Central Asia, Persia and Afghanistan. 

                    Mughlai Cuisine

                    Mughlai cuisine is one of the most popular cuisines, whose origin can be traced back to the times of Mughal Empire. Mughlai cuisine consists of the dishes that were prepared in the kitchens of the royal Mughal Emperors. Indian cuisine is predominantly influenced by the cooking style practiced during the Mughal era. 

                    Punjabi Food

                    The cuisine of Punjab has an enormous variety of mouth-watering vegetarian as well as non vegetarian dishes. The spice content ranges from minimal to pleasant to high. Punjabi food is usually relished by people of all communities. In Punjab, home cooking differs from the restaurant cooking style.  </p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Billiards</h4>
		  </div>
		  <div class="modal-body">
			<p>Also known as cue sports, billiards is very popular all over the world. It is often confused with snooker which is also a cue sport but differ in its historical divergence and terminologies that are used in the play.
                    In popular culture, it is common to see people lunging on a billiards table in scenes depicting a club, bar or a five star hotel. Our own Bollywood is no exception to this. The game has thus etched on to the psyche of the people.
                    Historically, the umbrella term was billiards. While that familiar name is still employed by some as a generic label for all such games, the word's usage has splintered into more exclusive competing meanings in various parts of the world.
                    For example, in British and Australian English, billiards usually refers exclusively to the game of English billiards, while in American and Canadian English it is sometimes used to refer to a particular game or class of gamesBilliards makes an
                    interesting indoor sport and you can get the equipment for your home to enjoy with friends and family.
                    on a rectangular table with a designated number of small balls and a long stick called a cue. The table and the cushioned rail bordering the table are topped with a feltlike tight-fitting cloth. Carom, or French, billiards is played with three balls on a table that has no pockets. The other principal games are played on tables that have six pockets, one at each corner and one in each of the long sides; these games include English billiards, played with three balls; snooker, played with 21 balls and a cue ball; and pocket billiards, or pool, played with 15 balls and a cue ball. There are numerous varieties of each game—particularly of carom and pocket billiards.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Art of posing</h4>
		  </div>
		  <div class="modal-body">
			<p>’Performing for the Camera’ leaps straight into the golden age of performance art, with Yves Klein’s famous image Leap into the Void. Emphasising the staged trickery of the photograph, the curators have chosen to position the ’making of’ 
                    images alongside the seminal shot. Here, it is revealed Klein isn’t actually leaping to his death – a group of subsequently edited-out friends are nervously waiting to catch him in a sheet.
                    This photograph, along with dozens of others featured in the first half of the show, come from a collection donated to Tate last year by photographers Harry Shunk and János Kender. Now, the walls of the gallery tell tales of the couple’s obsession
                     with live performance art. Bodies twist, dance and peacock, and their cameras are the audience. As the show progresses, the performative aspect of the images gets more and more disrupted, and difficult to define. We journey through obscure byways of performance portraiture’s history – passing holiday snaps taken from relatively unknown photographers, alongside defining images from the likes of Joseph Beuys and Francesca Woodman.

                    Despite this broad scope of images, a sense of humour unites the exhibition – much of it centred around nudity. This is expressed in Jimmy De Sana’s Marker Cones, where he is pictured strutting on all fours, with what looks like party hats on his hands and feet. But on-camera performance doesn’t just mean jumping off buildings and clowning around naked. As much as the exhibition is united by levity, a darker undertone sneaks in, through Japanese photographer Masahisa Fukase’s quiet, muted images of himself in a tepid-looking bathtub. He performs loneliness just as evocatively as De Sana performs comedy.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Gabhera 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php 
} else {
  header("location:login.php");
}

?>