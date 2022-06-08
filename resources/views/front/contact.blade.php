@extends('front.main')


@section('content')

   <!-- Start Banner -->
   <div class="inner-banner contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <h1>Contact Us</h1>
                            <h4>Drop Your Message Here</h4>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner --> 

        <!-- Start Contact Us -->
<section class="form-wrapper padding-lg">

<div class="container">
    <div class="row justify-content-center">
       <div class="col-12 col-md-8 col-lg-12 pb-5">
    
  <form action="" method="">
    <div class="card border-primary rounded-0">
        <div class="card-header p-0">
            <div class="bg-info text-white text-center py-2">
                <h3><i class="fa fa-envelope"></i> Contact US</h3>
            </div>
        </div>
         <div class="card-body p-8" style="display: flex; justify-content:center; align-items: center; flex-direction:column;">
            <!--Body-->
            <div class="form-group mt-3" style="margin-top:20px; width: 80%">
                <div class="input-group mb-1" style="display:flex;align-items:center">
                    <div class="input-group-prepend" style="margin-right: 10px">
                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                    </div>
                    <input type="text" class="form-control" id="name" name="nombre" placeholder="Input Your name here..." required>
                </div>
            </div>

            <div class="form-group" style="width: 80%">
                <div class="input-group mb-2" style="display:flex;align-items:center ">
                    <div class="input-group-prepend"style="margin-right: 10px">
                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="input@gmail.com" required>
                </div>
            </div>

            <div class="form-group"style="width: 80%">
                <div class="input-group mb-2"style="display:flex;align-items:center" >
                    <div class="input-group-prepend"style="margin-right: 10px">
                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                    </div>
                    <textarea class="form-control" placeholder="Your Message" required></textarea>
                </div>
            </div>

            <div class="form-group" style="margin-left: -310px; width: 70%">
                <button type="submit" class="btn btn-info btn-block rounded-0 py-2">submit</button>
                {{-- <input type="submit" value="submit" > --}}
            </div>
        </div>
    
    </div>
</form>
<!--Form with header-->
    
</div>
</div>
</div>
</section>
        <!-- end Contact Us --> 

        <!-- Start Google Map -->
        <section class="google-map">
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114086.59115109967!2d87.19515884768114!3d26.67389422719697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6c66e80fbfa9%3A0x38094d1a7c974283!2sItahari!5e0!3m2!1sen!2snp!4v1548309572138" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div class="container">
                <div class="contact-detail">
                    <div class="address">
                        <div class="inner">
                            <h3>Sugamsaccos</h3>
                            <p>Itahari-8, Sunsari, Nepal</p>
                        </div>
                        <div class="inner">
                            <h3><a href="tel:+97725-545498">025-585498</a></h3>
                        </div>
                        <div class="inner"> <a href="mailto:sugamsaccos76@gmail.com">sugamsaccos76@gmail.com</a> </div>
                    </div>
                    <div class="contact-bottom">
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/sugamsaccos66"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Google Map --> 

@endsection