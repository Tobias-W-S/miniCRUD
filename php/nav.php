<nav class="navbar navbar-expand-sm bg-danger navbar-dark opacity-75 fixed-top">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <?php 
              if(isset($_SESSION['id'])){
                include_once 'logoutNav.php';
              }
            ?>
          </ul>
        </div>
</nav>