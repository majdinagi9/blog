 <header class="clearfix">

    <div  class="logo">
      <a href="<?php echo BASE_URL . '/index.php' ?>">
        <h1 class="logo-text"><span>Majdi</span>Inspires</h1>
      </a>
    </div>



    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
      <?php if(isset($_SESSION['id'])): ?>
         <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="<?php echo BASE_URL . '/index.php' ?>">Dashboard</a></li>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">logout</a></li>
            
          </ul>
        </li>
      <?php endif; ?>
      </ul>
    </nav>
  </header>