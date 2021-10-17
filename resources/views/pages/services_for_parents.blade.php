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
                <h4 class="text-theme-colored font-weight-700 mb-0">Services For Parents</h4>
                {{-- <h4 class="font-weight-700 mt-0"><a href="#">Personal Development</a></h4> --}}
                <p>
                  Most parents stumble through the act of parenting or take from their parenting experience 
                  to support and raise their children; bringing up children in the 21st century can be a 
                  challenge. When parents and carers understand their role, they raise successful children 
                  and the society benefits from this single kind act. NAAPS offers a range of services with 
                  parents and carers to develop bespoke interventions to address specific issues around 
                  home-school relationships and parental engagement.
                </p>
                <p>Parent workshops: offer opportunities for parents to share experiences and learn from 
                  each other, to develop understanding of children’s needs and how parents can best support 
                  children’s learning and development.  Workshops can also be focused on specific themes, 
                  e.g., play, behaviour, toileting, teenagers etc.
                </p>
                <p>
                  Value of attachment: NAAPS specialises in connecting parents to their roots emphasising the 
                  importance of attachment and reinforcing the bond between parents and children. We provide 
                  opportunity for parents to understanding the process of child development in the fast-developing 
                  age and the spiral nature in this process.
                </p>
                <p>
                  Parent drop-in services are opportunities for parents to discuss concerns about their children’s 
                  learning and development informally with a psychologist. Their knowledge of stages of 
                  developmental milestones, child development, issues of adolescence, family impact, and transition 
                  to adulthood are important for therapy and assessment. Some of the typical referral issues are; 
                  the willful child, toileting issues, attachment issues, early admission to nursery, separation 
                  from parents, school refusal, learning problems, homesickness at summer boarding school, behavioural 
                  problems, transition to high school and higher education and college decision making.
                </p>
                <div class="campaign-bottom border-top clearfix mt-20">
                  <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection