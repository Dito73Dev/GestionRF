<?php
$tdataalmovinddia = array();
$tdataalmovinddia[".searchableFields"] = array();
$tdataalmovinddia[".ShortName"] = "almovinddia";
$tdataalmovinddia[".OwnerID"] = "";
$tdataalmovinddia[".OriginalTable"] = "almovinddia";


$tdataalmovinddia[".pagesByType"] = my_json_decode( "{}" );
$tdataalmovinddia[".originalPagesByType"] = $tdataalmovinddia[".pagesByType"];
$tdataalmovinddia[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataalmovinddia[".originalPages"] = $tdataalmovinddia[".pages"];
$tdataalmovinddia[".defaultPages"] = my_json_decode( "{}" );
$tdataalmovinddia[".originalDefaultPages"] = $tdataalmovinddia[".defaultPages"];

//	field labels
$fieldLabelsalmovinddia = array();
$fieldToolTipsalmovinddia = array();
$pageTitlesalmovinddia = array();
$placeHoldersalmovinddia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmovinddia["Spanish"] = array();
	$fieldToolTipsalmovinddia["Spanish"] = array();
	$placeHoldersalmovinddia["Spanish"] = array();
	$pageTitlesalmovinddia["Spanish"] = array();
	$fieldLabelsalmovinddia["Spanish"]["aldevindiv_id_fk"] = "Aldevindiv Id Fk";
	$fieldToolTipsalmovinddia["Spanish"]["aldevindiv_id_fk"] = "";
	$placeHoldersalmovinddia["Spanish"]["aldevindiv_id_fk"] = "";
	$fieldLabelsalmovinddia["Spanish"]["almovdevdia_id_fk"] = "Almovdevdia Id Fk";
	$fieldToolTipsalmovinddia["Spanish"]["almovdevdia_id_fk"] = "";
	$placeHoldersalmovinddia["Spanish"]["almovdevdia_id_fk"] = "";
	$fieldLabelsalmovinddia["Spanish"]["almovinddia_id"] = "Almovinddia Id";
	$fieldToolTipsalmovinddia["Spanish"]["almovinddia_id"] = "";
	$placeHoldersalmovinddia["Spanish"]["almovinddia_id"] = "";
	$fieldLabelsalmovinddia["Spanish"]["cod_cta"] = "Cod Cta";
	$fieldToolTipsalmovinddia["Spanish"]["cod_cta"] = "";
	$placeHoldersalmovinddia["Spanish"]["cod_cta"] = "";
	$fieldLabelsalmovinddia["Spanish"]["devolutivo_id_FK"] = "Devolutivo Id FK";
	$fieldToolTipsalmovinddia["Spanish"]["devolutivo_id_FK"] = "";
	$placeHoldersalmovinddia["Spanish"]["devolutivo_id_FK"] = "";
	$fieldLabelsalmovinddia["Spanish"]["doclasedoc_id_fk"] = "Doclasedoc Id Fk";
	$fieldToolTipsalmovinddia["Spanish"]["doclasedoc_id_fk"] = "";
	$placeHoldersalmovinddia["Spanish"]["doclasedoc_id_fk"] = "";
	$fieldLabelsalmovinddia["Spanish"]["gefechaactua"] = "Gefechaactua";
	$fieldToolTipsalmovinddia["Spanish"]["gefechaactua"] = "";
	$placeHoldersalmovinddia["Spanish"]["gefechaactua"] = "";
	$fieldLabelsalmovinddia["Spanish"]["geusuario"] = "Geusuario";
	$fieldToolTipsalmovinddia["Spanish"]["geusuario"] = "";
	$placeHoldersalmovinddia["Spanish"]["geusuario"] = "";
	$fieldLabelsalmovinddia["Spanish"]["md_legalizado"] = "Md Legalizado";
	$fieldToolTipsalmovinddia["Spanish"]["md_legalizado"] = "";
	$placeHoldersalmovinddia["Spanish"]["md_legalizado"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_coddetalleestado"] = "Mid Coddetalleestado";
	$fieldToolTipsalmovinddia["Spanish"]["mid_coddetalleestado"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_coddetalleestado"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_estadocons"] = "Mid Estadocons";
	$fieldToolTipsalmovinddia["Spanish"]["mid_estadocons"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_estadocons"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_estadoelem"] = "Mid Estadoelem";
	$fieldToolTipsalmovinddia["Spanish"]["mid_estadoelem"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_estadoelem"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_tax"] = "Mid Tax";
	$fieldToolTipsalmovinddia["Spanish"]["mid_tax"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_tax"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_valor_dep_acum"] = "Mid Valor Dep Acum";
	$fieldToolTipsalmovinddia["Spanish"]["mid_valor_dep_acum"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_valor_dep_acum"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_valormovto"] = "Mid Valormovto";
	$fieldToolTipsalmovinddia["Spanish"]["mid_valormovto"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_valormovto"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_valunit"] = "Mid Valunit";
	$fieldToolTipsalmovinddia["Spanish"]["mid_valunit"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_valunit"] = "";
	$fieldLabelsalmovinddia["Spanish"]["mid_vidautiladi"] = "Mid Vidautiladi";
	$fieldToolTipsalmovinddia["Spanish"]["mid_vidautiladi"] = "";
	$placeHoldersalmovinddia["Spanish"]["mid_vidautiladi"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midalmacen"] = "Midalmacen";
	$fieldToolTipsalmovinddia["Spanish"]["midalmacen"] = "";
	$placeHoldersalmovinddia["Spanish"]["midalmacen"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midclasedoc"] = "Midclasedoc";
	$fieldToolTipsalmovinddia["Spanish"]["midclasedoc"] = "";
	$placeHoldersalmovinddia["Spanish"]["midclasedoc"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midcodelem"] = "Midcodelem";
	$fieldToolTipsalmovinddia["Spanish"]["midcodelem"] = "";
	$placeHoldersalmovinddia["Spanish"]["midcodelem"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midcuenta"] = "Midcuenta";
	$fieldToolTipsalmovinddia["Spanish"]["midcuenta"] = "";
	$placeHoldersalmovinddia["Spanish"]["midcuenta"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midfechadoc"] = "Midfechadoc";
	$fieldToolTipsalmovinddia["Spanish"]["midfechadoc"] = "";
	$placeHoldersalmovinddia["Spanish"]["midfechadoc"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midfuncionario"] = "Midfuncionario";
	$fieldToolTipsalmovinddia["Spanish"]["midfuncionario"] = "";
	$placeHoldersalmovinddia["Spanish"]["midfuncionario"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midnrodoc"] = "Midnrodoc";
	$fieldToolTipsalmovinddia["Spanish"]["midnrodoc"] = "";
	$placeHoldersalmovinddia["Spanish"]["midnrodoc"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midnroplaca"] = "Midnroplaca";
	$fieldToolTipsalmovinddia["Spanish"]["midnroplaca"] = "";
	$placeHoldersalmovinddia["Spanish"]["midnroplaca"] = "";
	$fieldLabelsalmovinddia["Spanish"]["midnroserie"] = "Midnroserie";
	$fieldToolTipsalmovinddia["Spanish"]["midnroserie"] = "";
	$placeHoldersalmovinddia["Spanish"]["midnroserie"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_basedepreciable"] = "Nicsp Basedepreciable";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_basedepreciable"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_basedepreciable"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_codigo_ppe"] = "Nicsp Codigo Ppe";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_codigo_ppe"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_codigo_ppe"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_costo"] = "Nicsp Costo";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_costo"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_costo"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_costodesmant"] = "Nicsp Costodesmant";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_costodesmant"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_costodesmant"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_depreciaacumulada"] = "Nicsp Depreciaacumulada";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_depreciaacumulada"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_depreciaacumulada"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_depreciaacumulada_hist"] = "Nicsp Depreciaacumulada Hist";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_depreciaacumulada_hist"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_depreciaacumulada_hist"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_depreciamensual"] = "Nicsp Depreciamensual";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_depreciamensual"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_depreciamensual"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_dias"] = "Nicsp Dias";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_dias"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_dias"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_fecha_inicio_dep"] = "Nicsp Fecha Inicio Dep";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_fecha_inicio_dep"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_fecha_inicio_dep"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_fechacorte"] = "Nicsp Fechacorte";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_fechacorte"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_fechacorte"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_fechacorte_hist"] = "Nicsp Fechacorte Hist";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_fechacorte_hist"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_fechacorte_hist"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_meses"] = "Nicsp Meses";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_meses"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_meses"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_politicamaterialidad"] = "Nicsp Politicamaterialidad";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_politicamaterialidad"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_politicamaterialidad"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_valordeterioro"] = "Nicsp Valordeterioro";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_valordeterioro"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_valordeterioro"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_valorresidual"] = "Nicsp Valorresidual";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_valorresidual"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_valorresidual"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_vida_remanente"] = "Nicsp Vida Remanente";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_vida_remanente"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_vida_remanente"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_vidautil"] = "Nicsp Vidautil";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_vidautil"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_vidautil"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_vigenciapm"] = "Nicsp Vigenciapm";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_vigenciapm"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_vigenciapm"] = "";
	$fieldLabelsalmovinddia["Spanish"]["nicsp_vnl"] = "Nicsp Vnl";
	$fieldToolTipsalmovinddia["Spanish"]["nicsp_vnl"] = "";
	$placeHoldersalmovinddia["Spanish"]["nicsp_vnl"] = "";
	$fieldLabelsalmovinddia["Spanish"]["sys_doclasedoc_id_fk"] = "Sys Doclasedoc Id Fk";
	$fieldToolTipsalmovinddia["Spanish"]["sys_doclasedoc_id_fk"] = "";
	$placeHoldersalmovinddia["Spanish"]["sys_doclasedoc_id_fk"] = "";
	$fieldLabelsalmovinddia["Spanish"]["sys_document_func"] = "Sys Document Func";
	$fieldToolTipsalmovinddia["Spanish"]["sys_document_func"] = "";
	$placeHoldersalmovinddia["Spanish"]["sys_document_func"] = "";
	$fieldLabelsalmovinddia["Spanish"]["sys_status"] = "Sys Status";
	$fieldToolTipsalmovinddia["Spanish"]["sys_status"] = "";
	$placeHoldersalmovinddia["Spanish"]["sys_status"] = "";
	$fieldLabelsalmovinddia["Spanish"]["sys_status_fecha"] = "Sys Status Fecha";
	$fieldToolTipsalmovinddia["Spanish"]["sys_status_fecha"] = "";
	$placeHoldersalmovinddia["Spanish"]["sys_status_fecha"] = "";
	$fieldLabelsalmovinddia["Spanish"]["sys_status_user"] = "Sys Status User";
	$fieldToolTipsalmovinddia["Spanish"]["sys_status_user"] = "";
	$placeHoldersalmovinddia["Spanish"]["sys_status_user"] = "";
	$fieldLabelsalmovinddia["Spanish"]["syslastupd"] = "Syslastupd";
	$fieldToolTipsalmovinddia["Spanish"]["syslastupd"] = "";
	$placeHoldersalmovinddia["Spanish"]["syslastupd"] = "";
	if (count($fieldToolTipsalmovinddia["Spanish"]))
		$tdataalmovinddia[".isUseToolTips"] = true;
}


	$tdataalmovinddia[".NCSearch"] = true;



$tdataalmovinddia[".shortTableName"] = "almovinddia";
$tdataalmovinddia[".nSecOptions"] = 0;

$tdataalmovinddia[".mainTableOwnerID"] = "";
$tdataalmovinddia[".entityType"] = 0;
$tdataalmovinddia[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmovinddia[".strOriginalTableName"] = "almovinddia";

	



$tdataalmovinddia[".showAddInPopup"] = false;

$tdataalmovinddia[".showEditInPopup"] = false;

$tdataalmovinddia[".showViewInPopup"] = false;

$tdataalmovinddia[".listAjax"] = false;
//	temporary
//$tdataalmovinddia[".listAjax"] = false;

	$tdataalmovinddia[".audit"] = false;

	$tdataalmovinddia[".locking"] = false;


$pages = $tdataalmovinddia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmovinddia[".edit"] = true;
	$tdataalmovinddia[".afterEditAction"] = 1;
	$tdataalmovinddia[".closePopupAfterEdit"] = 1;
	$tdataalmovinddia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalmovinddia[".add"] = true;
$tdataalmovinddia[".afterAddAction"] = 1;
$tdataalmovinddia[".closePopupAfterAdd"] = 1;
$tdataalmovinddia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmovinddia[".list"] = true;
}



$tdataalmovinddia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmovinddia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmovinddia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmovinddia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmovinddia[".printFriendly"] = true;
}



