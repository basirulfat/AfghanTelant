<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/style.css" />

  <title>@lang('msg.key1')</title>
  <style>  
            .text-center {
                text-align: center;
                color:light;
                font-size:40px;
            }
            #map {
                width: 100%;
                height: 400px;
            }
        </style>
</head>

<body>
  <!--=============== HEADER ===============-->
  @include('layouts.header')
  <!-- =============== HEADING SECTION =============== -->
  <section id="heading-container">
    <div class="heading__part">
      <div class="first__img img"></div>
      <div class="FT__catchword">
        <h1>@lang('msg.key16')</h1>
        <h2>@lang('msg.key17')</h2>
        <div class="registration__btn">



          <a class="btn head__btn" href="{{url('find-job')}}">@lang('msg.key18')</a>
          <a class="btn head__btn" href="{{route('personalInformation.create')}}">@lang('msg.key19')</a>

         


        </div>
      </div>
      <div class="second__img img"></div>
    </div>
    <div class="featurs">
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-search-line"></i></a>
        </div>
        <h4>@lang('msg.key20')</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-hand-heart-line"></i></a>
        </div>
        <h4>@lang('msg.key21')</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-survey-line"></i></a>
        </div>
        <h4>@lang('msg.key22')</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-wallet-3-line"></i></a>
        </div>
        <h4>@lang('msg.key23')</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-message-2-line"></i></a>
        </div>
        <h4>@lang('msg.key24')</h4>
      </div>
    </div>
  </section>
  <!-- =============== SLAIDER SECTION =============== -->
  <section id="slider">
   <section>
            <h3 style="font-style:initial;font-variant:small-caps;font-weight:bold;text-align:center">
              Featured Companies
            </h3>


            <script src="assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
              jssor_1_slider_init = function() {

                var jssor_1_options = {
                  $AutoPlay: 1,
                  $Idle: 0,
                  $SlideDuration: 1000,
                  $SlideEasing: $Jease$.$Linear,
                  $PauseOnHover: 4,
                  $SlideWidth: 140,
                  $Align: 0
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 1110;

                function ScaleSlider() {
                  var containerElement = jssor_1_slider.$Elmt.parentNode;
                  var containerWidth = containerElement.clientWidth;

                  if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                  } else {
                    window.setTimeout(ScaleSlider, 30);
                  }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
              };
            </script>
            <style>
              /*jssor slider loading skin spin css*/
              .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
              }

              @keyframes jssorl-009-spin {
                from {
                  transform: rotate(0deg);
                }

                to {
                  transform: rotate(360deg);
                }
              }
            </style>
            <div id="jssor_1" style="position:relative;
            margin:0 auto;top:0px;
            left:0px;width:1140px;
            height:130px;
            overflow:hidden;
            visibility:hidden;">
              <!-- Loading Screen -->
              <div data-u="loading" class="jssorl-009-spin"
               style="position:absolute;top:0px;
               left:0px;width:100%;
               height:100%;
               text-align:center;
               background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;
                position:relative;
                top:50%;
                width:38px;
                height:50px;"
                 src="assets/images/company logo/brishna.png" />
              </div>
              <div data-u="slides" style="cursor:default;
              position:relative;
              top:0px;left:0px;
              width:1140px;
              height:130px;
              overflow:hidden;">
              
               <div>
                  <a href="http://www.ashakirana.in/">
                    <img data-u="image" src="assets/images/company logo/brishna.png" />
                  </a>
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/alo.jpg" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/Brothers.jpg" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/unicif.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/cola.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/care.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/mtn.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/roshan.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/wfp.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/khan.jpg" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/meli.jpg" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/afc.jpg" />
                </div>
                <div>
                <img data-u="image" src="assets/images/company logo/kis.png" />
                </div>
              </div>

            </div>
            <script type="text/javascript">
              jssor_1_slider_init();
            </script>
          </section>
          <!-- </section> -->
  </section>
  <!-- =============== job filter =============== -->
  <section id="jobs">
    <h1>@lang('msg.key20')</h1>
    <div class="job__filteration__wrapper">
      <div class="category">
        <i class="ri-archive-fill job__icon"></i>
        <h4>@lang('msg.key25')</h4>
      </div>
      <div class="category">
        <i class="ri-map-pin-fill job__icon"></i>
        <h4>@lang('msg.key26')</h4>
      </div>
      <div class="category">
        <i class="ri-community-line job__icon"></i>
        <h4>@lang('msg.key27')</h4>
      </div>
      <div class="category">
        <i class="ri-briefcase-fill job__icon"></i>
        <h4>@lang('msg.key28')</h4>
      </div>
      <div class="category">
        <i class="ri-medal-line job__icon"></i>
        <h4>@lang('msg.key29')</h4>
      </div>
    </div>
    <div class="line"></div>

    <div class="job__collection">
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
    </div>
    <div class="See_more other">
      <div class="job__collection2 ">
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>

        </div>
      </div>
    </div>
    <div class="job__btn">
      <button class="btn More_Jobs">
      @lang('msg.key30')<i class="ri-arrow-down-s-line"></i>
      </button>
    </div>
  </section>
  <!-- =============== JOB SEARCH =============== -->
  <section id="job-searching">
    <h1>@lang('msg.key31')</h1>
    <div class="job__parts">
      <a href="#">Alokozay</a>
      <a href="#">Software Development</a>
      <a href="#">Supper Cola</a>
      <a href="#">Engineering</a>
      <a href="#">Marketing</a>
      <a href="#">Pharmaceutical</a>
      <a href="#">Sales</a>
      <a href="#">Accounting</a>
    </div>
    <div class="job__parts">
      <a href="#">IT Network</a>
      <a href="#">Graphic Design</a>
      <a href="#">unicif</a>
      <a href="#">Medical Representative</a>
      <a href="#">Manager</a>
      <a href="#">Pharmaceutical</a>
      <a href="#">Sales</a>
    </div>
    <div class="job__parts">
      <a href="#">Administrative Assistant</a>
      <a href="#">Project Management</a>
      <a href="#">W . H . O</a>
    </div>
  </section>
      <!--=================== map ================= -->
  <section>
  <h1 class="text-center">@lang('msg.keymap')</h1>
   

    <div class="jobcart__wrapper">
   
    </div>
    <!-------------------------------pagenation ------------------------------------>
   
     <!-------------------------------pagenation ------------------------------------>
    <div class="job__btn">
      <a href="{{url('showJobs')}}">@lang('msg.key36')<i class="ri-arrow-down-s-line"></i></a>

    </div>
  </section>
  <!-- =============== start with you =============== -->
  <section id="start-with-you">
    <h1>@lang('msg.key37')</h1>
    <div class="star__wrapper">
      <div class="start__links__wrapper">
        <div class="start__links">
          <a href="{{url('CreateCV')}}">@lang('msg.key38')</a>
          <a href="{{url('CreateCV')}}"> <i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="#">@lang('msg.key39')</a>
          <a href="#"><i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="#">@lang('msg.key40')</a>
          <a href="#"><i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="#">@lang('msg.key41')</a>
          <a href="#"><i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="{{url('post-job')}}">@lang('msg.key42')</a>
          <a href="{{url('post-job')}}"><i class="ri-arrow-right-s-line"></i></a>
        </div>
      </div>
      <div class="start__img img"></div>
    </div>
  </section>
  <!-- =============== GUIDE SECTION =============== -->
  <section id="giude-section">
    <h1>@lang('msg.key43')</h1>
    <div id="direction-for-employer">
      <div class="registrition">
        <i class="ri-user-add-line"></i>
        <a href="#">
          <h3>@lang('msg.key44')</h3>
        </a>
        <p>
        @lang('msg.key45') <br />
        @lang('msg.key46') <br />
        @lang('msg.key47')
        </p>
      </div>

      <div class="registrition">
        <i class="ri-arrow-right-line"></i>
      </div>

      <div class="registrition">
        <i class="ri-file-upload-line"></i>
        <a href="#">
          <h3>@lang('msg.key48')</h3>
        </a>
        <p>
        @lang('msg.key49') <br />
        @lang('msg.key50') <br />
        @lang('msg.key51')
        </p>
      </div>

      <div class="registrition">
        <i class="ri-arrow-right-line"></i>
      </div>

      <div class="registrition">
        <i class="ri-briefcase-line"></i>
        <a href="#">
          <h3>@lang('msg.key52')</h3>
        </a>
        <p>
        @lang('msg.key53')<br />
        @lang('msg.key54') <br />
        @lang('msg.key55')
        </p>
      </div>
    </div>
  </section>

  <!-- ===============FAQ =============== -->
  <section id="FAQ">
    <h1>@lang('msg.key56')</h1>
    <div class="faq-wrapper">
      <div class="question">
        <h5>@lang('msg.key57')</h5>
        <button class="btn faq">
          <i class="ri-arrow-down-s-line"></i>
        </button>
      </div>
      <div class="answer">
        <p>
        @lang('msg.key58')
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>
        @lang('msg.key59')
        </h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
        @lang('msg.key60')
        <ul>
          <li> @lang('msg.key61')</li>
          <li> @lang('msg.key62') </li>
          <li> @lang('msg.key63')</li>
          <li> @lang('msg.key64') </li>
          <li> @lang('msg.key65')</li>
          <li> @lang('msg.key66')</li>
          <li> @lang('msg.key67') </li>
          <li> @lang('msg.key68')</li>
        </ul>
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>@lang('msg.key69')</h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
        @lang('msg.key70')
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>@lang('msg.key71')</h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
        @lang('msg.key72')
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>@lang('msg.key73')</h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
        @lang('msg.key74')
        </p>
      </div>
    </div>
  </section>
  <!-- <img src="assets/images/message.jpg" alt="" class="message"> -->

  <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>

  <!--=============== FOOTER ===============-->
  @include('layouts.footer')
  <!--=============== MAIN JS ===============-->

  <script defer type="module" src="./assets/js/main.js"></script>

</body>

</html>