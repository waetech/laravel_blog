<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="{{ Request::is('/') ? "active" : "" }}">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="{{ Request::is('blog') ? "active" : "" }}">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="{{ Request::is('about') ? "active" : "" }}">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="{{ Request::is('contact') ? "active" : "" }}">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                </ul>
                <ul class="dropdown nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <li><a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a></li>
              <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a></li>
              <li role="separator" class="dropdown-divider"></li>
              
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="{{route('logout')}}" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
          </ul>
          
        </div>
      </nav>