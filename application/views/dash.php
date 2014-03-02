      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>Here are all my events</small>  <button class="pull-right btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Create Event </button> </h1>
            <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Create your event</h4>
                      </div>
                      <div class="modal-body">
                        <h1>ALL OF THE THINGS!</h1>
                          <form class="form-horizontal" action="/dash/ajax_add_event" method="post">
                          <fieldset>

                          <!-- Form Name -->
                          <legend>Create Event</legend>


                          <!-- Text input-->
                          <div class="control-group">
                            <label class="control-label" for="Event Name">Event Name</label>
                            <div class="controls">
                              <input id="EventName" name="EventName" type="text" placeholder="Event Name" class="input-medium" required="">
                              <p class="help-block">Name your Event</p>
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="control-group">
                            <label class="control-label" for="textinput">Event Date</label>
                            <div class="controls">
                              <input id="EventDate" name="EventDate" type="date" placeholder="mm/dd/yyyy" class="input-xlarge" required="">
                              <p class="help-block">Event Date</p>
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="control-group">
                            <label class="control-label" for="Event Location">Event Location</label>
                            <div class="controls">
                              <input id="EventLocation" name="EventLocation" type="text" placeholder="123 Main St. " class="input-medium">
                              <p class="help-block">Event Location</p>
                            </div>
                          </div>

                          <!-- Textarea -->
                          <div class="control-group">
                            <label class="control-label" for="eventDesc.">eventDesc.</label>
                            <div class="controls">                     
                              <textarea id="EventDesc" name="EventDesc">Describe your Event</textarea>
                            </div>
                          </div>

                          <!-- Button -->
                          <div class="control-group">
                            <label class="control-label" for="submit">Submit</label>
                            <div class="controls">
                              <button id="submit" name="submit" class="btn btn-primary">Save</button>
                            </div>
                          </div>

                          </fieldset>
                          </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>


            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
            </div>
          </div>
        </div><!-- /.row -->

        <?php 
  foreach ($event as $event_item) {
  ?>
  <div class="row">
          <div class="col-lg-12">
            <div class"event">
            <h2> <?php echo $event_item->event_name; ?> </h2>
            <h4> <strong>at</strong> <?echo $event_item->location;?> <strong>on</strong> <?php echo $event_item->start_time;?> </h4>
            <p> <?php echo $event_item->event_description; ?> </p>
<?php              
                
  }

?>
       
        </div>