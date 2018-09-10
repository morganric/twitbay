

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Twitbay</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    

    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
      <?php

              if (true) {

                echo "<li class='nav-item' ><a class='nav-link' href='#'>Welcome Back ";
                // echo $_SESSION['username'];
                echo " </a></li>";
                echo "<li class='nav-item' ><a class='nav-link' href=''>Log Out</a></li>";

              } else {

                echo '<li class="nav-item" ><a class="nav-link" href="#" type="button" class="" data-toggle="modal" data-target="#loginModal"> Login</a></li>';
                
              }

              ?>
      </ul>
    </div>
  </div>
</nav>
<br/>