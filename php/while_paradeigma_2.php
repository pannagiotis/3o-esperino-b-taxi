 <?php
  /* Αυτός ο κώδικας είναι για να δείξουμε 
 τη λειτουργία του while: 
 
 Βρίσκει το άθροισμα των αριθμών έως έναν αριθμό "μεχρι".. 
 */
 
$mexri = $_GET['mexri']; 
$i = 0;
$sum = 0;
while($i < $mexri){	
	$sum = $sum + $i; // για συντομία αυτό γράφεται και ως εξής $sum += $i
	$i = $i + 1;     // για συντομία αυτό γράφεται και ως εξής $i += 1 ή ακόμα και $i++
}

echo " Το άθροισμα των αριθμών μέχρι το ".$mexri." είναι ".$sum;

?>