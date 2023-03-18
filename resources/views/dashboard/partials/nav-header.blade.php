<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blogs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('category.index') }}">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('post.index') }}">Publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">Usuarios</a>
      </li>
    </ul>
  </div>
</nav>