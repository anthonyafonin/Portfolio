<html lang="en">
<head>
    <!-- lakenormanmarina.com -->
    <title>Anthony Afonin</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Anthony Afonin" />
    <meta name="copyright" content="Anthony Afonin Portfolio. All Rights Reserved" />
    <meta name="description" content="Anthony Afonin Portfolio" />
    <meta name="keywords" content="Anthony,Afonin,Anthony Afonin,Resume,Portfolio,aafonin" />
    <meta name="city" content="Woodburn" />
    <meta name="country" content="US" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script defer src="/static/fontawesome/fontawesome-all.js"></script>

</head>
<body>

<header>
<nav class="nav-bar navbar-inverse navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="nav-container">
        <div class="header-title">
            <h2>Anthony Afonin</h2>
            <h5>Software Developer</h5>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav nav-pills brand-pills nav-stacked">
                <li class="brand-nav active"><a href="#portfolio" aria-controls="tab2" role="tab" data-toggle="tab">Portfolio</a></li>
                <li class="brand-nav"><a href="#about" aria-controls="tab1" role="tab" data-toggle="tab">About</a></li>
                <li class="brand-nav"><a href="#resume" aria-controls="tab3" role="tab" data-toggle="tab">Resume</a></li>
                <li class="brand-nav"><a href="#contact-form" aria-controls="tab4" role="tab" data-toggle="tab">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

</header>
<main class="content">

    <div role="tabpanel" class="tab-content">
        <div class="tab-pane" id="about">
            <?php include 'components/about.php';?>
        </div>
        <div class="tab-pane active" id="portfolio">
            <?php include 'components/projects.php';?>
        </div>
        <div class="tab-pane" id="resume">
        </div>
        <div class="tab-pane" id="contact-form">
            <?php include 'components/contact-form.php';?>
        </div>

	</div>
    <div class="footer container">
        <div class="row sm">
            <div class="col-md-6">
                <h2>Connect</h2>
                <ul class="alt">
                    <li><a href="https://www.linkedin.com/in/anthony-afonin-352b74132/" target="_blank">Linkedin Profile</a></li>
                    <li><a href="https://github.com/anthonyafonin" target="_blank">Github Page</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Objective</h2>
                <p>To obtain a Software Developer position
                <br>relevant to my skills and knowledge.</p>
            </div>
        </div>
        <ul class="copyright">
            <li>&copy; Anthony Afonin. All rights reserved.</li>
        </ul>
    </div>
</main>
</body>
<footer>

</footer>
<style type="text/css">

li,
ul{
    list-style: none;
}
.content{
    margin-right:auto;
    margin-left:auto;
}
.content,
.tab-content,
.tab-pane{
        overflow: auto;
}
.content .tab-content .active{
    -webkit-animation: fadeInFromNone 0.5s ease-out;
       -moz-animation: fadeInFromNone 0.5s ease-out;
       -o-animation: fadeInFromNone 0.5s ease-out;
       animation: fadeInFromNone 0.5s ease-out;
}

.content .tab-pane {
    padding-left: 15px;
    padding-right: 15px;
}


.header-title,
.navbar-header{
    display:inline-block;
}

.navbar-collapse{
    border-top: 1px solid white !important;
}


.navbar-header{
    float: right;
}

.navbar-toggle{
    margin-top: 50px;
}
@media (max-width:768px){
    .navbar-collapse{
        padding-left: 0px;
        padding-right: 0px;
    }
}
@media (min-width:992px){
    .content{
        margin-left: 275px;
    }
}

.container{
    width: 100% !important;
}

    .nav-bar h2,
    .nav-bar h5 {
        margin-left: 10px;
        margin-bottom: 15px;
        color: white;
    }
    .nav-bar{
        background-color: #080808;
        box-shadow: 0 -2px 50px 5px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }


    .nav-pills > li.active > a,
    .nav-pills > li.active > a:hover,
    .nav-pills > li.active > a:focus{
        background-color:#333;

    }
    .nav-pills > li > a:hover,
    .nav-pills > li > a:focus{
        color: #333;
    }
    .nav-pills > li > a{
        color: white;
        font-size: 16px;
    }

    @media (min-width: 992px) {

        .brand-pills > li > a {
            border-radius: 2px;
        }
        .nav-bar{
            position: fixed;
            height: 100%;
            width: 275px;

            padding: 0px;
        }
    }

    img{
        display: block;
        max-width: 100%;
        height: auto;
    }

    body {
      font-family: "Roboto", Helvetica, sans-serif;
      font-size: 14px;
      color: #555f66;
      background-color: #F5F5F5;
      font-weight: 300;
      line-height: 1.75em;
    }


    @media (max-width: 991px) {

      .navbar-left,.navbar-right {
          float: none !important;
      }
      .navbar-toggle {
          display: block;
      }
      .navbar-collapse {
          border-top: 1px solid transparent;
          box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
      }
      .navbar-fixed-top {
          top: 0;
          border-width: 0 0 1px;
      }
      .navbar-collapse.collapse {
          display: none!important;
      }
      .navbar-nav {
          float: none!important;
          margin-top: 7.5px;
      }
      .navbar-nav>li {
          float: none;
      }
      .navbar-nav>li>a {
          padding-top: 10px;
          padding-bottom: 10px;
      }
      .collapse.in{
          display:block !important;
      }
    }


    @-webkit-keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }
        1% {
            display: block;
            opacity: 0;
        }
        100% {
            display: block;
            opacity: 1;
        }
    }

    @-moz-keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }
        1% {
            display: block;
            opacity: 0;
        }
        100% {
            display: block;
            opacity: 1;
        }
    }

    @-o-keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }
        1% {
            display: block;
            opacity: 0;
        }
        100% {
            display: block;
            opacity: 1;
        }
    }

    @keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }
        1% {
            display: block;
            opacity: 0;
        }
        100% {
            display: block;
            opacity: 1;
        }
    }

</style>

</html>
