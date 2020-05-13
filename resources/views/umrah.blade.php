@extends('layout.app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('css/umrah.css')}}">
@endsection
@section('main-content')
  <div class="banner">
  </div>
  <div class="umrah">
    <div class="container">
      <h4>Umrah</h4>
      <div class="row">
        <div class="col-sm-8">
          <p>
            Umrah is a mini Hajj that can be done anytime during the year. It can be performed
            along with Hajj and on other days as well. According to Quran: “—accomplish Hajj and
            Umrah to please Allah”.</p><p>
            The Umrah is an important pilgrimage that is performed by Muslims from all over the world and
            which can be undertaken at any time of the year. A lot of people consider it to be the ‘minor
            pilgrimage’, where the Hajj is considered to be the ‘major pilgrimage’. However, just because the
            Umrah isn’t as important as the Hajj, it doesn’t mean that it isn’t important in general.</p><p>
            In Islam, the Umrah is the second most sacred event, just behind the Hajj pilgrimage. The
            significance of the Umrah is that it cleanses a Muslim’s sins between the present Umrah and
            another Umrah. A lot of Muslims tend to perform the Umrah once in their lifetime but according to
            some hadiths, it is something that all Muslims must strive to complete multiple times in their life.</p>
          </p>
        </div>
        <div class="col-sm-4">
          <img src="{{asset('imgs/im6.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>
@endsection
