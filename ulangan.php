<?php

function PesertaDidik($noAbsen, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2, $kondisiTerminasi3, $kondisiTerminasi4, $kondisiTerminasi5, $kondisiTerminasi6, $kondisiTerminasi7) {
    for($noAbsen; $noAbsen <= $kondisiTerminasi; $noAbsen++){
        if($noAbsen == $kondisiTerminasi1 || $noAbsen == $kondisiTerminasi2 || $noAbsen == $kondisiTerminasi6){
            echo "Peserta Didik Absen no - $noAbsen tidak hadir <br/>";
        } else if($noAbsen == $kondisiTerminasi3 || $noAbsen == $kondisiTerminasi4){
            echo "Peserta Didik Absen no - $noAbsen terlambat <br/>";
        } else if($noAbsen == $kondisiTerminasi5 || $noAbsen == $kondisiTerminasi7){
            echo "Peserta Didik Absen no - $noAbsen sakit <br/>";
        } else {
            echo "Peserta Didik Absen no - $noAbsen hadir <br/>";
        }
    }
}
echo PesertaDidik(1, 15, 2, 3, 6, 8, 9, 10, 13);
?>