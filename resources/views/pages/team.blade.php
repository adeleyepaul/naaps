@extends('layouts.app');

@section('content');

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/naaps/contact.jpg">
      <div class="container pt-70 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h4 class="title text-white">Our Team</h4>
              <ul class="breadcrumb white">
                <li><a class="text-white" href="/">Home</a></li>
                <li class="active">Staff</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Section: About -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            {{-- <img class="pull-left mr-15 thumbnail" src="images/naaps/unnamed1.jpg"/> --}}
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p> --}}
            {{-- <div class="clearfix"></div>
            <h5 style="text-align: center">Dr. Funmilola Omotayo</h5>
            <hr> --}}
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

    <section>
        <div class="container">
          <div class="row">
            <div>
                <h3 style="text-align:center; font-weight:bold;">PROFESSIONAL MEMBERSHIP AND REGISTRATIONS <hr></h3>
                <li>Health Care Professions Council (HCPC), UK</li>
                <li>British Psychology Society (BPS)</li>
            </div>
          </div>
        </div>
    </section>

    @include('inc.partner')

@endsection
