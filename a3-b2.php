<html>
<body>
<table border ="1" align="center">
<tr><th>File name </th><tr>
<?php
$dir=$_GET["dir"];
$extn=$_GET["ext"];
echo $dir;
echo $extn;

$hndl=opendir($dir);
while(($file=readdir($hndl))!==false)
{
	if(strstr($file,$extn))
	   echo"<tr><td>$file</td></tr>";
}

closedir($hndl);
?>
</table>
</body>
</html>