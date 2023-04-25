<nav class="navbar navbar-expand navbar-dark bg-primary static-top">
  <br>

<div class="dropdown">
  
  <a class="btn btn-light fas fa-bars" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Hotel Manurung
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item"  href="<?php echo site_url('welcome') ?>"  role="button" >
   Dashboard
</a>
<a class="dropdown-item"  href="<?php echo site_url('welcome/saran') ?>"  role="button" >
   Saran
</a>
<a class="dropdown-item"  href="<?php echo site_url('login') ?>"  role="button" >
   Login
</a>
  </div>
</div>


<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">

<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('welcome') ?>"  role="button" >
<i class="fas fa"></i> Dashboard
</a>

<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('welcome/saran') ?>"  role="button" >
<i class="fas fa-envelope-open -circle fa-fw"></i> Saran
</a>



</li>
</ul>
<ul class="navbar-nav ml-auto ml-md-0">


<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('login') ?>"  role="button" >
<i class="fas fa-user-circle fa-fw " ></i> Login
</a>

</li>
</ul>

</nav>