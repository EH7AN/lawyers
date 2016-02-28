@extends('layout.index')
@section('content')

  <div class="cp-search-outer"> <strong class="title"> لطفا عبارت مورد جستجو را در کادر زیر وارد نمایید </strong>
            <div id="searchbar">
                <form id="searchform" action="#">
                    <input placeholder="Type your text here" type="text" required>
                    <button type="submit" value=""><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div id="cp-banner">
            <ul id="cp-home-banner">
            @foreach($main_slider as $slider)
                <li>
                    <img src="{{$slider->picture}}" alt="{{$slider->title}}">
                    <div class="caption">
                        <strong class="title">{{$slider->title}}</strong>
                        <h1> {{$slider->short_desc}} <br>
                     {{$slider->long_desc }}
                </h1>
                        <div class="banner-btn-row">
                            <a href="#" class="btn-style-1"> اطلاعات بیشتر </a>
                            <a href="contact-1.html" class="btn-style-1 btn-style-2"> ارتباط با ما </a>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
        <div id="main">
            <section class="cp-welcome padding-tb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pull-right">
                            <div class="cp-heading-1">
                                <h2> به وب سایت گروه وکالت میر اختیاری <span> خوش آمدید </span></h2>
                                <em>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .
                                </em> 
                            </div>
                            <div class="cp-outer-box">
                            @foreach($introduction as $intro)

                                <div class="cp-box">
                                    <div class="icon-box"><img src="{{ $intro->intro_logo }}" alt="img"></div>
                                    <div class="cp-text-box">
                                        <h3><a href="#">{{ $intro->title }}</a></h3>
                                        <p>
                                           {!! $intro->short_desc !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
<!-- ============== intro Slider ==================== -->
                        <div class="col-md-6 pull-left">
                            <div class="welcome-slider">
                                <ul id="cp-welcome-slider">
                                @foreach($introduction as $intro)
                                    <li>
                                        <div class="frame"><img src="{{$intro->intro_slider_pic}}" alt="{{$intro->title}}"></div>
                                        <div class="cp-text-box">
                                            <p>
                                              {{$intro->short_desc}}      
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
<!-- ==============END intro Slider ==================== -->
                    </div>
                </div>
            </section>
            <section class="cp-practice-section padding-top-60">
                <div class="container">
                    <div class="cp-heading-1">
                        <h2> زمینه فعالیت </h2>
                    </div>
                </div>
<!-- ============= Activity fields ==================== -->
                <div class="cp-practice-slider">
                    <div id="cp-practice" class="owl-carousel">
                    @foreach($activity_field as $af)
                        <div class="item">
                            <div class="cp-box"> 
                                <i class="{{$af->activity_logo}}"></i>
                                <h3><a href="practice-area-detail.html">{{$af->activity_title}}</a></h3>
                                <p>
                                    {{$af->activity_desc}}
                                </p>
                            </div>
                        </div>
                     @endforeach
                    </div>
                </div>
<!-- =============END Activity fields ==================== -->
            </section>
            <section class="cp-attorneys-team padding-tb-60">
                <div class="container">
                    <div class="cp-heading-1 rtl">
                        <h2> تیم وکالت</h2>
                    </div>
                    <div class="row">
            <!-- ===================== Our team ==================== -->
                    @foreach($our_team as $team) 
                        <div class="col-md-3 col-sm-6 pull-right">
                            <div class="cp-attorneys-style-1">
                                <div class="frame">
                                    <a href="/attorney-profile-{{$team->id}}"><img src="{{$team->lawyer_picture}}" alt="{{$team->lawyer_name}}"></a>
                                    <div class="caption">
                                        <div class="holder">
                                            <ul>
                                                <li><a href="{{$team->lawyer_twitter}}"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="{{$team->lawyer_facebook}}"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="{{$team->lawyer_linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <p>{{str_limit($team->lawyer_intro, $limit = 100, $end = '...') }}</p>
                                            <a href="/attorney-profile-{{$team->id}}" target="_blank" class="btn-style-1"> اطلاعات بیشتر </a> </div>
                                    </div>
                                </div>
                                <div class="cp-text-box">
                                    <h3><a href="/attorney-profile-{{$team->id}}" target="_blank">{{$team->lawyer_name}}</a></h3>
                                    <em> {{$team->lawyer_post}} </em> 
                                </div>
                            </div>
                        </div>
                    @endforeach
            <!-- ===================== END Our team ==================== -->
                    </div>
                </div>
            </section>
            <section class="cp-choose-lawyers">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 pull-right">
                            <div class="left-box">
                                <div class="frame"> <img src="{{asset('assets/images/choose-lawyer-img.jpg')}}" alt="img">
                                    <div class="choose-logo-box">
                                        <a href="#"><img src="{{asset('assets/images/choose-logo.png')}}" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-box">
                                <div class="cp-text-box">
                                    <div class="cp-heading-1">
                                        <h2> چرا باید گروه وکالت میر اختیاری را انتخاب کنید ؟ </h2>
                                        <em> گروه وکالت میر اختیاری با داشتن سال ها تجربه و گروه کاری مجرب و ادامه توضیحات </em> </div>
    <!-- ====================== Mottos =================================== -->
                                @foreach($motto as $mot) 
                                    <div class="detail-box">
                                        <div class="icon-box"><i class="{{$mot->motto_logo}}"></i></div>
                                        <div class="inner">
                                            <h3><a href="#">{{$mot->motto_title}}</a></h3>
                                            <p>{{$mot->motto_desc}}</p>
                                        </div>
                                    </div>
                                @endforeach
    <!-- ====================== END Mottos =================================== -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="cp-news-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pull-right">
                            <div class="left-box">
                                <h2> آخرین مقالات </h2>
            <!-- ================= Articles =================== -->
                              @foreach($article as $art) 
                                <div class="cp-box pull-right">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 pull-right">
                                            <div class="frame cp-img-effect-1">
                                                <a href="article-inner-{{$art->id}}"><img src="{{$art->picture}}" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-6 pull-left text-right">
                                            <div class="cp-text-box text-right">
                                                <h3><a href="article-inner-{{$art->id}}"> {{$art->title}} </a></h3>
                                                <a href="blog-detail.html" class="detail-text rtl"> {{$art->created_at}} <span> | </span></a> <a href="blog-detail.html" class="detail-text">{{$art->author}}</a>
                                                <p>
                                                    {{str_limit( $art->short_desc, $limit = 100,$end = '...') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
              <!-- ============ END Articles =================== -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cp-client-section padding-tb-60">
                <div class="container">
                    <h2> برخی از موکل های حقوقی </h2>
                    <ul>
                     @foreach($our_partner as $client) 
                        <li>
                            <a href="{{$client->mpartner_link}}"><img src="{{asset('assets/images/client-img-1.png')}}" alt="img"></a>
          
                        <li>
                    @endforeach
                        <li>
                            <a href="#"><img src="{{asset('assets/images/client-img-3.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/images/client-img-4.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/images/client-img-5.png')}}" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

@stop
