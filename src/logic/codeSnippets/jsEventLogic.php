<p> The code below will create an event on a specific template.  The Template class will be instantiated followed by your template name and the events function.  This takes and object of different parmeters such as changes, clicks, keypresses, etc. </p>

<div class="meteorEditor sytnaxHighlight">
Template.{yourTemplateNameHere}.events({
    // do some events
});
</div>

<p> A working example is below that was used in the video tutorial series.  This example creates functions that work with display, setting cookie/session variables, creating timestamps, and formatting data that is going to be entered into a database. </p>

<div class="meteorEditor sytnaxHighlight bigBox">
Template.timeTracker.events({
  'click .helpToggle':function(e){
      e.preventDefault();
      $('.help').fadeToggle();
  },
  'change .customerMenu':function(e){
      var value = $(event.target).val();
      Session.set('selectedCustomer', value);
      $('.selectProject').removeClass('hidden');
  },
  'change .projectMenu':function(e){
      var value = $(event.target).val();
      Session.set('selectedProject', value);
      $('.startButton').attr('disabled', false).removeClass('disabled');
  },
  'click .startButton':function(e){
      e.preventDefault();
      var date = new Date();
      var startTime = date.toLocaleTimeString();

      Session.set('startTime', startTime);
      $('.stopButton').attr('disabled', false).removeClass('disabled');
  },
  "click .stopButton":function(event){
      event.preventDefault();
      var date = new Date();
      var endTime = date.toLocaleTimeString();

      Session.set("endTime", endTime);
      $('.projectWork').show();

      // set the data in the form
      $('.projectID').val(Session.get('selectedProject'));
      $('.startTime').val(Session.get('startTime'));
      $('.endTime').val(Session.get('endTime'));
  }
});
</div>
