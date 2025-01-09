<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <a class="navbar-brand" href="/"><?php echo e(config('app.name', 'Travelly')); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/services">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/posts">Blog</a>
              </li>
          </ul>
          <ul class="nav navbar-nav ms-auto">
              <?php if(auth()->guard()->guest()): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                  </li>
              <?php else: ?>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <?php echo e(Auth::user()->name); ?>

                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li>
                              <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                          </li>
                          <li>
                              <form action="<?php echo e(route('logout')); ?>" method="POST" class="dropdown-item">
                                  <?php echo csrf_field(); ?>
                                  <button type="submit" class="btn btn-link p-0 text-decoration-none">Logout</button>
                              </form>
                          </li>
                      </ul>
                  </li>
              <?php endif; ?>
          </ul>
      </div>
  </div>
</nav>
<?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/inc/navbar.blade.php ENDPATH**/ ?>