   <?php
@session_start();
require 'db.php';

?> 
  <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
       
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          <?php
          if(isset($_SESSION["username"])) {
           echo'  <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>';
            
          }
          else{
            echo'  <li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          }
          ?>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>