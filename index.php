<?php
  require_once('db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Jacob's Shop</title>
  </head>
  <body>
        <?php

          $db = new DBConnection();

          $result = $db->getAllItemsReturnArr();
            
          // var_dump($result);
          foreach ($result as $dfk) {
              echo $dfk['name'];
              echo '<br>';

              echo $dfk['description'];
          } 
        ?>
          
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      function addPrice(price) {
        var current_price = parseFloat($(".TotalPrice").text());
        $(".TotalPrice").text((current_price + price).toFixed(2));
      }
      function showDetail(element) {
        $(element).parent().find('.itemDetail').css('display','block');
      }

      function hideDetail(element) {
        $(element).parent().find('.itemDetail').css('display','none');
      }
    </script>
  </body>
</html>