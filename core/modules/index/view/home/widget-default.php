<!DOCTYPE html>
<html>
  <head>

    <style type="text/css">
  
      body {
  background: url(img/calendario2.jpg) no-repeat fixed center;   
      }
    </style>
  </head>
  <body>
      <?php

$events = EventData::getEvery();
foreach($events as $event){

	$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);

}
// print_r(json_encode($thejson));

?>
<script>


	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-10-1',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script>


<div class="row">
<div class="col-md-12">
<h1>Calendario MISION</h1>
<div id="calendar"></div>

</div>
</div>
      
      </body>
</html>
