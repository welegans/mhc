@extends('layout.app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('css/haj.css')}}">
@endsection
@section('main-content')
  <div class="banner">
  </div>
  <div class="haj">
    <div class="container">
      <h4>Hajj</h4>
      <div class="row">
        <div class="col-sm-8">
          <p>Hajj is one of most important pillars of Islam and it is one of greatest religious duties.<br>
            Holy Qur’an says in a short and meaningful sentence:
            <br>
          </p>
          <p class="ara">
            وَ لِلّه عَلَى النّاسِ حِجُّ الْبَیْتِ مَنِ اسْتَطاعَ اِلَیْهِ سَبیلاً.
          </p>
          <p>
            It is on people for the sake of Allah to perform Hajj of his house, anyone who is
            able to undertake the journey to him. (2:196)
            <br>
            A Person who performs Hajj purifies himself from sins like the day that he was born”.
            And this is the greatest gift, and the best honor and the highest reward.
            Persons who perform Hajj and Umrah are guests of Allah. He will grant them their wishes and
            any prayer that they recite will be accepted. And if they pray for intercession about a person it
            will be accepted … and if they die in this way Allah will forgive all of their sins
          </p>
        </div>
        <div class="col-sm-4">
          <img src="{{asset('imgs/im7.jpg')}}" alt="haj" id="haji">
        </div>
      </div>


    </div>
  </div>
@endsection
