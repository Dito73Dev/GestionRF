<?php
$tdataaldevindiv_reintegros = array();
$tdataaldevindiv_reintegros[".searchableFields"] = array();
$tdataaldevindiv_reintegros[".ShortName"] = "aldevindiv_reintegros";
$tdataaldevindiv_reintegros[".OwnerID"] = "username_id";
$tdataaldevindiv_reintegros[".OriginalTable"] = "aldevindiv_sol";


$tdataaldevindiv_reintegros[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaldevindiv_reintegros[".originalPagesByType"] = $tdataaldevindiv_reintegros[".pagesByType"];
$tdataaldevindiv_reintegros[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaldevindiv_reintegros[".originalPages"] = $tdataaldevindiv_reintegros[".pages"];
$tdataaldevindiv_reintegros[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaldevindiv_reintegros[".originalDefaultPages"] = $tdataaldevindiv_reintegros[".defaultPages"];

//	field labels
$fieldLabelsaldevindiv_reintegros = array();
$fieldToolTipsaldevindiv_reintegros = array();
$pageTitlesaldevindiv_reintegros = array();
$placeHoldersaldevindiv_reintegros = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaldevindiv_reintegros["Spanish"] = array();
	$fieldToolTipsaldevindiv_reintegros["Spanish"] = array();
	$placeHoldersaldevindiv_reintegros["Spanish"] = array();
	$pageTitlesaldevindiv_reintegros["Spanish"] = array();
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_estado"] = "Estado";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_estado"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_estado"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_fecha"] = "Fecha";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_fecha"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_fecha"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_mailnot"] = "Correo notificación";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_mailnot"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_mailnot"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_obs"] = "Observaciones";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_obs"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_obs"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_rad"] = "Radicado";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_rad"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_rad"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_type"] = "Tipo de solicitud";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_type"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_type"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_userfr"] = "De";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_userfr"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_userfr"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_userid"] = "Sol Userid";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_userid"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_userid"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sol_userto"] = "Para";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sol_userto"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sol_userto"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["transact_id"] = "Transact Id";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["transact_id"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["transact_id"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["username_id"] = "Solicitado por:";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["username_id"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["username_id"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["usr_fecha"] = "Usr Fecha";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["usr_fecha"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["usr_fecha"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["usr_username"] = "Gestionado por";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["usr_username"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["usr_username"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["numreg"] = "Solicitados";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["numreg"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["numreg"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["qtygestionados"] = "Gestionados";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["qtygestionados"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["qtygestionados"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sign_a_email"] = "Sign A Email";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sign_a_email"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sign_a_email"] = "";
	$fieldLabelsaldevindiv_reintegros["Spanish"]["sign_b_email"] = "Correo notificación";
	$fieldToolTipsaldevindiv_reintegros["Spanish"]["sign_b_email"] = "";
	$placeHoldersaldevindiv_reintegros["Spanish"]["sign_b_email"] = "";
	if (count($fieldToolTipsaldevindiv_reintegros["Spanish"]))
		$tdataaldevindiv_reintegros[".isUseToolTips"] = true;
}


	$tdataaldevindiv_reintegros[".NCSearch"] = true;



$tdataaldevindiv_reintegros[".shortTableName"] = "aldevindiv_reintegros";
$tdataaldevindiv_reintegros[".nSecOptions"] = 0;

$tdataaldevindiv_reintegros[".mainTableOwnerID"] = "username_id";
$tdataaldevindiv_reintegros[".entityType"] = 1;
$tdataaldevindiv_reintegros[".connId"] = "dbrf_at_127_0_0_1";


$tdataaldevindiv_reintegros[".strOriginalTableName"] = "aldevindiv_sol";

	



$tdataaldevindiv_reintegros[".showAddInPopup"] = false;

$tdataaldevindiv_reintegros[".showEditInPopup"] = false;

$tdataaldevindiv_reintegros[".showViewInPopup"] = false;

$tdataaldevindiv_reintegros[".listAjax"] = false;
//	temporary
//$tdataaldevindiv_reintegros[".listAjax"] = false;

	$tdataaldevindiv_reintegros[".audit"] = false;

	$tdataaldevindiv_reintegros[".locking"] = false;


$pages = $tdataaldevindiv_reintegros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaldevindiv_reintegros[".edit"] = true;
	$tdataaldevindiv_reintegros[".afterEditAction"] = 1;
	$tdataaldevindiv_reintegros[".closePopupAfterEdit"] = 1;
	$tdataaldevindiv_reintegros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaldevindiv_reintegros[".add"] = true;
