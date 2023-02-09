<?php 

require_once "../businessLogic/RemoveTodoList.php";
require_once "../helper/Input.php";


function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO";

    $pilihan = input("Masukan nomor(Masukan x jika ingin membatalkan");

    if($pilihan == "x" || $pilihan == "X") {
        echo "Batal menghapus todo" . PHP_EOL;
    }else {
        $success = removeTodoList($pilihan);

        if($success) {
            echo "Berhasil menghapus todo ke-$pilihan" . PHP_EOL;
        }else {
            echo "Gagal menghapus todo ke-$pilihan" . PHP_EOL;
        }
    }
}