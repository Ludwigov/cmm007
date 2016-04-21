      <?include("dbconnect.php"); ?> //Establishing connection with our database

      <!DOCTYPE html>
      <html lang="en">
      <head>
            <meta charset="UTF-8">
            <title>Choices watching Marvelmovies</title>
      </head>
      <body>
      <h1>Movie Links</h1>

      <ul>
          <li><a href="login.php?location=Allmovies">Display All Movies</a></li>
          <li><a href="login.php?location=Marvelmovies">Marvel Studio Movies </a></li>
          <li><a href="login.php?location=Moviesafter2010">Movies after 2010</a></li>
          <li><a href="login.php?location=Xmenmovies">Movies by X-men</a></li>
      </ul>
          <?php
          $movies=$_GET['Allmovies'];
          $marvel=$_GET['MarvelMovies'];
          $after=$_GET['MoviesAfter2010'];
          $Xmen=$_GET['MoviesXmen'];
      if($movies){
          $sql="SELECT* FROM marvelmovies ";
          $result=$db->query($sql);
          while($row=$result->fetch_array()){
              $marvelMovieID=$row['marvelMovieID'];
              $yearReleased=$row['yearReleased'];
              $title=$row['title'];
              $productionStudio=$row['productionStudio'];
              $notes=$row['notes'];

              echo "{$marvelMovieID}.{$yearReleased}.{$title}.{$productionStudio}.{$notes}";
          }

      }

      if($marvel){
          $sql="SELECT * FROM marvelmovies WHERE productionStudion='marvelMovies'";
          $result=$db->query($sql);
          while($row=$result->fetch_array()){
              $marvelMovieID=$row['marvelMovieID'];
              $yearReleased=$row['yearReleased'];
              $title=$row['title'];
              $productionStudio=$row['productionStudio'];
              $notes=$row['notes'];

              echo "{$marvelMovieID}.{$yearReleased}.{$title}.{$productionStudio}.{$notes}";
          }
      }
      if($after){
              $sql="SELECT * FROM marvelmovies WHERE yearReleased>'2010'";
              $result=$db->query($sql);
              while($row=$result->fetch_array()){
                  $marvelMovieID=$row['marvelMovieID'];
                  $yearReleased=$row['yearReleased'];
                  $title=$row['title'];
                  $productionStudio=$row['productionStudio'];
                  $notes=$row['notes'];

                  echo "{$marvelMovieID}.{$yearReleased}.{$title}.{$productionStudio}.{$notes}";
              }
          }
       if($Xmen) {
           $sql = "SELECT * FROM marvelmovies WHERE  title LIKE 'X-men'";
           $result = $db->query($sql);
           while ($row = $result->fetch_array()) {
               $marvelMovieID = $row['marvelMovieID'];
               $yearReleased = $row['yearReleased'];
               $title = $row['title'];
               $productionStudio = $row['productionStudio'];
               $notes = $row['notes'];

               echo "{$marvelMovieID}.{$yearReleased}.{$title}.{$productionStudio}.{$notes}";
           }
//           ////***
//             $sql = "INSERT INTO movies () VALUES() ";
//             $sql = "INSERT INTO marvel () VALUES() ";
//             $sql = "INSERT INTO after () VALUES() ";
//             $sql = "INSERT INTO Xmen () VALUES() ";
//              ***////
//       }
       }

          ?>
      </body>
      </html>