$tdataaldevindiv_reintegros[".afterAddAction"] = 1;
$tdataaldevindiv_reintegros[".closePopupAfterAdd"] = 1;
$tdataaldevindiv_reintegros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaldevindiv_reintegros[".list"] = true;
}



$tdataaldevindiv_reintegros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaldevindiv_reintegros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaldevindiv_reintegros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaldevindiv_reintegros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaldevindiv_reintegros[".printFriendly"] = true;
}



$tdataaldevindiv_reintegros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaldevindiv_reintegros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaldevindiv_reintegros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaldevindiv_reintegros[".isUseAjaxSuggest"] = true;



												

$tdataaldevindiv_reintegros[".ajaxCodeSnippetAdded"] = false;

$tdataaldevindiv_reintegros[".buttonsAdded"] = false;

$tdataaldevindiv_reintegros[".addPageEvents"] = true;

// use timepicker for search panel
$tdataaldevindiv_reintegros[".isUseTimeForSearch"] = false;


$tdataaldevindiv_reintegros[".badgeColor"] = "008B8B";


$tdataaldevindiv_reintegros[".allSearchFields"] = array();
$tdataaldevindiv_reintegros[".filterFields"] = array();
$tdataaldevindiv_reintegros[".requiredSearchFields"] = array();

$tdataaldevindiv_reintegros[".googleLikeFields"] = array();
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "transact_id";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "username_id";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_rad";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_estado";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_userfr";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_userid";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_userto";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_fecha";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_mailnot";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_type";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "usr_fecha";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "usr_username";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sol_obs";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "numreg";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "qtygestionados";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sign_a_email";
$tdataaldevindiv_reintegros[".googleLikeFields"][] = "sign_b_email";



$tdataaldevindiv_reintegros[".tableType"] = "list";

$tdataaldevindiv_reintegros[".printerPageOrientation"] = 0;
$tdataaldevindiv_reintegros[".nPrinterPageScale"] = 100;

$tdataaldevindiv_reintegros[".nPrinterSplitRecords"] = 40;

$tdataaldevindiv_reintegros[".geocodingEnabled"] = false;










$tdataaldevindiv_reintegros[".pageSize"] = 20;

