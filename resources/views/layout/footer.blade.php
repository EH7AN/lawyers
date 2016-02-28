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
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی 
                                </p>
                                <a href="#" class="btn-style-1"> اطلاعات بیشتر </a> 
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 pull-right">
                            <div class="cp-box">
                                <h3> زمینه فعالیت </h3>
                                <div class="practice-area">
                                    <ul>
                                        <li><a href="practice-area-detail.html"><i class="fa fa-bank"></i> شرکتی </a></li>
                                        <li><a href="practice-area-detail.html"><i class="fa fa-home"></i> قانون مالکیت </a></li>
                                        <li><a href="practice-area-detail.html"><i class="fa fa-shield"></i> قانون امنیتی  و اقتصادی </a></li>
                                        <li><a href="practice-area-detail.html"><i class="fa fa-male"></i>قانون جنایی دفاعی</a></li>
                                        <li><a href="practice-area-detail.html"><i class="fa fa-car"></i> تصادفات ماشینی جدی </a></li>
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
                                        قیطریه بلوار صبا 
                                    </p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span class="rtl"> تلفن </span> <span class="ltr"> +98 21 4455 66 87 </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-print"></i>
                                            <span class="rtl"> فکس </span> <span class="ltr"> +98 21 4455 66 87 </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="mailto:">
                                                Email: 
                                                <span> mirekhtiari@gmail.com </span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-globe"></i>
                                            <a href="#"> Mirekhtiari.com </a>
                                        </li>
                                    </ul>
                                </address>
                                <ul class="footer-social text-right">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
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