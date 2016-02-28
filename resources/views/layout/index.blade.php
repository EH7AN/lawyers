    <!doctype html>
<html>
<head>
    <title></title>
    <base href="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> سید محمد میر اختیاری </title>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/color.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/reset.css')}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    @yield('header')
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="cp-theme-style-1">
    <div id="wrapper">
        <header id="header">
            <section class="cp-head-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pull-right">
                            <div class="right-box text-right">
                                <ul class="text-right">
                                    <li class="rtl text-right"> تلفن:
                                        <a href="#" dir="ltr">+98 21 444 526 24 </a>
                                    </li>
                                    <li class="rtl text-right"> ایمیل :
                                        <a href="mailto:Demo@demo.com">
                                            <span class=""> Demo@demo.com </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-box">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cp-navigation-section">
                <div class="container">
                    <strong class="logo">
                        <a href="/">
                            <img src="{{asset('assets/images/logo.png')}}" alt="img">
                        </a>
                    </strong>
                    <div class="navigation-right">
                        <div class="cp-burger-nav">
                            <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><i class="fa fa-bars"></i></a></div>
                            <div id="cp_side-menu"> 
                                <a href="#" id="cp-close-btn">
                                    <i class="fa fa-close"></i>
                                </a>
                                <div class="burger-top-box">
                                    <ul>
                                        <li class="rtl text-right"> تلفن:
                                            <a href="#" dir="ltr">+98 21 444 526 24 <span> | </span> </a>
                                        </li>
                                        <li class="rtl text-right"> ایمیل :
                                            <a href="mailto:Demo@demo.com">
                                                <span class=""> Demo@demo.com </span>
                                            </a>
                                        </li>
                                    </ul>
<!--
                                    <ul class="properties-none">
                                        <li><a href="register.html"> ثبت نام <span>|</span></a></li>
                                        <li><a href="login.html"> ورود </a></li>
                                    </ul>
-->
                                    <a href="#" class="btn-style-1"> وقت مشاوره رایگان </a>
                                    <a href="#" class="btn-style-1 btn-style-2 pull-left"> ارتباط با ما </a>
                                </div>
                                <strong class="burger-logo"><a href="index.html"><img src="{{asset('assets/images/burger-logo.png')}}" alt="img"></a></strong>
                                <div class="content mCustomScrollbar">
                                    <div id="content-1" class="content">
                                        <div class="cp_side-navigation">
                                            <nav>
                                                <ul class="navbar-nav col-xs-12 no-pad text-right">
                                                    <li class="active"><a href="index.html"> تماس با ما </a></li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                            تیم وکلا
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu text-right col-xs-12" role="menu">
                                                            <li><a href="practice-modren-style-1.html"> نفر اول </a></li>
                                                            <li><a href="practice-modren-style-2-column.html"> نفر دوم </a></li>
                                                            <li><a href="practice-modren-style-3-column.html"> نفر سوم </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <form action="#">
                                                <input type="text" placeholder=" متن مورد جستجو " required>
                                                <button type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                            <div class="cp-burger-social">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box"> 
                            <a href="#" id="searchtoggl">
                                <i class="fa fa-search"></i>
                            </a> 
                        </div>
                        <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only"> منوی بالای سایت </span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="collapse navbar-collapse">
                                <ul id="nav" class="navbar-nav">
                                    <li><a href="contact"> تماس با ما </a></li>
                                    <li>
                                        <a href="#"> لیست وکلا </a>
                                        <ul>
                                            @foreach($our_team as $team)
                                            <li><a href="attorneys-profile-{{$team->id}}">{{$team->lawyer_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="article-list"> مقالات </a>
                                        <!-- <ul>
                                            <li><a href="attorneys-style-1.html"> گروه وکلای اول  </a></li>
                                            <li><a href="attorneys-style-2.html"> گروه وکلای دوم </a></li>
                                            <li><a href="attorneys-style-3.html"> گروه وکلای سوم </a></li>
                                            <li><a href="attorney-profile.html"> نام وکیل </a></li>
                                        </ul> -->
                                    </li>
                                   <!--  <li>
                                        <a href="news-listing.html">
                                            اخبار
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#"> خط مشی </a>
                                    </li> -->
                                    <li class="active">
                                        <a href="index.html">
                                            صفحه اصلی 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
        </header>
			@yield('content') 
		<footer id="footer">
            <section class="cp-footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 pull-right">
                            <div class="cp-box"> 
                                <strong class="footer-logo pull-right">
                                    <a href="index.html">
                                        <img src="{{asset('assets/images/footer-logo.png')}}" alt="img" class="img-responsive pull-right">
                                    </a>
                                </strong>
                                <p> 
                                     {!! str_limit($contact->about_us,$limt = 499,'...') !!}
                                </p>
                                <a href="#" class="btn-style-1"> اطلاعات بیشتر </a> 
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 pull-right">
                            <div class="cp-box">
                                <h3> زمینه فعالیت </h3>
                                <div class="practice-area">
                                    <ul>
                                    @foreach($activity_field as $af)
                                        <li><a href="practice-area-detail.html"><i class="{{$af->activity_logo}}"></i> {{$af->activity_title}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 pull-right">
                            <div class="cp-box">
                                <h3> راه های دسترسی به ما </h3>
                                <address class="rtl text-right">
                                    <p>
                                        <i class="fa fa-bank"></i>
                                        {{$contact->address}}
                                    </p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span class="rtl"> تلفن </span> <span class="ltr"> {{$contact->tell}} </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-print"></i>
                                            <span class="rtl"> فکس </span> <span class="ltr"> {{$contact->fax}} </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="mailto:">
                                                Email: 
                                                <span> {{$contact->email}} </span>
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <i class="fa fa-globe"></i>
                                            <a href="#"> Mirekhtiari.com </a>
                                        </li> -->
                                    </ul>
                                </address>
                                <ul class="footer-social text-right">
                                    <li><a href="{{$contact->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                                    <li><a href="{{$contact->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{$contact->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cp-copyright-section"> 
                        <strong class="copy rtl">
                             تمامی حقوق مادی و معنوی اين وبسايت متعلق به سید محمد میر اختیاری ميباشد و هرگونه کپی برداری از آن بدون ذکر منبع حرام می باشد. 
                        </strong> 
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoint.js')}}js/"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.noconflict.js')}}"></script>
    <script src="{{asset('assets/js/theme-scripts.js')}}js/"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script type="text/javascript">
    @yield('footer')
        /* <![CDATA[ */
        (function() {
            try {
            var s, a, i, j, r, c, l = document.getElementsByTagName("a"),
            t = document.createElement("textarea");
            for (i = 0; l.length - i; i++) {
            try {
            a = l[i].getAttribute("href");
            if (a && a.indexOf("/cdn-cgi/l/email-protection") > -1 && (a.length > 28)) {
            s = '';
            j = 27 + 1 + a.indexOf("/cdn-cgi/l/email-protection");
            if (a.length > j) {
            r = parseInt(a.substr(j, 2), 16);
            for (j += 2; a.length > j && a.substr(j, 1) != 'X'; j += 2) {
            c = parseInt(a.substr(j, 2), 16) ^ r;
            s += String.fromCharCode(c);
            }
            j += 1;
            s += a.substr(j, a.length - j);
            }
            t.innerHTML = s.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            l[i].setAttribute("href", "mailto:" + t.value);
            }
            } catch (e) {}
            }
            } catch (e) {}
        })();
        /* ]]> */
    </script>
</body>
</html>

