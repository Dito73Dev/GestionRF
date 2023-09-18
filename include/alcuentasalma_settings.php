<?php
$tdataalcuentasalma = array();
$tdataalcuentasalma[".searchableFields"] = array();
$tdataalcuentasalma[".ShortName"] = "alcuentasalma";
$tdataalcuentasalma[".OwnerID"] = "";
$tdataalcuentasalma[".OriginalTable"] = "alcuentasalma";


$tdataalcuentasalma[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalcuentasalma[".originalPagesByType"] = $tdataalcuentasalma[".pagesByType"];
$tdataalcuentasalma[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalcuentasalma[".originalPages"] = $tdataalcuentasalma[".pages"];
$tdataalcuentasalma[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalcuentasalma[".originalDefaultPages"] = $tdataalcuentasalma[".defaultPages"];

//	field labels
$fieldLabelsalcuentasalma = array();
$fieldToolTipsalcuentasalma = array();
$pageTitlesalcuentasalma = array();
$placeHoldersalcuentasalma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalcuentasalma["Spanish"] = array();
	$fieldToolTipsalcuentasalma["Spanish"] = array();
	$placeHoldersalcuentasalma["Spanish"] = array();
	$pageTitlesalcuentasalma["Spanish"] = array();
	$fieldLabelsalcuentasalma["Spanish"]["cuentasalma_id"] = "Cuentasalma Id";
	$fieldToolTipsalcuentasalma["Spanish"]["cuentasalma_id"] = "";
	$placeHoldersalcuentasalma["Spanish"]["cuentasalma_id"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["ca_codcuentat"] = "Ca Codcuentat";
	$fieldToolTipsalcuentasalma["Spanish"]["ca_codcuentat"] = "";
	$placeHoldersalcuentasalma["Spanish"]["ca_codcuentat"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["ca_codcuenta"] = "Num. Cuenta";
	$fieldToolTipsalcuentasalma["Spanish"]["ca_codcuenta"] = "";
	$placeHoldersalcuentasalma["Spanish"]["ca_codcuenta"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["ca_nomcuenta"] = "Nombre de la cuenta";
	$fieldToolTipsalcuentasalma["Spanish"]["ca_nomcuenta"] = "";
	$placeHoldersalcuentasalma["Spanish"]["ca_nomcuenta"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["ca_recibemovto"] = "¿Recibe movimiento?";
	$fieldToolTipsalcuentasalma["Spanish"]["ca_recibemovto"] = "";
	$placeHoldersalcuentasalma["Spanish"]["ca_recibemovto"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["ca_tipocuenta"] = "Ca Tipocuenta";
	$fieldToolTipsalcuentasalma["Spanish"]["ca_tipocuenta"] = "";
	$placeHoldersalcuentasalma["Spanish"]["ca_tipocuenta"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["geusuario"] = "Geusuario";
	$fieldToolTipsalcuentasalma["Spanish"]["geusuario"] = "";
	$placeHoldersalcuentasalma["Spanish"]["geusuario"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["gefechaactua"] = "Gefechaactua";
	$fieldToolTipsalcuentasalma["Spanish"]["gefechaactua"] = "";
	$placeHoldersalcuentasalma["Spanish"]["gefechaactua"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["tac_vidautil"] = "Vida util";
	$fieldToolTipsalcuentasalma["Spanish"]["tac_vidautil"] = "<p><em style=\"color: rgb(153, 51, 255);\">Escriba el número en meses para la vida util</em></p>";
	$placeHoldersalcuentasalma["Spanish"]["tac_vidautil"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["tac_codcta"] = "Cod. Cuenta";
	$fieldToolTipsalcuentasalma["Spanish"]["tac_codcta"] = "";
	$placeHoldersalcuentasalma["Spanish"]["tac_codcta"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentacostocod"] = "Nicsp Cuentacostocod";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentacostocod"] = "";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentacostocod"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentacostonam"] = "Nicsp Cuentacostonam";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentacostonam"] = "";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentacostonam"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentadepcod"] = "Código Depreciación";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentadepcod"] = "<p><em style=\"color: rgb(153, 51, 255);\">Representa el valor acumulado de la pérdida sistemática de la capacidad operativa de la propiedad, planta y equipo, originada por el consumo del potencial de servicio o de los beneficios económicos futuros que incorpora el activo, la cual se estima teniendo en cuenta el costo, el valor residual, la vida útil y el deterioro acumulado.</em></p>";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentadepcod"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentadepname"] = "Nicsp Cuentadepname";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentadepname"] = "";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentadepname"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentacostonew"] = "Código nuevos";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentacostonew"] = "<p class=\"ql-align-justify\"><em style=\"color: rgb(153, 51, 255);\">Representa el valor de los bienes muebles nuevos, adquiridos a cualquier título,los cuales se espera serán usados por la entidad durante más de 12 meses para la producción o suministro de bienes, para la prestación de servicios o para propósitos administrativos. En esta cuenta no deben registrarse los bienes que se retiran del servicio de manera temporal o definitiva.</em></p>";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentacostonew"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentacostoservicio"] = "Código en servicio";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentacostoservicio"] = "<p class=\"ql-align-justify\"><em style=\"color: rgb(153, 51, 255);\">Representa el valor de los bienes muebles entregados en servicio, los cuales se espera serán usados por la entidad durante más de 12 meses para la producción o suministro de bienes, para la prestación de servicios o para propósitos administrativos. En esta cuenta no deben registrarse los bienes que se retiran del servicio de manera temporal o definitiva.</em></p>";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentacostoservicio"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_cuentacostocodnopp"] = "Código No PM";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_cuentacostocodnopp"] = "<p><em style=\"color: rgb(153, 51, 255);\">Representa el valor de los bienes retirados del servicio por destrucción o porencontrarse inservibles, así como los bienes totalmente depreciados, agotados o amortizados, los cuales han sido retirados del servicio por no encontrarse en condiciones de uso. También registra los derechos retirados por castigo que, a criterio de la entidad, requieren ser controlados.</em></p>";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_cuentacostocodnopp"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_comodato_entrega"] = "Nicsp Comodato Entrega";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_comodato_entrega"] = "";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_comodato_entrega"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nicsp_comodato_recibe"] = "Nicsp Comodato Recibe";
	$fieldToolTipsalcuentasalma["Spanish"]["nicsp_comodato_recibe"] = "";
	$placeHoldersalcuentasalma["Spanish"]["nicsp_comodato_recibe"] = "";
	$fieldLabelsalcuentasalma["Spanish"]["nombrecuenta"] = "Nombrecuenta";
	$fieldToolTipsalcuentasalma["Spanish"]["nombrecuenta"] = "";
	$placeHoldersalcuentasalma["Spanish"]["nombrecuenta"] = "";
	$pageTitlesalcuentasalma["Spanish"]["edit"] = "Gestionar cuenta, No. Interno: [{%cuentasalma_id}]";
	$pageTitlesalcuentasalma["Spanish"]["add"] = "Nueva cuenta";
	if (count($fieldToolTipsalcuentasalma["Spanish"]))
		$tdataalcuentasalma[".isUseToolTips"] = true;
}


	$tdataalcuentasalma[".NCSearch"] = true;



$tdataalcuentasalma[".shortTableName"] = "alcuentasalma";
$tdataalcuentasalma[".nSecOptions"] = 0;

$tdataalcuentasalma[".mainTableOwnerID"] = "";
$tdataalcuentasalma[".entityType"] = 0;
$tdataalcuentasalma[".connId"] = "dbrf_at_127_0_0_1";


$tdataalcuentasalma[".strOriginalTableName"] = "alcuentasalma";

	



$tdataalcuentasalma[".showAddInPopup"] = false;

$tdataalcuentasalma[".showEditInPopup"] = false;

$tdataalcuentasalma[".showViewInPopup"] = false;

$tdataalcuentasalma[".listAjax"] = false;
//	temporary
//$tdataalcuentasalma[".listAjax"] = false;

	$tdataalcuentasalma[".audit"] = false;

	$tdataalcuentasalma[".locking"] = false;


$pages = $tdataalcuentasalma[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalcuentasalma[".edit"] = true;
	$tdataalcuentasalma[".afterEditAction"] = 1;
	$tdataalcuentasalma[".closePopupAfterEdit"] = 1;
	$tdataalcuentasalma[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalcuentasalma[".add"] = true;
$tdataalcuentasalma[".afterAddAction"] = 1;
$tdataalcuentasalma[".closePopupAfterAdd"] = 1;
$tdataalcuentasalma[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalcuentasalma[".list"] = true;
}



$tdataalcuentasalma[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalcuentasalma[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalcuentasalma[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalcuentasalma[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalcuentasalma[".printFriendly"] = true;
}



$tdataalcuentasalma[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalcuentasalma[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalcuentasalma[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalcuentasalma[".isUseAjaxSuggest"] = true;



												

$tdataalcuentasalma[".ajaxCodeSnippetAdded"] = false;

$tdataalcuentasalma[".buttonsAdded"] = false;

$tdataalcuentasalma[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalcuentasalma[".isUseTimeForSearch"] = false;


$tdataalcuentasalma[".badgeColor"] = "DC143C";


$tdataalcuentasalma[".allSearchFields"] = array();
$tdataalcuentasalma[".filterFields"] = array();
$tdataalcuentasalma[".requiredSearchFields"] = array();

$tdataalcuentasalma[".googleLikeFields"] = array();
$tdataalcuentasalma[".googleLikeFields"][] = "cuentasalma_id";
$tdataalcuentasalma[".googleLikeFields"][] = "ca_codcuentat";
$tdataalcuentasalma[".googleLikeFields"][] = "ca_codcuenta";
$tdataalcuentasalma[".googleLikeFields"][] = "ca_nomcuenta";
$tdataalcuentasalma[".googleLikeFields"][] = "nombrecuenta";
$tdataalcuentasalma[".googleLikeFields"][] = "ca_recibemovto";
$tdataalcuentasalma[".googleLikeFields"][] = "ca_tipocuenta";
$tdataalcuentasalma[".googleLikeFields"][] = "geusuario";
$tdataalcuentasalma[".googleLikeFields"][] = "gefechaactua";
$tdataalcuentasalma[".googleLikeFields"][] = "tac_vidautil";
$tdataalcuentasalma[".googleLikeFields"][] = "tac_codcta";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentacostocod";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentacostonam";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentadepcod";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentadepname";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentacostonew";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentacostoservicio";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_cuentacostocodnopp";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_comodato_entrega";
$tdataalcuentasalma[".googleLikeFields"][] = "nicsp_comodato_recibe";



$tdataalcuentasalma[".tableType"] = "list";

$tdataalcuentasalma[".printerPageOrientation"] = 0;
$tdataalcuentasalma[".nPrinterPageScale"] = 100;

$tdataalcuentasalma[".nPrinterSplitRecords"] = 40;

$tdataalcuentasalma[".geocodingEnabled"] = false;










$tdataalcuentasalma[".pageSize"] = 20;

$tdataalcuentasalma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalcuentasalma[".strOrderBy"] = $tstrOrderBy;

$tdataalcuentasalma[".orderindexes"] = array();


$tdataalcuentasalma[".sqlHead"] = "SELECT cuentasalma_id,  	ca_codcuentat,  	ca_codcuenta,  	ca_nomcuenta,  CONCAT_WS('---',ca_codcuenta,ca_nomcuenta)AS nombrecuenta,  	ca_recibemovto,  	ca_tipocuenta,  	geusuario,  	gefechaactua,  	tac_vidautil,  	tac_codcta,  	nicsp_cuentacostocod,  	nicsp_cuentacostonam,  	nicsp_cuentadepcod,  	nicsp_cuentadepname,  	nicsp_cuentacostonew,  	nicsp_cuentacostoservicio,  	nicsp_cuentacostocodnopp,  	nicsp_comodato_entrega,  	nicsp_comodato_recibe";
$tdataalcuentasalma[".sqlFrom"] = "FROM alcuentasalma";
$tdataalcuentasalma[".sqlWhereExpr"] = "";
$tdataalcuentasalma[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "Devolutivos",
	'nameType' => 'Text',
	'where' => "tac_codcta >= 200",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Consumo",
	'nameType' => 'Text',
	'where' => "tac_codcta < 200",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataalcuentasalma[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalcuentasalma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalcuentasalma[".arrGroupsPerPage"] = $arrGPP;

$tdataalcuentasalma[".highlightSearchResults"] = true;

$tableKeysalcuentasalma = array();
$tableKeysalcuentasalma[] = "cuentasalma_id";
$tdataalcuentasalma[".Keys"] = $tableKeysalcuentasalma;


$tdataalcuentasalma[".hideMobileList"] = array();




//	cuentasalma_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cuentasalma_id";
	$fdata["GoodName"] = "cuentasalma_id";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","cuentasalma_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cuentasalma_id";

		$fdata["sourceSingle"] = "cuentasalma_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuentasalma_id";

	
	
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


	$tdataalcuentasalma["cuentasalma_id"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "cuentasalma_id";
//	ca_codcuentat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ca_codcuentat";
	$fdata["GoodName"] = "ca_codcuentat";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","ca_codcuentat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ca_codcuentat";

		$fdata["sourceSingle"] = "ca_codcuentat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca_codcuentat";

	
	
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


	$tdataalcuentasalma["ca_codcuentat"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "ca_codcuentat";
//	ca_codcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ca_codcuenta";
	$fdata["GoodName"] = "ca_codcuenta";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","ca_codcuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ca_codcuenta";

		$fdata["sourceSingle"] = "ca_codcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca_codcuenta";

	
	
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


	$tdataalcuentasalma["ca_codcuenta"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "ca_codcuenta";
//	ca_nomcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ca_nomcuenta";
	$fdata["GoodName"] = "ca_nomcuenta";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","ca_nomcuenta");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataalcuentasalma["ca_nomcuenta"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "ca_nomcuenta";
//	nombrecuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombrecuenta";
	$fdata["GoodName"] = "nombrecuenta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nombrecuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombrecuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT_WS('---',ca_codcuenta,ca_nomcuenta)";

	
	
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


	$tdataalcuentasalma["nombrecuenta"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nombrecuenta";
//	ca_recibemovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ca_recibemovto";
	$fdata["GoodName"] = "ca_recibemovto";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","ca_recibemovto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ca_recibemovto";

		$fdata["sourceSingle"] = "ca_recibemovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca_recibemovto";

	
	
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
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "snid";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sn";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataalcuentasalma["ca_recibemovto"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "ca_recibemovto";
//	ca_tipocuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ca_tipocuenta";
	$fdata["GoodName"] = "ca_tipocuenta";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","ca_tipocuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ca_tipocuenta";

		$fdata["sourceSingle"] = "ca_tipocuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca_tipocuenta";

	
	
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


	$tdataalcuentasalma["ca_tipocuenta"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "ca_tipocuenta";
//	geusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "geusuario";
	$fdata["GoodName"] = "geusuario";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","geusuario");
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


	$tdataalcuentasalma["geusuario"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "geusuario";
//	gefechaactua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gefechaactua";
	$fdata["GoodName"] = "gefechaactua";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","gefechaactua");
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


	$tdataalcuentasalma["gefechaactua"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "gefechaactua";
//	tac_vidautil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tac_vidautil";
	$fdata["GoodName"] = "tac_vidautil";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","tac_vidautil");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tac_vidautil";

		$fdata["sourceSingle"] = "tac_vidautil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tac_vidautil";

	
	
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


	$tdataalcuentasalma["tac_vidautil"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "tac_vidautil";
//	tac_codcta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tac_codcta";
	$fdata["GoodName"] = "tac_codcta";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","tac_codcta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tac_codcta";

		$fdata["sourceSingle"] = "tac_codcta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tac_codcta";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "cuentasalma_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalcuentasalma["tac_codcta"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "tac_codcta";
//	nicsp_cuentacostocod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nicsp_cuentacostocod";
	$fdata["GoodName"] = "nicsp_cuentacostocod";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentacostocod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostocod";

		$fdata["sourceSingle"] = "nicsp_cuentacostocod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostocod";

	
	
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


	$tdataalcuentasalma["nicsp_cuentacostocod"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentacostocod";
//	nicsp_cuentacostonam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nicsp_cuentacostonam";
	$fdata["GoodName"] = "nicsp_cuentacostonam";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentacostonam");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostonam";

		$fdata["sourceSingle"] = "nicsp_cuentacostonam";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostonam";

	
	
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
			$edata["EditParams"].= " maxlength=70";

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


	$tdataalcuentasalma["nicsp_cuentacostonam"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentacostonam";
//	nicsp_cuentadepcod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "nicsp_cuentadepcod";
	$fdata["GoodName"] = "nicsp_cuentadepcod";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentadepcod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentadepcod";

		$fdata["sourceSingle"] = "nicsp_cuentadepcod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentadepcod";

	
	
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
	$edata["LookupTable"] = "cgc_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoContableN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataalcuentasalma["nicsp_cuentadepcod"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentadepcod";
//	nicsp_cuentadepname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nicsp_cuentadepname";
	$fdata["GoodName"] = "nicsp_cuentadepname";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentadepname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nicsp_cuentadepname";

		$fdata["sourceSingle"] = "nicsp_cuentadepname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentadepname";

	
	
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
			$edata["EditParams"].= " maxlength=70";

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


	$tdataalcuentasalma["nicsp_cuentadepname"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentadepname";
//	nicsp_cuentacostonew
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nicsp_cuentacostonew";
	$fdata["GoodName"] = "nicsp_cuentacostonew";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentacostonew");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostonew";

		$fdata["sourceSingle"] = "nicsp_cuentacostonew";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostonew";

	
	
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
	$edata["LookupTable"] = "cgc_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoContableN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataalcuentasalma["nicsp_cuentacostonew"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentacostonew";
//	nicsp_cuentacostoservicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nicsp_cuentacostoservicio";
	$fdata["GoodName"] = "nicsp_cuentacostoservicio";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentacostoservicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostoservicio";

		$fdata["sourceSingle"] = "nicsp_cuentacostoservicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostoservicio";

	
	
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
	$edata["LookupTable"] = "cgc_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoContableN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataalcuentasalma["nicsp_cuentacostoservicio"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentacostoservicio";
//	nicsp_cuentacostocodnopp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nicsp_cuentacostocodnopp";
	$fdata["GoodName"] = "nicsp_cuentacostocodnopp";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_cuentacostocodnopp");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostocodnopp";

		$fdata["sourceSingle"] = "nicsp_cuentacostocodnopp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostocodnopp";

	
	
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
	$edata["LookupTable"] = "cgc_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoContableN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataalcuentasalma["nicsp_cuentacostocodnopp"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_cuentacostocodnopp";
//	nicsp_comodato_entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "nicsp_comodato_entrega";
	$fdata["GoodName"] = "nicsp_comodato_entrega";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_comodato_entrega");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_comodato_entrega";

		$fdata["sourceSingle"] = "nicsp_comodato_entrega";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_comodato_entrega";

	
	
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


	$tdataalcuentasalma["nicsp_comodato_entrega"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_comodato_entrega";
//	nicsp_comodato_recibe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nicsp_comodato_recibe";
	$fdata["GoodName"] = "nicsp_comodato_recibe";
	$fdata["ownerTable"] = "alcuentasalma";
	$fdata["Label"] = GetFieldLabel("alcuentasalma","nicsp_comodato_recibe");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "nicsp_comodato_recibe";

		$fdata["sourceSingle"] = "nicsp_comodato_recibe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_comodato_recibe";

	
	
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


	$tdataalcuentasalma["nicsp_comodato_recibe"] = $fdata;
		$tdataalcuentasalma[".searchableFields"][] = "nicsp_comodato_recibe";


$tables_data["alcuentasalma"]=&$tdataalcuentasalma;
$field_labels["alcuentasalma"] = &$fieldLabelsalcuentasalma;
$fieldToolTips["alcuentasalma"] = &$fieldToolTipsalcuentasalma;
$placeHolders["alcuentasalma"] = &$placeHoldersalcuentasalma;
$page_titles["alcuentasalma"] = &$pageTitlesalcuentasalma;


changeTextControlsToDate( "alcuentasalma" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alcuentasalma"] = array();
//	alelemdevolutivo
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="alelemdevolutivo";
		$detailsParam["dOriginalTable"] = "alelemdevolutivo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "alelemdevolutivo";
	$detailsParam["dCaptionTable"] = GetTableCaption("alelemdevolutivo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["alcuentasalma"][$dIndex] = $detailsParam;

	
		$detailsTablesData["alcuentasalma"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["alcuentasalma"][$dIndex]["masterKeys"][]="ca_codcuenta";

				$detailsTablesData["alcuentasalma"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["alcuentasalma"][$dIndex]["detailKeys"][]="edcuenta";
//	alelemconsumo
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="alelemconsumo";
		$detailsParam["dOriginalTable"] = "alelemconsumo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "alelemconsumo";
	$detailsParam["dCaptionTable"] = GetTableCaption("alelemconsumo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["alcuentasalma"][$dIndex] = $detailsParam;

	
		$detailsTablesData["alcuentasalma"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["alcuentasalma"][$dIndex]["masterKeys"][]="ca_codcuenta";

				$detailsTablesData["alcuentasalma"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["alcuentasalma"][$dIndex]["detailKeys"][]="eccuenta";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alcuentasalma"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alcuentasalma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cuentasalma_id,  	ca_codcuentat,  	ca_codcuenta,  	ca_nomcuenta,  CONCAT_WS('---',ca_codcuenta,ca_nomcuenta)AS nombrecuenta,  	ca_recibemovto,  	ca_tipocuenta,  	geusuario,  	gefechaactua,  	tac_vidautil,  	tac_codcta,  	nicsp_cuentacostocod,  	nicsp_cuentacostonam,  	nicsp_cuentadepcod,  	nicsp_cuentadepname,  	nicsp_cuentacostonew,  	nicsp_cuentacostoservicio,  	nicsp_cuentacostocodnopp,  	nicsp_comodato_entrega,  	nicsp_comodato_recibe";
$proto0["m_strFrom"] = "FROM alcuentasalma";
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
	"m_strName" => "cuentasalma_id",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto6["m_sql"] = "cuentasalma_id";
$proto6["m_srcTableName"] = "alcuentasalma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ca_codcuentat",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto8["m_sql"] = "ca_codcuentat";
$proto8["m_srcTableName"] = "alcuentasalma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ca_codcuenta",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto10["m_sql"] = "ca_codcuenta";
$proto10["m_srcTableName"] = "alcuentasalma";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ca_nomcuenta",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto12["m_sql"] = "ca_nomcuenta";
$proto12["m_srcTableName"] = "alcuentasalma";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'---'"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ca_codcuenta"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ca_nomcuenta"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "CONCAT_WS";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "CONCAT_WS('---',ca_codcuenta,ca_nomcuenta)";
$proto14["m_srcTableName"] = "alcuentasalma";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "nombrecuenta";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ca_recibemovto",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto19["m_sql"] = "ca_recibemovto";
$proto19["m_srcTableName"] = "alcuentasalma";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ca_tipocuenta",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto21["m_sql"] = "ca_tipocuenta";
$proto21["m_srcTableName"] = "alcuentasalma";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "geusuario",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto23["m_sql"] = "geusuario";
$proto23["m_srcTableName"] = "alcuentasalma";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "gefechaactua",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto25["m_sql"] = "gefechaactua";
$proto25["m_srcTableName"] = "alcuentasalma";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tac_vidautil",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto27["m_sql"] = "tac_vidautil";
$proto27["m_srcTableName"] = "alcuentasalma";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "tac_codcta",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto29["m_sql"] = "tac_codcta";
$proto29["m_srcTableName"] = "alcuentasalma";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostocod",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto31["m_sql"] = "nicsp_cuentacostocod";
$proto31["m_srcTableName"] = "alcuentasalma";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostonam",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto33["m_sql"] = "nicsp_cuentacostonam";
$proto33["m_srcTableName"] = "alcuentasalma";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentadepcod",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto35["m_sql"] = "nicsp_cuentadepcod";
$proto35["m_srcTableName"] = "alcuentasalma";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentadepname",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto37["m_sql"] = "nicsp_cuentadepname";
$proto37["m_srcTableName"] = "alcuentasalma";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostonew",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto39["m_sql"] = "nicsp_cuentacostonew";
$proto39["m_srcTableName"] = "alcuentasalma";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostoservicio",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto41["m_sql"] = "nicsp_cuentacostoservicio";
$proto41["m_srcTableName"] = "alcuentasalma";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostocodnopp",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto43["m_sql"] = "nicsp_cuentacostocodnopp";
$proto43["m_srcTableName"] = "alcuentasalma";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_comodato_entrega",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto45["m_sql"] = "nicsp_comodato_entrega";
$proto45["m_srcTableName"] = "alcuentasalma";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_comodato_recibe",
	"m_strTable" => "alcuentasalma",
	"m_srcTableName" => "alcuentasalma"
));

$proto47["m_sql"] = "nicsp_comodato_recibe";
$proto47["m_srcTableName"] = "alcuentasalma";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "alcuentasalma";
$proto50["m_srcTableName"] = "alcuentasalma";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "cuentasalma_id";
$proto50["m_columns"][] = "ca_codcuentat";
$proto50["m_columns"][] = "ca_codcuenta";
$proto50["m_columns"][] = "ca_nomcuenta";
$proto50["m_columns"][] = "ca_recibemovto";
$proto50["m_columns"][] = "ca_tipocuenta";
$proto50["m_columns"][] = "geusuario";
$proto50["m_columns"][] = "gefechaactua";
$proto50["m_columns"][] = "tac_vidautil";
$proto50["m_columns"][] = "tac_codcta";
$proto50["m_columns"][] = "nicsp_cuentacostocod";
$proto50["m_columns"][] = "nicsp_cuentacostonam";
$proto50["m_columns"][] = "nicsp_cuentadepcod";
$proto50["m_columns"][] = "nicsp_cuentadepname";
$proto50["m_columns"][] = "nicsp_cuentacostonew";
$proto50["m_columns"][] = "nicsp_cuentacostoservicio";
$proto50["m_columns"][] = "nicsp_cuentacostocodnopp";
$proto50["m_columns"][] = "nicsp_comodato_entrega";
$proto50["m_columns"][] = "nicsp_comodato_recibe";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "alcuentasalma";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "alcuentasalma";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="alcuentasalma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alcuentasalma = createSqlQuery_alcuentasalma();


	
								;

																				

$tdataalcuentasalma[".sqlquery"] = $queryData_alcuentasalma;



include_once(getabspath("include/alcuentasalma_events.php"));
$tdataalcuentasalma[".hasEvents"] = true;

?>