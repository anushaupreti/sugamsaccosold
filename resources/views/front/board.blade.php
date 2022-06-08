@extends('front.main')

@section('content')

{{-- <div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>सञ्चालक समिति </h1>
                  <h4>(BOARD OF DIRECTORS)</h4>          
              </div>
          </div>
      </div>
  </div>
</div> --}}


{{-- tabs --}}

<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="panel with-nav-tabs">
              <div class="panel-heading">
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1primary" data-toggle="tab"><h4>सञ्चालक समिति</h4></a></li>
                          <li><a href="#tab2primary" data-toggle="tab"><h4>लेखा तथा सुपरिवेक्षण समिति</h4></a></li>
                          <li><a href="#tab3primary" data-toggle="tab"><h4>कर्जा उपसमिति</h4></a></li>
                          <li><a href="#tab6primary" data-toggle="tab"><h4> कर्मचारी</h4></a></li>
                          
                          {{-- <li class="dropdown">
                              <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                                  <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                              </ul>
                          </li> --}}
                      </ul>
              </div>
              <div class="panel-body">
                  <div class="tab-content">
                      <div class="tab-pane fade in active" id="tab1primary">
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
                        
                        <br><br>
                         {{-- 2nd row --}}
                        
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
                      <div class="tab-pane fade" id="tab2primary">
                        <div class="row">
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
                        </div> 
                        

                      </div>
                      <div class="tab-pane fade" id="tab3primary">
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

                      <div class="tab-pane fade" id="tab6primary">
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
                     </div>
                     <br><br><br>
                     <br><br><br>

                  </div>
              </div>
          </div>
      </div>
   </div>
</div>


{{-- end of tabs --}}



{{-- <div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
    <h4 class="display-4 text-center"> LOAN SUB COMMITTEE</h4>
  </div>
</div> --}}

@endsection