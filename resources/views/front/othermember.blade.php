@extends('front.main')

@section('content')

<div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>कर्मचारी</h1>
              </div>
          </div>
      </div>
  </div>
</div>

{{-- tabs --}}
<br><br><br>

<div class="container">
  {{-- <div class="row"> --}}
      <div class="col-md-12">
        <div class="row">
        <div class="col-lg-4"> 
          <div class="card col col-lg-2" style="width:230px; height:200px;">
            <img class="card-img-top" src="{{asset('front/images/profile/baburam.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="display-4 text-center card-title">प्रबन्धक: बाबुराम खड्का</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-4"> 
          <div class="card col col-lg-2" style="width:200px; height:70px;">
            <img class="card-img-top" src="{{asset('front/images/profile/tara.jpg')}}" alt="Card image">
            <div class="card-body">
              <br>
              <h4 class="display-4 text-center card-title">सहायक: तारादेवी काफ्ले</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-4"> 
          <div class="card col col-lg-2" style="width:200px; height:80px;">
            <img class="card-img-top" src="{{asset('front/images/profile/Mandiraa.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="display-4 text-center card-title">बजार प्रतिनिधि: मन्दिरा विष्ट</h4>
            </div>
          </div>
        </div>
        </div>
        <br><br> <br><br> <br><br>
        
        {{-- next row --}}
        <div class="row">
          <div class="col-lg-4">
            <div class="card col col-lg-2" style="width:200px; height:150px;">
              <img class="card-img-top" src="{{asset('front/images/profile/bharati.jpg')}}" alt="Card image">
              <div class="card-body">
                <br>
                <h4 class="display-4 text-center card-title">बजार प्रतिनिधि:भारती दाहाल</h4>
              </div>
            </div>                           
          </div>
        </div>
        <br><br><br>
        <br><br><br>
  </div>
</div>


{{-- end of tabs --}}





@endsection