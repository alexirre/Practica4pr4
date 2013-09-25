<?php
$paises=array();
$paises["Argentina"]=array("Buenos Aires","Santa Fe","Rosario","Pilar","Formosa");
$paises["Brasil"]=array("Sao Paulo","Rio de Janeiro","Brazilia","Porto Alegre","Bagre");
$paises["Colombia"]=array("Bogota","Barranquilla","Cartagena","Cucuta","Armenia");
$paises["España"]=array("Madrid","Barcelona","Valencia","Guadalajara","Sevilla");
$paises["Estados Unidos"]=array("Nueva York","Las Vegas","Washington","California","Miami");
$paises["Francia"]=array("Paris","Versalles","Blois","Agen","Monte de Marsan");
$paises["Inglaterra"]=array("Londres","Manchester","Birmingham","Liverpool","Oxford");
$paises["Italia"]=array("Roma","Milan","Venecia","Bolonia","Napoles");
$paises["Japon"]=array("Tokyo","Osaka","Odaiba","Nagasaki","Hiroshima");
$paises["Mexico"]=array("Guadalajara","Monterrey","DF","Cancun","San Luis Potosi");
echo "<ul>";
 foreach($paises as $pais=>$ciudades){
  echo "<li>".$pais."<ul>";
   foreach($ciudades as $ciudad){
    echo "<li>".$ciudad."</li>";
   }
 echo "</li></ul>";
 }
?>