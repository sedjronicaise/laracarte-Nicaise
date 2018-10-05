<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('root_path')}}"> {{config('app.name')}} </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('root_path')}}">Accueil</a></li>
            <li><a href="{{route('about_path')}}">A propos</a></li>
            <li><a href="#">Artisan</a></li> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Planète <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Laravel.com</a></li>
                <li><a href="#">Laravel.io</a></li>
                <li><a href="#">Laracast</a></li>
                <li><a href="#">Larajobs</a></li>
                <li><a href="#">Laravel News</a></li>
                <li><a href="#">Larachat</a></li>
              </ul>
            </li>
            <li><a href="{{route('contact_path')}}">Contact</a></li> 
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#contact">Se connecter</a></li>
            <li><a href="#contact">S'inscrire</a></li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>