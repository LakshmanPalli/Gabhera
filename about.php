<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About - Gabhera - About Theme</title>

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

      <!-- jQuery -->
      <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style>
    .polaroid {
            width: 80%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;}
    </style>


</head>

<body>

    <div class="brand">Gabhera</div>
   <div class="address-bar">3481 Melrose Place | kakinada, AP 533005 | 123.456.7890</div>

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
                <a class="navbar-brand" href="index.php">Gabhera</a>
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
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>Gabhera</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                <iframe width="560" height="350" src="https://www.youtube.com/embed/PoAP4BGe8Fk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <p>We had great services to offer. Our inn is composed of three rooms and sit-out. One for the food service, where two people will be working on your requested orders.
                    A siiting hall where the cutomers can hangout and it is huge one composed of tables and chairs. A restroom with seperate mens and womens toilet with a proper sanity.
                    The last room is where you can play games and have fun. The games include some indoor stuff like billiards, uno, built-it games.
                    We provide the dolby-atmos speakers connected home teatre and even wi-fi facility.
                    </p>
                    <p> Talking about the sit-out it is well furnished with natural design and plantation which makes you enlated and peaceful fresh air.</p>
                    <p>We do work as a regular food service dor bakery items which is open from 9:00AM-8:00PM in all seven days of week. For big parties like b'day, get togethers we should approached a day before.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="polaroid">
                <div class="col-sm-4 text-center">
                <img class="img-responsive" src="img/abt6.jpg" alt="img/about1.jpeg" style="width:200px; height:250px; border-radius:10%;"> 
                    <h3>Palan
                        <small>Founder</small>
                    </h3>
                </div></div>

                <div class="polaroid">
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/abt5.jpg" alt="" style="width:200px; height:250px; border-radius:10%;">
                    <h3>Lakshman
                        <small>Managing head</small>
                    </h3>
                </div></div>

                <div class="polaroid">
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/abt4.jpg" alt="" style="width:200px; height:250px; border-radius:10%;">
                    <h3>Monish
                        <small>Co-founder</small>
                    </h3>
                </div></div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Gabhera 2020</p>
                </div>
            </div>
        </div>
    </footer>

  
</body>

</html>
