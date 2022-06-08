@extends('front.main')

@section('content')

<div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>लेखा तथा सुपरिवेक्षण समिति </h1>
                  {{-- <h4>AUDIT COMMITTEE </h4>           --}}
              </div>
          </div>
      </div>
  </div>
</div>
<br><br><br>

<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
        <div class="col-lg-4">
          <div class="card col col-lg-2" style="width:300px">
            <img class="card-img-top" src="{{asset('front/images/profile/img-8.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="display-4 text-center card-title">संयोजक: टंक प्रसाद अधिकारी</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card col col-lg-2" style="width:300px">
            <img class="card-img-top" src="{{asset('front/images/profile/img-9.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="display-4 text-center card-title">सदस्य: लक्ष्मी खड्का</h4>
            </div>
          </div>
          
        </div>
        <div class="col-lg-4"> 
          <div class="card col col-lg-2" style="width:300px">
            <img class="card-img-top" src="{{asset('front/images/profile/img-10.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="display-4 text-center card-title">सदस्य: बिमला योन्जन तामाङ</h4>
            </div>
          </div>
        </div>

    <br><br><br>
    <br><br><br>
      </div>
   </div>
</div>


{{-- end of tabs --}}





@endsection