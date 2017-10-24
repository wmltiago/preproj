<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap3.7/css/bootstrap.min.css" rel="stylesheet">
     

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      
      
      <style>
      *{
  color: #000000 !important;
}
/* HEADER */
#nav-right{
  float:right;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #fff;
    color: #0A5517 !important; /* cor das opções dos menus qndo hover */
}
.nav-pills>li.active>a{
    color: #0A5517 !important; /* qndo tiver a class active */
    font-weight: bold;
    background-color: #fff;
}
.nav-pills>li.active>a:hover{
  background-color: #fff;
}
.navbar-nav>li>a {
    padding-top: 20px;
}
.navbar-toggle {
  border: 2px solid #7178c6;
}
.icon-bar {
  color: #7178c6;
  border-color: #7178c6;
  background-color: #7178c6;
}
#nav-right button{
      font-size: 10px;
      margin-top: 15px;
      margin-bottom: 15px;
      margin-left: 10px;
      background-color: #fff;
      border-radius: 4px;
      border: 1px solid;
      padding: 5px 9px;
}
#nav-right{
  margin-right: 15px;
}
#navtop{
  font-size: 10px !important;
}
.fa {
    padding-right: 10px;
    font-size: 14px;
    color: #9a9a9a !important;  
}
#logo a img{
    /*margin-top: -25px;*/
    margin-bottom: 30px;
}
#main-navigation{
    font-size: 12px !important;
    font-weight: bold;
}
#main-navigation .nav>li>a{
  padding-left:0;
  padding-right:0;
}
#main-navigation .container{
  max-width: 720px;
}
/* MEDIA QUERIES FOR TOP NAV*/
@media screen and (max-width:768px){
  #nav-left{
    text-align: center;
  }
  #nav-left:after{
    display: block;
    content: "";
    clear: both;
  }
  #nav-left li{
    float:left;
    width: 31%;
    padding:1%;
  }
  #nav-right{
    display: block;
    content: "";
    clear: both;
  }
  #nav-right{
    text-align: center;
    width:100%;
  }
  #nav-right li {
    float: left;
    width:23%;
    padding: 1%;
  }
  #logo a img {
    margin-top: 0;
    margin-bottom: 0;
}
#main-navigation ul li{
  border-top: 1px solid #7178c6;
  width: 100%;
}
}
/* MEDIA QUERIES FOR TOP NAV END*/
/* HEADER END*/


/* SLIDER */
#Container_Carousel .rows .col-xs-12{
  margin:0;
  padding:0;
}

#Container_Carousel{
  margin:0;
  padding:0;
  width:100%;
  max-height: 850px;
}

.item img{
  width:100%;
  max-height: 850px;
}

.carousel,.item,.active{
  height:100%;
}

.carousel-inner{
  height:100%;
}

.carousel-control.left, .carousel-control.right {
    background-image:none;
}
.glyphicon-circle-arrow-left {
  position: absolute;
  top: 50%;
  font-size: 50px;
  opacity: 0.5;
  left: 50px;
}
.glyphicon-circle-arrow-right {
  position: absolute;
  top: 50%;
  font-size: 50px;
  opacity: 0.5;
  right: 50px;
}
/* SLIDER END*/
          
          .alive{
    width: 100%;
    height: 200px;
    background-color: #F5F5F5;
    
}

      
      </style>
  </head>
  <body>

      <div class="container">
      
      <nav id="navtop">
        <div class="container-fluid">
      <!--header navbar top left -->
              <ul class="nav navbar-nav" id="nav-left">
                <li><a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>ACESSO</a>
                </li>
                <li><a href="#">
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>CHECK OUT</a>
                </li>
                <li><a href="#">
                  <i class="fa fa-heart-o" aria-hidden="true"></i>MY WISHLIST</a>
                </li>
              </ul>
      <!--header navbar top right -->
              <ul class="nav navbar-nav nav-pills" id="nav-right">
                <li>
                  <a href="#">
                        <i class="fa fa-search" aria-hidden="true"></i>SEARCH</a>
                </li>
                <li>
                  <a href="#">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>MYBAG</a>
                </li>

                <li><button type="btn btn-default navbar-btn">ENG</button></li>

                <li><button type="btn btn-default navbar-btn">USD</button></li>
              </ul>

          </div>
        </nav>
      </div>
      <!--header navbar LOGO -->
        
      <div class="alive">
        <div class="text-center" id="logo">
              <a href="#" ><img src="ifpe.png" alt="logo" height="150px" width="250px"/></a>
        </div>
          </div>
           
      <!-- TOOGLE MAIN NAVIGATION -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

      <!--  MAIN NAVIGATION -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <div class="container">

          <ul class="nav nav-justified nav-pills">
              <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-leaf"></span> CAMPUS</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-file"></span> EDITAIS</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span> CONTATO</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> OUVIDORIA</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> LOCALIZAÇÃO</a></li>
              
          </ul>
          </div>
        </div>
<!--header navbar END -->

<!-- SLIDER START-->

    <div class="clear"></div>

<!-- SLIDER END-->
<script src="https://use.fontawesome.com/f12e4a6b3c.js"></script>

      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js.js"></script>
    <script src="bootstrap3.7/js/bootstrap.min.js"></script>
      
  </body>
</html>