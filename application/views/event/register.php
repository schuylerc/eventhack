

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
     <link href="/assets/css/cover.css" rel="stylesheet">
  </head>

  <body>


<div id="page-wrapper">
  

    <div class="container">

            <h1>Register for event</h1>
            <h4>Verify your informataion for this event</h4>
              <p>You are registering for <strong><?php echo $eDetail->event_name;?></strong> @ <strong><?php echo $eDetail->location;?></strong> on <strong><?php echo $eDetail->start_time;?> </strong> </p>

          <form class="form-signin" action="/auth/login" method="post" role="form">
            <h3 class="form-signin-heading" style="text-align:left;">First name:
            <input type="text" name="identity" id="identity" class="form-control" placeholder="Fname" value="<?php echo $user->first_name; ?>" required autofocus><br>
          </h3>
            <h3 class="form-signin-heading" style="text-align:left;">Last name:
            <input type="text" name="identity" id="identity" class="form-control" placeholder="Lname" value="<?php echo $user->last_name; ?>" required autofocus><br>
          </h3>
            <h3 class="form-signin-heading" style="text-align:left;">Phone number:
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" value="<?php echo $user->phone; ?>" required>
          </h3>
           <h3 class="form-signin-heading" style="text-align:left;">Email:
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $user->email; ?>" required>
          </h3>
            <button class="btn btn-lg btn-primary btn-block" name="submit" value="login" type="submit">Register for event!</button>
          </form>        

        </div> <!-- /container -->


</div> <!-- /page-wrapper>


    <!-- JavaScript -->
    <script src="/assets/js/jquery-1.10.2.js"></script>
    <script src="/assets/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="/assets/js/morris/chart-data-morris.js"></script>
    <script src="/assets/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/assets/js/tablesorter/tables.js"></script>

  </body>
</html>