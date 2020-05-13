<nav class="navbar navbar-toggleable-md fixed-top navbar-light" style="background:#fff;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('imgs/l4.png')}}" width="200" height="50" alt="">
    {{-- Multazim Haj Corporation --}}
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hajj
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('haj')}}">About Hajj</a>
          <!-- <a class="dropdown-item" href="{{route('hajpackage')}}">Hajj packages</a> -->
          {{-- <a class="dropdown-item" href="{{route('tnc')}}">Terms & conditions</a> --}}
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Umrah
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('umrah')}}">About Umrah</a>
          <!-- <a class="dropdown-item" href="{{route('umrahpackage')}}">Umrah packages</a> -->
          {{-- <a class="dropdown-item" href="{{route('tnc')}}">Terms & conditions</a> --}}
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('contact')}}">Contact</a>
      </li>
    </ul>
  </div>
</nav>
