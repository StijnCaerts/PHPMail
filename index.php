<?php
if (!empty($_POST)) {
  $to = trim($_POST['to']);
  $subject = trim($_POST['subject']);
  $txt = trim($_POST['message']);
  $headers = "From: " . trim($_POST['from']);
}



?>


<html>
  <head>
    <title>PHPMail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h1>PHPMail</h1>

      <?php
      if(isset($_POST['from']) && $to != "" && $_POST['from'] != "" && $txt != ""  && mail($to,$subject,$txt,$headers)) {
        echo '<div class="alert alert-success" role="alert">Mail successfully sent!</div>';
      } else if (! empty($_POST)) {
        echo '<div class="alert alert-danger" role="alert">Mail not sent!</div>';
      }
      ?>

      <div class="container col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label for="from" class="col-sm-2 control-label">From</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="from" name="from" placeholder="From">
            </div>
          </div>

          <div class="form-group">
            <label for="to" class="col-sm-2 control-label">To</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="to" name="to" placeholder="To">
            </div>
          </div>

          <div class="form-group">
            <label for="subject" class="col-sm-2 control-label">Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            </div>
          </div>

          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea id="message" class="form-control" name="message" rows="3"></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-envelope"></span> Send</button>
        </form>
      </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
