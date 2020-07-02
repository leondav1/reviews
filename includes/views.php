<?php
include '../curl.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Отзывы</title>
  </head>
  <body>
    <div class="container">
<!--       <?php
include 'header.php';
?> -->
      <div class="row">
      <div class="col-md-12">
      <?php
      if(is_array($reviews)){
        usort($reviews, function($a, $b){
              return ($b['time'] - $a['time']);
            });
        ?>

        <h1><?php echo $name ?></h1><br>
        <h5 style="line-height: 0.1"><?php echo 'Адрес: ' . $address ?></h5><br>
        <h5 style="line-height: 0.1"><?php echo 'Рейтинг: ' . $rating ?></h5><br>
        <p style="line-height: 0.1"><a href="<?php echo $website ?>" target="_blank"><?php echo $website ?></a></p><hr>
      </div>
      </div>
        <div class="row">
          <div class="col-md-3">
            <?php
            include('sidebar.php');
            ?>
            <div>
              <h5><a href="/">На главную</a></h5>
            </div>
          </div>
          <div class="col-md-9">
            <?php
              foreach ($reviews as $item) {
            ?>
            <div>
              <div class="media">
                  <a href="<?php echo $item['author_url'] ?>" target="_blank"><img src="<?php echo $item['profile_photo_url'] ?>" class="align-self-start mr-3" alt="profile_photo"></a>
                  <div class="media-body">
                  <h5 class="mt-0"><a href="<?php echo $item['author_url'] ?>" target="_blank"><?php echo $item['author_name'] ?></a></h5>
                  <p><?php
                        if($item['rating'] < 5){
                          echo str_repeat('<span style="color: red">&#9733</span>', $item['rating']) . str_repeat('<span style="color: DimGrey">&#9734</span>', 5 - $item['rating']);
                        }else{
                          echo str_repeat('<span style="color: red">&#9733</span>', $item['rating']);
                        }
                  ?></p>
                  <p style="line-height: 0.1"><b><?php echo $item['relative_time_description'] ?></b></p>
                  <p><?php echo $item['text'] ?></p>
                  </div>
              </div>
              <hr>
            </div>        
            <?php
              }
            }
        
            ?>
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>