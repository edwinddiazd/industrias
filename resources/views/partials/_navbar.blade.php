<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header mdl-color--indigo-A700">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">SEIPBES</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Proyección</a>
        <a class="mdl-navigation__link" href="">Exportación</a>
        <a class="mdl-navigation__link" href="Consulta_Personal">Personal</a>
        <!-- inicio del menu desplegable -->
        <button id="menu" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">content_paste</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu">
              <li class="mdl-menu__item"><a class="mdl-button--primary" style="text-decoration: none;" href="Consulta_Personal
              ">Personal</a></li>
              <li class="mdl-menu__item">Encargados Juridicos</li>
              <li class="mdl-menu__item">Disabled Action</li>
              <li class="mdl-menu__item">Yet Another Action</li>
            </ul>
        <!-- fin del menu desplegable -->
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">SEIPBES</span>
    <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Inicio</a>
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