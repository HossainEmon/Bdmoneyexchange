
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('public/frontend/img/bkash.jpg')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">

    <title>BD Money Exchange</title>
  </head>
  <body>
   <!--   Header Start Here   -->
   <header class="header p-2">
       <div class="container">
           <div class="row justify-content-between">
                <div class="col-4 ">                             
                   <div class="card-body">        
                        
                    </div> 
                </div>
                <div class="col-4 ">
                             
                   <div class="card-body text-right">        
                        <a href="{{ route('login')}}" type="button" class="btn btn-light pl-4 pr-3" id="login">Login</a>
                        <a href="{{ route('register')}}" type="button" class="btn btn-light">Register</a>
                    </div> 
                </div>
            </div>
               
           </div>

   </header>
   <!--   Header End Here   -->
      
<!--   Navbar Start Here   -->
<nav class="navbar navbar-expand-lg bg-color-custom">
    <a class="navbar-brand" href="{{ url('/')}}">
        <img src="{{asset('public/frontend/img/bkash.jpg')}}" width="" alt="">
    </a>
  <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<!--    <span class="navbar-toggler-icon btn btn-success"></span>-->
 <span class="text-warning"><b>Menu</b></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto  text-uppercase font-weight-bold">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Rate</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Testimonials</a>
      </li>  
      
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Help</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-warning" href="#">Action</a>
          <a class="dropdown-item text-warning" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-warning" href="#">Something else here</a>
        </div>
      </li>
     
        
    </ul>
   
  </div>
</nav>
<!--   Navbar End Here   -->

@yield('content')
    
    
<section class="get_in_touch mt-2">


    <br/>
    <br/>
    
    <section class="footer footer_text">
        <div class="container">
            <div class="row">
              
               <div class="col-sm-12 col-md-3 col-lg-3">
                   <div class="for_you">
                       <h2>Here for you</h2>
                       <p>Call us 24/7. We are there for your support.</p>
                   </div>
               </div>
               
               
                <div class="col-sm-12 col-md-3 col-lg-3">
                   <div class="about_neve">
                       <h2>About Neve</h2>
                       <p>Call us 24/7. We are there for your support.</p>
                   </div>
               </div>
               
               
               <div class="col-sm-12 col-md-3 col-lg-3">
                   <div class="find_us">
                       <h2>Where find us?</h2>
                       <p>Call us 24/7. We are there for your support.</p>
                   </div>
               </div>
               
               
               <div class="col-sm-12 col-md-3 col-lg-3">
                   <div class="keep_touch">
                       <h2>Keep in touch</h2>
                       
                       <div class="icon">
                          <a href="#"><i class="fab fa-facebook-square"></i></a>
                           
                           <a href=""><i class="fab fa-twitter-square"></i></a>
                           <a href=""> <i class="fab fa-linkedin"></i></a>
                           
                           <a href=""><i class="fab fa-youtube"></i></a>



                       </div>
                       
                   </div>
               </div>
              
            </div> <!-- Row End -->
        </div>
    </section>
    
</section><!--get_in_touch end-->  
    
     
     
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="{{asset('public/frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.js')}}"></script>
    <script>
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                }
            }
        })
      </script>
  </body>
</html>