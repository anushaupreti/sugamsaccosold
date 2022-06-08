<header>
    <div class="container header-middle">
        <div class="row"> <span class="col-xs-6 col-sm-6"><a href="{{route('index') }}"><img src="{{ asset('front/images/sugam/logo-1.png') }}" class="img-responsive" alt=""></a></span>
            <div class="col-xs-6 col-sm-4 align-items-end">
                <div class="contact clearfix">
                    <ul class="hidden-xs">
                        <li> <span>Contact Us</span> <a href="mailto:sugamsaccos76@gmail.com">
                                <i class="fa fa-envelope animate__animated animate__shakeX" aria-hidden="true"></i> sugamsaccos76@gmail.com</a>
                            <a href="mailto:info@sugamsaccos.org.np">
                                <br>
                                <i class="fa fa-envelope animate__animated animate__shakeX" aria-hidden="true"></i> info@sugamsaccos.org.np
                            </a>
                        </li>
                        <br>
                        <li><a href="tel:+9772585498"><i class="fa fa-phone-square animate__animated animate__shakeX" aria-hidden="true"></i> 025-585498</a></li>
                    </ul>
                </div>
                <div class="time animate__animated animate__rubberBand">Office time: 10:00am to 5:00pm</div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li> <a href="{{route('index') }}">Home</a></li>
                    <li> <a href="{{route('about') }}">About Us</a></li>
                    <li class="dropdown"> <a href="#">Services<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('saving')}}">बचत SAVINGS</a></li>
                            <li><a href="{{route('loan')}}">कर्जा योजना LOANS</a></li>
                            <li><a href="{{route('membership')}}">सदस्यता MEMBERSHIP</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"> <a href="#">Board <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('boardmember')}}">सञ्चालक समिति </a></li>
                            <li><a href="{{route('accountmember')}}">लेखा तथा सुपरिवेक्षण समिति </a></li>
                            <li><a href="{{route('loanmember')}}">कर्जा उपसमिति</a></li>
                            <li><a href="{{route('othermember')}}">कर्मचारी</a></li>
                        </ul>
                    </li>

                    <li> <a href="{{route('gallery')}}">Gallery</a></li>
                    <li> <a href="{{route('events')}}">Events</a></li>
                    <li> <a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div id="popUpMain" style="display: none;">
        <div id="popup">
            <h3 id="" class="popup-heading">अत्यन्त जरुरी सुचना<span class="badge badge-danger float-sm-end"><i class="fa fa-window-close float-sm-end" aria-hidden="true"></i></span></h3>
            <br>
            <img src="{{asset('front/images/notice.jpg')}}" alt="">
        </div>
    </div>
    <!-- <div id="popUpMain1" style="display: none;">
    <div id="popup1"> 
        <h3 id="" class="popup-heading">सतर्क रहौ<span class="badge badge-danger float-sm-end"><i class="fa fa-window-close float-sm-end" aria-hidden="true"></i></span></h3>
        <br>
        <img src="{{asset('front/images/covid.jpg')}}" alt="">
    </div>
</div>   -->


</header>