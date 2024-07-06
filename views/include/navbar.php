
<nav class="navbar navbar-expand-lg navbar-light bg-light p-3 px-5">
  <a class="navbar-brand" href="#">MVC Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    
  </div>

  <div>
    <?php if (isset($_SESSION['id'])):?>
    <a href="index.php?action=logout" class="btn btn-danger">Logout</a>
    <?php else: ?>
      <a href="index.php?action=login" class="btn btn-primary">Login</a>
    <?php endif; ?>
  </div>
</nav>