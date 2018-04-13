<?php
	
	/**
		*jquery Append And Remvoe
		*Happy Coding
	*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
	.button {
	    background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 16px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    -webkit-transition-duration: 0.4s; /* Safari */
	    transition-duration: 0.4s;
	    cursor: pointer;
	}

	.button1 {
	    background-color: white; 
	    color: black; 
	    border: 2px solid #4CAF50;
	    border-radius: 9px;
	}

	.button1:hover {
	    background-color: #4CAF50;
	    color: white;
	}

	.button2 {
	    background-color: white; 
	    color: black; 
	    border: 2px solid #f44336;
	    border-radius: 9px;
	}

	.button2:hover {
	    background-color: #f44336;
	    color: white;
	}


	.button5:hover {
	    background-color: #555555;
	    color: white;
	}
	</style>		
</head>
<body>
	<h2>Hi There, This is a simple line</h2>
	
	<div class="append_here">
		
	</div>

	<button class="button button1 add">ADD</button>	

</body>
</html>


<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

 <script>

$(document).ready(function() {

	//On click add Div 
	$('.add').click(function(e) {
	    e.preventDefault();

	    $(".append_here").append( '<div class="remove"> <h3 class="close"> I append in here .... </h3>'+ '<button class="button button2">Remove</button> </div>' );
	});

	
	//Remove The current Div
	$('.append_here').on('click','.remove',function() {

		$(this).closest(this).remove();

   });


});


</script>