<?php
$dalTableinv_almacen = array();
$dalTableinv_almacen["ascodalmacen"] = array("type"=>3,"varname"=>"ascodalmacen", "name" => "ascodalmacen", "autoInc" => "1");
$dalTableinv_almacen["ascodalmacen_estado"] = array("type"=>16,"varname"=>"ascodalmacen_estado", "name" => "ascodalmacen_estado", "autoInc" => "0");
$dalTableinv_almacen["ascodalmacen_nombre"] = array("type"=>200,"varname"=>"ascodalmacen_nombre", "name" => "ascodalmacen_nombre", "autoInc" => "0");
$dalTableinv_almacen["ascodalmacen_locale"] = array("type"=>200,"varname"=>"ascodalmacen_locale", "name" => "ascodalmacen_locale", "autoInc" => "0");
$dalTableinv_almacen["cont_codempresa"] = array("type"=>200,"varname"=>"cont_codempresa", "name" => "cont_codempresa", "autoInc" => "0");
$dalTableinv_almacen["ascodalmacen"]["key"]=true;

$dal_info["dbrf_at_127_0_0_1__inv_almacen"] = &$dalTableinv_almacen;
?>