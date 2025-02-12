<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home-Tutorgigs</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets_old/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('assets_old/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets_old/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

   
    <link href="{{asset('assets_old/landing-page.min.css')}}" rel="stylesheet">
    <style>
        .modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand pull-left" style="width:5px;" href="/" ><img src="{{asset('assets_old/img/logo.png')}}"></a> 
        
         <div class="pull-right" >
        <a class="btn btn-primary" href="{{url('login')}}">Sign In</a>
        <a class="btn btn-primary" href="{{url('signup')}}#signup_section">Sign Up</a>
        </div>

      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Looking for an online tutoring job?<br> <bold>Well...</bold>when can you start?</h1>
            
            
          </div>
          <div class="col-xl-4 mx-auto">
      <a href="{{url('signup')}}#signup_section"   class="btn btn-block btn-lg btn-primary"
      title="Tutor Sign Up">Click Here to Get Started!</a>
         
                
         
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Step 1: Qualify</h3>
              <p class="lead mb-0">Choose your subject and pass our qualification exam.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Step 2: Accept Jobs</h3>
              <p class="lead mb-0">Based on your availability, we'll notify you when a tutoring gig that matches your qualifications is scheduled</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Step 3: Cash Out</h3>
              <p class="lead mb-0">Get paid for your weekly tutoring sessions</p>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="{{asset('assets_old/img/testimonials-1.jpg')}}" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="{{asset('assets_old/img/testimonials-2.jpg')}}" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"I made 500 dollars this month, and it was so rewarding!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="{{asset('assets_old/img/testimonials-3.jpg')}}" alt="">
              <h5>Sarah W.</h5>
              <p class="font-weight-light mb-0">"I can't believe I found a tutoring job that fits into my schedule...and I didn't even have to leave my house!"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="/terms_tutorgigs.php">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="/privacy_tutorgigs.php">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Intervene, LLC 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
<div class="modal fade" tabindex="-1" role="dialog" id="notification_modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">&nbsp;</h4>
      </div>
        <div class="modal-body" style="text-align: center">
        <p>Tutorgigs will be down for planned upgrades Feb 11 � Feb 14. If you login at this time system will not work as designed and may not save your work. </p>
      <p>&nbsp;</p>
      <p>We timed our maintenance to align with students being out of school.</p>
      <p>&nbsp;</p>
      <p>Have a great weekend!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('assets_old/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets_old/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript">
//    $(window).on('load', function() {
//        $('#notification_modal').modal('show');
//    });
</script>
  </body>

</html>
