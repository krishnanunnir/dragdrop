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
    	// stop: function(event, ui) {
        	
    	// }
    	update: function (event, ui) {
    		$("#rearrange").html("<p>Name:"+ui.item.html()+"Position:"+eval(ui.item.index()+"+1")+"</p>");
	        var data = $(this).sortable('serialize');
	        // POST to server using $.post or $.ajax
	        
	        alert(data.toSource());
	        $.ajax({
	            data: data,
	            type: 'POST',
	            url: 'update'
	        });
    	}
     });
    $( "#sortable" ).disableSelection();
  });
  </script>
 
</head>
<body>
	<ul id="sortable" style="list-style-type:none">
		<?php $i=0;	
		foreach($query as $user){
			$i=$i+1;
			echo "<li class='text' id='item-".$user->firstname."'>".$user->firstname."<br></li>";
		}?>
	</ul>
	<div id="rearrange">

	</div>
	
</body>
</html>