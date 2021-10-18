@extends('layouts.app');

@section('content');

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
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;"><font style="color: black"><b> Improve Your Family Life</b></font>  
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
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Need To Take Proper Step 
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
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled pl-20 pr-20" href="/about">View Details</a> <a class="btn btn-theme-colored btn-circled pl-20 pr-20" href="/contact">Apply Now</a> 
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
                <font style="color: black";> counseling</font>
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
                style="z-index: 7; white-space: nowrap; font-weight:600;">have a way of being seen
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
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a> 
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
                style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Only</span> One Think
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
                style="z-index: 7; white-space: nowrap; font-weight:600;"><font style="color: black;" >counselor make at change you</font>
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
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="/contact">Apply Now</a> 
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

  <!-- Section: About -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img class="pull-left mr-15 thumbnail" src="images/naaps/unnamed1.jpg"/>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p> --}}
            <div class="clearfix"></div>
            <h5 style="text-align: center">Dr. Funmilola Omotayo</h5>
            <hr>
            <h5>Ishola-Shekoni Oladotun</h5>
            <img class="pull-left mr-15 thumbnail" src="images/naaps/unnamed2.jpg" width="30%"/>
            <p style="text-align: justify">She is a qualified educationist cum counselling psychologist, a registered teacher with the Teacher’s Registration Council of Nigeria (TRCN), a licensed counselling psychologist by the Counselling Association of Nigeria. She has over ten (10) years experience teaching children and adolescents. She has been privileged to work with children with special needs,observing, scoring some of their psychological assessment tools and providing learning support to them through NAAPS. She has also coordinated the production of the seven series booklets on children by NAAPS.(also serves in a supervisory role at NAAPS).</p>
            <p style="text-align: justify"><font style="font-weight: bold">Area of expertise:</font><br>
              Administering learning support services, use of Visualizing and Verbalizing program for cognitive development, improving reading comprehension, thinking and concept imagery, tailoring support programmes to client’s and family needs believing that with the right kind of education, children can be successful regardless of the limitations any special need poses, counselling, organizing, and facilitating trainings.
            </p>
            <p><font style="font-weight: bold">Qualifications: </font><br>
              <li>Master’s degree in Counselling Psychology, University of Ibadan.</li>
              <li>Bachelor’s degree Guidance Counselling and Economics, University of Ibadan.</li>
            </p>
            <p><font style="font-weight: bold">Membership: </font><br>
              <li>Counselling Association of Nigeria.</li>
            </p>
            <div class="clearfix"></div>
            <hr>
            <h5>Ayodele Adeniji </h5>
            <img class="pull-left mr-15 thumbnail" src="images/naaps/unnamed3.jpg" width="30%"/>
            <p style="text-align: justify">Ayodele is an Assistant Psychologist who serves as a Social Communication 
              & Cognitive Behaviour Therapy (CBT) Specialist at the New Analysis Associates Psychological Service 
              (NAAPS). She worked as a Home Facilitator for two (2) years providing academic, social, and Individual 
              support. She has served in the role of manager at Nurture Nigeria Early Intervention & School Support 
              Services. She worked briefly with the Children's Developmental Centre (CDC), Surulere and has attended 
              several seminars and workshops including a workshop on Child and Adolescent Mental Health and Services 
              organized by the Child and Adolescent Mental Health Service (CAMHS) Centre of the Federal Neuropsychiatric 
              Hospital, Yaba, Lagos, Special Needs Conference for Churches, and the Guaranty Trust Bank (GTB)Annual 
              Autism Conference.Ayodele is currently a volunteer for the Special Needs Conference for Churches 
              organized by AdelolaEdema and she has served as a volunteer in some of the Special Needs Centres in 
              Lagos like Patrick Speech and Language Centre (PSLC), Ikeja and the Little Beginnings Academy (LBA), 
              Lekki. Ayodelecurrently serves as the Head of the Special Needs Unit at Children’s Church Department of 
              The Fountain of life Church where she attends, working with children with special needs and disabilities.
              She has also been privileged to work with children and their families observing, scoring psychological 
              assessment tools, writing reports, and providing intervention to them through NAAPS.</p>
              <p style="text-align: justify">When Ayodele is not busy, she likes to spend quality time with her family, watch movies, and connect with friends.</p>
            <p style="text-align: justify"><font style="font-weight: bold">Area of expertise:</font><br>
              Providing support services to clients in social communication and social-emotional well-being using Cognitive Behaviour Therapy (CBT) techniques such that they are able to form close, secure, meaningful relationships; experience, regulate, and express emotions positively; as well as explore their environment and learn new skills. 
            </p><br><br>
            <p><font style="font-weight: bold">Qualifications: </font><br>
              <li>Bachelor of Arts degree in Psychology and Sociology, University of Ghana Legon.</li>
              <li>Diploma in Teaching Profession (Professional Development Programme, Corona Schools' Trust Council in conjunction with the University of Lagos, Unilag Consult)</li>
              <li>Cognitive Behaviour Therapy Online Diploma, Specialist Academy. </li>
            </p>
            <div class="clearfix"></div>
            <hr>
            <h5>Abati Joseph</h5>
            <img class="pull-left mr-15 thumbnail" src="images/naaps/welcome.jpeg" width="30%"/>
            <p style="text-align: justify">Joseph is an Assistant Psychologist as well as behaviour therapist with the New Analysis Associates Psychology Service with over 6years experience working with children with special needs. He is a dedicated and committed psychologist with profound interest in the areas of Clinical Psychology with experiences in childhood mental health concerns such as learning disabilities and emotional disorders. He is a professional with personable demeanor when speaking with parents regarding child’s progress. Joseph is privilege to work Yaba psychiatric hospital where he garnered experiences in areas of intake interview, clinical interview, report writing and psychological assessment. He has also been privileged to assist in assessing the mental health of children and also in performing testing to determine whether a child has a learning disability, working with parent/teachers to develop a collaborative therapy/ Individual Education Plan (I.E.P.) for children and providing learning support to them through NAAPS. </p>
            <p style="text-align: justify"><font style="font-weight: bold">Area of expertise:</font><br>
              His area of specialization include: Providing hands-on therapy and learning opportunities. Making use of applied behaviour technique, Rhythmic Movement Therapy (R.M.T), social communication therapy, Visualizing/Verbalizing, behaviour modifications approaches.
            </p>
            <p><font style="font-weight: bold">Qualifications: </font><br>
              <li>Bachelor of Science degree in Psychology, University of Lagos.</li>
              <li>A member of Nigerian Psychological Association. </li>
            </p>
            <div class="clearfix"></div>
          </div>
      </div>
    </section>
    
@endsection