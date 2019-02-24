<!--
<div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
    
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
    
            </div>
        </nav>
    </div>
-->

<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">

            <div class="sidebar-header">
                <h3>Menú WayFav</h3>
            </div>
    
            <ul class="list-unstyled components">
                <p>Beta</p>
                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">General</a>
                    <!--<ul class="collapse list-unstyled" id="homeSubmenu">-->
                    <ul class=" list-unstyled" id="homeSubmenu">
                        <li  class="{{ activeMenu('/juego') }}"><a href="/juego">Juegos</a></li>
                        <li  class="{{ activeMenu('/moneda') }}"><a href="/moneda">Monedas</a></li>
                        <li  class="{{ activeMenu('/player') }}"><a href="/player">Jugadores</a></li>
                    </ul>
                </li>
                <li  class="{{ activeMenu('/moneda') }}"><a href="/moneda">Monedas</a></li>
                <li  class="{{ activeMenu('/player') }}"><a href="/player">Jugadores</a></li>
                <li>
                    <a href="#">About</a>
                </li>
                <!--<li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>-->

                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
    
    </div>
