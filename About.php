<!DOCTYPE html>
<html>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="AdminMainPage.css">
    <style>

.jumbotron {
  background-color: rgb(106, 188, 255) !important;
}

    </style>  
  </head>
    <body>
    <div class="jumbotron jumbotron-fluid bg-dark text-white">
  <div class="container">
  <h1>About Us</h1>
  <p>A simple briefting of the company background</p>
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