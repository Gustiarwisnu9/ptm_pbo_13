<?php
//class
class mobil{
//methods
function properti_mobil(){
    //object
    echo "Kaca , Spion , Ban , Merk";
}
  function maju()
  {
    echo " mobil maju";
  }
  function mundur()
  {
    echo "mobil mundur";
  }

}

$jalan = new mobil();

echo $jalan-> properti_mobil ();

?>