$tdataaldevindiv_reintegros[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY aldevindiv_sol.transact_id DESC";
$tdataaldevindiv_reintegros[".strOrderBy"] = $tstrOrderBy;

$tdataaldevindiv_reintegros[".orderindexes"] = array();
			$tdataaldevindiv_reintegros[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "aldevindiv_sol.transact_id");


$tdataaldevindiv_reintegros[".sqlHead"] = "SELECT aldevindiv_sol.transact_id,  aldevindiv_sol.username_id,  aldevindiv_sol.sol_rad,  aldevindiv_sol.sol_estado,  aldevindiv_sol.sol_userfr,  aldevindiv_sol.sol_userid,  aldevindiv_sol.sol_userto,  aldevindiv_sol.sol_fecha,  aldevindiv_sol.sol_mailnot,  aldevindiv_sol.sol_type,  aldevindiv_sol.usr_fecha,  aldevindiv_sol.usr_username,  aldevindiv_sol.sol_obs,  q_lista_elementos_tyr_gestionados_group_00.numreg,  q_lista_elementos_tyr_gestionados_group_00.qtygestionados,  aldevindiv_sol.sign_a_email,  aldevindiv_sol.sign_b_email";
$tdataaldevindiv_reintegros[".sqlFrom"] = "FROM aldevindiv_sol  INNER JOIN q_lista_elementos_tyr_gestionados_group_00 ON aldevindiv_sol.transact_id = q_lista_elementos_tyr_gestionados_group_00.transact_id";
$tdataaldevindiv_reintegros[".sqlWhereExpr"] = "(aldevindiv_sol.sol_type = 1)";
$tdataaldevindiv_reintegros[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataaldevindiv_reintegros[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaldevindiv_reintegros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaldevindiv_reintegros[".arrGroupsPerPage"] = $arrGPP;

$tdataaldevindiv_reintegros[".highlightSearchResults"] = true;

$tableKeysaldevindiv_reintegros = array();
$tableKeysaldevindiv_reintegros[] = "transact_id";
$tdataaldevindiv_reintegros[".Keys"] = $tableKeysaldevindiv_reintegros;


$tdataaldevindiv_reintegros[".hideMobileList"] = array();




//	transact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "transact_id";
	$fdata["GoodName"] = "transact_id";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","transact_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "transact_id";

		$fdata["sourceSingle"] = "transact_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.transact_id";

	
	
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


	$tdataaldevindiv_reintegros["transact_id"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "transact_id";
//	username_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username_id";
	$fdata["GoodName"] = "username_id";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","username_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username_id";

		$fdata["sourceSingle"] = "username_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.username_id";

	
	
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
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdataaldevindiv_reintegros["username_id"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "username_id";
//	sol_rad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sol_rad";
	$fdata["GoodName"] = "sol_rad";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_rad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_rad";

		$fdata["sourceSingle"] = "sol_rad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_rad";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataaldevindiv_reintegros["sol_rad"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_rad";
//	sol_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sol_estado";
	$fdata["GoodName"] = "sol_estado";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_estado";

		$fdata["sourceSingle"] = "sol_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_estado";

	
	
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
	$edata["LookupTable"] = "aldevindiv_sol_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estadosol_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estado_name";

				$edata["LookupWhere"] = "estadosol_id >= 2";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "transact_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaldevindiv_reintegros["sol_estado"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_estado";
//	sol_userfr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sol_userfr";
	$fdata["GoodName"] = "sol_userfr";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_userfr");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_userfr";

		$fdata["sourceSingle"] = "sol_userfr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_userfr";

	
	
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
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdataaldevindiv_reintegros["sol_userfr"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_userfr";
//	sol_userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sol_userid";
	$fdata["GoodName"] = "sol_userid";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_userid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_userid";

		$fdata["sourceSingle"] = "sol_userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_userid";

	
	
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


	$tdataaldevindiv_reintegros["sol_userid"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_userid";
//	sol_userto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sol_userto";
	$fdata["GoodName"] = "sol_userto";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_userto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_userto";

		$fdata["sourceSingle"] = "sol_userto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_userto";

	
	
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
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdataaldevindiv_reintegros["sol_userto"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_userto";
//	sol_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sol_fecha";
	$fdata["GoodName"] = "sol_fecha";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sol_fecha";

		$fdata["sourceSingle"] = "sol_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_fecha";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataaldevindiv_reintegros["sol_fecha"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_fecha";
//	sol_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sol_mailnot";
	$fdata["GoodName"] = "sol_mailnot";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_mailnot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_mailnot";

		$fdata["sourceSingle"] = "sol_mailnot";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_mailnot";

	
	
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


	$tdataaldevindiv_reintegros["sol_mailnot"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_mailnot";
//	sol_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sol_type";
	$fdata["GoodName"] = "sol_type";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_type";

		$fdata["sourceSingle"] = "sol_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_type";

	
	
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
	$edata["LookupTable"] = "aldevindiv_sol_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sol_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sol_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdataaldevindiv_reintegros["sol_type"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_type";
//	usr_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "usr_fecha";
	$fdata["GoodName"] = "usr_fecha";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","usr_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "usr_fecha";

		$fdata["sourceSingle"] = "usr_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.usr_fecha";

	
	
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


	$tdataaldevindiv_reintegros["usr_fecha"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "usr_fecha";
//	usr_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usr_username";
	$fdata["GoodName"] = "usr_username";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","usr_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_username";

		$fdata["sourceSingle"] = "usr_username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.usr_username";

	
	
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
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

				$edata["LookupWhere"] = "Username = ':session.UserID'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
		
		$edata["autoUpdatable"] = true;

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


	$tdataaldevindiv_reintegros["usr_username"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "usr_username";
//	sol_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sol_obs";
	$fdata["GoodName"] = "sol_obs";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sol_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_obs";

		$fdata["sourceSingle"] = "sol_obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sol_obs";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 120;
			$edata["nCols"] = 200;

	
	
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
		$fdata["filterTotalFields"] = "transact_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaldevindiv_reintegros["sol_obs"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sol_obs";
//	numreg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "numreg";
	$fdata["GoodName"] = "numreg";
	$fdata["ownerTable"] = "q_lista_elementos_tyr_gestionados_group_00";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","numreg");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "numreg";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q_lista_elementos_tyr_gestionados_group_00.numreg";

	
	
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


	$tdataaldevindiv_reintegros["numreg"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "numreg";
//	qtygestionados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "qtygestionados";
	$fdata["GoodName"] = "qtygestionados";
	$fdata["ownerTable"] = "q_lista_elementos_tyr_gestionados_group_00";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","qtygestionados");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "qtygestionados";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q_lista_elementos_tyr_gestionados_group_00.qtygestionados";

	
	
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


	$tdataaldevindiv_reintegros["qtygestionados"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "qtygestionados";
//	sign_a_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sign_a_email";
	$fdata["GoodName"] = "sign_a_email";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sign_a_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_a_email";

		$fdata["sourceSingle"] = "sign_a_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sign_a_email";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataaldevindiv_reintegros["sign_a_email"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sign_a_email";
//	sign_b_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sign_b_email";
	$fdata["GoodName"] = "sign_b_email";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_reintegros","sign_b_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_b_email";

		$fdata["sourceSingle"] = "sign_b_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_sol.sign_b_email";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataaldevindiv_reintegros["sign_b_email"] = $fdata;
		$tdataaldevindiv_reintegros[".searchableFields"][] = "sign_b_email";


$tables_data["aldevindiv_reintegros"]=&$tdataaldevindiv_reintegros;
$field_labels["aldevindiv_reintegros"] = &$fieldLabelsaldevindiv_reintegros;
$fieldToolTips["aldevindiv_reintegros"] = &$fieldToolTipsaldevindiv_reintegros;
$placeHolders["aldevindiv_reintegros"] = &$placeHoldersaldevindiv_reintegros;
$page_titles["aldevindiv_reintegros"] = &$pageTitlesaldevindiv_reintegros;


changeTextControlsToDate( "aldevindiv_reintegros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aldevindiv_reintegros"] = array();
//	aldevindiv_sol_vinc_adm
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="aldevindiv_sol_vinc_adm";
		$detailsParam["dOriginalTable"] = "aldevindiv_sol_vinc";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "aldevindiv_sol_vinc_adm";
	$detailsParam["dCaptionTable"] = GetTableCaption("aldevindiv_sol_vinc_adm");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["aldevindiv_reintegros"][$dIndex] = $detailsParam;

	
		$detailsTablesData["aldevindiv_reintegros"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["aldevindiv_reintegros"][$dIndex]["masterKeys"][]="transact_id";

				$detailsTablesData["aldevindiv_reintegros"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["aldevindiv_reintegros"][$dIndex]["detailKeys"][]="transact_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aldevindiv_reintegros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aldevindiv_reintegros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aldevindiv_sol.transact_id,  aldevindiv_sol.username_id,  aldevindiv_sol.sol_rad,  aldevindiv_sol.sol_estado,  aldevindiv_sol.sol_userfr,  aldevindiv_sol.sol_userid,  aldevindiv_sol.sol_userto,  aldevindiv_sol.sol_fecha,  aldevindiv_sol.sol_mailnot,  aldevindiv_sol.sol_type,  aldevindiv_sol.usr_fecha,  aldevindiv_sol.usr_username,  aldevindiv_sol.sol_obs,  q_lista_elementos_tyr_gestionados_group_00.numreg,  q_lista_elementos_tyr_gestionados_group_00.qtygestionados,  aldevindiv_sol.sign_a_email,  aldevindiv_sol.sign_b_email";
$proto0["m_strFrom"] = "FROM aldevindiv_sol  INNER JOIN q_lista_elementos_tyr_gestionados_group_00 ON aldevindiv_sol.transact_id = q_lista_elementos_tyr_gestionados_group_00.transact_id";
$proto0["m_strWhere"] = "(aldevindiv_sol.sol_type = 1)";
$proto0["m_strOrderBy"] = "ORDER BY aldevindiv_sol.transact_id DESC";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "aldevindiv_sol.sol_type = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sol_type",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_strName" => "transact_id",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto6["m_sql"] = "aldevindiv_sol.transact_id";
$proto6["m_srcTableName"] = "aldevindiv_reintegros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username_id",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto8["m_sql"] = "aldevindiv_sol.username_id";
$proto8["m_srcTableName"] = "aldevindiv_reintegros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_rad",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto10["m_sql"] = "aldevindiv_sol.sol_rad";
$proto10["m_srcTableName"] = "aldevindiv_reintegros";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_estado",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto12["m_sql"] = "aldevindiv_sol.sol_estado";
$proto12["m_srcTableName"] = "aldevindiv_reintegros";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_userfr",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto14["m_sql"] = "aldevindiv_sol.sol_userfr";
$proto14["m_srcTableName"] = "aldevindiv_reintegros";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_userid",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto16["m_sql"] = "aldevindiv_sol.sol_userid";
$proto16["m_srcTableName"] = "aldevindiv_reintegros";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_userto",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto18["m_sql"] = "aldevindiv_sol.sol_userto";
$proto18["m_srcTableName"] = "aldevindiv_reintegros";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_fecha",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto20["m_sql"] = "aldevindiv_sol.sol_fecha";
$proto20["m_srcTableName"] = "aldevindiv_reintegros";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_mailnot",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto22["m_sql"] = "aldevindiv_sol.sol_mailnot";
$proto22["m_srcTableName"] = "aldevindiv_reintegros";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_type",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto24["m_sql"] = "aldevindiv_sol.sol_type";
$proto24["m_srcTableName"] = "aldevindiv_reintegros";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_fecha",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto26["m_sql"] = "aldevindiv_sol.usr_fecha";
$proto26["m_srcTableName"] = "aldevindiv_reintegros";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_username",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto28["m_sql"] = "aldevindiv_sol.usr_username";
$proto28["m_srcTableName"] = "aldevindiv_reintegros";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_obs",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto30["m_sql"] = "aldevindiv_sol.sol_obs";
$proto30["m_srcTableName"] = "aldevindiv_reintegros";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "numreg",
	"m_strTable" => "q_lista_elementos_tyr_gestionados_group_00",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto32["m_sql"] = "q_lista_elementos_tyr_gestionados_group_00.numreg";
$proto32["m_srcTableName"] = "aldevindiv_reintegros";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "qtygestionados",
	"m_strTable" => "q_lista_elementos_tyr_gestionados_group_00",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto34["m_sql"] = "q_lista_elementos_tyr_gestionados_group_00.qtygestionados";
$proto34["m_srcTableName"] = "aldevindiv_reintegros";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_a_email",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto36["m_sql"] = "aldevindiv_sol.sign_a_email";
$proto36["m_srcTableName"] = "aldevindiv_reintegros";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_b_email",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto38["m_sql"] = "aldevindiv_sol.sign_b_email";
$proto38["m_srcTableName"] = "aldevindiv_reintegros";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "aldevindiv_sol";
$proto41["m_srcTableName"] = "aldevindiv_reintegros";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "transact_id";
$proto41["m_columns"][] = "sol_estado";
$proto41["m_columns"][] = "username_id";
$proto41["m_columns"][] = "sol_userid";
$proto41["m_columns"][] = "sol_userfr";
$proto41["m_columns"][] = "sol_userto";
$proto41["m_columns"][] = "sol_type";
$proto41["m_columns"][] = "sol_rad";
$proto41["m_columns"][] = "sol_fecha";
$proto41["m_columns"][] = "sol_mailnot";
$proto41["m_columns"][] = "usr_username";
$proto41["m_columns"][] = "usr_fecha";
$proto41["m_columns"][] = "sol_obs";
$proto41["m_columns"][] = "sign_a_user";
$proto41["m_columns"][] = "sign_a_documento";
$proto41["m_columns"][] = "sign_a_email";
$proto41["m_columns"][] = "sign_a_hash";
$proto41["m_columns"][] = "sign_a_hash_v";
$proto41["m_columns"][] = "sign_a_hash_v_date";
$proto41["m_columns"][] = "sign_a_hash_v_ip";
$proto41["m_columns"][] = "sign_b_user";
$proto41["m_columns"][] = "sign_b_documento";
$proto41["m_columns"][] = "sign_b_email";
$proto41["m_columns"][] = "sign_b_hash";
$proto41["m_columns"][] = "sign_b_hash_v";
$proto41["m_columns"][] = "sign_b_hash_v_date";
$proto41["m_columns"][] = "sign_b_hash_v_ip";
$proto41["m_columns"][] = "sign_a_qr";
$proto41["m_columns"][] = "sign_b_qr";
$proto41["m_columns"][] = "transact_numregistros";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "aldevindiv_sol";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "aldevindiv_reintegros";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "q_lista_elementos_tyr_gestionados_group_00";
$proto45["m_srcTableName"] = "aldevindiv_reintegros";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "transact_id";
$proto45["m_columns"][] = "numreg";
$proto45["m_columns"][] = "sol_estado";
$proto45["m_columns"][] = "qtygestionados";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN q_lista_elementos_tyr_gestionados_group_00 ON aldevindiv_sol.transact_id = q_lista_elementos_tyr_gestionados_group_00.transact_id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "aldevindiv_reintegros";
$proto46=array();
$proto46["m_sql"] = "q_lista_elementos_tyr_gestionados_group_00.transact_id = aldevindiv_sol.transact_id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "transact_id",
	"m_strTable" => "q_lista_elementos_tyr_gestionados_group_00",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= aldevindiv_sol.transact_id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "transact_id",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_reintegros"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 0;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="aldevindiv_reintegros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aldevindiv_reintegros = createSqlQuery_aldevindiv_reintegros();


	
								;

																	

$tdataaldevindiv_reintegros[".sqlquery"] = $queryData_aldevindiv_reintegros;



include_once(getabspath("include/aldevindiv_reintegros_events.php"));
$tdataaldevindiv_reintegros[".hasEvents"] = true;

?>