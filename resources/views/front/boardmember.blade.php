@extends('front.main')

@section('content')

<div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>सञ्चालक समिति </h1>
                  {{-- <h4>(BOARD OF DIRECTORS)</h4>           --}}
              </div>
          </div>
      </div>
  </div>
</div>
<br><br><br>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="card col col-lg-2" style="width:300px">
        <img class="card-img-top" src="{{asset('front/images/profile/img-1.jpg')}}" alt="Card image" style="width:100%">
        <div class="card-body">
          <br>
          <h4 class="display-4 text-center card-title">अध्यक्ष: डिल्लीराम चम्लागाई</h4>
        </div>
      </div>
      
    </div>
    <div class="col-lg-4">  </div>
  </div> 
  
  <div class="row">
    <div class="col-lg-4">
        <div class="card col" style="width:300px">
          <img class="card-img-top" src="{{asset('front/images/profile/img-2.jpg')}}" alt="Card image" style="width:100%">
          <div class="card-body">
            <br>
            <h4 class="display-4 text-center card-title">उपाध्यक्ष: टेक बहादुर येङदेन</h4>
          </div>
        </div>
    </div>    
  
    <div class="col-lg-4">
        <div class="card col" style="width:300px">
          <img class="card-img-top" src="{{asset('front/images/profile/img-3.jpg')}}" alt="Card image" style="width:100%">
          <div class="card-body">
            <br>
            <h4 class="display-4 text-center card-title">सचिव: नर बहादुर खड्का (कुमार)</h4>
          </div>
        </div>
    </div>
  
    <div class="col-lg-4">
      <div class="card col" style="width:300px">
        <img class="card-img-top" src="{{asset('front/images/profile/img-4.jpg')}}" alt="Card image" style="width:100%">
        <div class="card-body">
          <br>
          <h4 class="display-4 text-center card-title">सदस्य: पुष्पराज घिमिरे</h4>
        </div>
      </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col-lg-4">
    <div class="card col col-lg-2" style="width:300px">
      <img class="card-img-top" src="{{asset('front/images/profile/img-5.jpg')}}" alt="Card image" style="width:100%">
      <div class="card-body">
        <br>
        <h4 class="display-4 text-center card-title">सदस्य: मदन नेपाल</h4>
      </div>
    </div>
    </div>
    
    <div class="col-lg-4">
      <div class="card col col-lg-2" style="width:300px">
        <img class="card-img-top" src="{{asset('front/images/profile/img-6.jpg')}}" alt="Card image" style="width:100%">
        <div class="card-body">
          <br>
          <h4 class="display-4 text-center card-title">सदस्य: लक्ष्मी अधिकारी</h4>
        </div>
      </div> 
    </div>
    
    <div class="col-lg-4"> 
      <div class="col-lg-4">
        <div class="card col col-lg-2" style="width:300px">
          <img class="card-img-top" src="{{asset('front/images/profile/img-7.jpg')}}" alt="Card image" style="width:100%">
          <div class="card-body">
            <br>
            <h4 class="display-4 text-center card-title">सदस्य:सुस्मा कार्की</h4>
          </div>
        </div>     
      </div>
    </div>
    </div>   
</div>




@endsection