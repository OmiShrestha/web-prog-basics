<?php
  include('travel-data.inc.php');

  function generateLink($url, $label, $class) {
      echo "<a href=\"$url\" class=\"$class\">$label</a>";
  }

  function stars($rating) {
      for ($i = 0; $i < $rating; $i++) {
          echo '<img src="images/star-gold.svg" width="16" />';
      }
      for ($i = $rating; $i < 5; $i++) {
          echo '<img src="images/star-white.svg" width="16" />';
      }
  }

  function outputPostRow($number) {
      global ${"postId$number"}, ${"userId$number"}, ${"userName$number"}, ${"date$number"},
             ${"thumb$number"}, ${"title$number"}, ${"excerpt$number"}, ${"reviewsNum$number"},
             ${"reviewsRating$number"};

      echo '<div class="row">
              <div class="col-md-4">';
                  generateLink("post.php?id=${"postId$number"}", "<img src=\"images/${"thumb$number"}\" class=\"img-responsive\"/>", "");
      echo '    </div>
              <div class="col-md-8">
                  <h2>' . ${"title$number"} . '</h2>
                  <div class="details">
                      Posted by ';
                          generateLink("user.php?id=${"userId$number"}", ${"userName$number"}, "");
      echo '            <span class="pull-right">' . ${"date$number"} . '</span>
                      <p class="ratings">';
                          stars(${"reviewsRating$number"});
      echo ' ' . ${"reviewsNum$number"} . ' Reviews</p>
                  </div>
                  <p class="excerpt">' . ${"excerpt$number"} . '</p>
                  <p class="pull-right">';
                      generateLink("post.php?id=${"postId$number"}", "Read more", "btn btn-primary btn-sm");
      echo '        </p>
              </div>
          </div>
          <hr />';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 11 - Project 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
</head>

<body>
    <?php include('header.inc.php'); ?>

    <main class="container">
        <div class="row">
            <?php include('left-nav.inc.php'); ?>

            <div class="col-md-10">

                <div class="jumbotron" id="postJumbo">
                    <h1>Posts</h1>
                    <p>Read other travellers' posts ... or create your own.</p>
                    <p><a class="btn btn-warning btn-lg">Learn more &raquo;</a></p>
                </div>        

                <!-- start post summaries -->
                <div class="postlist">
                    <?php 
                        outputPostRow(1);
                        outputPostRow(2);
                        outputPostRow(3);
                    ?>
                </div>   <!-- end postlist -->         
            </div>  <!-- end col-md-10 -->
        </div>   <!-- end row -->
    </main>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
