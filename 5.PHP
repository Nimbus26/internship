<?php
$text="TCET";
$count=0;
for($i="0"; $i< strlen($text); $i++)
  { 
    if(substr($text,$i,1)=="T")
    {
    $count=$count+1;
	 }
  }
echo $count;
?>