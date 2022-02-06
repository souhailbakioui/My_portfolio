<!DOCTYPE html>
<html>
<head>
    <title>{{$BasicSetup->name}}</title>
    <meta content="{{$BasicSetup->description}}" name="description">
    <meta content="{{$BasicSetup->keyword}}" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css');}}" rel="stylesheet">
    <link href="{{asset('vendor/icofont/icofont.min.css');}}"  rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css');}}"  rel="stylesheet">
    <link href="{{asset('vendor/venobox/venobox.css');}}"  rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css');}}"  rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css');}}"  rel="stylesheet">

<!-- Template Main CSS File -->
    <link href="{{asset('css/style.css');}}" rel="stylesheet">
   <style>
        #hero {
            background: url('img/{{$PersonalSetup->homewallpaper}}');
        }

    </style>
</head>
<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="img/{{$PersonalSetup->profilepic}}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#">{{$PersonalSetup->name}}</a></h1>
                <div class="social-links mt-3 text-center">
               @if ($PersonalSetup->twitter!="")  <a href="{{$PersonalSetup->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>@endif
                @if ($PersonalSetup->facebook!="")  <a href="{{$PersonalSetup->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>@endif
                 @if ($PersonalSetup->skype!="")   <a href="{{$PersonalSetup->skype}}" class="skype"><i class="bx bxl-skype"></i></a>@endif
                 @if ($PersonalSetup->linkedin!="")   <a href="{{$PersonalSetup->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>@endif
                 @if ($PersonalSetup->github!="")   <a href="{{$PersonalSetup->github}}" class="github"><i class="bx bxl-github"></i></a>@endif
                 @if ($PersonalSetup->instagram!="")   <a href="{{$PersonalSetup->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>@endif
    </div>
</div>


   <nav class="nav-menu">
                <ul>
                    <li class=""><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                     <li><a href="#Certificates"><i class="bx bx-file-blank"></i> <span>Certificates</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
</div>
    </header>





        <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">

        <div class="hero-container" data-aos="fade-in">
            <h1>{{$PersonalSetup->name}}</h1>

            <p>I'm <span class="typed" data-typed-items="<?php
          $prof = explode(",",$PersonalSetup->professions);
          foreach($prof as $value){echo $value.",";}?>">


          </span></p>
        </div>
    </section><!-- End Hero -->




 <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>{{$AboutusSetup->shortdesc}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="img/{{$PersonalSetup->profilepic}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{$AboutusSetup->heading}}</h3>
                        <p class="font-italic">
                            {{$AboutusSetup->subheading}}
                        </p>
                        <div>
                            <ul class="row">
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> {{$AboutusSetup->dob}}</li>
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong> {{$PersonalSetup->emailid}}</li>
                                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> {{$PersonalSetup->mobile}}</li>





                            </ul>
                        </div>
                        <p>
                            {{$AboutusSetup->longdesc}}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->





    <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="row col-lg-12" data-aos="fade-up">
@foreach($Skills as $sk)
                        <div class="progress col-lg-6">
                            <span class="skill">{{$sk->skill}} <i class="val">{{$sk->score}} %</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$sk->score}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
@endforeach



                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->




     <!-- ======= Resume Section ======= -->
     <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Education</h3>
@foreach($Resume as $res)
@if($res->category=='e')
                <div class="resume-item">
                        <h4>{{$res->title}}</h4>
                        <h5>{{$res->year}}</h5>
                        <p><em>{{$res->ogname}}</em></p>
                        <p>{{$res->workdesc}}</p>
                    </div>


   @endif
@endforeach
  </div>          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <h3 class="resume-title">Professional Experience</h3>
@foreach($Resume as $res)
@if($res->category!='e')




                <div class="resume-item">
                        <h4>{{$res->title}}</h4>
                        <h5>{{$res->year}}</h5>
                        <p><em>{{$res->ogname}}</em></p>

                        <p>{{$res->workdesc}}</p>
               </div>



 @endif
@endforeach
</div>
        </div>
    </section><!-- End Resume Section -->



 <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

  @foreach($portfolio as $pr)
                  <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="img/{{$pr->projectpic}}" class="img-fluid">
                            <div class="portfolio-links" title="{{$pr->projectname}}">

                                <a href="img/{{$pr->projectpic}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="{{$pr->projectlink}}" target="_blank" title="Visit {{$pr->projectname}}"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
@endforeach




                </div>

            </div>
        </section><!-- End Portfolio Section -->


       <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>{{$PersonalSetup->location}}</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:{{$PersonalSetup->emailid}}">{{$PersonalSetup->emailid}}</a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p> <a href="tel:{{$PersonalSetup->mobile}}">{{$PersonalSetup->mobile}}</a> </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{route('Contact.store')}}" method="post" role="form" class="php-email-form" name="formcontact" id="formcontact">
                                @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="bg-success error-message"></div>
                                <div class="sent-message"></div>
                            </div> --}}
                            <div class="text-center"><button type="submit" onclick="return">Send Message</button></div>
                        </form>
                    </div>
<!--

-->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->



<!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
<!--
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
-->
            <div class="credits">
               <a href="#">Bakioui Souhail</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>




    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/counterup/counterup.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/typed.js/typed.min.js"></script>
    <script src="vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script src="js/main.js"> </script>
    <script >
    $('#formcontact').on('submit',function(e){
        e.preventDefault();



        $.ajax({
          url: "{{route('Contact.store')}}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            name:$('#name').val(),
        email:$('#email').val(),
        subject:$('#subject').val(),
        message:$('#message').val(),

          },
          success:function(response){
            Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Email bien envoyer',
  showConfirmButton: false,
  timer: 1500
})
            console.log(response);
          },
          error: function(response) {
            console.log(response);
          },
          });
        });
      </script>
</body>
</html>
