<?php
/**
 * Created by PhpStorm.
 * User: 1405114
 * Date: 21/04/2016
 * Time: 18:10
 */
include("dbconnect.php");
          $rest=$_GET['moviees'];
        switch($rest) {
            case 'Allmovies':
          $sql="SELECT * FROM marvelmovies ";
          $result=$db->query($sql);
          while($row=$result->fetch_array()){
              $marvelMovieID=$row['marvelMovieID'];
              $yearReleased=$row['yearReleased'];
              $title=$row['title'];
              $productionStudio=$row['productionStudio'];
              $notes=$row['notes'];

              echo "{$marvelMovieID}.{$yearReleased}.{$title}.{$productionStudio}.{$notes}";

          }
                break;


          case 'Marvelmovies':
          $sql="SELECT * FROM marvelmovies WHERE productionStudio = 'marvelMovies'";
          $result=$db->query($sql);
          while($row=$result->fetch_array()){
              $marvelMovieID=$row['marvelMovieID'];
              $yearReleased=$row['yearReleased'];
              $title=$row['title'];
              $productionStudio=$row['productionStudio'];
              $notes=$row['notes'];

              echo "{$marvelMovieID}.{$yearReleased}.{$title}.{$productionStudio}.{$notes}";

          }
              break;

          case 'Moviesafter2010':
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
              break;

            case'Xmenmovies':
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
       }
//           ////***
//             $sql = "INSERT INTO movies () VALUES() ";
//             $sql = "INSERT INTO marvel () VALUES() ";
//             $sql = "INSERT INTO after () VALUES() ";
//             $sql = "INSERT INTO Xmen () VALUES() ";
//              ***////
//       }


