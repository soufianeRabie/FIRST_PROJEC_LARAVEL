<ul class="nav nav-tabs d-flex justify-content-center">

    @guest
    <li class="nav-item">
        <a href="{{route('login.show')}}" class="nav-link">se conntecter</a>
    </li>

    <li class="nav-item">
        <a href="{{route('register.show')}}" class="nav-link">register</a>
    </li>
    @endguest

    <li class="nav-item">
        <a href="{{route('homePage')}}" class="nav-link" aria-current="page">home</a>
    </li>
    
    @auth
       
    <li class="nav-item">
        <a href="{{route('profiles.index')}}" class="nav-link">all Profiles</a>
    </li>
    <li class="nav-item disabled">
        <a href="{{route('settings.index')}}"" class="nav-link">My Information</a>
    </li>
    <li class="nav-item disabled">
        <a href="{{route('profiles.create')}}"" class="nav-link">Ajouter </a>
    </li>


    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{auth()->user()->name}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="{{route('logout')}}" class="dropdown-item ">log out  </a>
        </div>
      </div>
    @endauth

    


</ul>