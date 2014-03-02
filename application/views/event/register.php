

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

              <div id="infoMessage"><?php echo $message;?></div>

          <form class="form-signin" action="/auth/login" method="post" role="form">
            <h3 class="form-signin-heading">Please enter your name</h3>
            <input type="text" name="identity" id="identity" class="form-control" placeholder="Name" required autofocus><br><h3 class="form-signin-heading">Please enter your name</h3>
            <h3 class="form-signin-heading">Please enter your email</h3>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            <h3 class="form-signin-heading">Enter your phone number</h3>
            <input type="text" name="number" id="number" class="form-control" placeholder="Phone" required>
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