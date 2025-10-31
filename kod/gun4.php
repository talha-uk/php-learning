<?php

$dersler=array("matematik","veri tabani","web php");
print_r($dersler); //dersler dizisinden tüm elemanlarını yazdırır

?>


<?php

$dersler2=array("fen","edebiyat","python"); 
echo"En Sevdigim Ders ". $dersler2[2]; //dersler2 dizisinden 3. elemanını çağırır

?>


<?php

 $dersler3[0]="Tarih";
 $dersler3[1]="Cografya";
 $dersler3[2]="Sanat";
 echo"Bu günkü dersim ".$dersler3[2];// Dersler3 dizinine manuel veri yerleştirdik ve çağırdık

?>


<?php

$dersler4=array("web","java","py");
$arrlength=count($dersler4);

for($x=0; $x<$arrlength; $x++){
  echo $dersler4[$x];
  echo " ";
} //for döngüsü kullanarak dersler4 elemanlarının 0. elemandan başlayarak sonuna kadar yazdırdık

?>


<?php

$derskredileri=array("web"=>"4", "java"=>"6","py"=>"8");
echo $derskredileri[3];

?>


<?php

$kurslar=[
  "PHP"=>["Egitmen"=>"Gokce","Sure"=>"40 Saat","Kredi"=>"5"],
  "MySql"=>["Egitmen"=>"Talha","Sure"=>"38 Saat","Kredi"=>"8"],
  "Py"=>["Egitmen"=>"Samet","Sure"=>"30 Saat","Kredi"=>"6"]];
echo $kurslar["Py"]["Egitmen"];//Dizi içinde dizi tanımlayarak veri çektik

?>


<?php

$arabalar=array(
  array("Volvo",20,10),
  array("BMW",13,15),
  array("Mustang",32,40),
  array("Phorshe",50,20),
  );
echo $arabalar[0][0]. "Markası bu ay".$arabalar[0][1]." tane satıldı. Elimizde kalan ".$arabalar[0][2]."tane araç var.";
?>










