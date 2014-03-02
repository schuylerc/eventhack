      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>Here are all my events</small>  <button class="pull-right btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Create Event </button> </h1>
    
                          <script type="text/javascript">

                            function newEvent1(){

                            $.ajax({
                                type: 'POST',
                                url: '/dash/ajax_add_event',
                                data: { EventName: $("#EventName").val(), EventDate: $("#EventDate").val(),
                                        EventLocation: $("#EventLocation").val(), EventDesc: $("#EventDesc").val(),
                                        EventEndDate: $("#EventEndDate").val()
                                 },
                                beforeSend:function(){
                                  // this is where we append a loading image
                                  $('#eventStatus').html('<i class="glyphicon glyphicon-refresh"></i>&nbsp;Creating Event...');

                                },
                                success:function(data){
                                  // successful request; do something with the data
                                  $('#eventStatus').empty();
                                  //print result here
                                  $('#eventStatus').append('created successfully');
                                  window.location = '/event/edit/' + data;
                                
                                },
                                error:function(){
                                  // failed request; give feedback to user
                                  $('#eventStatus').append('An Error occured while creating this survey');
                                  
                                }
                                });
                              }
                          

                          </script>

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
                          <div class="form-horizontal">
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
                            <label class="control-label" for="textinput">Event Start Date</label>
                            <div class="controls">
                              <input id="EventDate" name="EventDate" type="date" placeholder="mm/dd/yyyy" class="input-xlarge" required="">
                              <p class="help-block">Event Date</p>
                            </div>
                          </div>

                           <div class="control-group">
                            <label class="control-label" for="textinput">Event Start Time</label>
                            <div class="controls">
                              <input id="startTime" name="startTime" type="time" placeholder="hh:mm" class="input-xlarge" required="">
                              <p class="help-block">Event Start Time </p>
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label" for="textinput">Event End Date</label>
                            <div class="controls">
                              <input id="EventEndDate" name="EventEndDate" type="date" placeholder="mm/dd/yyyy" class="input-xlarge" required="">
                              <p class="help-block">Event End Date</p>
                            </div>
                          </div>

                           <div class="control-group">
                            <label class="control-label" for="textinput">Event End Time</label>
                            <div class="controls">
                              <input id="endTime" name="endTime" type="time" placeholder="hh:mm" class="input-xlarge" required="">
                              <p class="help-block">Event End Time </p>
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
                              <button  onclick="newEvent1();" class="btn btn-primary">Save</button>
                            </div>
                          </div>

                          </fieldset>
                          </div>

                          <div id="eventStatus"></div>

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

<div class="row">
<div class="col-lg-12">
  <script type="text/javascript" src="http://cdn.knightlab.com/libs/timeline/latest/js/storyjs-embed.js"></script>
        <script>
            $(document).ready(function() {
                createStoryJS({
                    type:       'timeline',
                    width:      '800',
                    height:     '600',
                    source:     '/dash/ajax_timeline_json',
                    embed_id:   'my-timeline'
                });
            });
        </script>
        <div id="my-timeline"></div>
</div>
</div>

        <?php 
  foreach ($event as $event_item) {
  ?>
  <div class="row">
          <div class="col-lg-12">
            <div class"event">
            <h2><a href='/event/view/<?php echo $event_item->handle; ?>'> <?php echo $event_item->event_name; ?> </a></h2>
            <h4> <strong>at</strong> <?echo $event_item->location;?> <strong>on</strong> <?php echo $event_item->start_time;?> </h4>
            <p> <?php echo $event_item->event_description; ?> </p>
<?php              
                
  }

?>
       
        </div>