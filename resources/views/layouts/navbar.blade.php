<header>
  <nav class="navbar is-dark">
    <div class="container">
      <div class="navbar-brand">
        <a href="/" class="navbar-item">
          <img src="/img/logo/logo.svg" alt="WebBlog" width="112px">
        </a>
        <div class="burger navbar-burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="navbar-menu">
        <div class="navbar-start">
          <a href="/" class="navbar-item">Home</a>
          <a href="/posts" class="navbar-item">Blog</a>
        </div>
        <div class="navbar-end">
          @if (!Auth::check())
          <a href="/register" class="navbar-item">Register</a>
          <a href="/login" class="navbar-item">Login</a>
          @endif
          @auth
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Welcome {{ auth()->user()->first_name }}
            </a>
    
            <div class="navbar-dropdown">
              <a href="/posts/create" class="navbar-item">
                Create Post
              </a>
              <a href="/logout" class="navbar-item">
                Logout
              </a>
            </div>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </nav>
</header>