<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header mdl-color--indigo-A700">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">SEIPBES</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">

      @if(Entrust::hasRole('Dios'))     
        <a class="mdl-navigation__link" href="" >Producto</a>
        <button id="menu2" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">timeline</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu2">
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Proyección</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Exportacion</a></li>
            </ul>
        
        <a class="mdl-navigation__link" href="">Industria</a>
       <button id="menu1" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">store mall directory</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu1">
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Aliados</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Operacion Con Aliados</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Broker</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Exportaciones</a></li>
            </ul>
<!-- inicio del menu desplegable -->
        <a class="mdl-navigation__link" href="" >Personal</a>
        <button id="menu" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">person</i>
            </button>
        <!-- inicio del menu desplegable -->
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu">
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Personal">Personal</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Presidente">Presidente</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Bienes">Bienes</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Compras">Compras</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Comunicaciones">Comunicaciones</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Gestion_Humana">Gestion Humana</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Juridico">Jurídico</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Operaciones">Operaciones</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Seguridad_Industrial">Seguridad Industrial</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Seguridad_Integral">Seguridad Integral</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Tecnologia">Tecnología</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Ventas">Ventas</a></li>
            </ul>
            @else
        <!-- fin del menu desplegable -->
            @endif

            @if (Auth::check())
              <a class="mdl-navigation__link" href="">{{ Auth::user()->name }}</a>
              <button id="logout" class="mdl-button mdl-js-button mdl-button--icon">
              <i class="material-icons">keyboard_arrow_down</i></button>
              <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="logout">
                  <li class="mdl-menu__item">
                  <a class="mdl-button--primary" style="text-decoration: none;" href="{{ url('/logout') }}">Cerrar Sesi&oacute;n</a><i class="fa fa-btn fa-sign-out"></i></li>
              @else
              <a class="mdl-navigation__link" href="{{ url('/login') }}">Ingresa</a>
              <a class="mdl-navigation__link" href="{{ url('/register') }}">Reg&iacute;strate</a>
              @endif           
      </nav>
  </div>
  </header>
  @if (Auth::check())
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">{{ Auth::check() ? Auth::user()->name : "SEIPBES"}}</span>
    <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="Dashboard"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Dashboard</a>
          <a class="mdl-navigation__link" href="personal"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Personal</a>
          <a class="mdl-navigation__link" href="Producto"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Productos</a>
          <a class="mdl-navigation__link" href="Alianzas"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Alianzas</a>
          <a class="mdl-navigation__link" href="Broker"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Broker</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Correo</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Trash</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Spam</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Purchases</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
  </div>
  @else

  @endif