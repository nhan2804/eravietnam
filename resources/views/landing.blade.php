<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Era - Nhân số học</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('UI/home1.css')}}" />
  </head>
  <body>
    <header class="header schema-dark">
      <section class="top-section">
        <div class="top-section__inner">
          <div class="d-flex w-100 align-items-center">
            <div class="top-section__logo d-flex">
              <div class="logo__inner w-100">
                <div class="logo__link">
                  <a href="{{URL::to('/')}}">
                    <h2 class="m-0 text-logo">ERA VIETNAM</h2>
                  </a>
                </div>
              </div>
            </div>
            <div class="top-section__side-logo d-flex justify-content-end">
              <div class="side-logo__inner d-flex">
                <nav class="side-logo__nav">
                  <ul class="nav">
                    <li class="nav-item active test-text"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item test-text"><a href="" class="nav-link">Giới thiệu</a></li>
                    <li class="nav-item test-text"><a href="" class="nav-link">Blog</a></li>
                    <li class="nav-item test-text"><a href="" class="nav-link">Tham gia ngay</a></li>
                   
                    <li class="nav-item test-text"><a href="" class="nav-link">Về chúng tôi</a></li>
                    <li class="nav-item test-text"><a href="" class="nav-link">Kết nối</a></li>
                    <li class="nav-item test-text"><a href="" class="nav-link">Liên hệ</a></li>
                  </ul>
                </nav>
                <div class="side-logo__action">
                  @if(Auth::user())
                  <div class="d-flex align-items-center">
                    <div><i class="fas fa-coins text-warning"></i> {{Auth::user()->coin}}</div>
                    <img style="width: 30px;height: 30px;border-radius: 50%" src="https://lthumb.lisimg.com/741/20711741.jpg?width=411&sharpen=true" alt="">
                    {{Auth::user()->fullname}}
                    <div class="ml-1"><i class="fas fa-sort-down"></i></div>
                  </div>
                  @else
                  <div class="side-logo__btn"><a href="{{URL::to('login')}}" style="background: var(--primary)" class="btn__link">Đăng nhập</a></div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    @yield('content')
      <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Về chúng tôi</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Điều hướng</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Truy cập nhanh</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy;2020 - <span id="year"></span> All Rights Reserved by 
         <a href="#">Era VietNam</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-youtube"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-instagram"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
      <script>
      document.getElementById("year").innerHTML = new Date().getFullYear();
  </script>
</footer>
  </body>
</html>
