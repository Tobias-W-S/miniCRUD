<nav class="navbar navbar-expand-sm bg-danger navbar-dark opacity-75 fixed-top">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <form method="post" action="menu.php">
              <label>Sort by:</label>
              <select name="filter">
                <option value="`ID`">Default</option>
                <option value="`Titel`">Name</option>
                <option value="`Prijs`">Price</option>
              </select>
              <input type="submit"> 

            </form>
          </li>
        </ul>
      </div>
</nav>