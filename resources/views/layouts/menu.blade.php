<ul class="app-menu">
    <li><a class="app-menu__item" href="/home"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">HOME</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('user.index') }}"><i class="icon fa fa-circle-o"></i> Muestra usuarios</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Libros</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('book.index') }}"><i class="icon fa fa-circle-o"></i> Muestra libros</a></li>
        <li><a class="treeview-item" href="{{ route('book.create') }}"><i class="icon fa fa-circle-o"></i> Nuevo libro</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Miembros</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('member.index') }}"><i class="icon fa fa-circle-o"></i> Muestra miembros</a></li>
        <li><a class="treeview-item" href="{{ route('member.create') }}"><i class="icon fa fa-circle-o"></i> Nuevo miembro</a></li>
      </ul>
    </li>
</ul>