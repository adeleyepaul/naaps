@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/naaps/contact.jpg">
      <div class="container pt-70 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h4 class="title text-white">Contact</h4>
              <ul class="breadcrumb white">
                <li><a class="text-white" href="/">Home</a></li>
                <li class="active">Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-sm-10 pb-sm-30">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                    <p>4, Tayo Olukoya Close, Ojodu Estate, Ojodu-Berger, Ikeja, Lagos</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="tel:+234-8052189288"> <i class="pe-7s-call text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                    <p>+234-8052189288 <br>+234-8122621064</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                    <p>Psychologist.naaps@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>Success!</strong> Thanks for your message. We will be in touch.
                </div>
            @endif

          @if(!session()->has('message'))
          <div class="col-md-8">
            <h3 class="mt-0 mb-20">Interested in discussing?</h3>
            <!-- Contact Form -->
            <form class="" action="/contact" method="post">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Title <small>*</small></label>
                    <input id="form_subject" name="title" class="form-control required" type="text" placeholder="Enter Title">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              @csrf
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          @endif
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection