<html>
<head>
	<style>
	/*	li{
			border: 1px solid black;
			padding: 10px 10px 10px  10px;
		}
*/	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable({
    	stop: function(event, ui) {
        	$("#rearrange").html("<p>The new position is"+ui.item.index()+"</p>");
    	}
	});
    $( "#sortable" ).disableSelection();
  } );
  </script>
</head>
<body>
	<ul id="sortable">
		<?php $i=0;	?>
		<?php foreach($query as $user){
			$i=$i+1;
			echo "<li class='text' id='".$i."'>".$i.".".$user->firstname."<br></li>";
		}?>
	</ul>
	<div id="rearrange">

	</div>
	
</body>
</html>