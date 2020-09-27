<!DOCTYPE html>
<html lang="en">
<head>
<title>Resep101</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" ></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script>
jQuery(window).load(function () {
    jQuery('.flexslider').flexslider({
        animation: "fade",
        slideshow: true,
        slideshowSpeed: 7000,
        animationDuration: 600,
        prevText: "",
        nextText: "",
        controlNav: false
    })
});
</script>
</head>
<body>
<header>
  <div class="line-top"></div>
  <div class="main">
    <div class="row-top">
      <h1><a href="index.php"><img alt="" src="images/logo.jpeg" width="190" height="75"></a></h1>
      <nav>
        <ul class="sf-menu">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="login.php">Login </a> </li>
          <li><a href="register.php">Register</a> </li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
  <div class="box-slider">
    <div class="flexslider">
      <ul class="slides">
        <li> <img alt="" src="images/makanan1.jpg"></li>
        <li> <img alt="" src="images/makanan2.jpg"></li>
      </ul>
    </div>
  </div>
  <div class="box-slogan">
    <h3>Resep101</h3>
    <p>Makan enak tidak perlu mahal. Cukup buka Resep101 dan mulai memasak</p>
  </div>
</header>
<section id="content">
  <div class="border-horiz"></div>
  <div class="container_12 row-1">
    <article class="grid_4 thumbnail-1">
      <h3><span>Vegan</span> cookings </h3>
      <figure class="box-img"><img src="images/vegetarian.jpg" alt=""></figure>
      <p>Makanan vegetarian</p>
      <a href="#" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-2">
      <h3><span>Indonesian</span> cookings </h3>
      <figure class="box-img"><img src="images/makanan.jpg" alt=""></figure>
      <p>Makanan khas dari seluruh penjuru Indonesia</p>
      <a href="#" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-1">
      <h3><span>dessert</span> cookings </h3>
      <figure class="box-img"><img src="images/dessert.jpg" alt=""></figure>
      <p>Makanan pencuci mulut</p>
      <a href="#" class="btn">Read more</a> </article>
    <div class="clear"></div>
  </div>
  <div class="border-horiz"></div>
  <div class="container_12">
    <article class="grid_4">
    <h3>popular</h3>
      <ul class="list-popular">
        <li> <a href="#">Gado-gado</a>
          <p>mie kuah kacang</p>
        </li>
        <li> <a href="#">Seblak Garut</a>
          <p>kerupuk direndam</p>
        </li>
        <li> <a href="#">Lontong sayur</a>
          <p>lontong</p>
        </li>
        <li> <a href="#">Kue Lapet</a>
          <p>makanan khas sumatera utara</p>
        </li>
      </ul>
    </article>
    <article class="grid_8">
      <h3>Professional programs</h3>
      <blockquote class="quote-1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquym erat, sed diam voluptua At vero eos. </blockquote>
      <div class="name-author">- James Willis</div>
      <ul class="list-dropcap">
        <li>
          <div class="wrapper">
            <div class="dropcap">A</div>
            <a href="#">Lorpsum dolor</a> </div>
          <figure class="box-img"><img src="images/page1-img4.jpg" alt=""></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">B</div>
            <a href="#">consetet
            sadiping </a> </div>
          <figure class="box-img"><img src="images/page1-img5.jpg" alt=""></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">C</div>
            <a href="#">diam nonumy </a> </div>
          <figure class="box-img"><img src="images/page1-img6.jpg" alt=""></figure>
        </li>
      </ul>
    </article>
    <div class="clear"></div>
  </div>
</section>
</body>
</html>