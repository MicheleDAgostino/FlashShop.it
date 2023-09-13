<nav class="navbar bg-base-300 fixed top-0 z-10">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="{{route('welcome')}}">Homepage</a></li>
          <li><a href="{{route('announcement.index')}}">Tutti gli annunci</a></li>
          <li><a>About</a></li>
        </ul>
      </div>
    </div>
    <div class="navbar-center">
      <a href="{{route('welcome')}}" class="btn btn-ghost normal-case text-2xl font-cursive">Flash Shop</a>
    </div>
    <div class="navbar-end">
      <button class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
      </button>

      {{-- DROPDOWN MENU PER UTENTI LOGGATI --}}
      @auth
          <div class="dropdown dropdown-end">
            <span>{{Auth::user()->name}}</span>
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <i class="fa-regular fa-user text-lg"></i>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a href="{{route('announcement.create')}}">Nuovo annuncio</a></li>
              <li>
                <a href="{{route('logout')}}" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                <form action="{{route('logout')}}" method="POST" class="hidden" id="form-logout">@csrf</form>
              </li>
            </ul>
          </div>
        </div>
        {{-- FINE DROPDOWN MENU PER UTENTI LOGGATI --}}

        {{-- INIZIO SEZIONE PER REVISORE --}}
      @if (Auth::user()->is_revisor)
        <a href="{{route('revisor.index')}}" class="btn btn-ghost btn-circle">
          <div class="indicator">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
            <span class="badge badge-xs badge-primary indicator-item">{{App\Models\Announcement::toBeRevisionedCount()}}</span>
          </div>
        </a>
      @endif
        {{-- FINE SEZIONE PER REVISORE --}}
        
      @else
      {{-- DROPDOWN MENU PER UTENTI GUEST --}}
        <div class="dropdown dropdown-end">
          <label tabindex="0" class="btn btn-ghost btn-circle">
              <i class="fa-regular fa-user text-lg"></i>
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a href="{{route('register')}}">Registrati</a></li>
            <li><a href="{{route('login')}}">Accedi</a></li>
            <li><a href="{{route('announcement.create')}}">Nuovo annuncio</a></li>
          </ul>
        </div>
      </div>
      {{-- FINE DROPDOWN MENU PER UTENTI GUEST --}}
    @endauth

    
      
    </div>
</nav>