$tdataalmovinddia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmovinddia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmovinddia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmovinddia[".isUseAjaxSuggest"] = true;



												

$tdataalmovinddia[".ajaxCodeSnippetAdded"] = false;

$tdataalmovinddia[".buttonsAdded"] = false;

$tdataalmovinddia[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalmovinddia[".isUseTimeForSearch"] = false;


$tdataalmovinddia[".badgeColor"] = "9ACD32";


$tdataalmovinddia[".allSearchFields"] = array();
$tdataalmovinddia[".filterFields"] = array();
$tdataalmovinddia[".requiredSearchFields"] = array();

$tdataalmovinddia[".googleLikeFields"] = array();
$tdataalmovinddia[".googleLikeFields"][] = "almovinddia_id";
$tdataalmovinddia[".googleLikeFields"][] = "md_legalizado";
$tdataalmovinddia[".googleLikeFields"][] = "sys_status";
$tdataalmovinddia[".googleLikeFields"][] = "doclasedoc_id_fk";
$tdataalmovinddia[".googleLikeFields"][] = "almovdevdia_id_fk";
$tdataalmovinddia[".googleLikeFields"][] = "aldevindiv_id_fk";
$tdataalmovinddia[".googleLikeFields"][] = "midclasedoc";
$tdataalmovinddia[".googleLikeFields"][] = "midnrodoc";
$tdataalmovinddia[".googleLikeFields"][] = "midfechadoc";
$tdataalmovinddia[".googleLikeFields"][] = "midalmacen";
$tdataalmovinddia[".googleLikeFields"][] = "devolutivo_id_FK";
$tdataalmovinddia[".googleLikeFields"][] = "midcuenta";
$tdataalmovinddia[".googleLikeFields"][] = "midcodelem";
$tdataalmovinddia[".googleLikeFields"][] = "midnroplaca";
$tdataalmovinddia[".googleLikeFields"][] = "midnroserie";
$tdataalmovinddia[".googleLikeFields"][] = "midfuncionario";
$tdataalmovinddia[".googleLikeFields"][] = "mid_valunit";
$tdataalmovinddia[".googleLikeFields"][] = "mid_tax";
$tdataalmovinddia[".googleLikeFields"][] = "mid_valormovto";
$tdataalmovinddia[".googleLikeFields"][] = "mid_vidautiladi";
$tdataalmovinddia[".googleLikeFields"][] = "mid_estadocons";
$tdataalmovinddia[".googleLikeFields"][] = "mid_estadoelem";
$tdataalmovinddia[".googleLikeFields"][] = "mid_coddetalleestado";
$tdataalmovinddia[".googleLikeFields"][] = "geusuario";
$tdataalmovinddia[".googleLikeFields"][] = "gefechaactua";
$tdataalmovinddia[".googleLikeFields"][] = "sys_status_fecha";
$tdataalmovinddia[".googleLikeFields"][] = "sys_status_user";
$tdataalmovinddia[".googleLikeFields"][] = "sys_document_func";
$tdataalmovinddia[".googleLikeFields"][] = "sys_doclasedoc_id_fk";
$tdataalmovinddia[".googleLikeFields"][] = "mid_valor_dep_acum";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_fecha_inicio_dep";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_costodesmant";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_valorresidual";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_valordeterioro";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_basedepreciable";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_costo";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_codigo_ppe";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_vigenciapm";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_politicamaterialidad";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_vidautil";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_fechacorte";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_dias";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_meses";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_depreciamensual";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_depreciaacumulada";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_fechacorte_hist";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_depreciaacumulada_hist";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_vnl";
$tdataalmovinddia[".googleLikeFields"][] = "nicsp_vida_remanente";
$tdataalmovinddia[".googleLikeFields"][] = "cod_cta";
$tdataalmovinddia[".googleLikeFields"][] = "syslastupd";



$tdataalmovinddia[".tableType"] = "list";

$tdataalmovinddia[".printerPageOrientation"] = 0;
$tdataalmovinddia[".nPrinterPageScale"] = 100;

$tdataalmovinddia[".nPrinterSplitRecords"] = 40;

$tdataalmovinddia[".geocodingEnabled"] = false;










$tdataalmovinddia[".pageSize"] = 20;

$tdataalmovinddia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmovinddia[".strOrderBy"] = $tstrOrderBy;

$tdataalmovinddia[".orderindexes"] = array();


$tdataalmovinddia[".sqlHead"] = "SELECT almovinddia_id,  	md_legalizado,  	sys_status,  	doclasedoc_id_fk,  	almovdevdia_id_fk,  	aldevindiv_id_fk,  	midclasedoc,  	midnrodoc,  	midfechadoc,  	midalmacen,  	devolutivo_id_FK,  	midcuenta,  	midcodelem,  	midnroplaca,  	midnroserie,  	midfuncionario,  	mid_valunit,  	mid_tax,  	mid_valormovto,  	mid_vidautiladi,  	mid_estadocons,  	mid_estadoelem,  	mid_coddetalleestado,  	geusuario,  	gefechaactua,  	sys_status_fecha,  	sys_status_user,  	sys_document_func,  	sys_doclasedoc_id_fk,  	mid_valor_dep_acum,  	nicsp_fecha_inicio_dep,  	nicsp_costodesmant,  	nicsp_valorresidual,  	nicsp_valordeterioro,  	nicsp_basedepreciable,  	nicsp_costo,  	nicsp_codigo_ppe,  	nicsp_vigenciapm,  	nicsp_politicamaterialidad,  	nicsp_vidautil,  	nicsp_fechacorte,  	nicsp_dias,  	nicsp_meses,  	nicsp_depreciamensual,  	nicsp_depreciaacumulada,  	nicsp_fechacorte_hist,  	nicsp_depreciaacumulada_hist,  	nicsp_vnl,  	nicsp_vida_remanente,  	cod_cta,  	syslastupd";
$tdataalmovinddia[".sqlFrom"] = "FROM almovinddia";
$tdataalmovinddia[".sqlWhereExpr"] = "";
$tdataalmovinddia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmovinddia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmovinddia[".arrGroupsPerPage"] = $arrGPP;

$tdataalmovinddia[".highlightSearchResults"] = true;

$tableKeysalmovinddia = array();
$tableKeysalmovinddia[] = "almovinddia_id";
$tdataalmovinddia[".Keys"] = $tableKeysalmovinddia;


$tdataalmovinddia[".hideMobileList"] = array();




//	almovinddia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almovinddia_id";
	$fdata["GoodName"] = "almovinddia_id";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","almovinddia_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataalmovinddia["almovinddia_id"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "almovinddia_id";
//	md_legalizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "md_legalizado";
	$fdata["GoodName"] = "md_legalizado";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","md_legalizado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "md_legalizado";

		$fdata["sourceSingle"] = "md_legalizado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "md_legalizado";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_type_legal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "legal_code";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "legal_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalmovinddia["md_legalizado"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "md_legalizado";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","sys_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["sourceSingle"] = "sys_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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


	$tdataalmovinddia["sys_status"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "sys_status";
//	doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "doclasedoc_id_fk";
	$fdata["GoodName"] = "doclasedoc_id_fk";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","doclasedoc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "doclasedoc_id_fk";

		$fdata["sourceSingle"] = "doclasedoc_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc_id_fk";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "gedocumentos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "doclasedoc_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "do_detalle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalmovinddia["doclasedoc_id_fk"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "doclasedoc_id_fk";
//	almovdevdia_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "almovdevdia_id_fk";
	$fdata["GoodName"] = "almovdevdia_id_fk";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","almovdevdia_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovdevdia_id_fk";

		$fdata["sourceSingle"] = "almovdevdia_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovdevdia_id_fk";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "almovdevdia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "almovdevdia_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "geusuario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalmovinddia["almovdevdia_id_fk"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "almovdevdia_id_fk";
//	aldevindiv_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aldevindiv_id_fk";
	$fdata["GoodName"] = "aldevindiv_id_fk";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","aldevindiv_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aldevindiv_id_fk";

		$fdata["sourceSingle"] = "aldevindiv_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_id_fk";

	
	
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


	$tdataalmovinddia["aldevindiv_id_fk"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "aldevindiv_id_fk";
//	midclasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "midclasedoc";
	$fdata["GoodName"] = "midclasedoc";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midclasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "midclasedoc";

		$fdata["sourceSingle"] = "midclasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midclasedoc";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "geclasedocto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cd_clasedoc";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cd_clasedoct";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalmovinddia["midclasedoc"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midclasedoc";
//	midnrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "midnrodoc";
	$fdata["GoodName"] = "midnrodoc";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midnrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "midnrodoc";

		$fdata["sourceSingle"] = "midnrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midnrodoc";

	
	
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


	$tdataalmovinddia["midnrodoc"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midnrodoc";
//	midfechadoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "midfechadoc";
	$fdata["GoodName"] = "midfechadoc";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midfechadoc");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "midfechadoc";

		$fdata["sourceSingle"] = "midfechadoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midfechadoc";

	
	
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


	$tdataalmovinddia["midfechadoc"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midfechadoc";
//	midalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "midalmacen";
	$fdata["GoodName"] = "midalmacen";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "midalmacen";

		$fdata["sourceSingle"] = "midalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midalmacen";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "inv_almacen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ascodalmacen";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ascodalmacen_locale";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalmovinddia["midalmacen"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midalmacen";
//	devolutivo_id_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "devolutivo_id_FK";
	$fdata["GoodName"] = "devolutivo_id_FK";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","devolutivo_id_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "devolutivo_id_FK";

		$fdata["sourceSingle"] = "devolutivo_id_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "devolutivo_id_FK";

	
	
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


	$tdataalmovinddia["devolutivo_id_FK"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "devolutivo_id_FK";
//	midcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "midcuenta";
	$fdata["GoodName"] = "midcuenta";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "midcuenta";

		$fdata["sourceSingle"] = "midcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midcuenta";

	
	
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


	$tdataalmovinddia["midcuenta"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midcuenta";
//	midcodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "midcodelem";
	$fdata["GoodName"] = "midcodelem";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midcodelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "midcodelem";

		$fdata["sourceSingle"] = "midcodelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midcodelem";

	
	
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


	$tdataalmovinddia["midcodelem"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midcodelem";
//	midnroplaca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "midnroplaca";
	$fdata["GoodName"] = "midnroplaca";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midnroplaca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "midnroplaca";

		$fdata["sourceSingle"] = "midnroplaca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midnroplaca";

	
	
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


	$tdataalmovinddia["midnroplaca"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midnroplaca";
//	midnroserie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "midnroserie";
	$fdata["GoodName"] = "midnroserie";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midnroserie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "midnroserie";

		$fdata["sourceSingle"] = "midnroserie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midnroserie";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataalmovinddia["midnroserie"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midnroserie";
//	midfuncionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "midfuncionario";
	$fdata["GoodName"] = "midfuncionario";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","midfuncionario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "midfuncionario";

		$fdata["sourceSingle"] = "midfuncionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "midfuncionario";

	
	
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


	$tdataalmovinddia["midfuncionario"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "midfuncionario";
//	mid_valunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "mid_valunit";
	$fdata["GoodName"] = "mid_valunit";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_valunit");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mid_valunit";

		$fdata["sourceSingle"] = "mid_valunit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_valunit";

	
	
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


	$tdataalmovinddia["mid_valunit"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_valunit";
//	mid_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mid_tax";
	$fdata["GoodName"] = "mid_tax";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_tax");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mid_tax";

		$fdata["sourceSingle"] = "mid_tax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_tax";

	
	
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


	$tdataalmovinddia["mid_tax"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_tax";
//	mid_valormovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "mid_valormovto";
	$fdata["GoodName"] = "mid_valormovto";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_valormovto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mid_valormovto";

		$fdata["sourceSingle"] = "mid_valormovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_valormovto";

	
	
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


	$tdataalmovinddia["mid_valormovto"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_valormovto";
//	mid_vidautiladi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "mid_vidautiladi";
	$fdata["GoodName"] = "mid_vidautiladi";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_vidautiladi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mid_vidautiladi";

		$fdata["sourceSingle"] = "mid_vidautiladi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_vidautiladi";

	
	
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


	$tdataalmovinddia["mid_vidautiladi"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_vidautiladi";
//	mid_estadocons
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "mid_estadocons";
	$fdata["GoodName"] = "mid_estadocons";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_estadocons");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mid_estadocons";

		$fdata["sourceSingle"] = "mid_estadocons";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_estadocons";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdataalmovinddia["mid_estadocons"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_estadocons";
//	mid_estadoelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "mid_estadoelem";
	$fdata["GoodName"] = "mid_estadoelem";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_estadoelem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mid_estadoelem";

		$fdata["sourceSingle"] = "mid_estadoelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_estadoelem";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdataalmovinddia["mid_estadoelem"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_estadoelem";
//	mid_coddetalleestado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "mid_coddetalleestado";
	$fdata["GoodName"] = "mid_coddetalleestado";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_coddetalleestado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mid_coddetalleestado";

		$fdata["sourceSingle"] = "mid_coddetalleestado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_coddetalleestado";

	
	
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


	$tdataalmovinddia["mid_coddetalleestado"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_coddetalleestado";
//	geusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "geusuario";
	$fdata["GoodName"] = "geusuario";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","geusuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "geusuario";

		$fdata["sourceSingle"] = "geusuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "geusuario";

	
	
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


	$tdataalmovinddia["geusuario"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "geusuario";
//	gefechaactua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "gefechaactua";
	$fdata["GoodName"] = "gefechaactua";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","gefechaactua");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "gefechaactua";

		$fdata["sourceSingle"] = "gefechaactua";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gefechaactua";

	
	
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


	$tdataalmovinddia["gefechaactua"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "gefechaactua";
//	sys_status_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "sys_status_fecha";
	$fdata["GoodName"] = "sys_status_fecha";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","sys_status_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_status_fecha";

		$fdata["sourceSingle"] = "sys_status_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status_fecha";

	
	
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


	$tdataalmovinddia["sys_status_fecha"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "sys_status_fecha";
//	sys_status_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "sys_status_user";
	$fdata["GoodName"] = "sys_status_user";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","sys_status_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_status_user";

		$fdata["sourceSingle"] = "sys_status_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status_user";

	
	
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


	$tdataalmovinddia["sys_status_user"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "sys_status_user";
//	sys_document_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sys_document_func";
	$fdata["GoodName"] = "sys_document_func";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","sys_document_func");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_document_func";

		$fdata["sourceSingle"] = "sys_document_func";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_document_func";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdataalmovinddia["sys_document_func"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "sys_document_func";
//	sys_doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "sys_doclasedoc_id_fk";
	$fdata["GoodName"] = "sys_doclasedoc_id_fk";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","sys_doclasedoc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_doclasedoc_id_fk";

		$fdata["sourceSingle"] = "sys_doclasedoc_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_doclasedoc_id_fk";

	
	
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


	$tdataalmovinddia["sys_doclasedoc_id_fk"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "sys_doclasedoc_id_fk";
//	mid_valor_dep_acum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "mid_valor_dep_acum";
	$fdata["GoodName"] = "mid_valor_dep_acum";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","mid_valor_dep_acum");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mid_valor_dep_acum";

		$fdata["sourceSingle"] = "mid_valor_dep_acum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid_valor_dep_acum";

	
	
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


	$tdataalmovinddia["mid_valor_dep_acum"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "mid_valor_dep_acum";
//	nicsp_fecha_inicio_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "nicsp_fecha_inicio_dep";
	$fdata["GoodName"] = "nicsp_fecha_inicio_dep";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_fecha_inicio_dep");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "nicsp_fecha_inicio_dep";

		$fdata["sourceSingle"] = "nicsp_fecha_inicio_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_fecha_inicio_dep";

	
	
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


	$tdataalmovinddia["nicsp_fecha_inicio_dep"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_fecha_inicio_dep";
//	nicsp_costodesmant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "nicsp_costodesmant";
	$fdata["GoodName"] = "nicsp_costodesmant";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_costodesmant");
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


	$tdataalmovinddia["nicsp_costodesmant"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_costodesmant";
//	nicsp_valorresidual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "nicsp_valorresidual";
	$fdata["GoodName"] = "nicsp_valorresidual";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_valorresidual");
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


	$tdataalmovinddia["nicsp_valorresidual"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_valorresidual";
//	nicsp_valordeterioro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "nicsp_valordeterioro";
	$fdata["GoodName"] = "nicsp_valordeterioro";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_valordeterioro");
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


	$tdataalmovinddia["nicsp_valordeterioro"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_valordeterioro";
//	nicsp_basedepreciable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "nicsp_basedepreciable";
	$fdata["GoodName"] = "nicsp_basedepreciable";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_basedepreciable");
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


	$tdataalmovinddia["nicsp_basedepreciable"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_basedepreciable";
//	nicsp_costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "nicsp_costo";
	$fdata["GoodName"] = "nicsp_costo";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_costo");
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


	$tdataalmovinddia["nicsp_costo"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_costo";
//	nicsp_codigo_ppe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "nicsp_codigo_ppe";
	$fdata["GoodName"] = "nicsp_codigo_ppe";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_codigo_ppe");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataalmovinddia["nicsp_codigo_ppe"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_codigo_ppe";
//	nicsp_vigenciapm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "nicsp_vigenciapm";
	$fdata["GoodName"] = "nicsp_vigenciapm";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_vigenciapm");
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


	$tdataalmovinddia["nicsp_vigenciapm"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_vigenciapm";
//	nicsp_politicamaterialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "nicsp_politicamaterialidad";
	$fdata["GoodName"] = "nicsp_politicamaterialidad";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_politicamaterialidad");
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


	$tdataalmovinddia["nicsp_politicamaterialidad"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_politicamaterialidad";
//	nicsp_vidautil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "nicsp_vidautil";
	$fdata["GoodName"] = "nicsp_vidautil";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_vidautil");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_vidautil";

		$fdata["sourceSingle"] = "nicsp_vidautil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_vidautil";

	
	
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


	$tdataalmovinddia["nicsp_vidautil"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_vidautil";
//	nicsp_fechacorte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "nicsp_fechacorte";
	$fdata["GoodName"] = "nicsp_fechacorte";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_fechacorte");
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


	$tdataalmovinddia["nicsp_fechacorte"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_fechacorte";
//	nicsp_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nicsp_dias";
	$fdata["GoodName"] = "nicsp_dias";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_dias");
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


	$tdataalmovinddia["nicsp_dias"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_dias";
//	nicsp_meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "nicsp_meses";
	$fdata["GoodName"] = "nicsp_meses";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_meses");
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


	$tdataalmovinddia["nicsp_meses"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_meses";
//	nicsp_depreciamensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "nicsp_depreciamensual";
	$fdata["GoodName"] = "nicsp_depreciamensual";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_depreciamensual");
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


	$tdataalmovinddia["nicsp_depreciamensual"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_depreciamensual";
//	nicsp_depreciaacumulada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "nicsp_depreciaacumulada";
	$fdata["GoodName"] = "nicsp_depreciaacumulada";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_depreciaacumulada");
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


	$tdataalmovinddia["nicsp_depreciaacumulada"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_depreciaacumulada";
//	nicsp_fechacorte_hist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "nicsp_fechacorte_hist";
	$fdata["GoodName"] = "nicsp_fechacorte_hist";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_fechacorte_hist");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "nicsp_fechacorte_hist";

		$fdata["sourceSingle"] = "nicsp_fechacorte_hist";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_fechacorte_hist";

	
	
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


	$tdataalmovinddia["nicsp_fechacorte_hist"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_fechacorte_hist";
//	nicsp_depreciaacumulada_hist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "nicsp_depreciaacumulada_hist";
	$fdata["GoodName"] = "nicsp_depreciaacumulada_hist";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_depreciaacumulada_hist");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_depreciaacumulada_hist";

		$fdata["sourceSingle"] = "nicsp_depreciaacumulada_hist";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_depreciaacumulada_hist";

	
	
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


	$tdataalmovinddia["nicsp_depreciaacumulada_hist"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_depreciaacumulada_hist";
//	nicsp_vnl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "nicsp_vnl";
	$fdata["GoodName"] = "nicsp_vnl";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_vnl");
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


	$tdataalmovinddia["nicsp_vnl"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_vnl";
//	nicsp_vida_remanente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "nicsp_vida_remanente";
	$fdata["GoodName"] = "nicsp_vida_remanente";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","nicsp_vida_remanente");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "nicsp_vida_remanente";

		$fdata["sourceSingle"] = "nicsp_vida_remanente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_vida_remanente";

	
	
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


	$tdataalmovinddia["nicsp_vida_remanente"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "nicsp_vida_remanente";
//	cod_cta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cod_cta";
	$fdata["GoodName"] = "cod_cta";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","cod_cta");
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


	$tdataalmovinddia["cod_cta"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "cod_cta";
//	syslastupd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "syslastupd";
	$fdata["GoodName"] = "syslastupd";
	$fdata["ownerTable"] = "almovinddia";
	$fdata["Label"] = GetFieldLabel("almovinddia","syslastupd");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "syslastupd";

		$fdata["sourceSingle"] = "syslastupd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syslastupd";

	
	
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


	$tdataalmovinddia["syslastupd"] = $fdata;
		$tdataalmovinddia[".searchableFields"][] = "syslastupd";


$tables_data["almovinddia"]=&$tdataalmovinddia;
$field_labels["almovinddia"] = &$fieldLabelsalmovinddia;
$fieldToolTips["almovinddia"] = &$fieldToolTipsalmovinddia;
$placeHolders["almovinddia"] = &$placeHoldersalmovinddia;
$page_titles["almovinddia"] = &$pageTitlesalmovinddia;


changeTextControlsToDate( "almovinddia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almovinddia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almovinddia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almovinddia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almovinddia_id,  	md_legalizado,  	sys_status,  	doclasedoc_id_fk,  	almovdevdia_id_fk,  	aldevindiv_id_fk,  	midclasedoc,  	midnrodoc,  	midfechadoc,  	midalmacen,  	devolutivo_id_FK,  	midcuenta,  	midcodelem,  	midnroplaca,  	midnroserie,  	midfuncionario,  	mid_valunit,  	mid_tax,  	mid_valormovto,  	mid_vidautiladi,  	mid_estadocons,  	mid_estadoelem,  	mid_coddetalleestado,  	geusuario,  	gefechaactua,  	sys_status_fecha,  	sys_status_user,  	sys_document_func,  	sys_doclasedoc_id_fk,  	mid_valor_dep_acum,  	nicsp_fecha_inicio_dep,  	nicsp_costodesmant,  	nicsp_valorresidual,  	nicsp_valordeterioro,  	nicsp_basedepreciable,  	nicsp_costo,  	nicsp_codigo_ppe,  	nicsp_vigenciapm,  	nicsp_politicamaterialidad,  	nicsp_vidautil,  	nicsp_fechacorte,  	nicsp_dias,  	nicsp_meses,  	nicsp_depreciamensual,  	nicsp_depreciaacumulada,  	nicsp_fechacorte_hist,  	nicsp_depreciaacumulada_hist,  	nicsp_vnl,  	nicsp_vida_remanente,  	cod_cta,  	syslastupd";
$proto0["m_strFrom"] = "FROM almovinddia";
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
	"m_strName" => "almovinddia_id",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto6["m_sql"] = "almovinddia_id";
$proto6["m_srcTableName"] = "almovinddia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "md_legalizado",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto8["m_sql"] = "md_legalizado";
$proto8["m_srcTableName"] = "almovinddia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto10["m_sql"] = "sys_status";
$proto10["m_srcTableName"] = "almovinddia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id_fk",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto12["m_sql"] = "doclasedoc_id_fk";
$proto12["m_srcTableName"] = "almovinddia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "almovdevdia_id_fk",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto14["m_sql"] = "almovdevdia_id_fk";
$proto14["m_srcTableName"] = "almovinddia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "aldevindiv_id_fk",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto16["m_sql"] = "aldevindiv_id_fk";
$proto16["m_srcTableName"] = "almovinddia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "midclasedoc",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto18["m_sql"] = "midclasedoc";
$proto18["m_srcTableName"] = "almovinddia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "midnrodoc",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto20["m_sql"] = "midnrodoc";
$proto20["m_srcTableName"] = "almovinddia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "midfechadoc",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto22["m_sql"] = "midfechadoc";
$proto22["m_srcTableName"] = "almovinddia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "midalmacen",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto24["m_sql"] = "midalmacen";
$proto24["m_srcTableName"] = "almovinddia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "devolutivo_id_FK",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto26["m_sql"] = "devolutivo_id_FK";
$proto26["m_srcTableName"] = "almovinddia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "midcuenta",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto28["m_sql"] = "midcuenta";
$proto28["m_srcTableName"] = "almovinddia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "midcodelem",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto30["m_sql"] = "midcodelem";
$proto30["m_srcTableName"] = "almovinddia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "midnroplaca",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto32["m_sql"] = "midnroplaca";
$proto32["m_srcTableName"] = "almovinddia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "midnroserie",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto34["m_sql"] = "midnroserie";
$proto34["m_srcTableName"] = "almovinddia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "midfuncionario",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto36["m_sql"] = "midfuncionario";
$proto36["m_srcTableName"] = "almovinddia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_valunit",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto38["m_sql"] = "mid_valunit";
$proto38["m_srcTableName"] = "almovinddia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_tax",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto40["m_sql"] = "mid_tax";
$proto40["m_srcTableName"] = "almovinddia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_valormovto",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto42["m_sql"] = "mid_valormovto";
$proto42["m_srcTableName"] = "almovinddia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_vidautiladi",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto44["m_sql"] = "mid_vidautiladi";
$proto44["m_srcTableName"] = "almovinddia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_estadocons",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto46["m_sql"] = "mid_estadocons";
$proto46["m_srcTableName"] = "almovinddia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_estadoelem",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto48["m_sql"] = "mid_estadoelem";
$proto48["m_srcTableName"] = "almovinddia";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_coddetalleestado",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto50["m_sql"] = "mid_coddetalleestado";
$proto50["m_srcTableName"] = "almovinddia";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "geusuario",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto52["m_sql"] = "geusuario";
$proto52["m_srcTableName"] = "almovinddia";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "gefechaactua",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto54["m_sql"] = "gefechaactua";
$proto54["m_srcTableName"] = "almovinddia";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status_fecha",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto56["m_sql"] = "sys_status_fecha";
$proto56["m_srcTableName"] = "almovinddia";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status_user",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto58["m_sql"] = "sys_status_user";
$proto58["m_srcTableName"] = "almovinddia";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_document_func",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto60["m_sql"] = "sys_document_func";
$proto60["m_srcTableName"] = "almovinddia";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_doclasedoc_id_fk",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto62["m_sql"] = "sys_doclasedoc_id_fk";
$proto62["m_srcTableName"] = "almovinddia";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "mid_valor_dep_acum",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto64["m_sql"] = "mid_valor_dep_acum";
$proto64["m_srcTableName"] = "almovinddia";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_fecha_inicio_dep",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto66["m_sql"] = "nicsp_fecha_inicio_dep";
$proto66["m_srcTableName"] = "almovinddia";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_costodesmant",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto68["m_sql"] = "nicsp_costodesmant";
$proto68["m_srcTableName"] = "almovinddia";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_valorresidual",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto70["m_sql"] = "nicsp_valorresidual";
$proto70["m_srcTableName"] = "almovinddia";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_valordeterioro",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto72["m_sql"] = "nicsp_valordeterioro";
$proto72["m_srcTableName"] = "almovinddia";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_basedepreciable",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto74["m_sql"] = "nicsp_basedepreciable";
$proto74["m_srcTableName"] = "almovinddia";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_costo",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto76["m_sql"] = "nicsp_costo";
$proto76["m_srcTableName"] = "almovinddia";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_codigo_ppe",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto78["m_sql"] = "nicsp_codigo_ppe";
$proto78["m_srcTableName"] = "almovinddia";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vigenciapm",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto80["m_sql"] = "nicsp_vigenciapm";
$proto80["m_srcTableName"] = "almovinddia";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_politicamaterialidad",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto82["m_sql"] = "nicsp_politicamaterialidad";
$proto82["m_srcTableName"] = "almovinddia";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vidautil",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto84["m_sql"] = "nicsp_vidautil";
$proto84["m_srcTableName"] = "almovinddia";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_fechacorte",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto86["m_sql"] = "nicsp_fechacorte";
$proto86["m_srcTableName"] = "almovinddia";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_dias",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto88["m_sql"] = "nicsp_dias";
$proto88["m_srcTableName"] = "almovinddia";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_meses",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto90["m_sql"] = "nicsp_meses";
$proto90["m_srcTableName"] = "almovinddia";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_depreciamensual",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto92["m_sql"] = "nicsp_depreciamensual";
$proto92["m_srcTableName"] = "almovinddia";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_depreciaacumulada",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto94["m_sql"] = "nicsp_depreciaacumulada";
$proto94["m_srcTableName"] = "almovinddia";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_fechacorte_hist",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto96["m_sql"] = "nicsp_fechacorte_hist";
$proto96["m_srcTableName"] = "almovinddia";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_depreciaacumulada_hist",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto98["m_sql"] = "nicsp_depreciaacumulada_hist";
$proto98["m_srcTableName"] = "almovinddia";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vnl",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto100["m_sql"] = "nicsp_vnl";
$proto100["m_srcTableName"] = "almovinddia";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_vida_remanente",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto102["m_sql"] = "nicsp_vida_remanente";
$proto102["m_srcTableName"] = "almovinddia";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_cta",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto104["m_sql"] = "cod_cta";
$proto104["m_srcTableName"] = "almovinddia";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "syslastupd",
	"m_strTable" => "almovinddia",
	"m_srcTableName" => "almovinddia"
));

$proto106["m_sql"] = "syslastupd";
$proto106["m_srcTableName"] = "almovinddia";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "almovinddia";
$proto109["m_srcTableName"] = "almovinddia";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "almovinddia_id";
$proto109["m_columns"][] = "md_legalizado";
$proto109["m_columns"][] = "sys_status";
$proto109["m_columns"][] = "doclasedoc_id_fk";
$proto109["m_columns"][] = "almovdevdia_id_fk";
$proto109["m_columns"][] = "aldevindiv_id_fk";
$proto109["m_columns"][] = "midclasedoc";
$proto109["m_columns"][] = "midnrodoc";
$proto109["m_columns"][] = "midfechadoc";
$proto109["m_columns"][] = "midalmacen";
$proto109["m_columns"][] = "devolutivo_id_FK";
$proto109["m_columns"][] = "midcuenta";
$proto109["m_columns"][] = "midcodelem";
$proto109["m_columns"][] = "midnroplaca";
$proto109["m_columns"][] = "midnroserie";
$proto109["m_columns"][] = "midfuncionario";
$proto109["m_columns"][] = "mid_valunit";
$proto109["m_columns"][] = "mid_tax";
$proto109["m_columns"][] = "mid_valormovto";
$proto109["m_columns"][] = "mid_vidautiladi";
$proto109["m_columns"][] = "mid_estadocons";
$proto109["m_columns"][] = "mid_estadoelem";
$proto109["m_columns"][] = "mid_coddetalleestado";
$proto109["m_columns"][] = "geusuario";
$proto109["m_columns"][] = "gefechaactua";
$proto109["m_columns"][] = "sys_status_fecha";
$proto109["m_columns"][] = "sys_status_user";
$proto109["m_columns"][] = "sys_document_func";
$proto109["m_columns"][] = "sys_doclasedoc_id_fk";
$proto109["m_columns"][] = "mid_valor_dep_acum";
$proto109["m_columns"][] = "nicsp_fecha_inicio_dep";
$proto109["m_columns"][] = "nicsp_costodesmant";
$proto109["m_columns"][] = "nicsp_valorresidual";
$proto109["m_columns"][] = "nicsp_valordeterioro";
$proto109["m_columns"][] = "nicsp_basedepreciable";
$proto109["m_columns"][] = "nicsp_costo";
$proto109["m_columns"][] = "nicsp_codigo_ppe";
$proto109["m_columns"][] = "nicsp_vigenciapm";
$proto109["m_columns"][] = "nicsp_politicamaterialidad";
$proto109["m_columns"][] = "nicsp_vidautil";
$proto109["m_columns"][] = "nicsp_fechacorte";
$proto109["m_columns"][] = "nicsp_dias";
$proto109["m_columns"][] = "nicsp_meses";
$proto109["m_columns"][] = "nicsp_depreciamensual";
$proto109["m_columns"][] = "nicsp_depreciaacumulada";
$proto109["m_columns"][] = "nicsp_fechacorte_hist";
$proto109["m_columns"][] = "nicsp_depreciaacumulada_hist";
$proto109["m_columns"][] = "nicsp_vnl";
$proto109["m_columns"][] = "nicsp_vida_remanente";
$proto109["m_columns"][] = "cod_cta";
$proto109["m_columns"][] = "syslastupd";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "almovinddia";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "almovinddia";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="almovinddia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almovinddia = createSqlQuery_almovinddia();


	
								;

																																																			

$tdataalmovinddia[".sqlquery"] = $queryData_almovinddia;



$tdataalmovinddia[".hasEvents"] = false;

?>