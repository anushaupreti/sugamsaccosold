@extends('front.main')
@section('content')
<div class="inner-banner contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-lg-9">
        <div class="content">
          <h1>बचत SAVINGS</h1>
          {{-- <h4>This is our gallery</h4>           --}}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row container" style="min-height:500px;">
  <div class="col-md-12">
    {{-- <hr/> --}}
    <div class="col-xs-3">
      <!-- required for floating -->
      <!-- Nav tabs -->
      <ul class="nav nav-tabs left-nav" style="height: 80vh; width:200px;font-weight:bold;">
        <li class="active"><a href="#tab1" data-toggle="tab" style="font-size: 24px;font-weight: bold;color: #17a43b;">बचत SAVINGS</a></li>
        <li><a href="#tab2" data-toggle="tab">१. सदस्य अनिवार्य बचत</a></li>
        <li><a href="#tab3" data-toggle="tab">२. नियमित बचत </a></li>
        <li><a href="#tab4" data-toggle="tab">३. मासिक(ऐच्छिक) बचत </a></li>
        <li><a href="#tab5" data-toggle="tab">४. शुरक्षणकोष बचत </a></li>
        <li><a href="#tab6" data-toggle="tab">५. दैनिक बचत (६ महिने र १ वर्षे) </a></li>
        <li><a href="#tab7" data-toggle="tab">६. बाल बचत</a></li>
        <li><a href="#tab8" data-toggle="tab">७. आवधिक बचत </a></li>
        <li><a href="#tab9" data-toggle="tab">८. सुगम विशेष बचत</a></li>
        <li><a href="#tab10" data-toggle="tab">९. सुगम पेन्सन बचत</a></li>
        <li><a href="#tab11" data-toggle="tab">१०. सुगम सम्बृद्धि बचत</a></li>

      </ul>
    </div>
    <div class="col-xs-9" style="padding-top: 70px; font-size:15px;color:#17a43b;">
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <h2>बचत SAVINGS </h2><br>
          समुदायमा रहेका विभिन्न वर्गका आफ्ना शेयर सदस्यहरु, व्यावसायी, कर्मचारी, शिक्षक तथा अन्य पेशामा संलग्न रहेका शेयर सदस्यहरुसंग छरिएर
          रहेको पूँजिलाई संकलन गरि सदस्यहरुकै आवश्यकता र चाहना अनुरुपका बचत सेवाहरु संचालन गरिएको छ ।
        </div>

        <div class="tab-pane" id="tab2">
          <h2> सदस्य अनिवार्य बचत</h2><br>
          • सबै शेयर सदस्यहरुले मासिक रु. २०० देखि ५०० सम्म यो बचत अनिवार्य जम्मा गर्नु पर्ने छ ।<br>
          • यो बचत ५ वर्ष सम्म झिक्न पाइने छैन । ५ वर्ष पुरा भएपछि रु. १०,०००। खातामा राखी झिक्न पाइने छ ।<br>
          • यो बचतमा वार्षिक ९ प्रतिशतका दरले अर्धवार्षि रुपमा व्याज पाईने छ <br>
        </div>

        <div class="tab-pane" id="tab3">
          <h2>नियमित बचत </h2><br>
          • यो बचतमा रु. २०,०००। जम्मा गरी खाता खोल्न पाईने छ ।<br>
          • यस खातामा वार्षिक ९ प्रतिशतका दरले अर्धवार्षिक रुपमा व्याज उपलब्ध गराईने छ ।<br>
          • यो बचतमा न्यूनतम मौज्दात रु. २०,०००। राख्नु पर्ने छ ।<br>
        </div>

        <div class="tab-pane" id="tab4">
          <h2>मासिक(ऐच्छिक) बचत </h2> <br>
          • यो बचत खातामा सदस्यले जतीसुकै रकम जम्मा गर्न र झिक्न सक्नेछ ।<br>
          • मासिक (ऐच्छिक) बचतमा वार्षिक ४ प्रतिशतका दरले व्याज पाईने छ ।<br>
          • खातामा न्यूनतम मौज्दात रु. ५०० राख्नु पर्नेछ ।<br>
        </div>
        <div class="tab-pane" id="tab5">
          <h2>शुरक्षणकोष बचत</h2><br>
          • संस्थाबाट ऋण कारोवार गर्ने शेयर सदस्यले लिएको ऋणको १० प्रतिशत सम्म रकम यस खातामा जम्मा गर्नु पर्नेछ ।<br>
          • यस बचतमा वार्षिक ७ प्रतिशतका दरले व्याज पाईने छ ।<br>
          • संस्थाबाट लिएको ऋण चुक्ता भएछि यो बचत फिर्ता लिन सकिनेछ तर पुनः ऋण कारोवार गरेमा बचत जम्मा गर्नु पर्नेछ ।<br>
        </div>
        <div class="tab-pane" id="tab6">
          <h2>दैनिक बचत (६ महिने र १ वर्षे)</h2><br>
          • यो बचत ६ महिना वा १ वर्षे खाता खोली दैनिक जम्मा गर्न सकिनेछ ।<br>
          • यो बचत दैनिक रु. ५० देखि १००० सम्म जम्मा गर्न सकिने छ ।<br>
          • यस बचतमा ६ महिने खातामा ६ प्रतिशत र १ वर्षे खातामा ७ प्रतिशत व्याज प्रदान गरिनेछ ।<br>
          • यस बचतमा न्यूनतम मौज्दात रु. १०० राख्नु पर्नेछ ।<br>
          • समय अगावै बचत झिक्न चाहेमा ६ प्रतिशत कट्टा हुनेछ ।<br>
        </div>

        <div class="tab-pane" id="tab7">
          <h2>बाल बचत</h2><br>
          • यो बचत शेयर सदस्यका १६ वर्ष मुनिका बाल बालीकाको नाममा खाता खोली जम्मा गर्न सकिनेछ ।<br>
          • यसमा जतीसुकै रकम बचत गर्न सकिनेछ ।<br>
          • यस खातामा जम्मा गरेको रकम बच्चा १६ वर्ष पुरा भई नागरिकता बनाएपछि फिर्ता पाइने छ ।<br>
          • यो बचतमा वार्षिक ९ प्रतिशत व्याज पाईने छ ।<br>
        </div>
        <div class="tab-pane" id="tab8">
          <h2>आवधिक बचत</h2><br>
          <table style="width:100%; padding:10px">
            <tr>
              <th>अवधि</th>
              <th>वार्षिक व्याजदर</th>
            </tr>
            <tr>
              <td>१ वर्षे</td>
              <td>११</td>
            </tr>
            <tr>
              <td>२ वर्षे</td>
              <td>१२</td>
            </tr>
            <tr>
              <td>३ वर्षे</td>
              <td>११.५</td>
            </tr>
          </table>
        </div>

        <div class="tab-pane" id="tab9">
          <h2>सुगम विशेष बचत</h2><br>
          <table style="width:100%; padding:10px">
            <tr>
              <th>दैनिक</th>
              <th>अवधि</th>
              <th>एकमुष्ठ भुक्तानी</th>
            </tr>
            <tr>
              <td>१०००</td>
              <td>३६५ दिन</td>
              <td>३,८०,५००।</td>
            </tr>
            <tr>
              <td> २०००</td>
              <td>३६५ दिन</td>
              <td>७,६१,०००।</td>
            </tr>
            <tr>
              <td>३०००</td>
              <td>३६५ दिन</td>
              <td>११,४१,,५००।</td>
            </tr>
            <tr>
              <td>५०००</td>
              <td>३६५ दिन</td>
              <td>१९,०२,५००।</td>
            </tr>
            <tr>
              <td> १०,०००</td>
              <td>३६५ दिन </td>
              <td>३८,०५,०००।</td>
            </tr>
          </table>
        </div>

        <div class="tab-pane" id="tab10">
          <h2>सुगम पेन्सन बचत</h2><br>
          <table style="width:100%; padding:10px">
            <tr>
              <th>मासिक</th>
              <th>अवधि वर्ष</th>
              <th>पेन्सन प्रतिमहिना</th>
            </tr>
            <tr>
              <td>१,००० </td>
              <td>१३</td>
              <td>२,०००</td>
            </tr>
            <tr>
              <td>२,०००</td>
              <td>१३</td>
              <td>४,०००</td>
            </tr>
            <tr>
              <td>५,००० </td>
              <td>१३</td>
              <td>१०,०००</td>
            </tr>
            <tr>
              <td>१०,०००</td>
              <td>१३</td>
              <td>२०,०००</td>
            </tr>
          </table>
          <br>
        </div>

        <div class="tab-pane" id="tab11">
          <h2>सुगम सम्बृद्धि बचत</h2> <br>
          <table style="width:100%; padding:10px">
            <tr>
              <th>रकम </th>
              <th>अवधि </th>
              <th>भुक्तानी रकम</th>
            </tr>
            <tr>
              <td>१०,०००</td>
              <td>४९ महिना</td>
              <td>२०,०००</td>
            </tr>
            {{-- <tr>
               <td> </td>
               <td><td>
               <td></td>
             </tr> --}}
            <tr>
              <td>२०,००० </td>
              <td>४९ महिना</td>
              <td>४०,०००</td>
            </tr>
            <tr>
              <td>५०,०००</td>
              <td>४९ महिना</td>
              <td>१००,०००</td>
            </tr>
            <tr>
              <td>१०,००००</td>
              <td>४९ महिना</td>
              <td>२०,००००</td>
            </tr>
          </table>
        </div>
      </div>

    </div>
  </div>
  <div class="clearfix" style="width: 100%"></div>
</div>
</div>

@endsection