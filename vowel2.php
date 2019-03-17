
<?php

$s=$_POST['txt1'];


	$a=0;
	$e=0;
	$i=0;
	$o=0;
	$u=0;
      $cnt1=0;
	for($c=0;$c<strlen($s);$c++)
	{
		if($s{$c}=='a')
			$a++;$cnt1++;
		if($s{$c}=='e')
			$e++;$cnt1++;
		if($s{$c}=='i')
			$i++;$cnt1++;
		if($s{$c}=='o')
			$o++;$cnt1++;
		if($s{$c}=='u')
			$u++;$cnt1++;
	}
	echo"<br>Vowel 'a' occures ".$a."times.";
	echo"<br>Vowel 'e' occures ".$e."times.";
	echo"<br>Vowel 'i' occures ".$i."times.";
	echo"<br>Vowel 'o' occures ".$o."times.";
	echo"<br>Vowel 'u' occures ".$u."times.<br>";
echo "total number of vowels are".$cnt1;
}
?>

