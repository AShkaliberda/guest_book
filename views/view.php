<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Guest book</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!--CSS-->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

        <form class="form-horizontal" method="POST" action="../models/addComment.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
               <div class="col-sm-10">
                  <input name="userName" type="name" class="form-control" id="name" placeholder="Enter name" required>
               </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
               <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
                  <span id="error"></span>
               </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="msg">Message:</label>
               <div class="col-sm-10">
                  <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your message" required></textarea>
               </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
        </div>
</form>
    <br>
    <?php foreach($comments as $comment):?>
        <div class="comment">
        <p><?=$comment['name']; ?></p>
        <p><?=$comment['message']; ?></p>
        </div>

    <?php endforeach; ?>
    <ul class="pagination">
        <?php
        for($page = 1; $page <= $total_pages; $page++){
            echo '<li><a href="?page='.$page.'">' . $page . '</a></li>';
        }
        ?>
        </ul>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/validate.js"></script>
  </body>
</html>
