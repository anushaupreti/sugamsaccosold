@extends('front.main')
@section('content')

<!-- popup -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#popup").modal('show');
        $('popup').hide();

    });
</script>
<div class="conatiner" id="popUpMain">
    <div style="z-index: 999999; margin-top:10px;" id="popup" class="">
        <div class="popup-heading">
            Notice
            <button><img src="{{('front/images/popup-close-btn.jpg')}}" alt=""></button>
        </div>
        <div class="container-fluid">
            <img src="{{asset('front/images/covid.jpg')}}" alt="">
        </div>
    </div>

</div>


<!-- Scrollable modal -->
<!-- <div id="myModal" class="modal-dialog modal-dialog-scrollable modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


<!-- end of popup content -->


<!-- Start Banner Carousel -->
<div class="banner-outer overflow-hidden">
    <div class="banner-slider">
        <div class="slide1">
            <div class="container">
                <div class="content">
                    <h1 class="animated fadeInUp">सुगम बचत तथा ऋण सहकारी संस्था लि</h1>
                    <p class="animated fadeInUp"></p>
                    <a href="{{route('about')}}" class="btn animated fadeInUp justify-content-center">Know More</span></a>
                </div>
            </div>
        </div>

        <div class="slide2">
            <div class="container">
                <div class="content animated fadeInRight">
                    <div class="fl-right">
                        <h1 class="animated fadeInUp">बचत तथा कर्जाको उचित परिचालन</h1>
                        <a href="{{route('about')}}" class="btn animated fadeInRight">Know More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide3">
            <div class="container">
                <div class="content animated fadeInLeft">
                    <h1 class="animated fadeInUp">पेशा व्यवसायमा उल्लेख्य बृद्धि</h1>
                    <a href="{{route('about')}}" class="btn animated fadeInLeft">Know More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Carousel -->


<!-- Start About Section -->
<section class="about inner padding-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 left-block">
                <h2>हाम्रो बारेमा ( परिचय )</h2>
                <p>सुगम बचत तथा ऋण सहकारी संस्था लि. सहकारी मूल्य, मान्यता, सिदान्त र भावनालाई आत्मसाथ गर्दै सहकारीको माध्यमदारा सदस्यहरुको आर्थिक सामाजिक र सस्कृतिक विकासका लागि स्थापित समुदायमा आधारित सहकारी संस्था रहेको छ ।<br><br>
                    वि.स. २०६६ साल असोज १९ गते सहकारी प्रशिक्षण तथा डिभिजन कार्यालय सुनसरीमा दर्ता भई संचालनमा आएको यस संस्थाले सदस्यहरुबाट छरिएर रहेको बचत संकलन गर्दै उनीहरुको जीवन स्तर अभिबृदि गर्न व्यावसायिकताको विकाश गर्दै उघमशिल क्षेत्रहरुमा ऋण प्रदान गर्नुका साथै अन्य गैर वित्तिय सेवाहरुमार्फत पनि सदस्यहरुको सामाजिक र सास्कृतिक उन्नतीमा टेवा पुर्याउदै आईरहेको छ ।<br><br> संस्थालाई पारदर्शी जवाफदेहि र कुशल ढंगबाट व्यावस्थापन गर्दै विभिन्न सामाजिक र आर्थिक कृयाकलापहरु संचालन गर्दै आईरहेको छ । साविक इटहरी नगरपालिका भित्र कार्यक्षेत्र बनाई मासिक रु. बचत संकलन गरि शुरु गरिएको यस संस्थाले हाल ६५० भन्दा बढी सदस्यहरुलाई प्रत्यक्ष लाभ प्रदान गर्दै आईरहेको छ ।</p>
            </div>
            <div class="col-md-5 about-right"> <img src="{{ asset('front/images/pic-4.jpg') }}" class="img-responsive" alt=""> </div>
        </div>
    </div>
</section>
<!-- End about Section -->

<!-- Start Our service Section -->
<section class="our-impotance padding-lg">
    <h2 class="text-center"> हाम्रो सेवाहरु </h2>
    <br>
    <div class="container">
        <ul class="row">
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <a href="{{route('loan')}}"><img src="{{ asset('front/images/services/loan.svg') }}" alt="loan" width="150" height="150"></a>
                    <h3>loans</h3>
                    <p></p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <a href="{{route('saving')}}"><img src="{{ asset('front/images/services/deposit.svg') }}" alt="deposit" width="150" height="150"></a>
                    <h3>Deposit</h3>
                    <p> </p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <a href="#"><img src="{{ asset('front/images/services/doc.svg') }}" alt="document" width="150" height="150"></a>
                    <h3>Required Documents</h3>
                    <p> </p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <a href="{{route('saving')}}"><img src="{{ asset('front/images/services/saving.svg') }}" alt="saving" width="150" height="150"></a>
                    <h3>Saving</h3>
                    <p> </p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <a href="{{route('saving')}}"><img src="{{ asset('front/images/services/other-service.svg') }}" alt="other services" width="150" height="150"></a>
                    <h3>Other Services</h3>
                    <p> </p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <a href="#"><img src="{{ asset('front/images/services/membership.svg') }}" alt="membership" width="150" height="150"></a>
                    <h3>Membership</h3>
                    <p></p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End of Importance Section -->

<section class="padding-lg">
    <h2 class="text-center">सुगम साकोस सुनसरीको १२औं साधारण सभा सम्पन्न</h2>
    <br>
    <div class="container-md text-center">
        <ul class="row">
            <li class="col-sm-12 equal-height">
                <div class=" inner border"> <img src="{{ asset('front/images/12th.png') }}" alt="document">
                    <p> </p>
                </div>
            </li>
        </ul>
    </div>
</section>

{{-- Events section  --}}
<section class=" padding-lg">
    <h2 class="text-center"> वार्षिक कार्यक्रमका केहि झलकहरु </h2>
    <br>
    <div class="container-md events text-center">

        <ul class="row">
            <li class="col-sm-4 equal-height">
                <div class="inner border"> <img src="{{ asset('front/images/pic-1.jpg') }}" alt="loan">
                </div>
            </li>

            <li class="col-sm-4 equal-height">
                <div class="inner border"> <img src="{{ asset('front/images/pic-2.jpg') }}" alt="deposit">
                </div>
            </li>
            <li class="col-sm-4 equal-height">
                <div class=" inner border"> <img src="{{ asset('front/images/pic-3.jpg') }}" alt="document">
                </div>
            </li>


            <li class="col-sm-4 equal-height">
                <div class=" inner border"> <img src="{{ asset('front/images/pic-1.jpg') }}" alt="saving">
                </div>
            </li>

            <li class="col-sm-4 equal-height">
                <div class=" inner border"> <img src="{{ asset('front/images/pic-2.jpg') }}" alt="other services">
                </div>
            </li>
            <li class="col-sm-4 equal-height">
                <div class=" inner border"> <img src="{{ asset('front/images/pic-4.jpg') }}" alt="membership">
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- {{-- end of events section  --}} -->

@endsection