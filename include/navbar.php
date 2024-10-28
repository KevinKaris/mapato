<style>
  #navbarCollapse {
    position: relative;
    display: flex;
    flex-direction: row;
  }
  @media (max-width: 550px) {
    #navbarCollapse {
      position: absolute;
      display: none;
      flex-direction: column;
      background: #000;
      border-radius: 7px;
      padding: 10px;
      top: 60px;
      right: 10px;
      z-index: 20;
    }
    .navbar-toggler {
      display: block !important;
    }
    /* Show navbarCollapse when hovering over the button */
    .navbar-toggler:hover + #navbarCollapse {
      display: flex !important;
    }
    .navbar-toggler:hover{
        color: red !important;
    }
  }
</style>
<nav class="navbar navbar-expand bg-navy navbar-light">
  <!-- Left navbar links -->
  <h3 class="text-light"><a href="home.php" class="text-light"><b><i>Mapato</i></b></a></h3>

  <div class="order-3 mr-2" id="navbarCollapse">
    <!-- Left navbar links -->
    <a href="earnings.php" class="nav-link text-light">Earnings</a>
    <a href="savings.php" class="nav-link text-light">Savings</a>
    <a href="expenses.php" class="nav-link text-light">Expenses</a>
    <a href="debts.php" class="nav-link text-light">Debts</a>
  </div>

  <!-- Right navbar links -->
  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <a href="profile.php" class="nav-link text-light"><i class="text-success fa fa-cicle"></i><?php echo $_SESSION['fname'].' '.$_SESSION['sname']; ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="config/logout.php" role="button">
        <i class="fas fa-power-off"> Log out</i>
      </a>
    </li>
    <button class="navbar-toggler bg-light" id="open-menu" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
  </ul>
</nav>


