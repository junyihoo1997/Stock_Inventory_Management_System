<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="AdminMainPage.css">

    <title>Admin Main Page</title>

  </head>
  <body>

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h1>Welcome Admin!</h1>
  </div>

  </div>

  <div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
</div>
    <ul>
      <li><a href="CSITechInventoryMainPage.php">Home</a></li>
      <li>About</li>
      <li>Services</li>
      <li>Contact</li>
    </ul>
  </div>
  <div>
    <button onclick="StockManagement()" id="btn"> Stock Management </button>
    
  </div>

  <script>
    function StockManagement(){
      location.href = "StockManagement.php";
    }
  
  </script>

  <!--<div id="content">
    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
      <i class="fas fa-bars"></i>
      </a>
    </span>
    <div id="menu" class="nav">
      <a href="#" class="close" onclick="closeSlideMenu()">
      <i class="fas fa-times"></i>
      </a>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </div>
  </div>-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
      }
      </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
