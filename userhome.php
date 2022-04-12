
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Userhome</title>
  <link rel="stylesheet" href="css/userhome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/fav.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
        
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="logo">
      <a href="userhome.php">
      <img class = "logo" src="img/LOGO3.png" alt="img">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto test">
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="userhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec"><i class="fa-brands fa-pagelines"></i> Plants</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec2"><i class="fa-solid fa-seedling"></i> Seeds</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec3"><i class="fa-solid fa-briefcase"></i> Other Services</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec4"><i class="fa-solid fa-u"></i> Pots</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="feedback.php"><i class="fa-solid fa-comment"></i> Give Feedback</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="rqst_product.php"><i class="fa-solid fa-list-check"></i> Request Plants</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="mycart.php"><i class="fa-solid fa-bag-shopping"></i> My Cart</a>
      </li>

      <li class="nav-item">
        <a id= "test2" class="nav-link" href="logout.php"><i class="fa-solid fa-user"></i> Logout</a>
      </li>
      
    </ul>
    </div>
    </nav>
    
    
    <section id="cta">

        <h3 class="cta-heading">WELCOME PLANT LOVERS</h3>
        <button type="button"class="btn btn-success btn-lg downbtn2"><i class="fa-brands fa-apple"></i> Download</button>
        <button type="button"class="btn btn-outline-success btn-lg downbtn2"><i class="fa-brands fa-google-play"></i> Download</button>

        
    </section>
    
    </div>
    </div>
  </section>

  
<section id="cta2">

<h3 class="cta2-heading">TOTAL DONATION <em class="yel">৳0</em><br>FROM OUR <em class="red">1%</em> OF SELLING PRICE</h3>

</section>


  



  <section id="Sec">
    <h2>Plants</h2>
    <p>Find plants according to your choice</p>

    <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/3.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order flower<br>plants</p>
        </div>
        <button onclick="window.location.href='Flower_Plants.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Flower Plants</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/4.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order fruit<br>plants</p>
        </div>
        <button onclick="window.location.href='Fruit_Plants.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Fruit Plants</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/7.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order vegetable plants</p>
        </div>
        <button onclick="window.location.href='Vegetable_Plants.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Vegetable Plants</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order decorative plants</p>
        </div>
        <button onclick="window.location.href='Decorative_Plants.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Decorative Plants</button>
        </div>
    </div>

  </div>
  </section>

  <section id="Sec2">
    <h2>Seeds</h2>
    <p>Find seeds according to your choice</p>

    <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/10.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order flower<br>seeds</p>
        </div>
        <button onclick="window.location.href='Flower_Seeds.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Flower Seeds</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/13.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order fruit<br>seeds</p>
        </div>
        <button onclick="window.location.href='Fruit_Seeds.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Fruit Seeds</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/11.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order vegetable seeds</p>
        </div>
        <button onclick="window.location.href='Vegetable_Seeds.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Vegetable Seeds</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/12.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order decorative seeds</p>
        </div>
        <button onclick="window.location.href='Decorative_Seeds.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Decorative Seeds</button>
        </div>
    </div>

  </div>
  </section>

  <section id="Sec3">
    <h2>Other Services</h2>
    <p>Find our other services below</p>

    <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/16.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order our merch<br>T-Shirts</p>
        </div>
        <button onclick="window.location.href='Merch.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Our Merch</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/17.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order recycled product</p>
        </div>
        <button onclick="window.location.href='Recycled_Product.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Recycled Product</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/4.jpeg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to view our exchange offer</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Exchange Offer</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/21.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order our package</p>
        </div>
        <button onclick="window.location.href='Package_Product.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Package</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        
    </div>

    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/25.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to consult with plant specialist</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Consult with Specialists</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/30.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to view our <br>blogs</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Blogs</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        
    </div>
    

  </div>
  </section>

  <section id="Sec4">
    <h2>Pots</h2>
    <p>Find pots according to your choice</p>

    <div class="row">
    <div class="p-col col-lg-12 col-md-12 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="inner">
        <img src="img/pic/2.jpeg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Click below to order our<br>pots</p>
        </div>
        <button onclick="window.location.href='pot.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-success">Pots</button>
        </div>
    </div>

  </div>
  </section>
  
  

  <!-- Footer -->

  <footer id="footer">
    <a id="icon-fb" href="#">
      <i class="s-icons fa-brands fa-facebook"></i>
    </a>
    <a id="icon-insta" href="#">
      <i class="s-icons fa-brands fa-instagram"></i>
    </a>
    <a id="icon-mail" href="mailto:#">
      <i class="s-icons fa-solid fa-envelope" href=""></i>
    </a>
    
    
    <p>© Copyright ProjectO2</p>

  </footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>