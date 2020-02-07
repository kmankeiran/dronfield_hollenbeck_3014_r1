<?php 

function redirect_to($location){
    if($location != null){
        header("Location: ".$location);
        exit;
    }
}

function displaytime(){
    $hour = date('H');
    $daytime = ($hour > 17) ? "Evening" : (($hour > 12) ? "Afternoon" : "Morning");
    echo "Good " . $daytime;
}

?>