<?php
/**
 * Created by PhpStorm.
 * User: 1405114
 * Date: 21/04/2016
 * Time: 18:10
 */
include("dbconnect.php");
          $movies=$_GET['Allmovies'];
          $marvel=$_GET['Marvelmovies'];
          $after=$_GET['Moviesafter2010'];
          $Xmen=$_GET['Xmenmovies'];
      if($movies){
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

      }

      if($marvel){
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

