@extends('layout.app')

@section('main-content')
  <div class="home">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="{{asset('imgs/im16.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="{{asset('imgs/im14.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="{{asset('imgs/im13.jpg')}}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div id="section1">
    <div class="container">
      {{-- <h4>Your journey of SELF PURIFICATION begins here.</h4>
      <p>  At Multazim Haj Corporation, we pride ourselves in providing most excellent services to all the Pilgrims and focusing only their comfort. We are recognized by the Government of India and the Government of Saudi Arabia for our commitment of delivering an exceptional experience to all pilgrims performing Hajj or Umrah with us.</p> --}}
      <h4>  Who We Are?</h4>
      <h5>"Customer Satisfaction and Happiness is our success"</h5>
      <p>The field of Haj & Umrah Services has become extremely competitive and the Indian
        market is flooded with travel agents – qualified and unqualified. Therefore it becomes
        necessary for a person to identify the right travel agent who offers a totally
        hassle-free booking procedure and the right product. <strong>Multazim Haj Corporation</strong> has been established with the primary objective treat of every customer in professionalism with quality in services and commitments.
      </p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 im1">
      </div>
      <div class="col-sm-6 texts">
        <div class="textsin">
          <h4>Hajj Tours 2020</h4>
          <p>A reward for an accepted haj is nothing less than paradise.</p>
          <button onclick="location.href='{{route('haj')}}'" type="button" name="button" class="btn btn-outline-primary">Know More</button>
        </div>
      </div>
    </div>
  </div>
  <div class="outquote">
    <div class="quote">
    </div>
    <h4>Don't save haj for the old age! You don't know the date of appointment
      with the angel of death.</h4>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 texts">
          <div class="textsin">
            <h4>Umrah Tours 2020</h4>
            <p>If god were small enough for us to understand He wouldn't be big enough for us to worship.
            </p>
            <button onclick="location.href='{{route('umrah')}}'" type="button" name="button" class="btn btn-outline-primary">Know More</button>
          </div>
        </div>
        <div class="col-sm-6 im2">
        </div>
      </div>
    </div>
    <div class="outquote2">
      <div class="quote">
      </div>
      <h4>You Knock Allah Opens, You ask Allah gives,
        You cry Allah listens,
        You repent Allah frogives.</h4>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 im3">
          </div>
          <div class="col-sm-6 texts">
            <div class="textsin">
              <h4>Ramadan Tours 2020</h4>
              <p>And surely what comes after you is better for you than that has gone before.
              </p>
              <button onclick="location.href='{{route('haj')}}'" type="button" name="button" class="btn btn-outline-primary">Know More</button>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="main">
        <div class="container">
          <h3>Hotels</h3>
          <div class="row hotel">
            <div class="col-sm-3">
              <a href="#">  <div class="content im1">
                <div class="text_wrapper">
                  <h4>Hotel Name</h4>
                </div>
              </div></a>
            </div>
            <div class="col-sm-3">
              <a href="#">   <div class="content im2">
                <div class="text_wrapper">
                  <h4>Hotel Name</h4>
                </div>
              </div></a>
            </div>
            <div class="col-sm-3">
              <div class="content im3">
                <a href="#">     <div class="text_wrapper">
                  <h4>Hotel Name</h4>
                </div>
              </div></a>
            </div>
            <div class="col-sm-3">
              <a href="#">     <div class="content im3">
                <div class="text_wrapper">
                  <h4>Hotel Name</h4>
                </div>
              </div></a>
            </div>
          </div>
        </div>
      </div> -->
    @endsection
    {{-- <div class="main">
    <div class="container ">
    <div class="row">
    <div class="col-sm-4">
    <a href="#"><div class="content im1">
    <div class="text_wrapper">
    <h4>Umrah Tours 2020</h4>
  </div>
</div></a>
</div>
<div class="col-sm-4">
<a href="#"><div class="content im2">
<div class="text_wrapper">
<h4>Hajj Tours 2020</h4>
</div>
</div></a>
</div>
<div class="col-sm-4">
<a href="#"><div class="content im3">
<div class="text_wrapper">
<h4>Ramadan Tours 2020</h4>
</div>
</div></a>
</div>
</div>
</div>
</div> --}}
