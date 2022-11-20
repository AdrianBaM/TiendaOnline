<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
          <form style="display: inline"  action="/logout" method="POST">
              @csrf
              <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
          </form>

    </div>
  </div>
</nav>