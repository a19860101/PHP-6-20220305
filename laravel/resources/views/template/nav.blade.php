<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">首頁</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('post.index')}}">所有文章</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('post.create')}}">新增文章</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
