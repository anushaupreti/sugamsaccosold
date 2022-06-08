@extends('front.main')

@section('content')
<div class="inner-banner contact">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 col-lg-9">
              <div class="content">
                  <h1>Gallery</h1>
                  <h4>This is our gallery</h4>          
              </div>
          </div>
      </div>
  </div>
</div>

{{-- next gallery --}}
<div class="container">
	<div class="row">
<div class="gallery">
  <figure>
    <img src="{{asset('front/images/gallery/g9.jpg')}}" alt="" />
    <figcaption>Daytona Beach <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/gallery/g3.jpg')}}" alt="" />
    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/gallery/g6.jpg')}}" alt="" />
    <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/gallery/g4.jpg')}}" alt="" />
    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/gallery/g5.jpg')}}" alt="" />
    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/gallery/g7.jpg')}}" alt="" />
    <figcaption>Highlands <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/gallery/g8.jpg')}}" alt="" />
    <figcaption>Daytona Beach <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/pic-4.jpg')}}" alt="" />
    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/pic-3.jpg')}}" alt="" />
    <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/pic-2.jpg')}}" alt="" />
    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/pic-1.jpg')}}" alt="" />
    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
  </figure>
  <figure>
    <img src="{{asset('front/images/pic-1.jpg')}}" alt="" />
    <figcaption>Highlands <small>United States</small></figcaption>
  </figure>
</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>
<script>
    popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

</script>
	</div>
</div>
{{-- next gallery ends --}}

@endsection

    