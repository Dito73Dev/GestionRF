<?php
$tdataq_global_enservicio = array();
$tdataq_global_enservicio[".searchableFields"] = array();
$tdataq_global_enservicio[".ShortName"] = "q_global_enservicio";
$tdataq_global_enservicio[".OwnerID"] = "";
$tdataq_global_enservicio[".OriginalTable"] = "q_global_enservicio";


$tdataq_global_enservicio[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_global_enservicio[".originalPagesByType"] = $tdataq_global_enservicio[".pagesByType"];
$tdataq_global_enservicio[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_global_enservicio[".originalPages"] = $tdataq_global_enservicio[".pages"];
$tdataq_global_enservicio[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_global_enservicio[".originalDefaultPages"] = $tdataq_global_enservicio[".defaultPages"];

//	field labels
$fieldLabelsq_global_enservicio = array();
$fieldToolTipsq_global_enservicio = array();
$pageTitlesq_global_enservicio = array();
$placeHoldersq_global_enservicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_global_enservicio["Spanish"] = array();
	$fieldToolTipsq_global_enservicio["Spanish"] = array();
	$placeHoldersq_global_enservicio["Spanish"] = array();
	$pageTitlesq_global_enservicio["Spanish"] = array();
	$fieldLabelsq_global_enservicio["Spanish"]["aldevindiv_id"] = "Aldevindiv Id";
	$fieldToolTipsq_global_enservicio["Spanish"]["aldevindiv_id"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["aldevindiv_id"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["almovinddia_id"] = "Almovinddia Id";
	$fieldToolTipsq_global_enservicio["Spanish"]["almovinddia_id"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["almovinddia_id"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["ca_nomcuenta"] = "Ca Nomcuenta";
	$fieldToolTipsq_global_enservicio["Spanish"]["ca_nomcuenta"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["ca_nomcuenta"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["cod_cta"] = "Cod Cta";
	$fieldToolTipsq_global_enservicio["Spanish"]["cod_cta"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["cod_cta"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_fechacompra"] = "Di Fechacompra";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_fechacompra"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_fechacompra"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_nroplaca"] = "Di Nroplaca";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_nroplaca"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_nroplaca"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_nroplacastma"] = "Di Nroplacastma";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_nroplacastma"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_nroplacastma"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_nroserie"] = "Di Nroserie";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_nroserie"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_nroserie"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_ubica"] = "Di Ubica";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_ubica"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_ubica"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_valorcompra"] = "Di Valorcompra";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_valorcompra"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_valorcompra"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["di_valorultmovto"] = "Di Valorultmovto";
	$fieldToolTipsq_global_enservicio["Spanish"]["di_valorultmovto"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["di_valorultmovto"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["dialmacen"] = "Dialmacen";
	$fieldToolTipsq_global_enservicio["Spanish"]["dialmacen"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["dialmacen"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["dicodelem"] = "Dicodelem";
	$fieldToolTipsq_global_enservicio["Spanish"]["dicodelem"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["dicodelem"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["dicuenta"] = "Dicuenta";
	$fieldToolTipsq_global_enservicio["Spanish"]["dicuenta"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["dicuenta"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["difuncionario"] = "Difuncionario";
	$fieldToolTipsq_global_enservicio["Spanish"]["difuncionario"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["difuncionario"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["ed_nomelemento"] = "Ed Nomelemento";
	$fieldToolTipsq_global_enservicio["Spanish"]["ed_nomelemento"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["ed_nomelemento"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["edmarca"] = "Edmarca";
	$fieldToolTipsq_global_enservicio["Spanish"]["edmarca"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["edmarca"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["edunidad"] = "Edunidad";
	$fieldToolTipsq_global_enservicio["Spanish"]["edunidad"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["edunidad"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["func_dep"] = "Func Dep";
	$fieldToolTipsq_global_enservicio["Spanish"]["func_dep"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["func_dep"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["func_email"] = "Func Email";
	$fieldToolTipsq_global_enservicio["Spanish"]["func_email"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["func_email"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["func_nombres"] = "Func Nombres";
	$fieldToolTipsq_global_enservicio["Spanish"]["func_nombres"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["func_nombres"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["func_tipovinc"] = "Func Tipovinc";
	$fieldToolTipsq_global_enservicio["Spanish"]["func_tipovinc"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["func_tipovinc"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["idusrglobal_fk"] = "Idusrglobal Fk";
	$fieldToolTipsq_global_enservicio["Spanish"]["idusrglobal_fk"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["idusrglobal_fk"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["ma_nommarca"] = "Ma Nommarca";
	$fieldToolTipsq_global_enservicio["Spanish"]["ma_nommarca"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["ma_nommarca"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["mod_trasnporte"] = "Mod Trasnporte";
	$fieldToolTipsq_global_enservicio["Spanish"]["mod_trasnporte"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["mod_trasnporte"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_basedepreciable"] = "Nicsp Basedepreciable";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_basedepreciable"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_basedepreciable"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_codigo_ppe"] = "Nicsp Codigo Ppe";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_codigo_ppe"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_codigo_ppe"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_costo"] = "Nicsp Costo";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_costo"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_costo"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_costodesmant"] = "Nicsp Costodesmant";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_costodesmant"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_costodesmant"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_depreciaacumulada"] = "Nicsp Depreciaacumulada";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_depreciaacumulada"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_depreciaacumulada"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_depreciamensual"] = "Nicsp Depreciamensual";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_depreciamensual"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_depreciamensual"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_dias"] = "Nicsp Dias";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_dias"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_dias"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_fechacorte"] = "Nicsp Fechacorte";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_fechacorte"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_fechacorte"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_meses"] = "Nicsp Meses";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_meses"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_meses"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_politicamaterialidad"] = "Nicsp Politicamaterialidad";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_politicamaterialidad"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_politicamaterialidad"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_valordeterioro"] = "Nicsp Valordeterioro";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_valordeterioro"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_valordeterioro"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_valorresidual"] = "Nicsp Valorresidual";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_valorresidual"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_valorresidual"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_vidautil"] = "Nicsp Vidautil";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_vidautil"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_vidautil"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_vigenciapm"] = "Nicsp Vigenciapm";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_vigenciapm"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_vigenciapm"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["nicsp_vnl"] = "Nicsp Vnl";
	$fieldToolTipsq_global_enservicio["Spanish"]["nicsp_vnl"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["nicsp_vnl"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsq_global_enservicio["Spanish"]["Observaciones"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["Observaciones"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsq_global_enservicio["Spanish"]["sys_date"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["sys_date"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["sys_sts"] = "Sys Sts";
	$fieldToolTipsq_global_enservicio["Spanish"]["sys_sts"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["sys_sts"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["sys_time"] = "Sys Time";
	$fieldToolTipsq_global_enservicio["Spanish"]["sys_time"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["sys_time"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsq_global_enservicio["Spanish"]["sys_user"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["sys_user"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["upd_date"] = "Upd Date";
	$fieldToolTipsq_global_enservicio["Spanish"]["upd_date"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["upd_date"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["upd_status"] = "Upd Status";
	$fieldToolTipsq_global_enservicio["Spanish"]["upd_status"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["upd_status"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["upd_user"] = "Upd User";
	$fieldToolTipsq_global_enservicio["Spanish"]["upd_user"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["upd_user"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["verifica_date"] = "Verifica Date";
	$fieldToolTipsq_global_enservicio["Spanish"]["verifica_date"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["verifica_date"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["verifica_status"] = "Verifica Status";
	$fieldToolTipsq_global_enservicio["Spanish"]["verifica_status"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["verifica_status"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["verifica_user"] = "Verifica User";
	$fieldToolTipsq_global_enservicio["Spanish"]["verifica_user"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["verifica_user"] = "";
	$fieldLabelsq_global_enservicio["Spanish"]["VRMEJORA"] = "VRMEJORA";
	$fieldToolTipsq_global_enservicio["Spanish"]["VRMEJORA"] = "";
	$placeHoldersq_global_enservicio["Spanish"]["VRMEJORA"] = "";
	if (count($fieldToolTipsq_global_enservicio["Spanish"]))
		$tdataq_global_enservicio[".isUseToolTips"] = true;
}


	$tdataq_global_enservicio[".NCSearch"] = true;



$tdataq_global_enservicio[".shortTableName"] = "q_global_enservicio";
$tdataq_global_enservicio[".nSecOptions"] = 0;

$tdataq_global_enservicio[".mainTableOwnerID"] = "";
$tdataq_global_enservicio[".entityType"] = 0;
$tdataq_global_enservicio[".connId"] = "dbrf_at_127_0_0_1";


$tdataq_global_enservicio[".strOriginalTableName"] = "q_global_enservicio";

	



$tdataq_global_enservicio[".showAddInPopup"] = false;

$tdataq_global_enservicio[".showEditInPopup"] = false;

$tdataq_global_enservicio[".showViewInPopup"] = false;

$tdataq_global_enservicio[".listAjax"] = false;
//	temporary
//$tdataq_global_enservicio[".listAjax"] = false;

	$tdataq_global_enservicio[".audit"] = false;

	$tdataq_global_enservicio[".locking"] = false;


$pages = $tdataq_global_enservicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_global_enservicio[".edit"] = true;
	$tdataq_global_enservicio[".afterEditAction"] = 1;
	$tdataq_global_enservicio[".closePopupAfterEdit"] = 1;
	$tdataq_global_enservicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_global_enservicio[".add"] = true;
$tdataq_global_enservicio[".afterAddAction"] = 1;
$tdataq_global_enservicio[".closePopupAfterAdd"] = 1;
$tdataq_global_enservicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_global_enservicio[".list"] = true;
}



$tdataq_global_enservicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_global_enservicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_global_enservicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_global_enservicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_global_enservicio[".printFriendly"] = true;
}



$tdataq_global_enservicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_global_enservicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_global_enservicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_global_enservicio[".isUseAjaxSuggest"] = true;



												

$tdataq_global_enservicio[".ajaxCodeSnippetAdded"] = false;

$tdataq_global_enservicio[".buttonsAdded"] = false;

$tdataq_global_enservicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_global_enservicio[".isUseTimeForSearch"] = false;


$tdataq_global_enservicio[".badgeColor"] = "00C2C5";


$tdataq_global_enservicio[".allSearchFields"] = array();
$tdataq_global_enservicio[".filterFields"] = array();
$tdataq_global_enservicio[".requiredSearchFields"] = array();

$tdataq_global_enservicio[".googleLikeFields"] = array();
$tdataq_global_enservicio[".googleLikeFields"][] = "aldevindiv_id";
$tdataq_global_enservicio[".googleLikeFields"][] = "almovinddia_id";
$tdataq_global_enservicio[".googleLikeFields"][] = "ca_nomcuenta";
$tdataq_global_enservicio[".googleLikeFields"][] = "cod_cta";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_fechacompra";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_nroplaca";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_nroplacastma";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_nroserie";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_ubica";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_valorcompra";
$tdataq_global_enservicio[".googleLikeFields"][] = "di_valorultmovto";
$tdataq_global_enservicio[".googleLikeFields"][] = "dialmacen";
$tdataq_global_enservicio[".googleLikeFields"][] = "dicodelem";
$tdataq_global_enservicio[".googleLikeFields"][] = "dicuenta";
$tdataq_global_enservicio[".googleLikeFields"][] = "difuncionario";
$tdataq_global_enservicio[".googleLikeFields"][] = "ed_nomelemento";
$tdataq_global_enservicio[".googleLikeFields"][] = "edmarca";
$tdataq_global_enservicio[".googleLikeFields"][] = "edunidad";
$tdataq_global_enservicio[".googleLikeFields"][] = "func_dep";
$tdataq_global_enservicio[".googleLikeFields"][] = "func_email";
$tdataq_global_enservicio[".googleLikeFields"][] = "func_nombres";
$tdataq_global_enservicio[".googleLikeFields"][] = "func_tipovinc";
$tdataq_global_enservicio[".googleLikeFields"][] = "idusrglobal_fk";
$tdataq_global_enservicio[".googleLikeFields"][] = "ma_nommarca";
$tdataq_global_enservicio[".googleLikeFields"][] = "mod_trasnporte";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_basedepreciable";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_codigo_ppe";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_costo";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_costodesmant";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_depreciaacumulada";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_depreciamensual";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_dias";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_fechacorte";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_meses";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_politicamaterialidad";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_valordeterioro";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_valorresidual";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_vidautil";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_vigenciapm";
$tdataq_global_enservicio[".googleLikeFields"][] = "nicsp_vnl";
$tdataq_global_enservicio[".googleLikeFields"][] = "Observaciones";
$tdataq_global_enservicio[".googleLikeFields"][] = "sys_date";
$tdataq_global_enservicio[".googleLikeFields"][] = "sys_sts";
$tdataq_global_enservicio[".googleLikeFields"][] = "sys_time";
$tdataq_global_enservicio[".googleLikeFields"][] = "sys_user";
$tdataq_global_enservicio[".googleLikeFields"][] = "upd_date";
$tdataq_global_enservicio[".googleLikeFields"][] = "upd_status";
$tdataq_global_enservicio[".googleLikeFields"][] = "upd_user";
$tdataq_global_enservicio[".googleLikeFields"][] = "verifica_date";
$tdataq_global_enservicio[".googleLikeFields"][] = "verifica_status";
$tdataq_global_enservicio[".googleLikeFields"][] = "verifica_user";
$tdataq_global_enservicio[".googleLikeFields"][] = "VRMEJORA";



$tdataq_global_enservicio[".tableType"] = "list";

$tdataq_global_enservicio[".printerPageOrientation"] = 0;
$tdataq_global_enservicio[".nPrinterPageScale"] = 100;

$tdataq_global_enservicio[".nPrinterSplitRecords"] = 40;

$tdataq_global_enservicio[".geocodingEnabled"] = false;










$tdataq_global_enservicio[".pageSize"] = 20;

$tdataq_global_enservicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_global_enservicio[".strOrderBy"] = $tstrOrderBy;

$tdataq_global_enservicio[".orderindexes"] = array();


$tdataq_global_enservicio[".sqlHead"] = "SELECT aldevindiv_id,  	almovinddia_id,  	ca_nomcuenta,  	cod_cta,  	di_fechacompra,  	di_nroplaca,  	di_nroplacastma,  	di_nroserie,  	di_ubica,  	di_valorcompra,  	di_valorultmovto,  	dialmacen,  	dicodelem,  	dicuenta,  	difuncionario,  	ed_nomelemento,  	edmarca,  	edunidad,  	func_dep,  	func_email,  	func_nombres,  	func_tipovinc,  	idusrglobal_fk,  	ma_nommarca,  	mod_trasnporte,  	nicsp_basedepreciable,  	nicsp_codigo_ppe,  	nicsp_costo,  	nicsp_costodesmant,  	nicsp_depreciaacumulada,  	nicsp_depreciamensual,  	nicsp_dias,  	nicsp_fechacorte,  	nicsp_meses,  	nicsp_politicamaterialidad,  	nicsp_valordeterioro,  	nicsp_valorresidual,  	nicsp_vidautil,  	nicsp_vigenciapm,  	nicsp_vnl,  	Observaciones,  	sys_date,  	sys_sts,  	sys_time,  	sys_user,  	upd_date,  	upd_status,  	upd_user,  	verifica_date,  	verifica_status,  	verifica_user,  	VRMEJORA";
$tdataq_global_enservicio[".sqlFrom"] = "FROM q_global_enservicio";
$tdataq_global_enservicio[".sqlWhereExpr"] = "";
$tdataq_global_enservicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_global_enservicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_global_enservicio[".arrGroupsPerPage"] = $arrGPP;

$tdataq_global_enservicio[".highlightSearchResults"] = true;

$tableKeysq_global_enservicio = array();
$tdataq_global_enservicio[".Keys"] = $tableKeysq_global_enservicio;


$tdataq_global_enservicio[".hideMobileList"] = array();




//	aldevindiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aldevindiv_id";
	$fdata["GoodName"] = "aldevindiv_id";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","aldevindiv_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aldevindiv_id";

		$fdata["sourceSingle"] = "aldevindiv_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["aldevindiv_id"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "aldevindiv_id";
//	almovinddia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "almovinddia_id";
	$fdata["GoodName"] = "almovinddia_id";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","almovinddia_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovinddia_id";

		$fdata["sourceSingle"] = "almovinddia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovinddia_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["almovinddia_id"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "almovinddia_id";
//	ca_nomcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ca_nomcuenta";
	$fdata["GoodName"] = "ca_nomcuenta";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","ca_nomcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ca_nomcuenta";

		$fdata["sourceSingle"] = "ca_nomcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca_nomcuenta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["ca_nomcuenta"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "ca_nomcuenta";
//	cod_cta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cod_cta";
	$fdata["GoodName"] = "cod_cta";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","cod_cta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_cta";

		$fdata["sourceSingle"] = "cod_cta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_cta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["cod_cta"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "cod_cta";
//	di_fechacompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "di_fechacompra";
	$fdata["GoodName"] = "di_fechacompra";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_fechacompra");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "di_fechacompra";

		$fdata["sourceSingle"] = "di_fechacompra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_fechacompra";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_fechacompra"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_fechacompra";
//	di_nroplaca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "di_nroplaca";
	$fdata["GoodName"] = "di_nroplaca";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_nroplaca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "di_nroplaca";

		$fdata["sourceSingle"] = "di_nroplaca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_nroplaca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_nroplaca"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_nroplaca";
//	di_nroplacastma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "di_nroplacastma";
	$fdata["GoodName"] = "di_nroplacastma";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_nroplacastma");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "di_nroplacastma";

		$fdata["sourceSingle"] = "di_nroplacastma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_nroplacastma";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_nroplacastma"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_nroplacastma";
//	di_nroserie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "di_nroserie";
	$fdata["GoodName"] = "di_nroserie";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_nroserie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "di_nroserie";

		$fdata["sourceSingle"] = "di_nroserie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_nroserie";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_nroserie"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_nroserie";
//	di_ubica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "di_ubica";
	$fdata["GoodName"] = "di_ubica";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_ubica");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_ubica";

		$fdata["sourceSingle"] = "di_ubica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_ubica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_ubica"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_ubica";
//	di_valorcompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "di_valorcompra";
	$fdata["GoodName"] = "di_valorcompra";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_valorcompra");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "di_valorcompra";

		$fdata["sourceSingle"] = "di_valorcompra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_valorcompra";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_valorcompra"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_valorcompra";
//	di_valorultmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "di_valorultmovto";
	$fdata["GoodName"] = "di_valorultmovto";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","di_valorultmovto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "di_valorultmovto";

		$fdata["sourceSingle"] = "di_valorultmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_valorultmovto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["di_valorultmovto"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "di_valorultmovto";
//	dialmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dialmacen";
	$fdata["GoodName"] = "dialmacen";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","dialmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dialmacen";

		$fdata["sourceSingle"] = "dialmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialmacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["dialmacen"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "dialmacen";
//	dicodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "dicodelem";
	$fdata["GoodName"] = "dicodelem";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","dicodelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dicodelem";

		$fdata["sourceSingle"] = "dicodelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dicodelem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["dicodelem"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "dicodelem";
//	dicuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dicuenta";
	$fdata["GoodName"] = "dicuenta";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","dicuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dicuenta";

		$fdata["sourceSingle"] = "dicuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dicuenta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["dicuenta"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "dicuenta";
//	difuncionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "difuncionario";
	$fdata["GoodName"] = "difuncionario";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","difuncionario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "difuncionario";

		$fdata["sourceSingle"] = "difuncionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "difuncionario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["difuncionario"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "difuncionario";
//	ed_nomelemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ed_nomelemento";
	$fdata["GoodName"] = "ed_nomelemento";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","ed_nomelemento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ed_nomelemento";

		$fdata["sourceSingle"] = "ed_nomelemento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ed_nomelemento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=800";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["ed_nomelemento"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "ed_nomelemento";
//	edmarca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "edmarca";
	$fdata["GoodName"] = "edmarca";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","edmarca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edmarca";

		$fdata["sourceSingle"] = "edmarca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edmarca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["edmarca"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "edmarca";
//	edunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "edunidad";
	$fdata["GoodName"] = "edunidad";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","edunidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edunidad";

		$fdata["sourceSingle"] = "edunidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edunidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["edunidad"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "edunidad";
//	func_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "func_dep";
	$fdata["GoodName"] = "func_dep";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","func_dep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "func_dep";

		$fdata["sourceSingle"] = "func_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "func_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["func_dep"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "func_dep";
//	func_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "func_email";
	$fdata["GoodName"] = "func_email";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","func_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "func_email";

		$fdata["sourceSingle"] = "func_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "func_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["func_email"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "func_email";
//	func_nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "func_nombres";
	$fdata["GoodName"] = "func_nombres";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","func_nombres");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "func_nombres";

		$fdata["sourceSingle"] = "func_nombres";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "func_nombres";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["func_nombres"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "func_nombres";
//	func_tipovinc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "func_tipovinc";
	$fdata["GoodName"] = "func_tipovinc";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","func_tipovinc");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "func_tipovinc";

		$fdata["sourceSingle"] = "func_tipovinc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "func_tipovinc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["func_tipovinc"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "func_tipovinc";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","idusrglobal_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idusrglobal_fk";

		$fdata["sourceSingle"] = "idusrglobal_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["idusrglobal_fk"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "idusrglobal_fk";
//	ma_nommarca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ma_nommarca";
	$fdata["GoodName"] = "ma_nommarca";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","ma_nommarca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ma_nommarca";

		$fdata["sourceSingle"] = "ma_nommarca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ma_nommarca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["ma_nommarca"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "ma_nommarca";
//	mod_trasnporte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "mod_trasnporte";
	$fdata["GoodName"] = "mod_trasnporte";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","mod_trasnporte");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "mod_trasnporte";

		$fdata["sourceSingle"] = "mod_trasnporte";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_trasnporte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["mod_trasnporte"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "mod_trasnporte";
//	nicsp_basedepreciable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nicsp_basedepreciable";
	$fdata["GoodName"] = "nicsp_basedepreciable";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_basedepreciable");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_basedepreciable";

		$fdata["sourceSingle"] = "nicsp_basedepreciable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_basedepreciable";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_basedepreciable"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_basedepreciable";
//	nicsp_codigo_ppe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nicsp_codigo_ppe";
	$fdata["GoodName"] = "nicsp_codigo_ppe";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_codigo_ppe");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "nicsp_codigo_ppe";

		$fdata["sourceSingle"] = "nicsp_codigo_ppe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_codigo_ppe";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_codigo_ppe"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_codigo_ppe";
//	nicsp_costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "nicsp_costo";
	$fdata["GoodName"] = "nicsp_costo";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_costo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_costo";

		$fdata["sourceSingle"] = "nicsp_costo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_costo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_costo"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_costo";
//	nicsp_costodesmant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "nicsp_costodesmant";
	$fdata["GoodName"] = "nicsp_costodesmant";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_costodesmant");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_costodesmant";

		$fdata["sourceSingle"] = "nicsp_costodesmant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_costodesmant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_costodesmant"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_costodesmant";
//	nicsp_depreciaacumulada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "nicsp_depreciaacumulada";
	$fdata["GoodName"] = "nicsp_depreciaacumulada";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_depreciaacumulada");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_depreciaacumulada";

		$fdata["sourceSingle"] = "nicsp_depreciaacumulada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_depreciaacumulada";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_depreciaacumulada"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_depreciaacumulada";
//	nicsp_depreciamensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "nicsp_depreciamensual";
	$fdata["GoodName"] = "nicsp_depreciamensual";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_depreciamensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_depreciamensual";

		$fdata["sourceSingle"] = "nicsp_depreciamensual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_depreciamensual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_depreciamensual"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_depreciamensual";
//	nicsp_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "nicsp_dias";
	$fdata["GoodName"] = "nicsp_dias";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_dias");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_dias";

		$fdata["sourceSingle"] = "nicsp_dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_dias";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 15;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_dias"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_dias";
//	nicsp_fechacorte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "nicsp_fechacorte";
	$fdata["GoodName"] = "nicsp_fechacorte";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_fechacorte");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "nicsp_fechacorte";

		$fdata["sourceSingle"] = "nicsp_fechacorte";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_fechacorte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_fechacorte"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_fechacorte";
//	nicsp_meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "nicsp_meses";
	$fdata["GoodName"] = "nicsp_meses";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_meses");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_meses";

		$fdata["sourceSingle"] = "nicsp_meses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_meses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 15;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_meses"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_meses";
//	nicsp_politicamaterialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "nicsp_politicamaterialidad";
	$fdata["GoodName"] = "nicsp_politicamaterialidad";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_politicamaterialidad");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "nicsp_politicamaterialidad";

		$fdata["sourceSingle"] = "nicsp_politicamaterialidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_politicamaterialidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_politicamaterialidad"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_politicamaterialidad";
//	nicsp_valordeterioro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "nicsp_valordeterioro";
	$fdata["GoodName"] = "nicsp_valordeterioro";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_valordeterioro");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_valordeterioro";

		$fdata["sourceSingle"] = "nicsp_valordeterioro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_valordeterioro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_valordeterioro"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_valordeterioro";
//	nicsp_valorresidual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "nicsp_valorresidual";
	$fdata["GoodName"] = "nicsp_valorresidual";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_valorresidual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_valorresidual";

		$fdata["sourceSingle"] = "nicsp_valorresidual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_valorresidual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_valorresidual"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_valorresidual";
//	nicsp_vidautil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "nicsp_vidautil";
	$fdata["GoodName"] = "nicsp_vidautil";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_vidautil");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_vidautil";

		$fdata["sourceSingle"] = "nicsp_vidautil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_vidautil";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_vidautil"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_vidautil";
//	nicsp_vigenciapm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "nicsp_vigenciapm";
	$fdata["GoodName"] = "nicsp_vigenciapm";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_vigenciapm");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "nicsp_vigenciapm";

		$fdata["sourceSingle"] = "nicsp_vigenciapm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_vigenciapm";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_vigenciapm"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_vigenciapm";
//	nicsp_vnl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "nicsp_vnl";
	$fdata["GoodName"] = "nicsp_vnl";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","nicsp_vnl");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_vnl";

		$fdata["sourceSingle"] = "nicsp_vnl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_vnl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["nicsp_vnl"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "nicsp_vnl";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["Observaciones"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "Observaciones";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["sys_date"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "sys_date";
//	sys_sts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "sys_sts";
	$fdata["GoodName"] = "sys_sts";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","sys_sts");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "sys_sts";

		$fdata["sourceSingle"] = "sys_sts";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_sts";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["sys_sts"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "sys_sts";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","sys_time");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_time";

		$fdata["sourceSingle"] = "sys_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["sys_time"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "sys_time";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["sys_user"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "sys_user";
//	upd_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "upd_date";
	$fdata["GoodName"] = "upd_date";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","upd_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "upd_date";

		$fdata["sourceSingle"] = "upd_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upd_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["upd_date"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "upd_date";
//	upd_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "upd_status";
	$fdata["GoodName"] = "upd_status";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","upd_status");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "upd_status";

		$fdata["sourceSingle"] = "upd_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upd_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["upd_status"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "upd_status";
//	upd_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "upd_user";
	$fdata["GoodName"] = "upd_user";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","upd_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "upd_user";

		$fdata["sourceSingle"] = "upd_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upd_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["upd_user"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "upd_user";
//	verifica_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "verifica_date";
	$fdata["GoodName"] = "verifica_date";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","verifica_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "verifica_date";

		$fdata["sourceSingle"] = "verifica_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "verifica_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["verifica_date"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "verifica_date";
//	verifica_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "verifica_status";
	$fdata["GoodName"] = "verifica_status";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","verifica_status");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "verifica_status";

		$fdata["sourceSingle"] = "verifica_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "verifica_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["verifica_status"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "verifica_status";
//	verifica_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "verifica_user";
	$fdata["GoodName"] = "verifica_user";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","verifica_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "verifica_user";

		$fdata["sourceSingle"] = "verifica_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "verifica_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["verifica_user"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "verifica_user";
//	VRMEJORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "VRMEJORA";
	$fdata["GoodName"] = "VRMEJORA";
	$fdata["ownerTable"] = "q_global_enservicio";
	$fdata["Label"] = GetFieldLabel("q_global_enservicio","VRMEJORA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VRMEJORA";

		$fdata["sourceSingle"] = "VRMEJORA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VRMEJORA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_global_enservicio["VRMEJORA"] = $fdata;
		$tdataq_global_enservicio[".searchableFields"][] = "VRMEJORA";


$tables_data["q_global_enservicio"]=&$tdataq_global_enservicio;
$field_labels["q_global_enservicio"] = &$fieldLabelsq_global_enservicio;
$fieldToolTips["q_global_enservicio"] = &$fieldToolTipsq_global_enservicio;
$placeHolders["q_global_enservicio"] = &$placeHoldersq_global_enservicio;
$page_titles["q_global_enservicio"] = &$pageTitlesq_global_enservicio;


changeTextControlsToDate( "q_global_enservicio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_global_enservicio"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_global_enservicio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_global_enservicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aldevindiv_id,  	almovinddia_id,  	ca_nomcuenta,  	cod_cta,  	di_fechacompra,  	di_nroplaca,  	di_nroplacastma,  	di_nroserie,  	di_ubica,  	di_valorcompra,  	di_valorultmovto,  	dialmacen,  	dicodelem,  	dicuenta,  	difuncionario,  	ed_nomelemento,  	edmarca,  	edunidad,  	func_dep,  	func_email,  	func_nombres,  	func_tipovinc,  	idusrglobal_fk,  	ma_nommarca,  	mod_trasnporte,  	nicsp_basedepreciable,  	nicsp_codigo_ppe,  	nicsp_costo,  	nicsp_costodesmant,  	nicsp_depreciaacumulada,  	nicsp_depreciamensual,  	nicsp_dias,  	nicsp_fechacorte,  	nicsp_meses,  	nicsp_politicamaterialidad,  	nicsp_valordeterioro,  	nicsp_valorresidual,  	nicsp_vidautil,  	nicsp_vigenciapm,  	nicsp_vnl,  	Observaciones,  	sys_date,  	sys_sts,  	sys_time,  	sys_user,  	upd_date,  	upd_status,  	upd_user,  	verifica_date,  	verifica_status,  	verifica_user,  	VRMEJORA";
$proto0["m_strFrom"] = "FROM q_global_enservicio";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "aldevindiv_id",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto6["m_sql"] = "aldevindiv_id";
$proto6["m_srcTableName"] = "q_global_enservicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "almovinddia_id",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto8["m_sql"] = "almovinddia_id";
$proto8["m_srcTableName"] = "q_global_enservicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ca_nomcuenta",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto10["m_sql"] = "ca_nomcuenta";
$proto10["m_srcTableName"] = "q_global_enservicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_cta",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto12["m_sql"] = "cod_cta";
$proto12["m_srcTableName"] = "q_global_enservicio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "di_fechacompra",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto14["m_sql"] = "di_fechacompra";
$proto14["m_srcTableName"] = "q_global_enservicio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroplaca",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto16["m_sql"] = "di_nroplaca";
$proto16["m_srcTableName"] = "q_global_enservicio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroplacastma",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto18["m_sql"] = "di_nroplacastma";
$proto18["m_srcTableName"] = "q_global_enservicio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroserie",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto20["m_sql"] = "di_nroserie";
$proto20["m_srcTableName"] = "q_global_enservicio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "di_ubica",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto22["m_sql"] = "di_ubica";
$proto22["m_srcTableName"] = "q_global_enservicio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "di_valorcompra",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto24["m_sql"] = "di_valorcompra";
$proto24["m_srcTableName"] = "q_global_enservicio";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "di_valorultmovto",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto26["m_sql"] = "di_valorultmovto";
$proto26["m_srcTableName"] = "q_global_enservicio";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "dialmacen",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto28["m_sql"] = "dialmacen";
$proto28["m_srcTableName"] = "q_global_enservicio";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "dicodelem",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto30["m_sql"] = "dicodelem";
$proto30["m_srcTableName"] = "q_global_enservicio";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "dicuenta",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto32["m_sql"] = "dicuenta";
$proto32["m_srcTableName"] = "q_global_enservicio";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "difuncionario",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto34["m_sql"] = "difuncionario";
$proto34["m_srcTableName"] = "q_global_enservicio";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_nomelemento",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto36["m_sql"] = "ed_nomelemento";
$proto36["m_srcTableName"] = "q_global_enservicio";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "edmarca",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto38["m_sql"] = "edmarca";
$proto38["m_srcTableName"] = "q_global_enservicio";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "edunidad",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto40["m_sql"] = "edunidad";
$proto40["m_srcTableName"] = "q_global_enservicio";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "func_dep",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto42["m_sql"] = "func_dep";
$proto42["m_srcTableName"] = "q_global_enservicio";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "func_email",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto44["m_sql"] = "func_email";
$proto44["m_srcTableName"] = "q_global_enservicio";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "func_nombres",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto46["m_sql"] = "func_nombres";
$proto46["m_srcTableName"] = "q_global_enservicio";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "func_tipovinc",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto48["m_sql"] = "func_tipovinc";
$proto48["m_srcTableName"] = "q_global_enservicio";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto50["m_sql"] = "idusrglobal_fk";
$proto50["m_srcTableName"] = "q_global_enservicio";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ma_nommarca",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto52["m_sql"] = "ma_nommarca";
$proto52["m_srcTableName"] = "q_global_enservicio";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_trasnporte",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto54["m_sql"] = "mod_trasnporte";
$proto54["m_srcTableName"] = "q_global_enservicio";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_basedepreciable",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto56["m_sql"] = "nicsp_basedepreciable";
$proto56["m_srcTableName"] = "q_global_enservicio";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_codigo_ppe",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto58["m_sql"] = "nicsp_codigo_ppe";
$proto58["m_srcTableName"] = "q_global_enservicio";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_costo",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto60["m_sql"] = "nicsp_costo";
$proto60["m_srcTableName"] = "q_global_enservicio";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_costodesmant",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto62["m_sql"] = "nicsp_costodesmant";
$proto62["m_srcTableName"] = "q_global_enservicio";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_depreciaacumulada",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto64["m_sql"] = "nicsp_depreciaacumulada";
$proto64["m_srcTableName"] = "q_global_enservicio";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_depreciamensual",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto66["m_sql"] = "nicsp_depreciamensual";
$proto66["m_srcTableName"] = "q_global_enservicio";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_dias",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto68["m_sql"] = "nicsp_dias";
$proto68["m_srcTableName"] = "q_global_enservicio";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_fechacorte",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto70["m_sql"] = "nicsp_fechacorte";
$proto70["m_srcTableName"] = "q_global_enservicio";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_meses",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto72["m_sql"] = "nicsp_meses";
$proto72["m_srcTableName"] = "q_global_enservicio";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_politicamaterialidad",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto74["m_sql"] = "nicsp_politicamaterialidad";
$proto74["m_srcTableName"] = "q_global_enservicio";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_valordeterioro",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto76["m_sql"] = "nicsp_valordeterioro";
$proto76["m_srcTableName"] = "q_global_enservicio";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_valorresidual",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto78["m_sql"] = "nicsp_valorresidual";
$proto78["m_srcTableName"] = "q_global_enservicio";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vidautil",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto80["m_sql"] = "nicsp_vidautil";
$proto80["m_srcTableName"] = "q_global_enservicio";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vigenciapm",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto82["m_sql"] = "nicsp_vigenciapm";
$proto82["m_srcTableName"] = "q_global_enservicio";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vnl",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto84["m_sql"] = "nicsp_vnl";
$proto84["m_srcTableName"] = "q_global_enservicio";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto86["m_sql"] = "Observaciones";
$proto86["m_srcTableName"] = "q_global_enservicio";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto88["m_sql"] = "sys_date";
$proto88["m_srcTableName"] = "q_global_enservicio";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_sts",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto90["m_sql"] = "sys_sts";
$proto90["m_srcTableName"] = "q_global_enservicio";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto92["m_sql"] = "sys_time";
$proto92["m_srcTableName"] = "q_global_enservicio";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto94["m_sql"] = "sys_user";
$proto94["m_srcTableName"] = "q_global_enservicio";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "upd_date",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto96["m_sql"] = "upd_date";
$proto96["m_srcTableName"] = "q_global_enservicio";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "upd_status",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto98["m_sql"] = "upd_status";
$proto98["m_srcTableName"] = "q_global_enservicio";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "upd_user",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto100["m_sql"] = "upd_user";
$proto100["m_srcTableName"] = "q_global_enservicio";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "verifica_date",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto102["m_sql"] = "verifica_date";
$proto102["m_srcTableName"] = "q_global_enservicio";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "verifica_status",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto104["m_sql"] = "verifica_status";
$proto104["m_srcTableName"] = "q_global_enservicio";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "verifica_user",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto106["m_sql"] = "verifica_user";
$proto106["m_srcTableName"] = "q_global_enservicio";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "VRMEJORA",
	"m_strTable" => "q_global_enservicio",
	"m_srcTableName" => "q_global_enservicio"
));

$proto108["m_sql"] = "VRMEJORA";
$proto108["m_srcTableName"] = "q_global_enservicio";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "q_global_enservicio";
$proto111["m_srcTableName"] = "q_global_enservicio";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "aldevindiv_id";
$proto111["m_columns"][] = "almovinddia_id";
$proto111["m_columns"][] = "ca_nomcuenta";
$proto111["m_columns"][] = "cod_cta";
$proto111["m_columns"][] = "di_fechacompra";
$proto111["m_columns"][] = "di_nroplaca";
$proto111["m_columns"][] = "di_nroplacastma";
$proto111["m_columns"][] = "di_nroserie";
$proto111["m_columns"][] = "di_ubica";
$proto111["m_columns"][] = "di_valorcompra";
$proto111["m_columns"][] = "di_valorultmovto";
$proto111["m_columns"][] = "dialmacen";
$proto111["m_columns"][] = "dicodelem";
$proto111["m_columns"][] = "dicuenta";
$proto111["m_columns"][] = "difuncionario";
$proto111["m_columns"][] = "ed_nomelemento";
$proto111["m_columns"][] = "edmarca";
$proto111["m_columns"][] = "edunidad";
$proto111["m_columns"][] = "func_dep";
$proto111["m_columns"][] = "func_email";
$proto111["m_columns"][] = "func_nombres";
$proto111["m_columns"][] = "func_tipovinc";
$proto111["m_columns"][] = "idusrglobal_fk";
$proto111["m_columns"][] = "ma_nommarca";
$proto111["m_columns"][] = "mod_trasnporte";
$proto111["m_columns"][] = "nicsp_basedepreciable";
$proto111["m_columns"][] = "nicsp_codigo_ppe";
$proto111["m_columns"][] = "nicsp_costo";
$proto111["m_columns"][] = "nicsp_costodesmant";
$proto111["m_columns"][] = "nicsp_depreciaacumulada";
$proto111["m_columns"][] = "nicsp_depreciamensual";
$proto111["m_columns"][] = "nicsp_dias";
$proto111["m_columns"][] = "nicsp_fechacorte";
$proto111["m_columns"][] = "nicsp_meses";
$proto111["m_columns"][] = "nicsp_politicamaterialidad";
$proto111["m_columns"][] = "nicsp_valordeterioro";
$proto111["m_columns"][] = "nicsp_valorresidual";
$proto111["m_columns"][] = "nicsp_vidautil";
$proto111["m_columns"][] = "nicsp_vigenciapm";
$proto111["m_columns"][] = "nicsp_vnl";
$proto111["m_columns"][] = "Observaciones";
$proto111["m_columns"][] = "sys_date";
$proto111["m_columns"][] = "sys_sts";
$proto111["m_columns"][] = "sys_time";
$proto111["m_columns"][] = "sys_user";
$proto111["m_columns"][] = "upd_date";
$proto111["m_columns"][] = "upd_status";
$proto111["m_columns"][] = "upd_user";
$proto111["m_columns"][] = "verifica_date";
$proto111["m_columns"][] = "verifica_status";
$proto111["m_columns"][] = "verifica_user";
$proto111["m_columns"][] = "VRMEJORA";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "q_global_enservicio";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "q_global_enservicio";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_global_enservicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_global_enservicio = createSqlQuery_q_global_enservicio();


	
								;

																																																				

$tdataq_global_enservicio[".sqlquery"] = $queryData_q_global_enservicio;



$tdataq_global_enservicio[".hasEvents"] = false;

?>