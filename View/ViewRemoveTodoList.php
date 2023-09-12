<?php

require_once __DIR__ ."/../Helper/Input.php";
require_once __DIR__ ."/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList(){
    echo "MENGHAPUS TODO (Tekan x untuk batalkan)".PHP_EOL;

$pilihan = input("Nomor");

$success = removeTodoList($pilihan);

  if ($pilihan == "x"){
      echo "Batal Menghapus Todo".PHP_EOL;
  } else {
      if($success){
          echo "Sukses menghapus nomor $pilihan".PHP_EOL;
      } else {
          echo "Gagal menghapus nomor $pilihan". PHP_EOL;
      }
  }


}