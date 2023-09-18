<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tparam_estadoasientos"] ) ) {
			$lookupTableLinks["tparam_estadoasientos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estadoasientos"]["alasientos.as_estadoasien"] )) {
			$lookupTableLinks["tparam_estadoasientos"]["alasientos.as_estadoasien"] = array();
		}
		$lookupTableLinks["tparam_estadoasientos"]["alasientos.as_estadoasien"]["edit"] = array("table" => "alasientos", "field" => "as_estadoasien", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["alasientos.ascodalmacen"] )) {
			$lookupTableLinks["inv_almacen"]["alasientos.ascodalmacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["alasientos.ascodalmacen"]["edit"] = array("table" => "alasientos", "field" => "ascodalmacen", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_status"] ) ) {
			$lookupTableLinks["tparam_status"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_status"]["alconceptos.co_ctrl"] )) {
			$lookupTableLinks["tparam_status"]["alconceptos.co_ctrl"] = array();
		}
		$lookupTableLinks["tparam_status"]["alconceptos.co_ctrl"]["edit"] = array("table" => "alconceptos", "field" => "co_ctrl", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["alconceptos.co_tipomovto"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["alconceptos.co_tipomovto"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["alconceptos.co_tipomovto"]["edit"] = array("table" => "alconceptos", "field" => "co_tipomovto", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol.username_id"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol.username_id"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol.username_id"]["edit"] = array("table" => "aldevindiv_sol", "field" => "username_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol.sol_estado"] )) {
			$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol.sol_estado"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol.sol_estado"]["edit"] = array("table" => "aldevindiv_sol", "field" => "sol_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol.sol_userfr"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol.sol_userfr"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol.sol_userfr"]["edit"] = array("table" => "aldevindiv_sol", "field" => "sol_userfr", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol.sol_userto"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol.sol_userto"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol.sol_userto"]["edit"] = array("table" => "aldevindiv_sol", "field" => "sol_userto", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"] ) ) {
			$lookupTableLinks["aldevindiv_sol_type"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol.sol_type"] )) {
			$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol.sol_type"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol.sol_type"]["edit"] = array("table" => "aldevindiv_sol", "field" => "sol_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol.usr_username"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol.usr_username"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol.usr_username"]["edit"] = array("table" => "aldevindiv_sol", "field" => "usr_username", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol.sign_a_user"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol.sign_a_user"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol.sign_a_user"]["edit"] = array("table" => "aldevindiv_sol", "field" => "sign_a_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol.sign_b_user"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol.sign_b_user"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol.sign_b_user"]["edit"] = array("table" => "aldevindiv_sol", "field" => "sign_b_user", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol"] ) ) {
			$lookupTableLinks["aldevindiv_sol"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc.transact_id_fk"] )) {
			$lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc.transact_id_fk"] = array();
		}
		$lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc.transact_id_fk"]["edit"] = array("table" => "aldevindiv_sol_vinc", "field" => "transact_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_enservicio"] ) ) {
			$lookupTableLinks["q_global_enservicio"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc.aldevindiv_id_fk"] )) {
			$lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc.aldevindiv_id_fk"] = array();
		}
		$lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc.aldevindiv_id_fk"]["edit"] = array("table" => "aldevindiv_sol_vinc", "field" => "aldevindiv_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados_vinc"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados_vinc"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc.transactvinc_status"] )) {
			$lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc.transactvinc_status"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc.transactvinc_status"]["edit"] = array("table" => "aldevindiv_sol_vinc", "field" => "transactvinc_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_traslados.username_id"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_traslados.username_id"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_traslados.username_id"]["edit"] = array("table" => "aldevindiv_traslados", "field" => "username_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_traslados.sol_estado"] )) {
			$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_traslados.sol_estado"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_traslados.sol_estado"]["edit"] = array("table" => "aldevindiv_traslados", "field" => "sol_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_traslados.sol_userfr"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_traslados.sol_userfr"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_traslados.sol_userfr"]["edit"] = array("table" => "aldevindiv_traslados", "field" => "sol_userfr", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_traslados.sol_userto"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_traslados.sol_userto"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_traslados.sol_userto"]["edit"] = array("table" => "aldevindiv_traslados", "field" => "sol_userto", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"] ) ) {
			$lookupTableLinks["aldevindiv_sol_type"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_traslados.sol_type"] )) {
			$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_traslados.sol_type"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_traslados.sol_type"]["edit"] = array("table" => "aldevindiv_traslados", "field" => "sol_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_traslados.usr_username"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_traslados.usr_username"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_traslados.usr_username"]["edit"] = array("table" => "aldevindiv_traslados", "field" => "usr_username", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_reintegros.username_id"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_reintegros.username_id"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_reintegros.username_id"]["edit"] = array("table" => "aldevindiv_reintegros", "field" => "username_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_reintegros.sol_estado"] )) {
			$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_reintegros.sol_estado"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_reintegros.sol_estado"]["edit"] = array("table" => "aldevindiv_reintegros", "field" => "sol_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_reintegros.sol_userfr"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_reintegros.sol_userfr"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_reintegros.sol_userfr"]["edit"] = array("table" => "aldevindiv_reintegros", "field" => "sol_userfr", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_reintegros.sol_userto"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_reintegros.sol_userto"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_reintegros.sol_userto"]["edit"] = array("table" => "aldevindiv_reintegros", "field" => "sol_userto", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"] ) ) {
			$lookupTableLinks["aldevindiv_sol_type"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_reintegros.sol_type"] )) {
			$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_reintegros.sol_type"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_reintegros.sol_type"]["edit"] = array("table" => "aldevindiv_reintegros", "field" => "sol_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_reintegros.usr_username"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_reintegros.usr_username"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_reintegros.usr_username"]["edit"] = array("table" => "aldevindiv_reintegros", "field" => "usr_username", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_enservicio"] ) ) {
			$lookupTableLinks["q_global_enservicio"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc_adm.aldevindiv_id_fk"] )) {
			$lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc_adm.aldevindiv_id_fk"] = array();
		}
		$lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc_adm.aldevindiv_id_fk"]["edit"] = array("table" => "aldevindiv_sol_vinc_adm", "field" => "aldevindiv_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol"] ) ) {
			$lookupTableLinks["aldevindiv_sol"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc_adm.transact_id_fk"] )) {
			$lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc_adm.transact_id_fk"] = array();
		}
		$lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc_adm.transact_id_fk"]["edit"] = array("table" => "aldevindiv_sol_vinc_adm", "field" => "transact_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados_vinc"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados_vinc"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc_adm.transactvinc_status"] )) {
			$lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc_adm.transactvinc_status"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc_adm.transactvinc_status"]["edit"] = array("table" => "aldevindiv_sol_vinc_adm", "field" => "transactvinc_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["alcuentasalma.ca_recibemovto"] )) {
			$lookupTableLinks["tparam_sn"]["alcuentasalma.ca_recibemovto"] = array();
		}
		$lookupTableLinks["tparam_sn"]["alcuentasalma.ca_recibemovto"]["edit"] = array("table" => "alcuentasalma", "field" => "ca_recibemovto", "page" => "edit");
		if( !isset( $lookupTableLinks["cgc_consulta"] ) ) {
			$lookupTableLinks["cgc_consulta"] = array();
		}
		if( !isset( $lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentadepcod"] )) {
			$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentadepcod"] = array();
		}
		$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentadepcod"]["edit"] = array("table" => "alcuentasalma", "field" => "nicsp_cuentadepcod", "page" => "edit");
		if( !isset( $lookupTableLinks["cgc_consulta"] ) ) {
			$lookupTableLinks["cgc_consulta"] = array();
		}
		if( !isset( $lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostonew"] )) {
			$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostonew"] = array();
		}
		$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostonew"]["edit"] = array("table" => "alcuentasalma", "field" => "nicsp_cuentacostonew", "page" => "edit");
		if( !isset( $lookupTableLinks["cgc_consulta"] ) ) {
			$lookupTableLinks["cgc_consulta"] = array();
		}
		if( !isset( $lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostoservicio"] )) {
			$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostoservicio"] = array();
		}
		$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostoservicio"]["edit"] = array("table" => "alcuentasalma", "field" => "nicsp_cuentacostoservicio", "page" => "edit");
		if( !isset( $lookupTableLinks["cgc_consulta"] ) ) {
			$lookupTableLinks["cgc_consulta"] = array();
		}
		if( !isset( $lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostocodnopp"] )) {
			$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostocodnopp"] = array();
		}
		$lookupTableLinks["cgc_consulta"]["alcuentasalma.nicsp_cuentacostocodnopp"]["edit"] = array("table" => "alcuentasalma", "field" => "nicsp_cuentacostocodnopp", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"] ) ) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo.ed_codelem"] )) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo.ed_codelem"] = array();
		}
		$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo.ed_codelem"]["add"] = array("table" => "alelemdevolutivo", "field" => "ed_codelem", "page" => "add");
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"] ) ) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo.ed_codelem"] )) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo.ed_codelem"] = array();
		}
		$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo.ed_codelem"]["search"] = array("table" => "alelemdevolutivo", "field" => "ed_codelem", "page" => "search");
		if( !isset( $lookupTableLinks["almarcas"] ) ) {
			$lookupTableLinks["almarcas"] = array();
		}
		if( !isset( $lookupTableLinks["almarcas"]["alelemdevolutivo.edmarca"] )) {
			$lookupTableLinks["almarcas"]["alelemdevolutivo.edmarca"] = array();
		}
		$lookupTableLinks["almarcas"]["alelemdevolutivo.edmarca"]["edit"] = array("table" => "alelemdevolutivo", "field" => "edmarca", "page" => "edit");
		if( !isset( $lookupTableLinks["geunidmedida"] ) ) {
			$lookupTableLinks["geunidmedida"] = array();
		}
		if( !isset( $lookupTableLinks["geunidmedida"]["alelemdevolutivo.edunidad"] )) {
			$lookupTableLinks["geunidmedida"]["alelemdevolutivo.edunidad"] = array();
		}
		$lookupTableLinks["geunidmedida"]["alelemdevolutivo.edunidad"]["edit"] = array("table" => "alelemdevolutivo", "field" => "edunidad", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["mi_inventario.di_almacen"] )) {
			$lookupTableLinks["inv_almacen"]["mi_inventario.di_almacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["mi_inventario.di_almacen"]["edit"] = array("table" => "Mi_inventario", "field" => "di_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["alcuentasalma"] ) ) {
			$lookupTableLinks["alcuentasalma"] = array();
		}
		if( !isset( $lookupTableLinks["alcuentasalma"]["mi_inventario.cod_cta"] )) {
			$lookupTableLinks["alcuentasalma"]["mi_inventario.cod_cta"] = array();
		}
		$lookupTableLinks["alcuentasalma"]["mi_inventario.cod_cta"]["edit"] = array("table" => "Mi_inventario", "field" => "cod_cta", "page" => "edit");
		if( !isset( $lookupTableLinks["alelemdevolutivo"] ) ) {
			$lookupTableLinks["alelemdevolutivo"] = array();
		}
		if( !isset( $lookupTableLinks["alelemdevolutivo"]["mi_inventario.alelemdevolutivo_id_fk"] )) {
			$lookupTableLinks["alelemdevolutivo"]["mi_inventario.alelemdevolutivo_id_fk"] = array();
		}
		$lookupTableLinks["alelemdevolutivo"]["mi_inventario.alelemdevolutivo_id_fk"]["edit"] = array("table" => "Mi_inventario", "field" => "alelemdevolutivo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_alelemconsumo"] ) ) {
			$lookupTableLinks["q_ctrl_alelemconsumo"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_alelemconsumo"]["alelemconsumo.ec_codelem"] )) {
			$lookupTableLinks["q_ctrl_alelemconsumo"]["alelemconsumo.ec_codelem"] = array();
		}
		$lookupTableLinks["q_ctrl_alelemconsumo"]["alelemconsumo.ec_codelem"]["edit"] = array("table" => "alelemconsumo", "field" => "ec_codelem", "page" => "edit");
		if( !isset( $lookupTableLinks["alcuentasalma"] ) ) {
			$lookupTableLinks["alcuentasalma"] = array();
		}
		if( !isset( $lookupTableLinks["alcuentasalma"]["alelemconsumo.eccuenta"] )) {
			$lookupTableLinks["alcuentasalma"]["alelemconsumo.eccuenta"] = array();
		}
		$lookupTableLinks["alcuentasalma"]["alelemconsumo.eccuenta"]["edit"] = array("table" => "alelemconsumo", "field" => "eccuenta", "page" => "edit");
		if( !isset( $lookupTableLinks["geunidmedida"] ) ) {
			$lookupTableLinks["geunidmedida"] = array();
		}
		if( !isset( $lookupTableLinks["geunidmedida"]["alelemconsumo.ecunidad"] )) {
			$lookupTableLinks["geunidmedida"]["alelemconsumo.ecunidad"] = array();
		}
		$lookupTableLinks["geunidmedida"]["alelemconsumo.ecunidad"]["edit"] = array("table" => "alelemconsumo", "field" => "ecunidad", "page" => "edit");
		if( !isset( $lookupTableLinks["global_periodos"] ) ) {
			$lookupTableLinks["global_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["global_periodos"]["tparam_valor_uvt.pmv_vigencia"] )) {
			$lookupTableLinks["global_periodos"]["tparam_valor_uvt.pmv_vigencia"] = array();
		}
		$lookupTableLinks["global_periodos"]["tparam_valor_uvt.pmv_vigencia"]["edit"] = array("table" => "tparam_valor_uvt", "field" => "pmv_vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["geclasedocto.cd_tipomov"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["geclasedocto.cd_tipomov"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["geclasedocto.cd_tipomov"]["edit"] = array("table" => "geclasedocto", "field" => "cd_tipomov", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.username_id"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.username_id"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.username_id"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "username_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol_sign_a.sol_estado"] )) {
			$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol_sign_a.sol_estado"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol_sign_a.sol_estado"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "sol_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sol_userfr"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sol_userfr"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sol_userfr"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "sol_userfr", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sol_userto"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sol_userto"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sol_userto"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "sol_userto", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"] ) ) {
			$lookupTableLinks["aldevindiv_sol_type"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol_sign_a.sol_type"] )) {
			$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol_sign_a.sol_type"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol_sign_a.sol_type"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "sol_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.usr_username"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.usr_username"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.usr_username"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "usr_username", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sign_a_user"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sign_a_user"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sign_a_user"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "sign_a_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sign_b_user"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sign_b_user"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_a.sign_b_user"]["edit"] = array("table" => "aldevindiv_sol_sign_a", "field" => "sign_b_user", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol"] ) ) {
			$lookupTableLinks["aldevindiv_sol"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc_sign.transact_id_fk"] )) {
			$lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc_sign.transact_id_fk"] = array();
		}
		$lookupTableLinks["aldevindiv_sol"]["aldevindiv_sol_vinc_sign.transact_id_fk"]["edit"] = array("table" => "aldevindiv_sol_vinc_sign", "field" => "transact_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_enservicio"] ) ) {
			$lookupTableLinks["q_global_enservicio"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc_sign.aldevindiv_id_fk"] )) {
			$lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc_sign.aldevindiv_id_fk"] = array();
		}
		$lookupTableLinks["q_global_enservicio"]["aldevindiv_sol_vinc_sign.aldevindiv_id_fk"]["edit"] = array("table" => "aldevindiv_sol_vinc_sign", "field" => "aldevindiv_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados_vinc"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados_vinc"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc_sign.transactvinc_status"] )) {
			$lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc_sign.transactvinc_status"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados_vinc"]["aldevindiv_sol_vinc_sign.transactvinc_status"]["edit"] = array("table" => "aldevindiv_sol_vinc_sign", "field" => "transactvinc_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.username_id"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.username_id"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.username_id"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "username_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"] ) ) {
			$lookupTableLinks["aldevindiv_sol_estados"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol_sign_b.sol_estado"] )) {
			$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol_sign_b.sol_estado"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_estados"]["aldevindiv_sol_sign_b.sol_estado"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "sol_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sol_userfr"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sol_userfr"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sol_userfr"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "sol_userfr", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sol_userto"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sol_userto"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sol_userto"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "sol_userto", "page" => "edit");
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"] ) ) {
			$lookupTableLinks["aldevindiv_sol_type"] = array();
		}
		if( !isset( $lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol_sign_b.sol_type"] )) {
			$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol_sign_b.sol_type"] = array();
		}
		$lookupTableLinks["aldevindiv_sol_type"]["aldevindiv_sol_sign_b.sol_type"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "sol_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.usr_username"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.usr_username"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.usr_username"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "usr_username", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sign_a_user"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sign_a_user"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sign_a_user"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "sign_a_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sign_b_user"] )) {
			$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sign_b_user"] = array();
		}
		$lookupTableLinks["global_users"]["aldevindiv_sol_sign_b.sign_b_user"]["edit"] = array("table" => "aldevindiv_sol_sign_b", "field" => "sign_b_user", "page" => "edit");
		if( !isset( $lookupTableLinks["alasientos_gestion"] ) ) {
			$lookupTableLinks["alasientos_gestion"] = array();
		}
		if( !isset( $lookupTableLinks["alasientos_gestion"]["gedocumentos_ingresos.as_nroasiento_fk"] )) {
			$lookupTableLinks["alasientos_gestion"]["gedocumentos_ingresos.as_nroasiento_fk"] = array();
		}
		$lookupTableLinks["alasientos_gestion"]["gedocumentos_ingresos.as_nroasiento_fk"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "as_nroasiento_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"] ) ) {
			$lookupTableLinks["q_ctrl_numdocumento"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_ingresos.docodregion"] )) {
			$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_ingresos.docodregion"] = array();
		}
		$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_ingresos.docodregion"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "docodregion", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_doc"] ) ) {
			$lookupTableLinks["global_type_doc"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_doc"]["gedocumentos_ingresos.do_tipodoc"] )) {
			$lookupTableLinks["global_type_doc"]["gedocumentos_ingresos.do_tipodoc"] = array();
		}
		$lookupTableLinks["global_type_doc"]["gedocumentos_ingresos.do_tipodoc"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "do_tipodoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_ingresos.do_tipomov"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_ingresos.do_tipomov"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_ingresos.do_tipomov"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "do_tipomov", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master_proveedores"] ) ) {
			$lookupTableLinks["contractor_master_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master_proveedores"]["gedocumentos_ingresos.doccnit"] )) {
			$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_ingresos.doccnit"] = array();
		}
		$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_ingresos.doccnit"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "doccnit", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["gedocumentos_ingresos.doclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["gedocumentos_ingresos.doclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["gedocumentos_ingresos.doclasedoc"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "doclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["alconceptos"] ) ) {
			$lookupTableLinks["alconceptos"] = array();
		}
		if( !isset( $lookupTableLinks["alconceptos"]["gedocumentos_ingresos.do_concepto"] )) {
			$lookupTableLinks["alconceptos"]["gedocumentos_ingresos.do_concepto"] = array();
		}
		$lookupTableLinks["alconceptos"]["gedocumentos_ingresos.do_concepto"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "do_concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["gedocumentos_ingresos.do_dep"] )) {
			$lookupTableLinks["dependencia"]["gedocumentos_ingresos.do_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["gedocumentos_ingresos.do_dep"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "do_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["gedocumentos_ingresos.do_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["gedocumentos_ingresos.do_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["gedocumentos_ingresos.do_depsup"]["edit"] = array("table" => "gedocumentos_ingresos", "field" => "do_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estadoasientos"] ) ) {
			$lookupTableLinks["tparam_estadoasientos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estadoasientos"]["alasientos_gestion.as_estadoasien"] )) {
			$lookupTableLinks["tparam_estadoasientos"]["alasientos_gestion.as_estadoasien"] = array();
		}
		$lookupTableLinks["tparam_estadoasientos"]["alasientos_gestion.as_estadoasien"]["edit"] = array("table" => "alasientos_gestion", "field" => "as_estadoasien", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["alasientos_gestion.ascodalmacen"] )) {
			$lookupTableLinks["inv_almacen"]["alasientos_gestion.ascodalmacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["alasientos_gestion.ascodalmacen"]["edit"] = array("table" => "alasientos_gestion", "field" => "ascodalmacen", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["gedocumentos_ingresos"] ) ) {
			$lookupTableLinks["gedocumentos_ingresos"] = array();
		}
		if( !isset( $lookupTableLinks["gedocumentos_ingresos"]["almovdevdia_ingresos_d.doclasedoc_id_fk"] )) {
			$lookupTableLinks["gedocumentos_ingresos"]["almovdevdia_ingresos_d.doclasedoc_id_fk"] = array();
		}
		$lookupTableLinks["gedocumentos_ingresos"]["almovdevdia_ingresos_d.doclasedoc_id_fk"]["edit"] = array("table" => "almovdevdia_ingresos_d", "field" => "doclasedoc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_legal"] ) ) {
			$lookupTableLinks["global_type_legal"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_legal"]["almovdevdia_ingresos_d.legalizado"] )) {
			$lookupTableLinks["global_type_legal"]["almovdevdia_ingresos_d.legalizado"] = array();
		}
		$lookupTableLinks["global_type_legal"]["almovdevdia_ingresos_d.legalizado"]["edit"] = array("table" => "almovdevdia_ingresos_d", "field" => "legalizado", "page" => "edit");
		if( !isset( $lookupTableLinks["alelemdevolutivo_consulta"] ) ) {
			$lookupTableLinks["alelemdevolutivo_consulta"] = array();
		}
		if( !isset( $lookupTableLinks["alelemdevolutivo_consulta"]["almovdevdia_ingresos_d.devolutivo_id_FK"] )) {
			$lookupTableLinks["alelemdevolutivo_consulta"]["almovdevdia_ingresos_d.devolutivo_id_FK"] = array();
		}
		$lookupTableLinks["alelemdevolutivo_consulta"]["almovdevdia_ingresos_d.devolutivo_id_FK"]["edit"] = array("table" => "almovdevdia_ingresos_d", "field" => "devolutivo_id_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_tax"] ) ) {
			$lookupTableLinks["global_type_tax"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_tax"]["almovdevdia_ingresos_d.mdd_tax"] )) {
			$lookupTableLinks["global_type_tax"]["almovdevdia_ingresos_d.mdd_tax"] = array();
		}
		$lookupTableLinks["global_type_tax"]["almovdevdia_ingresos_d.mdd_tax"]["edit"] = array("table" => "almovdevdia_ingresos_d", "field" => "mdd_tax", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"] ) ) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo_consulta.ed_codelem"] )) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo_consulta.ed_codelem"] = array();
		}
		$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo_consulta.ed_codelem"]["add"] = array("table" => "alelemdevolutivo_consulta", "field" => "ed_codelem", "page" => "add");
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"] ) ) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo_consulta.ed_codelem"] )) {
			$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo_consulta.ed_codelem"] = array();
		}
		$lookupTableLinks["q_ctrl_alelemdevolutivo"]["alelemdevolutivo_consulta.ed_codelem"]["search"] = array("table" => "alelemdevolutivo_consulta", "field" => "ed_codelem", "page" => "search");
		if( !isset( $lookupTableLinks["almarcas"] ) ) {
			$lookupTableLinks["almarcas"] = array();
		}
		if( !isset( $lookupTableLinks["almarcas"]["alelemdevolutivo_consulta.edmarca"] )) {
			$lookupTableLinks["almarcas"]["alelemdevolutivo_consulta.edmarca"] = array();
		}
		$lookupTableLinks["almarcas"]["alelemdevolutivo_consulta.edmarca"]["edit"] = array("table" => "alelemdevolutivo_consulta", "field" => "edmarca", "page" => "edit");
		if( !isset( $lookupTableLinks["geunidmedida"] ) ) {
			$lookupTableLinks["geunidmedida"] = array();
		}
		if( !isset( $lookupTableLinks["geunidmedida"]["alelemdevolutivo_consulta.edunidad"] )) {
			$lookupTableLinks["geunidmedida"]["alelemdevolutivo_consulta.edunidad"] = array();
		}
		$lookupTableLinks["geunidmedida"]["alelemdevolutivo_consulta.edunidad"]["edit"] = array("table" => "alelemdevolutivo_consulta", "field" => "edunidad", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_legal"] ) ) {
			$lookupTableLinks["global_type_legal"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_legal"]["almovinddia_ingresos_d.md_legalizado"] )) {
			$lookupTableLinks["global_type_legal"]["almovinddia_ingresos_d.md_legalizado"] = array();
		}
		$lookupTableLinks["global_type_legal"]["almovinddia_ingresos_d.md_legalizado"]["edit"] = array("table" => "almovinddia_ingresos_d", "field" => "md_legalizado", "page" => "edit");
		if( !isset( $lookupTableLinks["alelemdevolutivo"] ) ) {
			$lookupTableLinks["alelemdevolutivo"] = array();
		}
		if( !isset( $lookupTableLinks["alelemdevolutivo"]["almovinddia_ingresos_d.devolutivo_id_FK"] )) {
			$lookupTableLinks["alelemdevolutivo"]["almovinddia_ingresos_d.devolutivo_id_FK"] = array();
		}
		$lookupTableLinks["alelemdevolutivo"]["almovinddia_ingresos_d.devolutivo_id_FK"]["edit"] = array("table" => "almovinddia_ingresos_d", "field" => "devolutivo_id_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["alasientos_gestion"] ) ) {
			$lookupTableLinks["alasientos_gestion"] = array();
		}
		if( !isset( $lookupTableLinks["alasientos_gestion"]["gedocumentos_ingresos_consumo.as_nroasiento_fk"] )) {
			$lookupTableLinks["alasientos_gestion"]["gedocumentos_ingresos_consumo.as_nroasiento_fk"] = array();
		}
		$lookupTableLinks["alasientos_gestion"]["gedocumentos_ingresos_consumo.as_nroasiento_fk"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "as_nroasiento_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"] ) ) {
			$lookupTableLinks["q_ctrl_numdocumento"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_ingresos_consumo.docodregion"] )) {
			$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_ingresos_consumo.docodregion"] = array();
		}
		$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_ingresos_consumo.docodregion"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "docodregion", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_doc"] ) ) {
			$lookupTableLinks["global_type_doc"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_doc"]["gedocumentos_ingresos_consumo.do_tipodoc"] )) {
			$lookupTableLinks["global_type_doc"]["gedocumentos_ingresos_consumo.do_tipodoc"] = array();
		}
		$lookupTableLinks["global_type_doc"]["gedocumentos_ingresos_consumo.do_tipodoc"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "do_tipodoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_ingresos_consumo.do_tipomov"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_ingresos_consumo.do_tipomov"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_ingresos_consumo.do_tipomov"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "do_tipomov", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master_proveedores"] ) ) {
			$lookupTableLinks["contractor_master_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master_proveedores"]["gedocumentos_ingresos_consumo.doccnit"] )) {
			$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_ingresos_consumo.doccnit"] = array();
		}
		$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_ingresos_consumo.doccnit"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "doccnit", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["gedocumentos_ingresos_consumo.doclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["gedocumentos_ingresos_consumo.doclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["gedocumentos_ingresos_consumo.doclasedoc"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "doclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["alconceptos"] ) ) {
			$lookupTableLinks["alconceptos"] = array();
		}
		if( !isset( $lookupTableLinks["alconceptos"]["gedocumentos_ingresos_consumo.do_concepto"] )) {
			$lookupTableLinks["alconceptos"]["gedocumentos_ingresos_consumo.do_concepto"] = array();
		}
		$lookupTableLinks["alconceptos"]["gedocumentos_ingresos_consumo.do_concepto"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "do_concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["gedocumentos_ingresos_consumo.do_dep"] )) {
			$lookupTableLinks["dependencia"]["gedocumentos_ingresos_consumo.do_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["gedocumentos_ingresos_consumo.do_dep"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "do_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["gedocumentos_ingresos_consumo.do_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["gedocumentos_ingresos_consumo.do_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["gedocumentos_ingresos_consumo.do_depsup"]["edit"] = array("table" => "gedocumentos_ingresos_consumo", "field" => "do_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["gedocumentos_ingresos_consumo"] ) ) {
			$lookupTableLinks["gedocumentos_ingresos_consumo"] = array();
		}
		if( !isset( $lookupTableLinks["gedocumentos_ingresos_consumo"]["almovconsdia_ingresos.doclasedoc_id_fk"] )) {
			$lookupTableLinks["gedocumentos_ingresos_consumo"]["almovconsdia_ingresos.doclasedoc_id_fk"] = array();
		}
		$lookupTableLinks["gedocumentos_ingresos_consumo"]["almovconsdia_ingresos.doclasedoc_id_fk"]["edit"] = array("table" => "almovconsdia_ingresos", "field" => "doclasedoc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["alelemconsumo_consulta"] ) ) {
			$lookupTableLinks["alelemconsumo_consulta"] = array();
		}
		if( !isset( $lookupTableLinks["alelemconsumo_consulta"]["almovconsdia_ingresos.consumo_id_fk"] )) {
			$lookupTableLinks["alelemconsumo_consulta"]["almovconsdia_ingresos.consumo_id_fk"] = array();
		}
		$lookupTableLinks["alelemconsumo_consulta"]["almovconsdia_ingresos.consumo_id_fk"]["edit"] = array("table" => "almovconsdia_ingresos", "field" => "consumo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_tax"] ) ) {
			$lookupTableLinks["global_type_tax"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_tax"]["almovconsdia_ingresos.mcd_tax"] )) {
			$lookupTableLinks["global_type_tax"]["almovconsdia_ingresos.mcd_tax"] = array();
		}
		$lookupTableLinks["global_type_tax"]["almovconsdia_ingresos.mcd_tax"]["edit"] = array("table" => "almovconsdia_ingresos", "field" => "mcd_tax", "page" => "edit");
		if( !isset( $lookupTableLinks["alcuentasalma"] ) ) {
			$lookupTableLinks["alcuentasalma"] = array();
		}
		if( !isset( $lookupTableLinks["alcuentasalma"]["alelemconsumo_consulta.eccuenta"] )) {
			$lookupTableLinks["alcuentasalma"]["alelemconsumo_consulta.eccuenta"] = array();
		}
		$lookupTableLinks["alcuentasalma"]["alelemconsumo_consulta.eccuenta"]["edit"] = array("table" => "alelemconsumo_consulta", "field" => "eccuenta", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_alelemconsumo"] ) ) {
			$lookupTableLinks["q_ctrl_alelemconsumo"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_alelemconsumo"]["alelemconsumo_consulta.ec_codelem"] )) {
			$lookupTableLinks["q_ctrl_alelemconsumo"]["alelemconsumo_consulta.ec_codelem"] = array();
		}
		$lookupTableLinks["q_ctrl_alelemconsumo"]["alelemconsumo_consulta.ec_codelem"]["edit"] = array("table" => "alelemconsumo_consulta", "field" => "ec_codelem", "page" => "edit");
		if( !isset( $lookupTableLinks["geunidmedida"] ) ) {
			$lookupTableLinks["geunidmedida"] = array();
		}
		if( !isset( $lookupTableLinks["geunidmedida"]["alelemconsumo_consulta.ecunidad"] )) {
			$lookupTableLinks["geunidmedida"]["alelemconsumo_consulta.ecunidad"] = array();
		}
		$lookupTableLinks["geunidmedida"]["alelemconsumo_consulta.ecunidad"]["edit"] = array("table" => "alelemconsumo_consulta", "field" => "ecunidad", "page" => "edit");
		if( !isset( $lookupTableLinks["alasientos"] ) ) {
			$lookupTableLinks["alasientos"] = array();
		}
		if( !isset( $lookupTableLinks["alasientos"]["gedocumentos.as_nroasiento_fk"] )) {
			$lookupTableLinks["alasientos"]["gedocumentos.as_nroasiento_fk"] = array();
		}
		$lookupTableLinks["alasientos"]["gedocumentos.as_nroasiento_fk"]["edit"] = array("table" => "gedocumentos", "field" => "as_nroasiento_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos.do_tipomov"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos.do_tipomov"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos.do_tipomov"]["edit"] = array("table" => "gedocumentos", "field" => "do_tipomov", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["gedocumentos.doclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["gedocumentos.doclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["gedocumentos.doclasedoc"]["edit"] = array("table" => "gedocumentos", "field" => "doclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_legal"] ) ) {
			$lookupTableLinks["global_type_legal"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_legal"]["gedocumentos.do_legaliza"] )) {
			$lookupTableLinks["global_type_legal"]["gedocumentos.do_legaliza"] = array();
		}
		$lookupTableLinks["global_type_legal"]["gedocumentos.do_legaliza"]["edit"] = array("table" => "gedocumentos", "field" => "do_legaliza", "page" => "edit");
		if( !isset( $lookupTableLinks["alconceptos"] ) ) {
			$lookupTableLinks["alconceptos"] = array();
		}
		if( !isset( $lookupTableLinks["alconceptos"]["gedocumentos.do_concepto"] )) {
			$lookupTableLinks["alconceptos"]["gedocumentos.do_concepto"] = array();
		}
		$lookupTableLinks["alconceptos"]["gedocumentos.do_concepto"]["edit"] = array("table" => "gedocumentos", "field" => "do_concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estadoasientos"] ) ) {
			$lookupTableLinks["tparam_estadoasientos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estadoasientos"]["alasientos_gestion_e.as_estadoasien"] )) {
			$lookupTableLinks["tparam_estadoasientos"]["alasientos_gestion_e.as_estadoasien"] = array();
		}
		$lookupTableLinks["tparam_estadoasientos"]["alasientos_gestion_e.as_estadoasien"]["edit"] = array("table" => "alasientos_gestion_e", "field" => "as_estadoasien", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["alasientos_gestion_e.ascodalmacen"] )) {
			$lookupTableLinks["inv_almacen"]["alasientos_gestion_e.ascodalmacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["alasientos_gestion_e.ascodalmacen"]["edit"] = array("table" => "alasientos_gestion_e", "field" => "ascodalmacen", "page" => "edit");
		if( !isset( $lookupTableLinks["alasientos_gestion"] ) ) {
			$lookupTableLinks["alasientos_gestion"] = array();
		}
		if( !isset( $lookupTableLinks["alasientos_gestion"]["gedocumentos_egresos.as_nroasiento_fk"] )) {
			$lookupTableLinks["alasientos_gestion"]["gedocumentos_egresos.as_nroasiento_fk"] = array();
		}
		$lookupTableLinks["alasientos_gestion"]["gedocumentos_egresos.as_nroasiento_fk"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "as_nroasiento_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"] ) ) {
			$lookupTableLinks["q_ctrl_numdocumento"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_egresos.docodregion"] )) {
			$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_egresos.docodregion"] = array();
		}
		$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_egresos.docodregion"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "docodregion", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_doc"] ) ) {
			$lookupTableLinks["global_type_doc"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_doc"]["gedocumentos_egresos.do_tipodoc"] )) {
			$lookupTableLinks["global_type_doc"]["gedocumentos_egresos.do_tipodoc"] = array();
		}
		$lookupTableLinks["global_type_doc"]["gedocumentos_egresos.do_tipodoc"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "do_tipodoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_egresos.do_tipomov"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_egresos.do_tipomov"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_egresos.do_tipomov"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "do_tipomov", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master_proveedores"] ) ) {
			$lookupTableLinks["contractor_master_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master_proveedores"]["gedocumentos_egresos.doccnit"] )) {
			$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_egresos.doccnit"] = array();
		}
		$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_egresos.doccnit"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "doccnit", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["gedocumentos_egresos.doclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["gedocumentos_egresos.doclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["gedocumentos_egresos.doclasedoc"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "doclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["alconceptos"] ) ) {
			$lookupTableLinks["alconceptos"] = array();
		}
		if( !isset( $lookupTableLinks["alconceptos"]["gedocumentos_egresos.do_concepto"] )) {
			$lookupTableLinks["alconceptos"]["gedocumentos_egresos.do_concepto"] = array();
		}
		$lookupTableLinks["alconceptos"]["gedocumentos_egresos.do_concepto"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "do_concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["gedocumentos_egresos.do_dep"] )) {
			$lookupTableLinks["dependencia"]["gedocumentos_egresos.do_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["gedocumentos_egresos.do_dep"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "do_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["gedocumentos_egresos.do_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["gedocumentos_egresos.do_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["gedocumentos_egresos.do_depsup"]["edit"] = array("table" => "gedocumentos_egresos", "field" => "do_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["alasientos_gestion"] ) ) {
			$lookupTableLinks["alasientos_gestion"] = array();
		}
		if( !isset( $lookupTableLinks["alasientos_gestion"]["gedocumentos_egresos_consumo.as_nroasiento_fk"] )) {
			$lookupTableLinks["alasientos_gestion"]["gedocumentos_egresos_consumo.as_nroasiento_fk"] = array();
		}
		$lookupTableLinks["alasientos_gestion"]["gedocumentos_egresos_consumo.as_nroasiento_fk"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "as_nroasiento_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"] ) ) {
			$lookupTableLinks["q_ctrl_numdocumento"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_egresos_consumo.docodregion"] )) {
			$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_egresos_consumo.docodregion"] = array();
		}
		$lookupTableLinks["q_ctrl_numdocumento"]["gedocumentos_egresos_consumo.docodregion"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "docodregion", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_doc"] ) ) {
			$lookupTableLinks["global_type_doc"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_doc"]["gedocumentos_egresos_consumo.do_tipodoc"] )) {
			$lookupTableLinks["global_type_doc"]["gedocumentos_egresos_consumo.do_tipodoc"] = array();
		}
		$lookupTableLinks["global_type_doc"]["gedocumentos_egresos_consumo.do_tipodoc"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "do_tipodoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"] ) ) {
			$lookupTableLinks["tparam_tipo_movimiento"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_egresos_consumo.do_tipomov"] )) {
			$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_egresos_consumo.do_tipomov"] = array();
		}
		$lookupTableLinks["tparam_tipo_movimiento"]["gedocumentos_egresos_consumo.do_tipomov"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "do_tipomov", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master_proveedores"] ) ) {
			$lookupTableLinks["contractor_master_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master_proveedores"]["gedocumentos_egresos_consumo.doccnit"] )) {
			$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_egresos_consumo.doccnit"] = array();
		}
		$lookupTableLinks["contractor_master_proveedores"]["gedocumentos_egresos_consumo.doccnit"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "doccnit", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["gedocumentos_egresos_consumo.doclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["gedocumentos_egresos_consumo.doclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["gedocumentos_egresos_consumo.doclasedoc"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "doclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["alconceptos"] ) ) {
			$lookupTableLinks["alconceptos"] = array();
		}
		if( !isset( $lookupTableLinks["alconceptos"]["gedocumentos_egresos_consumo.do_concepto"] )) {
			$lookupTableLinks["alconceptos"]["gedocumentos_egresos_consumo.do_concepto"] = array();
		}
		$lookupTableLinks["alconceptos"]["gedocumentos_egresos_consumo.do_concepto"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "do_concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["gedocumentos_egresos_consumo.do_dep"] )) {
			$lookupTableLinks["dependencia"]["gedocumentos_egresos_consumo.do_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["gedocumentos_egresos_consumo.do_dep"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "do_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["gedocumentos_egresos_consumo.do_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["gedocumentos_egresos_consumo.do_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["gedocumentos_egresos_consumo.do_depsup"]["edit"] = array("table" => "gedocumentos_egresos_consumo", "field" => "do_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["gedocumentos_egresos"] ) ) {
			$lookupTableLinks["gedocumentos_egresos"] = array();
		}
		if( !isset( $lookupTableLinks["gedocumentos_egresos"]["aldevindiv_egresos.doclasedoc_id_fk"] )) {
			$lookupTableLinks["gedocumentos_egresos"]["aldevindiv_egresos.doclasedoc_id_fk"] = array();
		}
		$lookupTableLinks["gedocumentos_egresos"]["aldevindiv_egresos.doclasedoc_id_fk"]["edit"] = array("table" => "aldevindiv_egresos", "field" => "doclasedoc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["almovinddia_legalizados"] ) ) {
			$lookupTableLinks["almovinddia_legalizados"] = array();
		}
		if( !isset( $lookupTableLinks["almovinddia_legalizados"]["aldevindiv_egresos.almovinddia_id_fk"] )) {
			$lookupTableLinks["almovinddia_legalizados"]["aldevindiv_egresos.almovinddia_id_fk"] = array();
		}
		$lookupTableLinks["almovinddia_legalizados"]["aldevindiv_egresos.almovinddia_id_fk"]["edit"] = array("table" => "aldevindiv_egresos", "field" => "almovinddia_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["aldevindiv_egresos.di_almacen"] )) {
			$lookupTableLinks["inv_almacen"]["aldevindiv_egresos.di_almacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["aldevindiv_egresos.di_almacen"]["edit"] = array("table" => "aldevindiv_egresos", "field" => "di_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["aldevindiv_egresos.di_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["aldevindiv_egresos.di_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["aldevindiv_egresos.di_depsup"]["edit"] = array("table" => "aldevindiv_egresos", "field" => "di_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["aldevindiv_egresos.di_dep"] )) {
			$lookupTableLinks["dependencia"]["aldevindiv_egresos.di_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["aldevindiv_egresos.di_dep"]["edit"] = array("table" => "aldevindiv_egresos", "field" => "di_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["almovdevdia"] ) ) {
			$lookupTableLinks["almovdevdia"] = array();
		}
		if( !isset( $lookupTableLinks["almovdevdia"]["aldevindiv_egresos.almovdevdia_id_fk"] )) {
			$lookupTableLinks["almovdevdia"]["aldevindiv_egresos.almovdevdia_id_fk"] = array();
		}
		$lookupTableLinks["almovdevdia"]["aldevindiv_egresos.almovdevdia_id_fk"]["edit"] = array("table" => "aldevindiv_egresos", "field" => "almovdevdia_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_legal"] ) ) {
			$lookupTableLinks["global_type_legal"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_legal"]["almovinddia.md_legalizado"] )) {
			$lookupTableLinks["global_type_legal"]["almovinddia.md_legalizado"] = array();
		}
		$lookupTableLinks["global_type_legal"]["almovinddia.md_legalizado"]["edit"] = array("table" => "almovinddia", "field" => "md_legalizado", "page" => "edit");
		if( !isset( $lookupTableLinks["gedocumentos"] ) ) {
			$lookupTableLinks["gedocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["gedocumentos"]["almovinddia.doclasedoc_id_fk"] )) {
			$lookupTableLinks["gedocumentos"]["almovinddia.doclasedoc_id_fk"] = array();
		}
		$lookupTableLinks["gedocumentos"]["almovinddia.doclasedoc_id_fk"]["edit"] = array("table" => "almovinddia", "field" => "doclasedoc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["almovdevdia"] ) ) {
			$lookupTableLinks["almovdevdia"] = array();
		}
		if( !isset( $lookupTableLinks["almovdevdia"]["almovinddia.almovdevdia_id_fk"] )) {
			$lookupTableLinks["almovdevdia"]["almovinddia.almovdevdia_id_fk"] = array();
		}
		$lookupTableLinks["almovdevdia"]["almovinddia.almovdevdia_id_fk"]["edit"] = array("table" => "almovinddia", "field" => "almovdevdia_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["almovinddia.midclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["almovinddia.midclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["almovinddia.midclasedoc"]["edit"] = array("table" => "almovinddia", "field" => "midclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["almovinddia.midalmacen"] )) {
			$lookupTableLinks["inv_almacen"]["almovinddia.midalmacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["almovinddia.midalmacen"]["edit"] = array("table" => "almovinddia", "field" => "midalmacen", "page" => "edit");
		if( !isset( $lookupTableLinks["almovdevdia"] ) ) {
			$lookupTableLinks["almovdevdia"] = array();
		}
		if( !isset( $lookupTableLinks["almovdevdia"]["almovinddia_legalizados.almovdevdia_id_fk"] )) {
			$lookupTableLinks["almovdevdia"]["almovinddia_legalizados.almovdevdia_id_fk"] = array();
		}
		$lookupTableLinks["almovdevdia"]["almovinddia_legalizados.almovdevdia_id_fk"]["edit"] = array("table" => "almovinddia_legalizados", "field" => "almovdevdia_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["gedocumentos"] ) ) {
			$lookupTableLinks["gedocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["gedocumentos"]["almovinddia_legalizados.doclasedoc_id_fk"] )) {
			$lookupTableLinks["gedocumentos"]["almovinddia_legalizados.doclasedoc_id_fk"] = array();
		}
		$lookupTableLinks["gedocumentos"]["almovinddia_legalizados.doclasedoc_id_fk"]["edit"] = array("table" => "almovinddia_legalizados", "field" => "doclasedoc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_legal"] ) ) {
			$lookupTableLinks["global_type_legal"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_legal"]["almovinddia_legalizados.md_legalizado"] )) {
			$lookupTableLinks["global_type_legal"]["almovinddia_legalizados.md_legalizado"] = array();
		}
		$lookupTableLinks["global_type_legal"]["almovinddia_legalizados.md_legalizado"]["edit"] = array("table" => "almovinddia_legalizados", "field" => "md_legalizado", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["almovinddia_legalizados.midalmacen"] )) {
			$lookupTableLinks["inv_almacen"]["almovinddia_legalizados.midalmacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["almovinddia_legalizados.midalmacen"]["edit"] = array("table" => "almovinddia_legalizados", "field" => "midalmacen", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["almovinddia_legalizados.midclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["almovinddia_legalizados.midclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["almovinddia_legalizados.midclasedoc"]["edit"] = array("table" => "almovinddia_legalizados", "field" => "midclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["gedocumentos"] ) ) {
			$lookupTableLinks["gedocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["gedocumentos"]["almovdevdia.doclasedoc_id_fk"] )) {
			$lookupTableLinks["gedocumentos"]["almovdevdia.doclasedoc_id_fk"] = array();
		}
		$lookupTableLinks["gedocumentos"]["almovdevdia.doclasedoc_id_fk"]["edit"] = array("table" => "almovdevdia", "field" => "doclasedoc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_type_legal"] ) ) {
			$lookupTableLinks["global_type_legal"] = array();
		}
		if( !isset( $lookupTableLinks["global_type_legal"]["almovdevdia.legalizado"] )) {
			$lookupTableLinks["global_type_legal"]["almovdevdia.legalizado"] = array();
		}
		$lookupTableLinks["global_type_legal"]["almovdevdia.legalizado"]["edit"] = array("table" => "almovdevdia", "field" => "legalizado", "page" => "edit");
		if( !isset( $lookupTableLinks["geclasedocto"] ) ) {
			$lookupTableLinks["geclasedocto"] = array();
		}
		if( !isset( $lookupTableLinks["geclasedocto"]["almovdevdia.mddclasedoc"] )) {
			$lookupTableLinks["geclasedocto"]["almovdevdia.mddclasedoc"] = array();
		}
		$lookupTableLinks["geclasedocto"]["almovdevdia.mddclasedoc"]["edit"] = array("table" => "almovdevdia", "field" => "mddclasedoc", "page" => "edit");
		if( !isset( $lookupTableLinks["inv_almacen"] ) ) {
			$lookupTableLinks["inv_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["inv_almacen"]["almovdevdia.mddalmacen"] )) {
			$lookupTableLinks["inv_almacen"]["almovdevdia.mddalmacen"] = array();
		}
		$lookupTableLinks["inv_almacen"]["almovdevdia.mddalmacen"]["edit"] = array("table" => "almovdevdia", "field" => "mddalmacen", "page" => "edit");
}

?>