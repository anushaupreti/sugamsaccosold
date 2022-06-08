@extends('front.main')

@section('content')

<div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>कर्जा उपसमिति </h1>
                  {{-- <h4> LOAN SUB COMMITTEE</h4>           --}}
              </div>
          </div>
      </div>
  </div>
</div>

{{-- tabs --}}
<br><br><br>

<div class="container">
  <div class="row">
      <div class="col-md-12">               
          <div class="row">
            <div class="col-lg-4">
              <div class="card col col-lg-2" style="width:300px">
                <img class="card-img-top" src="{{asset('front/images/profile/img-4.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                  <br>
                  <h4 class="display-4 text-center card-title">संयोजक: पुष्पराज घिमिरे</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card col col-lg-2" style="width:300px">
                <img class="card-img-top" src="{{asset('front/images/profile/img-11.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                  <br>
                  <h4 class="display-4 text-center card-title">सदस्य: कुमार श्रेष्ठ</h4>
                </div>
              </div>
              
            </div>
            <div class="col-lg-4"> 
              <div class="card col col-lg-2" style="width:230px; height:200px;">
                <img class="card-img-top" src="{{asset('front/images/profile/img-12.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                  <br>
                  <h4 class="display-4 text-center card-title">सदस्य:ज्ञानेन्द्र पोखरेल</h4>
                </div>
              </div>
            </div>
          </div> 
      </div>
   </div>
</div>


{{-- end of tabs --}}





@endsection