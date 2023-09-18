<?php
$dalTablealmarcas = array();
$dalTablealmarcas["almarcas_id"] = array("type"=>3,"varname"=>"almarcas_id", "name" => "almarcas_id", "autoInc" => "1");
$dalTablealmarcas["ma_codmarca"] = array("type"=>3,"varname"=>"ma_codmarca", "name" => "ma_codmarca", "autoInc" => "0");
$dalTablealmarcas["ma_nommarca"] = array("type"=>200,"varname"=>"ma_nommarca", "name" => "ma_nommarca", "autoInc" => "0");
$dalTablealmarcas["ma_observaciones"] = array("type"=>200,"varname"=>"ma_observaciones", "name" => "ma_observaciones", "autoInc" => "0");
$dalTablealmarcas["almarcas_id"]["key"]=true;

$dal_info["dbrf_at_127_0_0_1__almarcas"] = &$dalTablealmarcas;
?>