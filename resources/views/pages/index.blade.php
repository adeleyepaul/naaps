@extends('layouts.app')

@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">

        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slide1/slide1.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/naaps/slide1.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway pl-30 pr-30"
                  id="rs-1-layer-1"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']"
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-1-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center"
                  id="rs-1-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50','60','70']"
                  data-fontsize="['16','18','24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                  {{-- <font style="color: black"> We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.</font> --}}
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption"
                  id="rs-1-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['135','145','155']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/naaps/slide2.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/naaps/slide2.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-2-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']"
                  data-fontsize="['80']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;">
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-2-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']"
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white"
                  id="rs-2-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','45','55']"
                  data-fontsize="['16','18','24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                  {{-- <font style="color: #511f75;" >We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.</font> --}}
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption"
                  id="rs-2-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['110','120','140']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/naaps/slide3.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/naaps/slide3.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']"
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']"
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right"
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30','40','50']"
                  data-fontsize="['16','18','24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                  {{-- <font style="color: white;"> We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.</font> --}}
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption"
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['110','120','140']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: home-boxes -->
    <section class="bg-silver-light">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-30">
                  <a href="/consultation"><img src="images/photos/consultation.png" width="33%" /></a>
                  {{-- <i class="fa fa-stethoscope text-white font-64"></i> --}}
                  <h4 class="text-uppercase mt-0"><a href="/consultation" class="text-black">Consultation</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-30">
                 <a href="/assessment"><img src="images/photos/assessment.png" width="26%"></a>
                  {{-- <i class="fa fa-recycle text-white font-64"></i> --}}
                  <h4 class="text-uppercase mt-0"><a href="/assessment" class="text-black">Assessment</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker2">
                <div class="text-center pt-30 pb-30">
                  <a href="/intervention"><img src="images/photos/intervention.png" width="26%"/></a>
                  {{-- <i class="fa fa-comments-o text-white font-64"></i> --}}
                  <h4 class="text-uppercase mt-0"><a href="/intervention" class="text-black">Intervention</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored-darker4">
                <div class="text-center pt-30 pb-30">
                  <img src="images/photos/research.png" width="26%">
                  {{-- <i class="fa fa-umbrella text-white font-64"></i> --}}
                  <h4 class="text-uppercase mt-0"><a href="/research" class="text-black">Research and Training</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: intro  -->
    <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <img src="images/Picture1.jpg" alt="">
            </div>
            <div class="col-md-6">
              <h3 class="line-bottom line-height-1 mt-0 mt-sm-30">Welcome To Our NAAPS</h3>
              <h3 class="line-bottom-double-line">Who We Are?</h3>
              <p style="text-align: justify;">New Analysis Associates Psychological Service (NAAPS) is an independent psychological service offering a range of services for children
                and adults to facilitate positive change and enhance learning and emotional well-being through assessment, collaboration with parents, schools,
                and professionals to enable children’s successful transition into adulthood.
                </p>
              <p style="text-align: justify;">We undertake assessment to enable an understanding of individual’s learning profile. Our emphasis in evaluating learning difficulties is to assess learning
                abilities- what the child or young person can do well and how can those strengths be used to help overcome any deficiencies that may be present. <br>
                We believe in the unique potentials of children, families, and school communities and therefore hold ourselves to high ethical standards always, acting in the best
                interest of the child.
              </p>
              <p style="text-align: justify;">
                Our assessments are carried out by c hartered and registered practitioner Educational/Child Psychologists who are specifically trained in the psychology of learning and
                child development as well as social emotional adjustment.<br/> Our assessments are carried out in a child’s natural setting thereby giving children the opportunity to perform at their best.
                Parents and children are now free from the hassle and stress of travelling abroad for an assessment in a clinical environment. Our comprehensive assessment comes with structured intervention.
              </p>
              <p style="text-align: justify;">NAAPS work enables an understanding of individual’s learning profile, opportunities for the identification of giftedness, effective consultation to school staff and parents regarding students
                who exhibit behaviour problems in the classroom that interfere with learning. We work with parents to enhance their understanding of child development, schooling abroad, transition through
                academic career and the integration of foreign students in the Nigerian system.<br/>
                Schools benefit from our package of support, resources, and professional development as we bring together the latest in research and practice in special education needs.<br/>
                NAAPS service is designed to help both school and students gain the skills quickly and in depth. Our services are carried out in a collaborative, supportive, classroom-based environment with
                practical classroom strategies.
              </p>
              <div class="row">
                {{-- <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <img src="images/naaps/consultancy.png" /> --}}
                      {{-- <i class="fa fa-comments-o text-white font-36"></i> --}}
                    {{-- </a>
                    <h4 class="icon-box-title m-0 mb-5">Consultancy</h4>
                    <p class="text-gray mb-5">Involves using coaching and problem-solving techniques working with teachers and adults to devise..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div> --}}
                {{-- <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="fa fa-recycle text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Workforce</h4>
                    <p class="text-gray mb-5">Consultations for staff, workshops, team development, training, practical strategies for the..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div> --}}
                {{-- <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-sm-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="fa fa-certificate text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Assessment/Casework of Children & Young People/Adult</h4>
                    <p class="text-gray mb-5">This is focused on an individual child and young person (CYP)/adult’s needs. We undertake assessment..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div> --}}
                {{-- <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <img src="images/naaps/intervention.png" /> --}}
                      {{-- <i class="fa fa-stethoscope text-white font-36"></i> --}}
                    {{-- </a>
                    <h4 class="icon-box-title m-0 mb-5">Intervention/ Therapeutic Intervention</h4>
                    <p class="text-gray mb-5">MGroup work with children and young (CYP)/adults, drop-in service, social communications, interactions..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Photo <span class="text-theme-colored">Gallery</span></h3>
              <!-- Portfolio Gallery Grid -->

              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallerya.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallerya.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery2.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery2.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery3.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery3.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery4.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery4.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery5.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery5.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery6.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery6.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery7.jpeg" style="width:100%">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery7.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery8.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery8.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/gallery9.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/gallery9.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/galleryab.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/galleryab.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/galleryabc.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/galleryabc.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/naaps/galleryabcd.jpeg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/naaps/galleryabcd.jpeg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
            <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30 mt-sm-40"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Client <span class="text-theme-colored">Testimonials</span></h3>

              <div class="bxslider bx-nav-top" data-count="2">
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>Thanks so much for your support! You are a delightful person and competent doctor. We appreciate your time very much and look forwardto meeting with you again.</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Christa Beck,</span> <small><em>Parent</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>John and I wanted to thank you again for your professionalism, attentive listening to our questions and concerns, and warm mannerisms. We are convinced you were the best person to evaluate Joseph and we thank you for your genuine care towards his needs. We can't thank you enough for combing every page with us and explaining the data on our level. We feel so much better and have a clearer picture of how we can help Joseph</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Christa Beck,</span> <small><em>Parent.</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>Time to get an appointment: I feel was slow, probably because I was anxious. Overall service was actually excellent
                        </p>
                      <p class="author mt-10">- <span class="text-theme-colored">Anonymous,</span> <small><em>Parent</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>My family and I have always found this outfit most excellent; we will recommend it over and over. Excellent professional ability. Two thumbs up!”</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Anonymous,</span> <small><em>Parent</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>I like the games!</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Anonymous,</span> <small><em>Child.</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>Excellent service. Wonderful staff. I'm extremely happy with Emmanuel’s progress. Thank you for all your care and concern.</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Parent</span></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>Thank you for helping me out.</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Parent</span></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>They are very kind thank you.”</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Child</span></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>I am satisfied with the service. The Doctor has been very open and thoughtful.</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Parent.</span></p>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/naaps/client.png">
                    </div>
                    <div class="ml-100 ">
                      <p>I was impressed by the quick/prompt response, the level of professionalism in the replies. To get a mail to say that you will reply is really nice!! I will definitely recommend this service to others</p>
                      <p class="author mt-10">- <span class="text-theme-colored">Parent.</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Staff Section --}}
    {{-- <section>
      <div class="container pt-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title line-bottom mt-0 mb-30"><i class="fa fa-thumb-tack text-gray-darkgray mr-10"></i>Our <span class="text-theme-colored">Staff</span></h2>
              <div class="owl-carousel-4col">
                <div class="item">
                  <div class="team-members maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="images/naaps/unnamed.jpg">
                    </div>
                    <div class="team-bottom-part bg-lighter border-1px text-center p-10 pt-20 pb-10">
                      <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> Dr. Funmilola Omotayo</a></h4>
                      <h5 class="">- Counselor -</h5>
                      <ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team-members maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="images/naaps/unnamed3.jpg">
                    </div>
                    <div class="team-bottom-part bg-lighter border-1px text-center p-10 pt-20 pb-10">
                      <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html">Ayodele Adeniji </a></h4>
                      <h5 class="">- Assistant Psychologist -</h5>
                      <ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team-members maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="images/naaps/welcome.jpeg">
                    </div>
                    <div class="team-bottom-part bg-lighter border-1px text-center p-10 pt-20 pb-10">
                      <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html">Abati Joseph</a></h4>
                      <h5 class="">- Assistant Psychologist -</h5>
                      <ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team-members maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="images/naaps/unnamed2.jpg">
                    </div>
                    <div class="team-bottom-part bg-lighter border-1px text-center p-10 pt-20 pb-10">
                      <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html">Ishola-Shekoni Oladotun </a></h4>
                      <h5 class="">- Counselling Psychologist  -</h5>
                      <ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    @include('inc.partner')

  </div>
  <!-- end main-content -->

@endsection
