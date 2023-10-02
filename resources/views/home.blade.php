<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  style=" background-image: url('upload/gallery/hero-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">
    <header>
        <nav>
       
 
            <div class="logo">
            <div class="content">
                <h2 class="text_shadows">Welcome</h2> 

            </div>
            </div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <div class="bar">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
            </div>
        </nav>
    </header>
    
    <div class="banner">
        <div class="wrapper">
            <div class="content">
            <div class="waviy">
                    <span style="--i:1">I</span>
                    <span style="--i:2">N</span>
                    <span style="--i:3">F</span>
                    <span style="--i:4">R</span>
                    <span style="--i:5">A</span>
                    <span style="--i:6">S</span>
                    <span style="--i:7">T</span>
                    <span style="--i:7">R</span>
                    <span style="--i:7">U</span>
                    <span style="--i:7">C</span>
                    <span style="--i:7">T</span>
                    <span style="--i:7">U</span>
                    <span style="--i:7">R</span>
                    <span style="--i:7">E</span>
                    <span style="--i:8">.</span>
                    </div>
        <h4 style="color: white;">
                    <span>YOU AND I</span>
                    <span>COME BY</span>
                    <span>ROAD AND RAIL,</span>
                    <span>BUT</span>
                    <span>ECONOMISTS</span>
                    <span>TRAVEL</span>
                    <span>ON INFRASTRUCTURE</span>
                    <span>.</span>
                    
</h4>
<!--Brian Tracy-->
                <div class="btn">
                    <a href="#">Learn More</a>
                    <a href="/signup">Sign up</a>
                </div>                  
            </div>
        </div>
    </div>
    
    
    <script>
        const X = () => {
            const menu = document.querySelector('.bar');
            const nav = document.querySelector('.menu');
            
            menu.addEventListener('click', () => {
               menu.classList.toggle('bar-active');
                nav.classList.toggle('nav-active');
            });
        }
        X();
    </script>
    <!-- Footer -->
 <div class="container my-5">

<footer class="bg-dark text-center text-lg-start text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row mt-4">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">See other books</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Bestsellers</a>
          </li>
          <li>
            <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>All Products</a>
          </li>
          <li>
            <a href="#!" class="text-white"><i class="fas fa-user-edit fa-fw fa-sm me-2"></i>Our creators</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Execution of the contract</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Supply</a>
          </li>
          <li>
            <a href="#!" class="text-white"><i class="fas fa-backspace fa-fw fa-sm me-2"></i>Returns</a>
          </li>
          <li>
            <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Regulations</a>
          </li>
          <li>
            <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Privacy policy</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Publishing house</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">The HomeKart</a>
          </li>
          <li>
            <a href="#!" class="text-white">123 Street</a>
          </li>
          <li>
            <a href="#!" class="text-white">05765 NY</a>
          </li>
          <li>
            <a href="/contact" class="text-white"><i class="fas fa-briefcase fa-fw fa-sm me-2"></i>Send us your Query</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Write to us</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Help in purchasing</a>
          </li>
          <li>
            <a href="/contact" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Check the order status</a>
          </li>
          <li>
            <a href="#!" class="text-white"><i class="fas fa-envelope fa-fw fa-sm me-2"></i>Join the newsletter</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  
  <div class="container my-5">

  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="/home">Homekart.com</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->
</footer>

</div>
<!-- End of .container -->
</footer>
</body>
</html>
