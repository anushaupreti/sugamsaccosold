@extends('front.main')

@section('content')
<div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>EVENTS</h1>
                  <h4>Here are glimps of recent events</h4>          
              </div>
          </div>
      </div>
  </div>
</div>
{{-- <div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
    <h4 class="display-4 text-center">Events</h4>
    
  </div>
</div> --}}
<br><br><br>
<div class="container mt-4 p-4">
  <div class="row" style="border: 1px solid rgb(221, 178, 178)">
    @foreach ($events as $e )
    <div style="2px solid brown">
    <div class="col-lg-3"><div class="card" style="width: 20rem;padding-top:5px;">
      <h6>{{$e->category->name}}</h6>
       <p style="font-size:10px;">Views Count {{$e->view_count}}</p>
      <img class="card-img-top" src="{{$e->featured}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$e->title}}</h5>
        <p class="card-text">{{$e->content}}</p>
      </div>
      <div class="card-body">   
        <a href="{{route('singleevent',['id'=>$e->id])}}" class="card-link ">Readmore..</a>
      </div>
    </div>
  </div>
  </div>
  @endforeach
  </div>
</div>

{{-- <div class="container-fluid">
  <div class="row">
    <div class="col" style="display: grid;
    grid-template-columns: auto auto auto;grid-gap:5px;margin:20px;padding:10px;">
      
      <div class="card" style="border: 2px solid;padding:10px;">
        <div class="top-heading" style="display: flex;justify-content:space-between;padding:5px;">
          @foreach ($events as $e)
          <h3>{{$e->category->name}}</h3>
          <p>views-count{{$e->view_count}}</p>
        </div>
          <div class="card-body">
            <img src="{{$e->featured}}" alt="">
            <h5>{{$e->title}}</h5>
            <p>{{$e->content}}</p>
          </div>
          <div class="card-body">   
            <a href="{{route('singleevent',['id'=>$e->id])}}" class="card-link ">Readmore..</a>
          </div>
          @endforeach
      </div>

      <div class="card" style="border: 2px solid;padding:10px;">
        <div class="top-heading" style="display: flex;justify-content:space-between;padding:5px;">
          <h3>events</h3>
          <p>views-count:0</p>
        </div>
          <div class="card-body">
            <img src="" alt="">
            <h5>inner title</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fugiat quos eos blanditiis temporibus itaque corrupti omnis nam soluta rem!</p>
          </div>
      </div>


      <div class="card" style="border: 2px solid;padding:10px;">
        <div class="top-heading" style="display: flex;justify-content:space-between;padding:5px;">
          <h3>events</h3>
          <p>views-count:0</p>
        </div>
          <div class="card-body">
            <img src="" alt="">
            <h5>inner title</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fugiat quos eos blanditiis temporibus itaque corrupti omnis nam soluta rem!</p>
          </div>
      </div>
 

    </div>
  </div>
</div> --}}



@endsection

    



