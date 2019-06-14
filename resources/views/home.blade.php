@extends('layouts.layout')

@section('content')
  <header class="header">
    <div class="fullscreen-video">
      <video autoplay loop muted playsinline>
        <source src="img/bgVid.mp4">
      </video>

    </div>
    <div class="header-overlay"></div>
    <div class="header-text">
      <h1 class="text-center">ALPHA TO BETA SYSTEMS</h1>
      <span class="skills hvr-pop">Image it, we'll create <span class="fa fa-lightbulb-o hvr-pop"></span>t</span>
    </div>
  </header>

  <section id="services">
    <div class="container">
      <div class="spacer"></div>
      <div class="row">
        <div class="col col-md-12 text-center">
          <div class="heading"><span class="heading-copy">What we do</span></div>
        </div>
      </div>
      <div class="spacer"></div>

      <div class="row" style="background-color: #fff; padding: 15px 15px; border-radius: 5px;">
        <div class="col col-md-3 col-sm-3">
          <img src="/img/web_app.jpg" class="img-responsive img-circle hvr-forward"/>
        </div>
        <div class="col col-md-9 col-sm-9 service">
          <div class="spacer"></div>
          <h1 class="service-heading hvr-float-shadow">Web App Solutions</h1>
          <h5 class="service-sub-heading">Systems that work for you</h5>
          <p class="service_desc">
            Creating online solutions that can be accessed anywhere, anytime.<br>
            We build custom CRM (customer-relation management) tools to suite your business needs.<br>
          </p>
          <p>
            <a class="btn btn-default btn-light btn-lg" href="/services">See our work</a>
          </p>
        </div>
      </div>

      <div class="spacer"></div>

      <div class="row" style="background-color: #fff; padding: 15px 15px; border-radius: 5px;">
        <div class="col col-md-9 col-sm-9 service">
          <div class="spacer"></div>
          <h1 class="service-heading hvr-float-shadow">Digital Branding</h1>
          <h5 class="service-sub-heading">Imagine it, we'll create it</h5>
          <p class="service_desc">
            <b>Customers buy value and brands/messages that resonate with them</b><br>
            We look at brand building as how to develop an emotional connection with
            your audience and try make them as fascinated and passionate about your
            company as you are.<br>
			      To view our <b>portfolio</b> <a href="/services">click here</a>
          </p>
          <p>
            <a class="btn btn-default btn-light btn-lg" href="/services">See our work</a>
          </p>
        </div>
        <div class="col col-md-3 col-sm-3">
          <a href="/services"><img src="/img/branding.jpg" class="img-responsive img-circle hvr-backward"/></a>
        </div>
      </div>

      <div class="spacer"></div>

      <div class="row" style="background-color: #fff; padding: 15px 15px; border-radius: 5px;">
        <div class="col col-md-3 col-sm-3 barCodeContainer">
          <img src="img/barcode.php?text=Alpha-to-beta&codetype=Code128&size=70&print=false" class="img-responsive hvr-forward"/>
        </div>
        <div class="col col-md-9 col-sm-9 service">

          <h1 class="service-heading hvr-float-shadow">Barcode Generation</h1>
          <h5 class="service-sub-heading">Create you batches in any format.</h5>
          <p class="service_desc">
            Generate small to large batches with us for your product identification and we'll deliver them in any format needed.<br>
            Open an account and start scanning all your products in.<br>
            To sample: <a title="Create Barcodes" href="http://barcodes.alphatobeta.co.za" target="_blank">click here</a> to generate.
          </p>
        </div>
      </div>

    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="spacer"></div>
      <div class="row">
        <div class="col col-md-12 text-center">
          <div class="heading"><span class="heading-copy">About Us</span></div>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="row">
        <div class="col col-md-4 col-sm-4"><img src="img/about.jpg" class="img-responsive img-circle" /></div>
        <div class="col col-md-8 col-sm-8">
          <br>
          <p class="service_desc">Alpha to Beta Systems (Pty) Ltd is a software development company focused on creating logistics and manufacturing solutions.<br><br>
            The essence of the company's existence is to utilize technology to improve people's quality of life, especially those living in Africa.
            We are in the business of developing ICT solutions by digitally storing, retrieving and manipulating data to solve everyday problems that encounter.<br><br>
            Our solutions can be introduced to commercial, government institutions and other non-commercial entities to improve efficiency. Warehouses, bottle stores,
            soccer clubs, event companies and manufacturing companies are but some examples of potential beneficiaries that can have processes that are simpler, more convenient and
            ultimately more profitable.
          </p>
        </div>
      </div>
      <div class="spacer"></div>
    </div>
  </section>

  <!-- About Section -->
  <section class="success" id="team">
    <div class="container">
      <div class="spacer"></div>
      <div class="row">
        <div class="col col-md-12 text-center">
          <div class="heading"><span class="heading-copy-dark">TEAM</span></div>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="row">
        <div class="col-md-4 hvr-float">
          <!--<div style="background-color: rgb(224, 85, 113); color:#fff; padding: 15px 15px; border-radius: 5px;">-->
          <div style="background-color: rgb(37, 173, 220); color:#fff; padding: 15px 15px;">
            <p>
            <h3 class="text-center text-white">Khulekani Mncube</h3>
            Controls and oversee all business operations, people and ventures.<br>
            His goal is to ensure the company is constantly moving towards fulfilling its short-term and long-term objectives and does not diverge from its strategic guidelines.
            </p>
          </div>
        </div>
        <div class="col-md-4 hvr-float">
          <div style="background-color: rgb(37, 173, 220); color:#fff; padding: 15px 15px;">
            <!--<div style="background-color: rgb(244, 244, 244); padding: 15px 15px; border-radius: 5px;">-->
            <p>
            <h3 class="text-center text-white">Morris Kgama</h3>
            Is a data-driven marketer who owns the majority of the marketing & Sales funnels of our company and he advises the team on which direction to take with regard to logistics related solutions.<br>
            His goals are to ensure that the company's marketing and sales strategies are implemented and to speak and present both internally and externally to promote the story of our product.
            </p>
          </div>
        </div>
        <div class="col col-md-4 hvr-float">
          <!--<div style="background-color: rgb(117, 206, 187); padding: 15px 15px; border-radius: 5px;">-->
          <div style="background-color: rgb(37, 173, 220); color:#fff; padding: 15px 15px;">
            <p>
            <h3 class="text-center text-white">Sipho Maswanganye</h3>
            Implements computer system requirements by defining and analyzing system problems; designing and testing standards and solutions; and leading project teams with regard to implementing information systems.<br>
            His goals are to accomplish the information systems and organization mission.
            </p>
          </div>
        </div>

      </div>
      <div class="spacer"></div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="contactlayer">
      <div class="container">
        <div class="spacer"></div>
        <div class="row">
          <div class="col col-md-12 text-center">
            <div class="heading"><span class="heading-copy-dark">Contact Us</span></div>
          </div>
        </div>
        <div class="spacer"></div>
        <div class="row">
          <div class="col col-md-3 col-sm-2"></div>
          <div class="col col-md-6 col-sm-8">
            <br>
            {{--<form method="post" action="actions.php" id="contactForm" class="">--}}
            <form method="post" action="/action/contactform" id="contactForm" class="">
              @csrf
              <div class="form-group">
                <input class="form-control" type="text" required id="name" name="name" placeholder="eg: Thato Khumalo" />
                <input type="hidden" name="action" value="contact_form" />
              </div>
              <div class="form-group">
                <input class="form-control" type="email" required id="email" name="email" placeholder="name@mailbox.co.za" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="contact_number" name="contact_number" placeholder="+27******" />
              </div>
              <div class="form-group">
                <textarea class="form-control" id="message" name="message" required placeholder="Message body..."></textarea>
              </div>
              <div id="mail_waiting_response" class="loader" style="display: none;"><img src="img/gears.gif" class="img-responsive"/></div>
              <div class="form-group text-center">
                <button class="btn btn-default btn-lg" id="contactSubmit">SEND <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </form>
            <div id="mail_response_ok" class="alert alert-success" style="display: none;"><center>Message has been sent</center></div>
            <div id="mail_response_error" class="alert alert-danger" style="display: none;"></div>
          </div>
          <div class="col col-md-3 col-sm-2"></div>
        </div>
        <div class="spacer"></div>
      </div>
    </div>
    <div class="quotationBox">
      <a href="index1.html#contact"><span class="glyphicon glyphicon-comment" title="Get a quotation"></span></a>
    </div>
  </section>

