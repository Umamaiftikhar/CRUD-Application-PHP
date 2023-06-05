<?php include "conn.php" ?>

<?php


  
function myHead($title)
{
  echo '
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>'.$title.' - swapyourbook.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

';
          } 

           



          function myHeader()
          {
            echo '
            
        
        
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Book Swapped</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/allbrands.php">All Books</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/allmobiles.php">Books for swapping</a>
                  </li>
                  <li class="nav-item">
                    <c class="nav-link" href="pages/allmobiles.php">Books for Rent</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-success" href="admin/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

                  ';
              }




      function myFooter()
      {
        echo ' <footer class="blockquote-footer fixed-bottom">Copyright &copy; 2022</footer>';
      }


?>
