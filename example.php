<?php

	//Example of head class use
	
	include('head.php');
	
	$head = new Head();
	
	$head->title = "Testing Page";
	
	$head->render_head();

?>

<?=HEAD;?>

<body>

	<h1>Page Content</h1>

</body>

</html>