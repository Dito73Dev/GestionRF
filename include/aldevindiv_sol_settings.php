<?php
$tdataaldevindiv_sol = array();
$tdataaldevindiv_sol[".searchableFields"] = array();
$tdataaldevindiv_sol[".ShortName"] = "aldevindiv_sol";
$tdataaldevindiv_sol[".OwnerID"] = "username_id";
$tdataaldevindiv_sol[".OriginalTable"] = "aldevindiv_sol";


$tdataaldevindiv_sol[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaldevindiv_sol[".originalPagesByType"] = $tdataaldevindiv_sol[".pagesByType"];
$tdataaldevindiv_sol[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaldevindiv_sol[".originalPages"] = $tdataaldevindiv_sol[".pages"];
$tdataaldevindiv_sol[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaldevindiv_sol[".originalDefaultPages"] = $tdataaldevindiv_sol[".defaultPages"];

//	field labels
$fieldLabelsaldevindiv_sol = array();
$fieldToolTipsaldevindiv_sol = array();
$pageTitlesaldevindiv_sol = array();
$placeHoldersaldevindiv_sol = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaldevindiv_sol["Spanish"] = array();
	$fieldToolTipsaldevindiv_sol["Spanish"] = array();
	$placeHoldersaldevindiv_sol["Spanish"] = array();
	$pageTitlesaldevindiv_sol["Spanish"] = array();
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_estado"] = "Estado";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_estado"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_estado"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_fecha"] = "Fecha";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_fecha"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_fecha"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_mailnot"] = "Correo notificación";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_mailnot"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_mailnot"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_obs"] = "Observaciones";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_obs"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_obs"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_rad"] = "Radicado";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_rad"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_rad"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_type"] = "Tipo de solicitud";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_type"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_type"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_userfr"] = "De";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_userfr"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_userfr"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_userid"] = "UsuarioID";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_userid"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_userid"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sol_userto"] = "Para";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sol_userto"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sol_userto"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["transact_id"] = "Transact Id";
	$fieldToolTipsaldevindiv_sol["Spanish"]["transact_id"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["transact_id"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["username_id"] = "Solicitado por:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["username_id"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["username_id"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["usr_fecha"] = "Usr Fecha";
	$fieldToolTipsaldevindiv_sol["Spanish"]["usr_fecha"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["usr_fecha"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["usr_username"] = "Gestionado por";
	$fieldToolTipsaldevindiv_sol["Spanish"]["usr_username"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["usr_username"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_a_user"] = "Funcionario que entrega:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_a_user"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_a_user"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_a_documento"] = "Documento:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_a_documento"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_a_documento"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_a_email"] = "Correo electrónico:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_a_email"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_a_email"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_b_user"] = "Funcionario que recibe:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_b_user"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_b_user"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_b_documento"] = "Documento:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_b_documento"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_b_documento"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_b_email"] = "Correo electrónico:";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_b_email"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_b_email"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_a_hash"] = "Sign A Hash";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_a_hash"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_a_hash"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_b_hash"] = "Sign B Hash";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_b_hash"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_b_hash"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_a_qr"] = "";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_a_qr"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_a_qr"] = "";
	$fieldLabelsaldevindiv_sol["Spanish"]["sign_b_qr"] = "";
	$fieldToolTipsaldevindiv_sol["Spanish"]["sign_b_qr"] = "";
	$placeHoldersaldevindiv_sol["Spanish"]["sign_b_qr"] = "";
	$pageTitlesaldevindiv_sol["Spanish"]["add"] = "Solicitud de Traslado | Reintegro";
	$pageTitlesaldevindiv_sol["Spanish"]["edit"] = "Generar clave dinámica ID: [{%transact_id}]";
	if (count($fieldToolTipsaldevindiv_sol["Spanish"]))
		$tdataaldevindiv_sol[".isUseToolTips"] = true;
}


	$tdataaldevindiv_sol[".NCSearch"] = true;



$tdataaldevindiv_sol[".shortTableName"] = "aldevindiv_sol";
$tdataaldevindiv_sol[".nSecOptions"] = 1;

$tdataaldevindiv_sol[".mainTableOwnerID"] = "username_id";
$tdataaldevindiv_sol[".entityType"] = 0;
$tdataaldevindiv_sol[".connId"] = "dbrf_at_127_0_0_1";


$tdataaldevindiv_sol[".strOriginalTableName"] = "aldevindiv_sol";

	



$tdataaldevindiv_sol[".showAddInPopup"] = false;

$tdataaldevindiv_sol[".showEditInPopup"] = false;

$tdataaldevindiv_sol[".showViewInPopup"] = false;

$tdataaldevindiv_sol[".listAjax"] = false;
//	temporary
//$tdataaldevindiv_sol[".listAjax"] = false;

	$tdataaldevindiv_sol[".audit"] = false;

	$tdataaldevindiv_sol[".locking"] = false;


$pages = $tdataaldevindiv_sol[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaldevindiv_sol[".edit"] = true;
	$tdataaldevindiv_sol[".afterEditAction"] = 1;
	$tdataaldevindiv_sol[".closePopupAfterEdit"] = 1;
	$tdataaldevindiv_sol[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaldevindiv_sol[".add"] = true;
$tdataaldevindiv_sol[".afterAddAction"] = 5;
$tdataaldevindiv_sol[".closePopupAfterAdd"] = 0;
$tdataaldevindiv_sol[".afterAddActionDetTable"] = "aldevindiv_sol_vinc";
}

if( $pages[PAGE_LIST] ) {
	$tdataaldevindiv_sol[".list"] = true;
}



$tdataaldevindiv_sol[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaldevindiv_sol[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaldevindiv_sol[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaldevindiv_sol[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaldevindiv_sol[".printFriendly"] = true;
}



$tdataaldevindiv_sol[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaldevindiv_sol[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaldevindiv_sol[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaldevindiv_sol[".isUseAjaxSuggest"] = true;



												

$tdataaldevindiv_sol[".ajaxCodeSnippetAdded"] = false;

$tdataaldevindiv_sol[".buttonsAdded"] = false;

$tdataaldevindiv_sol[".addPageEvents"] = true;

// use timepicker for search panel
$tdataaldevindiv_sol[".isUseTimeForSearch"] = false;


$tdataaldevindiv_sol[".badgeColor"] = "D2691E";


$tdataaldevindiv_sol[".allSearchFields"] = array();
$tdataaldevindiv_sol[".filterFields"] = array();
$tdataaldevindiv_sol[".requiredSearchFields"] = array();

$tdataaldevindiv_sol[".googleLikeFields"] = array();
$tdataaldevindiv_sol[".googleLikeFields"][] = "transact_id";
$tdataaldevindiv_sol[".googleLikeFields"][] = "username_id";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_rad";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_estado";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_userfr";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_userid";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_userto";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_fecha";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_mailnot";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_type";
$tdataaldevindiv_sol[".googleLikeFields"][] = "usr_fecha";
$tdataaldevindiv_sol[".googleLikeFields"][] = "usr_username";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sol_obs";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_a_user";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_a_documento";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_a_email";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_b_user";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_b_documento";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_b_email";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_a_hash";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_b_hash";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_a_qr";
$tdataaldevindiv_sol[".googleLikeFields"][] = "sign_b_qr";



$tdataaldevindiv_sol[".tableType"] = "list";

$tdataaldevindiv_sol[".printerPageOrientation"] = 0;
$tdataaldevindiv_sol[".nPrinterPageScale"] = 100;

$tdataaldevindiv_sol[".nPrinterSplitRecords"] = 40;

$tdataaldevindiv_sol[".geocodingEnabled"] = false;




$tdataaldevindiv_sol[".isDisplayLoading"] = true;






$tdataaldevindiv_sol[".pageSize"] = 20;

$tdataaldevindiv_sol[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY transact_id DESC";
$tdataaldevindiv_sol[".strOrderBy"] = $tstrOrderBy;

$tdataaldevindiv_sol[".orderindexes"] = array();
			$tdataaldevindiv_sol[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "transact_id");


$tdataaldevindiv_sol[".sqlHead"] = "SELECT transact_id,  username_id,  sol_rad,  sol_estado,  sol_userfr,  sol_userid,  sol_userto,  sol_fecha,  sol_mailnot,  sol_type,  usr_fecha,  usr_username,  sol_obs,  sign_a_user,  sign_a_documento,  sign_a_email,  sign_b_user,  sign_b_documento,  sign_b_email,  sign_a_hash,  sign_b_hash,  sign_a_qr,  sign_b_qr";
$tdataaldevindiv_sol[".sqlFrom"] = "FROM aldevindiv_sol";
$tdataaldevindiv_sol[".sqlWhereExpr"] = "";
$tdataaldevindiv_sol[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "REINTEGRO",
	'nameType' => 'Text',
	'where' => "sol_type = 1",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "almacen600",
	'name' => "TRASLADO",
	'nameType' => 'Text',
	'where' => "sol_type = 2",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataaldevindiv_sol[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaldevindiv_sol[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaldevindiv_sol[".arrGroupsPerPage"] = $arrGPP;

$tdataaldevindiv_sol[".highlightSearchResults"] = true;

$tableKeysaldevindiv_sol = array();
$tableKeysaldevindiv_sol[] = "transact_id";
$tdataaldevindiv_sol[".Keys"] = $tableKeysaldevindiv_sol;


$tdataaldevindiv_sol[".hideMobileList"] = array();




//	transact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "transact_id";
	$fdata["GoodName"] = "transact_id";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","transact_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "transact_id";

		$fdata["sourceSingle"] = "transact_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "transact_id";

	
	
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


	$tdataaldevindiv_sol["transact_id"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "transact_id";
//	username_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username_id";
	$fdata["GoodName"] = "username_id";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","username_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username_id";

		$fdata["sourceSingle"] = "username_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username_id";

	
	
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


	$tdataaldevindiv_sol["username_id"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "username_id";
//	sol_rad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sol_rad";
	$fdata["GoodName"] = "sol_rad";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_rad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_rad";

		$fdata["sourceSingle"] = "sol_rad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_rad";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataaldevindiv_sol["sol_rad"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_rad";
//	sol_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sol_estado";
	$fdata["GoodName"] = "sol_estado";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_estado";

		$fdata["sourceSingle"] = "sol_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_estado";

	
	
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
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "estadosol_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estado_name";

				$edata["LookupWhere"] = "estadosol_id = 1";


	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "transact_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaldevindiv_sol["sol_estado"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_estado";
//	sol_userfr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sol_userfr";
	$fdata["GoodName"] = "sol_userfr";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_userfr");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_userfr";

		$fdata["sourceSingle"] = "sol_userfr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_userfr";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"sign_a_user", 'lookupF'=>"Username");
	$edata["autoCompleteFields"][] = array('masterF'=>"sign_a_documento", 'lookupF'=>"usr_personalid");
	$edata["autoCompleteFields"][] = array('masterF'=>"sign_a_email", 'lookupF'=>"usr_email");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

				$edata["LookupWhere"] = "idusrglobal = ':session.GID'";


	
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


	$tdataaldevindiv_sol["sol_userfr"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_userfr";
//	sol_userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sol_userid";
	$fdata["GoodName"] = "sol_userid";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_userid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_userid";

		$fdata["sourceSingle"] = "sol_userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_userid";

	
	
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
							
		$edata["autoUpdatable"] = true;

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


	$tdataaldevindiv_sol["sol_userid"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_userid";
//	sol_userto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sol_userto";
	$fdata["GoodName"] = "sol_userto";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_userto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_userto";

		$fdata["sourceSingle"] = "sol_userto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_userto";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"sol_mailnot", 'lookupF'=>"usr_email");
	$edata["autoCompleteFields"][] = array('masterF'=>"sign_b_user", 'lookupF'=>"Username");
	$edata["autoCompleteFields"][] = array('masterF'=>"sign_b_documento", 'lookupF'=>"usr_personalid");
	$edata["autoCompleteFields"][] = array('masterF'=>"sign_b_email", 'lookupF'=>"usr_email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "sol_type", "lookup" => "global_rol" );

	
	

	
	
	
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


	$tdataaldevindiv_sol["sol_userto"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_userto";
//	sol_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sol_fecha";
	$fdata["GoodName"] = "sol_fecha";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sol_fecha";

		$fdata["sourceSingle"] = "sol_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_fecha";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataaldevindiv_sol["sol_fecha"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_fecha";
//	sol_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sol_mailnot";
	$fdata["GoodName"] = "sol_mailnot";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_mailnot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_mailnot";

		$fdata["sourceSingle"] = "sol_mailnot";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_mailnot";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataaldevindiv_sol["sol_mailnot"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_mailnot";
//	sol_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sol_type";
	$fdata["GoodName"] = "sol_type";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_type";

		$fdata["sourceSingle"] = "sol_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_type";

	
	
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

				$edata["LookupWhere"] = "sol_id IN (1,2)";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sol_userto";

	
	
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


	$tdataaldevindiv_sol["sol_type"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_type";
//	usr_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "usr_fecha";
	$fdata["GoodName"] = "usr_fecha";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","usr_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "usr_fecha";

		$fdata["sourceSingle"] = "usr_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_fecha";

	
	
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


	$tdataaldevindiv_sol["usr_fecha"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "usr_fecha";
//	usr_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usr_username";
	$fdata["GoodName"] = "usr_username";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","usr_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_username";

		$fdata["sourceSingle"] = "usr_username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_username";

	
	
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


	$tdataaldevindiv_sol["usr_username"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "usr_username";
//	sol_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sol_obs";
	$fdata["GoodName"] = "sol_obs";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sol_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_obs";

		$fdata["sourceSingle"] = "sol_obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_obs";

	
	
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


	$tdataaldevindiv_sol["sol_obs"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sol_obs";
//	sign_a_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sign_a_user";
	$fdata["GoodName"] = "sign_a_user";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_a_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_a_user";

		$fdata["sourceSingle"] = "sign_a_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_a_user";

	
	
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


	$tdataaldevindiv_sol["sign_a_user"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_a_user";
//	sign_a_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sign_a_documento";
	$fdata["GoodName"] = "sign_a_documento";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_a_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_a_documento";

		$fdata["sourceSingle"] = "sign_a_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_a_documento";

	
	
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


	$tdataaldevindiv_sol["sign_a_documento"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_a_documento";
//	sign_a_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sign_a_email";
	$fdata["GoodName"] = "sign_a_email";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_a_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_a_email";

		$fdata["sourceSingle"] = "sign_a_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_a_email";

	
	
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


	$tdataaldevindiv_sol["sign_a_email"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_a_email";
//	sign_b_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sign_b_user";
	$fdata["GoodName"] = "sign_b_user";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_b_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_b_user";

		$fdata["sourceSingle"] = "sign_b_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_b_user";

	
	
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


	$tdataaldevindiv_sol["sign_b_user"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_b_user";
//	sign_b_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sign_b_documento";
	$fdata["GoodName"] = "sign_b_documento";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_b_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_b_documento";

		$fdata["sourceSingle"] = "sign_b_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_b_documento";

	
	
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


	$tdataaldevindiv_sol["sign_b_documento"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_b_documento";
//	sign_b_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sign_b_email";
	$fdata["GoodName"] = "sign_b_email";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_b_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_b_email";

		$fdata["sourceSingle"] = "sign_b_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_b_email";

	
	
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


	$tdataaldevindiv_sol["sign_b_email"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_b_email";
//	sign_a_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sign_a_hash";
	$fdata["GoodName"] = "sign_a_hash";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_a_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_a_hash";

		$fdata["sourceSingle"] = "sign_a_hash";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_a_hash";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataaldevindiv_sol["sign_a_hash"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_a_hash";
//	sign_b_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sign_b_hash";
	$fdata["GoodName"] = "sign_b_hash";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_b_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_b_hash";

		$fdata["sourceSingle"] = "sign_b_hash";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_b_hash";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataaldevindiv_sol["sign_b_hash"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_b_hash";
//	sign_a_qr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sign_a_qr";
	$fdata["GoodName"] = "sign_a_qr";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_a_qr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_a_qr";

		$fdata["sourceSingle"] = "sign_a_qr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_a_qr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataaldevindiv_sol["sign_a_qr"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_a_qr";
//	sign_b_qr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sign_b_qr";
	$fdata["GoodName"] = "sign_b_qr";
	$fdata["ownerTable"] = "aldevindiv_sol";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol","sign_b_qr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_b_qr";

		$fdata["sourceSingle"] = "sign_b_qr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_b_qr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataaldevindiv_sol["sign_b_qr"] = $fdata;
		$tdataaldevindiv_sol[".searchableFields"][] = "sign_b_qr";


$tables_data["aldevindiv_sol"]=&$tdataaldevindiv_sol;
$field_labels["aldevindiv_sol"] = &$fieldLabelsaldevindiv_sol;
$fieldToolTips["aldevindiv_sol"] = &$fieldToolTipsaldevindiv_sol;
$placeHolders["aldevindiv_sol"] = &$placeHoldersaldevindiv_sol;
$page_titles["aldevindiv_sol"] = &$pageTitlesaldevindiv_sol;


changeTextControlsToDate( "aldevindiv_sol" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aldevindiv_sol"] = array();
//	aldevindiv_sol_vinc
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="aldevindiv_sol_vinc";
		$detailsParam["dOriginalTable"] = "aldevindiv_sol_vinc";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "aldevindiv_sol_vinc";
	$detailsParam["dCaptionTable"] = GetTableCaption("aldevindiv_sol_vinc");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["aldevindiv_sol"][$dIndex] = $detailsParam;

	
		$detailsTablesData["aldevindiv_sol"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["aldevindiv_sol"][$dIndex]["masterKeys"][]="transact_id";

				$detailsTablesData["aldevindiv_sol"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["aldevindiv_sol"][$dIndex]["detailKeys"][]="transact_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aldevindiv_sol"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aldevindiv_sol()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "transact_id,  username_id,  sol_rad,  sol_estado,  sol_userfr,  sol_userid,  sol_userto,  sol_fecha,  sol_mailnot,  sol_type,  usr_fecha,  usr_username,  sol_obs,  sign_a_user,  sign_a_documento,  sign_a_email,  sign_b_user,  sign_b_documento,  sign_b_email,  sign_a_hash,  sign_b_hash,  sign_a_qr,  sign_b_qr";
$proto0["m_strFrom"] = "FROM aldevindiv_sol";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY transact_id DESC";
	
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
	"m_strName" => "transact_id",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto6["m_sql"] = "transact_id";
$proto6["m_srcTableName"] = "aldevindiv_sol";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username_id",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto8["m_sql"] = "username_id";
$proto8["m_srcTableName"] = "aldevindiv_sol";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_rad",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto10["m_sql"] = "sol_rad";
$proto10["m_srcTableName"] = "aldevindiv_sol";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_estado",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto12["m_sql"] = "sol_estado";
$proto12["m_srcTableName"] = "aldevindiv_sol";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_userfr",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto14["m_sql"] = "sol_userfr";
$proto14["m_srcTableName"] = "aldevindiv_sol";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_userid",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto16["m_sql"] = "sol_userid";
$proto16["m_srcTableName"] = "aldevindiv_sol";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_userto",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto18["m_sql"] = "sol_userto";
$proto18["m_srcTableName"] = "aldevindiv_sol";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_fecha",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto20["m_sql"] = "sol_fecha";
$proto20["m_srcTableName"] = "aldevindiv_sol";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_mailnot",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto22["m_sql"] = "sol_mailnot";
$proto22["m_srcTableName"] = "aldevindiv_sol";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_type",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto24["m_sql"] = "sol_type";
$proto24["m_srcTableName"] = "aldevindiv_sol";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_fecha",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto26["m_sql"] = "usr_fecha";
$proto26["m_srcTableName"] = "aldevindiv_sol";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_username",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto28["m_sql"] = "usr_username";
$proto28["m_srcTableName"] = "aldevindiv_sol";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_obs",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto30["m_sql"] = "sol_obs";
$proto30["m_srcTableName"] = "aldevindiv_sol";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_a_user",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto32["m_sql"] = "sign_a_user";
$proto32["m_srcTableName"] = "aldevindiv_sol";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_a_documento",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto34["m_sql"] = "sign_a_documento";
$proto34["m_srcTableName"] = "aldevindiv_sol";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_a_email",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto36["m_sql"] = "sign_a_email";
$proto36["m_srcTableName"] = "aldevindiv_sol";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_b_user",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto38["m_sql"] = "sign_b_user";
$proto38["m_srcTableName"] = "aldevindiv_sol";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_b_documento",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto40["m_sql"] = "sign_b_documento";
$proto40["m_srcTableName"] = "aldevindiv_sol";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_b_email",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto42["m_sql"] = "sign_b_email";
$proto42["m_srcTableName"] = "aldevindiv_sol";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_a_hash",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto44["m_sql"] = "sign_a_hash";
$proto44["m_srcTableName"] = "aldevindiv_sol";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_b_hash",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto46["m_sql"] = "sign_b_hash";
$proto46["m_srcTableName"] = "aldevindiv_sol";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_a_qr",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto48["m_sql"] = "sign_a_qr";
$proto48["m_srcTableName"] = "aldevindiv_sol";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_b_qr",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto50["m_sql"] = "sign_b_qr";
$proto50["m_srcTableName"] = "aldevindiv_sol";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "aldevindiv_sol";
$proto53["m_srcTableName"] = "aldevindiv_sol";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "transact_id";
$proto53["m_columns"][] = "sol_estado";
$proto53["m_columns"][] = "username_id";
$proto53["m_columns"][] = "sol_userid";
$proto53["m_columns"][] = "sol_userfr";
$proto53["m_columns"][] = "sol_userto";
$proto53["m_columns"][] = "sol_type";
$proto53["m_columns"][] = "sol_rad";
$proto53["m_columns"][] = "sol_fecha";
$proto53["m_columns"][] = "sol_mailnot";
$proto53["m_columns"][] = "usr_username";
$proto53["m_columns"][] = "usr_fecha";
$proto53["m_columns"][] = "sol_obs";
$proto53["m_columns"][] = "sign_a_user";
$proto53["m_columns"][] = "sign_a_documento";
$proto53["m_columns"][] = "sign_a_email";
$proto53["m_columns"][] = "sign_a_hash";
$proto53["m_columns"][] = "sign_a_hash_v";
$proto53["m_columns"][] = "sign_a_hash_v_date";
$proto53["m_columns"][] = "sign_a_hash_v_ip";
$proto53["m_columns"][] = "sign_b_user";
$proto53["m_columns"][] = "sign_b_documento";
$proto53["m_columns"][] = "sign_b_email";
$proto53["m_columns"][] = "sign_b_hash";
$proto53["m_columns"][] = "sign_b_hash_v";
$proto53["m_columns"][] = "sign_b_hash_v_date";
$proto53["m_columns"][] = "sign_b_hash_v_ip";
$proto53["m_columns"][] = "sign_a_qr";
$proto53["m_columns"][] = "sign_b_qr";
$proto53["m_columns"][] = "transact_numregistros";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "aldevindiv_sol";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "aldevindiv_sol";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "transact_id",
	"m_strTable" => "aldevindiv_sol",
	"m_srcTableName" => "aldevindiv_sol"
));

$proto56["m_column"]=$obj;
$proto56["m_bAsc"] = 0;
$proto56["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto56);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="aldevindiv_sol";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aldevindiv_sol = createSqlQuery_aldevindiv_sol();


	
								;

																							

$tdataaldevindiv_sol[".sqlquery"] = $queryData_aldevindiv_sol;



include_once(getabspath("include/aldevindiv_sol_events.php"));
$tdataaldevindiv_sol[".hasEvents"] = true;

?>