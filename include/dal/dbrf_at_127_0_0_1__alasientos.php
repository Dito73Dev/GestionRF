<?php
$dalTablealasientos = array();
$dalTablealasientos["as_id"] = array("type"=>3,"varname"=>"as_id", "name" => "as_id", "autoInc" => "1");
$dalTablealasientos["ascodalmacen"] = array("type"=>3,"varname"=>"ascodalmacen", "name" => "ascodalmacen", "autoInc" => "0");
$dalTablealasientos["as_nroasiento"] = array("type"=>3,"varname"=>"as_nroasiento", "name" => "as_nroasiento", "autoInc" => "0");
$dalTablealasientos["as_fechaasiento"] = array("type"=>7,"varname"=>"as_fechaasiento", "name" => "as_fechaasiento", "autoInc" => "0");
$dalTablealasientos["as_estadoasien"] = array("type"=>200,"varname"=>"as_estadoasien", "name" => "as_estadoasien", "autoInc" => "0");
$dalTablealasientos["sys_user"] = array("type"=>200,"varname"=>"sys_user", "name" => "sys_user", "autoInc" => "0");
$dalTablealasientos["sys_date"] = array("type"=>135,"varname"=>"sys_date", "name" => "sys_date", "autoInc" => "0");
$dalTablealasientos["as_id"]["key"]=true;

$dal_info["dbrf_at_127_0_0_1__alasientos"] = &$dalTablealasientos;
?>