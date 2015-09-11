<?php 
//echo str_replace(' ','_',strtoupper('By uploading photos and stories you automatically agree to the terms and conditions'));
for($i=0;$i<5;$i++)
{
 echo date("F Y", strtotime("-$i months"));
 echo "<br/>";
}
?>
