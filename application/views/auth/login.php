
<!--
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>

  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
!--> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>


<div id="page-wrapper">
  

    <div class="container">

            <h1>eventHack</h1>

              <div id="infoMessage"><?php echo $message;?></div>

          <form class="form-signin" action="http://localhost:8888/auth/login" method="post" role="form">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="email" name="identity" id="identity" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <label class="checkbox">
              <input type="checkbox" name="remember" id="remember" value="remember-me"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" name="submit" value="login" type="submit">Sign in</button>
          </form>

          <p><a href="forgot_password">Forgot your password?</a></p>

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