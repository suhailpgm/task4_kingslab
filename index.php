<?php 
$x=10;
$y=2;
function Add($a,$b) {
  
  echo $a."+ ".$b." is :".($a+$b);
	
}
function Sub($a,$b) {
  
  echo "<br><br>".$a."- ".$b." is :".($a-$b);
	
}
function Div($a,$b) {
  
  echo "<br><br>".$a."/ ".$b." is :".($a/$b);
	
}
function Mul($a,$b) {
  
  echo "<br><br>".$a."* ".$b." is :".($a*$b);
	
}
function Mod($a,$b) {
  
  echo "<br><br>".$a."% ".$b." is :".($a%$b);
	
}
function Expo($a,$b) {
  
  echo "<br><br>".$a."^".$b." is :".($a**$b);
	
}



Add($x,$y); 
Sub($x,$y); 
Div($x,$y); 
Mul($x,$y); 
Mod($x,$y); 
Expo($x,$y); 

?> 

