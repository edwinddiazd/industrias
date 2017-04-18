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
        <p class="mdl-navigation__link">Producto</p>
        <button id="menu2" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">timeline</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu2">
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Proyección</a></li>
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="">Exportacion</a></li>
            </ul>
        
        <p class="mdl-navigation__link" href="">Industria</p>
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
        <p class="mdl-navigation__link" href="" >Personal</p>
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
              <p class="mdl-navigation__link" href="">{{ Auth::user()->name }}</p>
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
          <a class="mdl-navigation__link" href="Reg_Personal"><i class="mdl-color-text--blue-grey-400 material-icons" role="Reg_Personal">people</i>Personal</a>
          <a class="mdl-navigation__link" href="Reg_Materias"><i class="mdl-color-text--blue-grey-400 material-icons" role="Reg_Materias">local_offer</i>Materias Primas</a>
          <!--<a class="mdl-navigation__link" href="Alianzas"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Alianzas</a>-->
          <a class="mdl-navigation__link" href="Broker"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Broker</a>
          <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Correo</a>-->
        </nav>
  </div>
  @else

  @endif