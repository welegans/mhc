@extends('layout.app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('css/contact.css')}}">
  <script src="{{asset('js/map.js')}}" charset="utf-8"></script>
@endsection
@section('main-content')
  <div class="contact">
    <div class="container">
      <h4>Contact Us</h4>
      <div class="row">
        <div class="col-sm-6">
          <h5>Multazim Haj Corporation</h5>
          <p>Building No: 183/1, Near Jama Masjid, Papdy, Vasai west 401207
          </p>
          <p class="contactcalling">Contact person name <b>Vasi S. Patel</b><br> 
          <a href="tel:9890608910"><strong>Mobile : </strong>989 060 8910</a><br> 
          <a href="tel:8698441455"><strong>Mobile : </strong>869 844 1455</a><br> 
          <a href="tel:9823324944"><strong>Mobile : </strong>982 332 4944</a></p>
          <p>multazimhajcorp@yahoo.co.in</p>
        </div>
        <div class="col-sm-6">
          <div class="cform">
            <form method="POST" action='{{route('sendemail')}}'>
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name" name="name">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter your phone number" name="phone">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emailid">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="Enter subject" name="subject">
              </div>
              <div class="form-group">
                <label for="exampleTextarea">Message</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Enter your message" name="message"></textarea>
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div >
    <iframe class="banner" frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJQSqmyWKu5zsRpGDGeXf9tSA&key=AIzaSyDFyX32gTkv98wwI5HqaayCmiWqjAdrY-8" allowfullscreen></iframe>    {{-- <div class="cmap">
      <div id="map"></div>
    </div> --}}
  </div>

  {{-- <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDureIaqViHPClx3z7hvR_jh3vbSYu_Wok&callback=initMap">
</script> --}}
@endsection
