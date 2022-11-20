<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/login">Login<span class="sr-only"></span></a>
          <li>
            <form style="display: inline"  action="/logout" method="POST">
                @csrf
                <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
            </form>
          </li>
    
        </li>
     
       </ul>
      </div>
    </div>
</nav>