@extends('front.main')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
    <h4 class="display-4 text-center">Events Details</h4>
    
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <img src="{{$singleevent->featured}}" height="400px;">
     
    </div>
    <div class="col-lg-12">
      <h4>{{$singleevent->title}}</h4>
      <p>{{$singleevent->content}}</p>
    </div>
  
  </div>
</div>
@endsection

    