<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
	
<form action="ajax.php">
  <div class="form-group">
    <label for="tel1">TEL</label>
    <input type="text" class="form-control" id="tel1" name="tel1" placeholder="TEL" >
  </div>
  <div class="form-group">
    <label for="name1">NAME</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="NAME">
  </div>
  <div class="form-group">
    <label for="data1">DESC</label>
    <input type="text" class="form-control" id="data1" name="data1" placeholder="DESC">
  </div>
  <button type="submit" class="btn btn-primary">SEND</button>
</form>

<div id="content1">

</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script>
	  $(document).ready(function(){
		  
		  $.ajax({
				url: 'ajax.php',
				method: 'post',
				dataType: 'html',
				data: {text: 'get_tel'},
				success: function(data){
					$('#content1').html(data);
				}
			});
		  
	  });
	  
	  $("form").submit(function( event ){
		var $form = $(this);
		
		$.ajax({
			url: 'ajax.php',
			method: 'post',
			dataType: 'html',
			data: {text: $form.serialize()},
			success: function(data){
				alert(data);
			}
		});
		 
		return false;
	});
  </script>
  
  
  </body>
</html>