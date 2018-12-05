<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
  <ul class="dropdown-menu settings-menu dropdown-menu-right">
    <li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
             <button type="submit" class="dropdown-item"><i class="fa fa-sign-out fa-lg"></i> Salir</button>
        </form>
        {{-- <a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a> --}}
    </li>
  </ul>
</li>