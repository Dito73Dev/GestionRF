<?php
$tdataglobal_users = array();
$tdataglobal_users[".searchableFields"] = array();
$tdataglobal_users[".ShortName"] = "global_users";
$tdataglobal_users[".OwnerID"] = "";
$tdataglobal_users[".OriginalTable"] = "global_users";


$tdataglobal_users[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataglobal_users[".originalPagesByType"] = $tdataglobal_users[".pagesByType"];
$tdataglobal_users[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataglobal_users[".originalPages"] = $tdataglobal_users[".pages"];
$tdataglobal_users[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataglobal_users[".originalDefaultPages"] = $tdataglobal_users[".defaultPages"];

//	field labels
$fieldLabelsglobal_users = array();
$fieldToolTipsglobal_users = array();
$pageTitlesglobal_users = array();
$placeHoldersglobal_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_users["Spanish"] = array();
	$fieldToolTipsglobal_users["Spanish"] = array();
	$placeHoldersglobal_users["Spanish"] = array();
	$pageTitlesglobal_users["Spanish"] = array();
	$fieldLabelsglobal_users["Spanish"]["active"] = "Active";
	$fieldToolTipsglobal_users["Spanish"]["active"] = "";
	$placeHoldersglobal_users["Spanish"]["active"] = "";
	$fieldLabelsglobal_users["Spanish"]["global_rol"] = "Global Rol";
	$fieldToolTipsglobal_users["Spanish"]["global_rol"] = "";
	$placeHoldersglobal_users["Spanish"]["global_rol"] = "";
	$fieldLabelsglobal_users["Spanish"]["idusrglobal"] = "UID";
	$fieldToolTipsglobal_users["Spanish"]["idusrglobal"] = "";
	$placeHoldersglobal_users["Spanish"]["idusrglobal"] = "";
	$fieldLabelsglobal_users["Spanish"]["Password"] = "Password";
	$fieldToolTipsglobal_users["Spanish"]["Password"] = "";
	$placeHoldersglobal_users["Spanish"]["Password"] = "";
	$fieldLabelsglobal_users["Spanish"]["Username"] = "Usuario";
	$fieldToolTipsglobal_users["Spanish"]["Username"] = "";
	$placeHoldersglobal_users["Spanish"]["Username"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_email"] = "Email";
	$fieldToolTipsglobal_users["Spanish"]["usr_email"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_email"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_nombresfull"] = "Nombres";
	$fieldToolTipsglobal_users["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsglobal_users["Spanish"]["usr_personalid"] = "Documento";
	$fieldToolTipsglobal_users["Spanish"]["usr_personalid"] = "";
	$placeHoldersglobal_users["Spanish"]["usr_personalid"] = "";
	if (count($fieldToolTipsglobal_users["Spanish"]))
		$tdataglobal_users[".isUseToolTips"] = true;
}


	$tdataglobal_users[".NCSearch"] = true;



$tdataglobal_users[".shortTableName"] = "global_users";
$tdataglobal_users[".nSecOptions"] = 0;

$tdataglobal_users[".mainTableOwnerID"] = "";
$tdataglobal_users[".entityType"] = 0;
$tdataglobal_users[".connId"] = "dbusers_at_127_0_0_1";


$tdataglobal_users[".strOriginalTableName"] = "global_users";

	



$tdataglobal_users[".showAddInPopup"] = false;

$tdataglobal_users[".showEditInPopup"] = false;

$tdataglobal_users[".showViewInPopup"] = false;

$tdataglobal_users[".listAjax"] = false;
//	temporary
//$tdataglobal_users[".listAjax"] = false;

	$tdataglobal_users[".audit"] = false;

	$tdataglobal_users[".locking"] = false;


$pages = $tdataglobal_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_users[".edit"] = true;
	$tdataglobal_users[".afterEditAction"] = 1;
	$tdataglobal_users[".closePopupAfterEdit"] = 1;
	$tdataglobal_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_users[".add"] = true;
$tdataglobal_users[".afterAddAction"] = 1;
$tdataglobal_users[".closePopupAfterAdd"] = 1;
$tdataglobal_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_users[".list"] = true;
}



$tdataglobal_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_users[".printFriendly"] = true;
}



$tdataglobal_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_users[".isUseAjaxSuggest"] = true;



												

$tdataglobal_users[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_users[".buttonsAdded"] = false;

$tdataglobal_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_users[".isUseTimeForSearch"] = false;


$tdataglobal_users[".badgeColor"] = "CD5C5C";


$tdataglobal_users[".allSearchFields"] = array();
$tdataglobal_users[".filterFields"] = array();
$tdataglobal_users[".requiredSearchFields"] = array();

$tdataglobal_users[".googleLikeFields"] = array();
$tdataglobal_users[".googleLikeFields"][] = "idusrglobal";
$tdataglobal_users[".googleLikeFields"][] = "Username";
$tdataglobal_users[".googleLikeFields"][] = "usr_nombresfull";
$tdataglobal_users[".googleLikeFields"][] = "usr_personalid";
$tdataglobal_users[".googleLikeFields"][] = "Password";
$tdataglobal_users[".googleLikeFields"][] = "usr_email";
$tdataglobal_users[".googleLikeFields"][] = "global_rol";
$tdataglobal_users[".googleLikeFields"][] = "active";



$tdataglobal_users[".tableType"] = "list";

$tdataglobal_users[".printerPageOrientation"] = 0;
$tdataglobal_users[".nPrinterPageScale"] = 100;

$tdataglobal_users[".nPrinterSplitRecords"] = 40;

$tdataglobal_users[".geocodingEnabled"] = false;










$tdataglobal_users[".pageSize"] = 20;

$tdataglobal_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_users[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_users[".orderindexes"] = array();


$tdataglobal_users[".sqlHead"] = "SELECT idusrglobal,  Username,  usr_nombresfull,  usr_personalid,  Password,  usr_email,  global_rol,  active";
$tdataglobal_users[".sqlFrom"] = "FROM global_users";
$tdataglobal_users[".sqlWhereExpr"] = "";
$tdataglobal_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_users[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_users[".highlightSearchResults"] = true;

$tableKeysglobal_users = array();
$tableKeysglobal_users[] = "idusrglobal";
$tdataglobal_users[".Keys"] = $tableKeysglobal_users;


$tdataglobal_users[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","idusrglobal");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

		$fdata["sourceSingle"] = "idusrglobal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
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


	$tdataglobal_users["idusrglobal"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "idusrglobal";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

		$fdata["sourceSingle"] = "Username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdataglobal_users["Username"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "Username";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_nombresfull";

		$fdata["sourceSingle"] = "usr_nombresfull";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
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


	$tdataglobal_users["usr_nombresfull"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_nombresfull";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_personalid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_personalid";

		$fdata["sourceSingle"] = "usr_personalid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataglobal_users["usr_personalid"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_personalid";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Password";

		$fdata["sourceSingle"] = "Password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdataglobal_users["Password"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "Password";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["sourceSingle"] = "usr_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
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


	$tdataglobal_users["usr_email"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "usr_email";
//	global_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "global_rol";
	$fdata["GoodName"] = "global_rol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","global_rol");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol";

		$fdata["sourceSingle"] = "global_rol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol";

	
	
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


	$tdataglobal_users["global_rol"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "global_rol";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users","active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdataglobal_users["active"] = $fdata;
		$tdataglobal_users[".searchableFields"][] = "active";


$tables_data["global_users"]=&$tdataglobal_users;
$field_labels["global_users"] = &$fieldLabelsglobal_users;
$fieldToolTips["global_users"] = &$fieldToolTipsglobal_users;
$placeHolders["global_users"] = &$placeHoldersglobal_users;
$page_titles["global_users"] = &$pageTitlesglobal_users;


changeTextControlsToDate( "global_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal,  Username,  usr_nombresfull,  usr_personalid,  Password,  usr_email,  global_rol,  active";
$proto0["m_strFrom"] = "FROM global_users";
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
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "global_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto8["m_sql"] = "Username";
$proto8["m_srcTableName"] = "global_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto10["m_sql"] = "usr_nombresfull";
$proto10["m_srcTableName"] = "global_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto12["m_sql"] = "usr_personalid";
$proto12["m_srcTableName"] = "global_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto14["m_sql"] = "Password";
$proto14["m_srcTableName"] = "global_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto16["m_sql"] = "usr_email";
$proto16["m_srcTableName"] = "global_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto18["m_sql"] = "global_rol";
$proto18["m_srcTableName"] = "global_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users"
));

$proto20["m_sql"] = "active";
$proto20["m_srcTableName"] = "global_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "global_users";
$proto23["m_srcTableName"] = "global_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idusrglobal";
$proto23["m_columns"][] = "id_fk";
$proto23["m_columns"][] = "Username";
$proto23["m_columns"][] = "Password";
$proto23["m_columns"][] = "usr_email";
$proto23["m_columns"][] = "usr_name";
$proto23["m_columns"][] = "usr_lname";
$proto23["m_columns"][] = "usr_nombresfull";
$proto23["m_columns"][] = "usr_personalid";
$proto23["m_columns"][] = "usr_inicial";
$proto23["m_columns"][] = "usr_sessini";
$proto23["m_columns"][] = "usr_image";
$proto23["m_columns"][] = "usr_status_nomina";
$proto23["m_columns"][] = "usr_status";
$proto23["m_columns"][] = "usr_rdnkey";
$proto23["m_columns"][] = "usr_type_vinc";
$proto23["m_columns"][] = "usr_type_vinculacion";
$proto23["m_columns"][] = "usr_status_sol";
$proto23["m_columns"][] = "usr_dependencia";
$proto23["m_columns"][] = "user_dep";
$proto23["m_columns"][] = "usr_entidad";
$proto23["m_columns"][] = "usr_not";
$proto23["m_columns"][] = "usr_not_msj";
$proto23["m_columns"][] = "usr_jefe";
$proto23["m_columns"][] = "usr_minequipo_lider";
$proto23["m_columns"][] = "usr_minequipo_grupo";
$proto23["m_columns"][] = "global_rol_me";
$proto23["m_columns"][] = "global_rol_gh";
$proto23["m_columns"][] = "global_rol_almacen";
$proto23["m_columns"][] = "global_rol_ci";
$proto23["m_columns"][] = "global_rol_contratos";
$proto23["m_columns"][] = "global_rol_hojar";
$proto23["m_columns"][] = "global_rol_inmuebles";
$proto23["m_columns"][] = "global_rol_siis";
$proto23["m_columns"][] = "global_rol_cpanel";
$proto23["m_columns"][] = "global_rol_dashboard";
$proto23["m_columns"][] = "global_rol_zf";
$proto23["m_columns"][] = "global_rol_sipi";
$proto23["m_columns"][] = "global_rol_cej";
$proto23["m_columns"][] = "global_rol_jc3";
$proto23["m_columns"][] = "global_rol_th";
$proto23["m_columns"][] = "global_rol_sid";
$proto23["m_columns"][] = "global_rol";
$proto23["m_columns"][] = "global_rol_cont";
$proto23["m_columns"][] = "globla_rol_ct";
$proto23["m_columns"][] = "global_rol_procjur";
$proto23["m_columns"][] = "global_rol_comacc";
$proto23["m_columns"][] = "global_rol_gestion";
$proto23["m_columns"][] = "global_rol_ciudadano";
$proto23["m_columns"][] = "global_rol_ciudadano_dep";
$proto23["m_columns"][] = "sys_user";
$proto23["m_columns"][] = "sys_date";
$proto23["m_columns"][] = "sys_time";
$proto23["m_columns"][] = "sys_ntries_usr";
$proto23["m_columns"][] = "sys_registrationdate_usr";
$proto23["m_columns"][] = "sys_expiration_usr";
$proto23["m_columns"][] = "sys_disabledate_usr";
$proto23["m_columns"][] = "sys_upd_fecha";
$proto23["m_columns"][] = "sys_upd_user";
$proto23["m_columns"][] = "sys_upd_time";
$proto23["m_columns"][] = "sys_update_info";
$proto23["m_columns"][] = "sys_update_family_info";
$proto23["m_columns"][] = "usr_update_almacen";
$proto23["m_columns"][] = "sys_anio";
$proto23["m_columns"][] = "ctrl";
$proto23["m_columns"][] = "ext_security_id";
$proto23["m_columns"][] = "covid_sn";
$proto23["m_columns"][] = "covid_fecha";
$proto23["m_columns"][] = "vacuna_sn";
$proto23["m_columns"][] = "vacuna_nombre";
$proto23["m_columns"][] = "vacuna_a_fecha";
$proto23["m_columns"][] = "vacuna_b_fechaprog";
$proto23["m_columns"][] = "vacuna_b_fecha";
$proto23["m_columns"][] = "vacuna_c_fecha";
$proto23["m_columns"][] = "vacuna_consentimiento_sn";
$proto23["m_columns"][] = "vacuna_obs";
$proto23["m_columns"][] = "vacuna_dosis";
$proto23["m_columns"][] = "vacuna_interes";
$proto23["m_columns"][] = "vacuna_etapa";
$proto23["m_columns"][] = "usr_dep";
$proto23["m_columns"][] = "usr_dep_sup";
$proto23["m_columns"][] = "usr_cargo";
$proto23["m_columns"][] = "usr_regpago";
$proto23["m_columns"][] = "usr_extension";
$proto23["m_columns"][] = "usr_piso";
$proto23["m_columns"][] = "usr_datebirth";
$proto23["m_columns"][] = "ctrl_pedidoalmacen";
$proto23["m_columns"][] = "ctrl_contacto";
$proto23["m_columns"][] = "usr_emergencia";
$proto23["m_columns"][] = "upd_date";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "habilita_almacen";
$proto23["m_columns"][] = "estado_vinculacion_mincit";
$proto23["m_columns"][] = "usr_firma";
$proto23["m_columns"][] = "usr_firma_b";
$proto23["m_columns"][] = "usr_hojaruta";
$proto23["m_columns"][] = "reset_token";
$proto23["m_columns"][] = "reset_date";
$proto23["m_columns"][] = "usr_edl";
$proto23["m_columns"][] = "userpic";
$proto23["m_columns"][] = "phone";
$proto23["m_columns"][] = "phone1";
$proto23["m_columns"][] = "usr_directivo";
$proto23["m_columns"][] = "vacuna_autoriza";
$proto23["m_columns"][] = "vacuna_autoriza_email";
$proto23["m_columns"][] = "two_factor";
$proto23["m_columns"][] = "totp";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "global_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "global_users";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_users = createSqlQuery_global_users();


	
								;

								

$tdataglobal_users[".sqlquery"] = $queryData_global_users;



$tdataglobal_users[".hasEvents"] = false;

?>