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
                <h4 class="text-theme-colored font-weight-700 mb-0">Workforce Development</h4>
                {{-- <h4 class="font-weight-700 mt-0"><a href="#">Personal Development</a></h4> --}}
                <p>We recognise that schools are under constant pressure to improve and to adapt to new 
                    demands. Our psychologists have a wide range of skills at their disposal to help 
                    schools manage change processes and particularly manage the psychological defences 
                    that resist change.
                </p>
                <p>NAAPS offers a range of short-term interventions and staff development programmes in 
                    the following areas:</p>
                <p>
                  Consultation: for staff and leaders are confidential one-to-one opportunities for teachers 
                  or other staff to discuss aspects of their work that are challenging to them. We provide a 
                  space for school leaders to reflect on the way they are taking up their leadership roles 
                  and to enhance their understanding of the psychological processes that can influence the 
                  decisions and actions that they take and do not take.
                </p>
                <p>
                  Workshops: for newly qualified teachers who wish to develop their understanding of the teacher 
                  role and how they may take up that role more effectively.
                </p>
                <p>Team development: aims to help colleagues work more effectively.</p>
                <p>
                  Training: we offer training for groups, educational establishment, and government sectors. Our 
                  training programmes are designed to address the specific needs of institutions or group. We 
                  work to identify training needs, clarify the outcomes, and evaluate its impacts.
                </p>
                <p>
                  Practical strategies for the classroom: NAAPS undertake a series of ongoing courses designed 
                  specifically for teachers and learning support assistants. With the focus on practical 
                  strategies, our aim is to provide teachers and learning support assistants with knowledge, 
                  skills, and ideas for use within the classroom.
                </p>
                <p>
                  Policy review and development within a whole system perspective looks at policy and practice in 
                  relation to overall institutional aims or goals. We work with organisations to help develop and 
                  implement policies as effective tools to help achieve the overall aims for the organisations.
                </p>
                <p>
                  Action research projects are evidence-based interventions to find solutions tailored to each 
                  institution to improve outcomes in relation to specific issues such as underachieving groups, 
                  emotional well-being, bullying and exclusion. 
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