@extends('frontend_template')
@section('content')
<!-- slider_area_start -->
<div class="slider_area ">
  <div class="single_slider d-flex align-items-center justify-content-center" style="height: 16vh; background-color: #A44DED" >

  </div>
</div>
<!-- slider_area_end -->
<div class="container">
	<div class="row mt-5">
   <div class="col-lg-12 col-sm-12">
     <!-- <label>Map</label> -->
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.511505568435!2d96.18050341393233!3d16.850573022502033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19314bdddb9ed%3A0x2892bff584301c71!2sESC%20Myanmar!5e0!3m2!1sen!2smm!4v1586680940495!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:1px solid gray;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
   </div>
 </div>
 <div class="row mt-3">
   <div class="col-lg-8 col-sm-12">
    <div class="col-lg-8">
      <h2 class="contact-title">Get in Touch</h2>

      <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
        <div class="form-group">
          <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
        </div>

        <div class="form-group mt-3">
          <button type="submit" class="button button-contactForm boxed-btn">Send</button>
        </div>
      </form>
    </div>
  </div>
    <div class="col-lg-4 col-sm-12 mt-5">
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
          <h3>Buttonwood, California.</h3>
          <p>Rosemead, CA 91770</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
        <div class="media-body">
          <h3>+1 253 565 2365</h3>
          <p>Mon to Fri 9am to 6pm</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-email"></i></span>
        <div class="media-body">
          <h3>support@colorlib.com</h3>
          <p>Send us your query anytime!</p>
        </div>
      </div>
    </div>

  </div>

</div>
</div>
<style>


  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #974AE9;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    padding-bottom: 10px;
  }

  input[type=submit]:hover {
    background-color: #974AE9;
  }


</style>
@endsection