@endsection

@section('javaScript')
  <script type="text/javascript">
    $(document).ready(function(){

      $('#contactSubmit').click(function(e){
        var btnEle = $('#contactSubmit');
        var url = $('#contactForm').attr('action');
        var action = 'contact_form';
        var name = $("input#name").val();
        var email = $("input#email").val();
        var contact = $("input#contact_number").val();
        var message = $("textarea#message").val();
        if(name=='')
        {
          alert('Please fill in your name');
        }
        else if(email=='')
        {
          alert('Please fill in your email');
        }
        else if(contact=='')
        {
          alert('Please fill in your contact number');
        }
        else if(message=='')
        {
          alert('Please fill a message');
        }
        else
        {
          $.ajax({
            url:url,
            type:'POST',
            headers:{
//              '_token':$('meta[name="_token"]').attr('content')
            },
            data: {
              action: action,
              name: name,
              contact: contact,
              email: email,
              message: message,
              _token: $('meta[name="_token"]').attr('content')
            },
            beforeSend: function() {
              $('#mail_waiting_response').show();
              btnEle.html('Sending...');
              $('#mail_response_ok').fadeOut();
              $('#mail_response_error').fadeOut();
            },
            success: function(data){
              if(data.toLowerCase()==='ok' || data==='true')
              {
                $('#mail_response_ok').fadeIn();
                //clear all fields
                $('#contactForm').trigger("reset");
              }
              else
              {
                $('#mail_response_error').html('<center>'+data+'</center>');
                $('#mail_response_error').fadeIn();
              }
              $('#mail_waiting_response').hide();
              btnEle.html('SEND <span class="glyphicon glyphicon-send"></span>');

            }
          });
        }
        e.preventDefault();
      });

    });
  </script>
@endsection