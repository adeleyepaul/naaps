@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/naaps/service.jpeg">
      <div class="container pt-70 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <ul class="breadcrumb white">
                <li><a class="text-white" href="/">Home</a></li>
                <li class="active">Services Details</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section>
      <div class="container">

        @include('inc.services')

          <div class="col-sm-5 col-md-7 col-lg-11">
            <div class="campaign bg-silver-light maxwidth500 mb-30">
              <div class="thumb">
                <img src="images/services/single-Service4.html" alt="" class="img-fullwidth">
                <div class="campaign-overlay"></div>
              </div>
              <div class="campaign-details clearfix p-15 pt-10 pb-10">
                <h4 class="text-theme-colored font-weight-700 mb-0">Psychological services</h4>
                {{-- <h4 class="font-weight-700 mt-0"><a href="#">Personal Development</a></h4> --}}
                <p>Therapeutic intervention: every child is precious to their loving families but 
                  sometimes it is apparent early on, but certainly by school age, that something 
                  does not seem right. Studies suggest that the earlier the interventions for 
                  developmental disorders/ delays occur the better the outcome for their learning 
                  and future independence.<br/>
                  Therapy and assessment of children and adolescents require specific skills, training, 
                  and experience. NAAPS psychologists and therapists are trained in working with children 
                  from earliest age through the college years.
                </p>
                <p>We offer:</p>
                <p>Group work: with pupils who may be experiencing challenges in managing some of the 
                  demands of school and their relationships with peers and/or staff; NAAPS undertakes 
                  series of sessions to help pupils to develop better ways of managing situations that 
                  they find challenging in school.
                </p>
                <p>
                  Drop-in service: for pupils in secondary schools who wish to discuss concerns about 
                  any aspect of life in school in a confidential one-to-one setting. NAAPS work with 
                  schools and organisations to set out a plan for developing school-based counselling 
                  services for children and young people. We provide career counsel, study skills and 
                  examination technique.
                </p>
                <p>
                  Transition planning: involves working with parents/carers, teachers and staff 
                  [and where appropriate, pupils themselves] to support pupils with significant 
                  levels of need who may experience difficulties in adapting to the demands of 
                  new school or educational setting. This can include transition from school 
                  stages for foreign students coming for schooling in Nigeria as well as pupils 
                  undergoing a managed move or transfer to a new school or settling following a 
                  permanent exclusion.
                </p>
                <p>
                  Programmes to improve pupils’ learning skills and attainments: involve the design 
                  of evidence-based interventions tailored to each school’s needs. These aim to equip 
                  teachers and support staff with the knowledge and strategies to implement programmes 
                  of activities with targeted groups of pupils. The programme will typically include 
                  pre and post intervention assessment, staff training, planning and design of intervention, 
                  supervision for staff implementing the intervention and evaluation.
                </p>
                <p>We provide specialised interventions on a range of issues relating to:</p>
                <ul>
                  <li>Autism and developmental disorders.</li>
                  <li>ADD, ADHD related disorders.</li>
                  <li>Anxiety disorder, attention, and concentration.</li>
                  <li>Cognitive behaviour therapy for anxiety, depression, PTSD, bereavement, emotional 
                    and sexually abused, alcohol and drug related issues.</li>
                  <li>Learning challenges, dyslexia, dyspraxia, dyscalculia etc.</li>
                  <li>Memory and engagement with the school curriculum.</li>
                  <li>School refusal and home sickness at boarding school.</li>
                  <li>Social skills training and anger management.</li>
                  <li>Toileting issues, bedwetting etc.</li>
                </ul>
                <div class="campaign-bottom border-top clearfix mt-20">
                  <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    {{-- <section class="clients bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
  </div>
  <!-- end main-content -->
@endsection