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
          <li><a href="login.php?location=allmovies">Display All Movies</a></li>
          <li><a href="login.php?location=marvelMovies">Marvel Studio Movies </a></li>
          <li><a href="login.php?location=after2010">Movies after 2010</a></li>
          <li><a href="login.php?location=xmen">Movies by X-men</a></li>
      </ul>
          <?php
          $movies=$_GET['allmovies'];
          $marvel=$_GET['marvelMovies'];
          $after=$_GET['after2010'];
          $Xmen=$_GET['xmen'];
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
       if($Xmen){
              $sql="SELECT * FROM marvelmovies WHERE  title LIKE 'X-men'";
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

          ?>


      </body>
      </html>