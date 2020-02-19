<header class="text-center bg-dark">
    <h1 class="text-white pt-2"> FRUTERIA BANANO </h1>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{action('FruteriaController@index')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('FruteriaController@listar')}}">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('FruteriaController@insertar')}}">Insertar</a>
          </li>
        </ul>
      </nav>
</header>
