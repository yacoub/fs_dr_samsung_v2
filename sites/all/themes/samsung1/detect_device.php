<?php
//Detect special conditions devices
$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
if(stripos($_SERVER['HTTP_USER_AGENT'],"Android") && stripos($_SERVER['HTTP_USER_AGENT'],"mobile")){
        $Android = true;
}else if(stripos($_SERVER['HTTP_USER_AGENT'],"Android")){
        $Android = false;
        $AndroidTablet = true;
}else{
        $Android = false;
        $AndroidTablet = false;
}
$webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$BlackBerry = stripos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$RimTablet= stripos($_SERVER['HTTP_USER_AGENT'],"RIM Tablet");
$mobileDevice = "no";
if ($iPod || $iPhone || ($iPad) || ($Android) || ($AndroidTablet) || ($webOS) || ($BlackBerry) || ($RimTablet))
    $mobileDevice = "yes";
?>
