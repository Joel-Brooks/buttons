<?php
if ($_GET['run']){
	exec("test.sh");
}
?>
<!-- blah blah blah -->
<a href="?run=true">Click Me!</a>
