
<style>
  @media (max-width:520px) {
    f {}
.dropdown {
  display: none;
}

    a > span {
      display: none;
    }
    .fs-4 {
      display: none;
    }
    .nav-link {
      width: fit-content;
    }

  }
</style>

<div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-light position-sticky top-0" style="height: 100vh;">
  <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <span class="fs-4 fw-bolder">Dashboard</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">

    <li>
      <a href="index.php?action=dashboard&table=charts" class="nav-link link-dark fw-bold">
        <i class="fas fa-tachometer-alt me-2"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="index.php?action=dashboard&table=orders" class="nav-link link-dark fw-bold">
        <i class="fas fa-shopping-cart me-2"></i>
        <span>Orders</span>
      </a>
    </li>
    <li>
      <a href="index.php?action=dashboard&table=products" class="nav-link link-dark fw-bold">
        <i class="fas fa-box-open me-2"></i>
        <span>Products</span>
      </a>
    </li>
    <li>
      <a href="index.php?action=dashboard&table=customers" class="nav-link link-dark fw-bold">
        <i class="fas fa-users me-2"></i>
        <span>Customers</span>
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div>

<script>
  let sidebar = document.getElementById('sidebar')
  let links = sidebar.getElementsByClassName('nav-link')
  console.log(links)

  <?php if ($_GET['table']=='charts'): ?>
    links[0].classList.toggle('active')
    links[0].classList.toggle('link-dark')

  <?php elseif ($_GET['table']=='orders'): ?>
    links[1].classList.toggle('active')
    links[1].classList.toggle('link-dark')
  <?php elseif ($_GET['table']=='products'): ?>
    links[2].classList.toggle('active')
    links[2].classList.toggle('link-dark')
  <?php elseif ($_GET['table']=='customers'): ?>
    links[3].classList.toggle('active')
    links[3].classList.toggle('link-dark')

  <?php endif ?>


</script>