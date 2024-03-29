<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gabhera - Start Bootstrap Theme</title>

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
    <div class="address-bar">3481 Melrose Place | kainada, AP 533005 | 123.456.7890</div>

    <?php
		
        if (isset($_GET["logout"])) {
            
            if ($_GET["logout"] == "true") { ?>
                
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You have been logged out of the system.</strong>
                </div>   
    
        <?php
            }
        }
        ?>
        
    <!-- Navigation -->
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
    <!-- the below line is to call nav.php should be test on the server,,future purpose -->
    <!--// <?php //include 'nav.php'; //?> 
    -->

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpeg" alt="" style="width:800px; height:403px;">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpeg" alt="" style="width:800px; height:403px;">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpeg" alt="" style="width:800px; height:403px;">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-4.jpeg" alt="" style="width:800px; height:403px;">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Gabhera</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>"I think
                            <strong> if I've learned anything about friendship, it's to hang in, </strong>  stay connected"
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Perfect for
                        <strong>Freinds hangout</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="" >
                    <hr class="visible-xs">
                    <p><i>We are Friends I got your back You got mine,I'll help you out Anytime!</i></p>
                    <p>This place "Gabher" means to explore in sanskrit, as part of the human beings and the society we are likely to interact
                     and make friends through any 
                    part of the medium. The only difficult task is to 
                    procure it till the end. This place was made to perfectly adjust the bondings and grab the joy with your friends.
                    What ever situation may be or the time or the place or the condition you live in always don't hesitate to call your friend as you alwats make a asuurance 
                    that you are with him at any times to  his/her things.
                    We "gabera" offer you the perfect treatment and probably you find yourself with your loved ones.</p>
                    <p><i>Let go of your fears Hand in hand Love is sent, We'll be friends Till the end!!!!</i></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Also a
                        <strong>cafeteria & inn</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-2.jpeg" alt="" style="width:250px; height:150px;">
                    <hr class="visible-xs">
                    
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about
                     anything, the sky's the limit!</p>
                    <p> We offer the best and finite services of our beloved food to our beloved customers. Me make all kind of cakes and bakery stuff.
                    we were known for our quality muffles. We can deliver at your foot steps. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl 
                    vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque 
                    habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Gabera 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
