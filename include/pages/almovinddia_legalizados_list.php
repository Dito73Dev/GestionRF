<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'almovinddia_id' => array( 'totalsType' => '' ),
'almovdevdia_id_fk' => array( 'totalsType' => '' ),
'devolutivo_id_FK' => array( 'totalsType' => '' ),
'doclasedoc_id_fk' => array( 'totalsType' => '' ),
'cod_cta' => array( 'totalsType' => '' ),
'md_legalizado' => array( 'totalsType' => '' ),
'mid_valunit' => array( 'totalsType' => '' ),
'midalmacen' => array( 'totalsType' => '' ),
'midclasedoc' => array( 'totalsType' => '' ),
'midcodelem' => array( 'totalsType' => '' ),
'midcuenta' => array( 'totalsType' => '' ),
'midfechadoc' => array( 'totalsType' => '' ),
'midnrodoc' => array( 'totalsType' => '' ),
'midnroplaca' => array( 'totalsType' => '' ),
'midnroserie' => array( 'totalsType' => '' ),
'sys_status' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'almovinddia_id',
'midnroplaca',
'midnroserie',
'cod_cta',
'midcuenta',
'midcodelem',
'mid_valunit',
'midalmacen',
'midfechadoc',
'almovdevdia_id_fk',
'sys_status' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'almovinddia_id',
'sys_status',
'cod_cta',
'midnroserie',
'midnroplaca',
'midnrodoc',
'midfechadoc',
'midcuenta',
'midcodelem',
'midclasedoc',
'midalmacen',
'mid_valunit',
'md_legalizado',
'doclasedoc_id_fk',
'devolutivo_id_FK',
'almovdevdia_id_fk' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'sys_status' ),
'inlineEditFields' => array( 'sys_status' ),
'fieldItems' => array( 'almovinddia_id' => array( 'simple_grid_field2',
'simple_grid_field4' ),
'midnroplaca' => array( 'simple_grid_field24',
'simple_grid_field26' ),
'midnroserie' => array( 'simple_grid_field25',
'simple_grid_field27' ),
'cod_cta' => array( 'simple_grid_field',
'simple_grid_field5' ),
'midcuenta' => array( 'simple_grid_field20',
'simple_grid_field22' ),
'midcodelem' => array( 'simple_grid_field19',
'simple_grid_field23' ),
'mid_valunit' => array( 'simple_grid_field15',
'simple_grid_field16' ),
'midalmacen' => array( 'simple_grid_field17',
'simple_grid_field18' ),
'midfechadoc' => array( 'simple_grid_field21',
'simple_grid_field28' ),
'almovdevdia_id_fk' => array( 'simple_grid_field1',
'simple_grid_field6' ),
'sys_status' => array( 'simple_grid_field3',
'simple_grid_field7' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'top' => array(  ),
'grid' => array( 'simple_grid_field4',
'simple_grid_field2',
'simple_grid_field26',
'simple_grid_field24',
'simple_grid_field27',
'simple_grid_field25',
'simple_grid_field5',
'simple_grid_field',
'simple_grid_field22',
'simple_grid_field20',
'simple_grid_field23',
'simple_grid_field19',
'simple_grid_field16',
'simple_grid_field15',
'simple_grid_field18',
'simple_grid_field17',
'simple_grid_field28',
'simple_grid_field21',
'simple_grid_field6',
'simple_grid_field1',
'simple_grid_field7',
'simple_grid_field3',
'grid_checkbox_head',
'grid_checkbox' ) ),
'formXtTags' => array( 'above-grid' => array( 'details_found',
'recsPerPage' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'simple_grid_field4' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field27' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field28' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field3' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field27' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field28' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'details_found' => array( 'details_found' ),
'list_options' => array( 'list_options' ),
'-' => array( '-3',
'-',
'-1',
'-2',
'-4' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1',
'search_panel_field15' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'advsearch_link' => array( 'advsearch_link' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field24',
'simple_grid_field25',
'simple_grid_field',
'simple_grid_field20',
'simple_grid_field19',
'simple_grid_field15',
'simple_grid_field17',
'simple_grid_field21',
'simple_grid_field1',
'simple_grid_field3' ),
'grid_field_label' => array( 'simple_grid_field4',
'simple_grid_field26',
'simple_grid_field27',
'simple_grid_field5',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field16',
'simple_grid_field18',
'simple_grid_field28',
'simple_grid_field6',
'simple_grid_field7' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'almovinddia_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'midnroplaca_fieldheadercolumn' ),
'items' => array( 'simple_grid_field26' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'midnroserie_fieldheadercolumn' ),
'items' => array( 'simple_grid_field27' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'cod_cta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'midcuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'midcodelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'mid_valunit_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'midalmacen_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'midfechadoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field28' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'almovdevdia_id_fk_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'sys_status_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'almovinddia_id_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'midnroplaca_fieldcolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'midnroserie_fieldcolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'cod_cta_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'midcuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'midcodelem_fieldcolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'mid_valunit_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'midalmacen_fieldcolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'midfechadoc_fieldcolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'almovdevdia_id_fk_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'sys_status_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 12,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'almovinddia_id',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'almovinddia_id',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field26' ),
'field' => 'midnroplaca',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'midnroplaca',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field27' ),
'field' => 'midnroserie',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'midnroserie',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'cod_cta',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'cod_cta',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'midcuenta',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'midcuenta',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'midcodelem',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'midcodelem',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'mid_valunit',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'mid_valunit',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'midalmacen',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'midalmacen',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field28' ),
'field' => 'midfechadoc',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'midfechadoc',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'almovdevdia_id_fk',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'almovdevdia_id_fk',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'sys_status',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'sys_status',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'details_found' => array( 'type' => 'details_found' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'-3' => array( 'type' => '-' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field15',
'search_panel_field2',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field1' ) ),
'search_panel_field' => array( 'field' => 'almovinddia_id',
'type' => 'search_panel_field' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'search_panel_field14' => array( 'field' => 'midnroserie',
'type' => 'search_panel_field' ),
'search_panel_field13' => array( 'field' => 'midnroplaca',
'type' => 'search_panel_field' ),
'search_panel_field12' => array( 'field' => 'midnrodoc',
'type' => 'search_panel_field' ),
'search_panel_field11' => array( 'field' => 'midfechadoc',
'type' => 'search_panel_field' ),
'search_panel_field10' => array( 'field' => 'midcuenta',
'type' => 'search_panel_field' ),
'search_panel_field9' => array( 'field' => 'midcodelem',
'type' => 'search_panel_field' ),
'search_panel_field8' => array( 'field' => 'midclasedoc',
'type' => 'search_panel_field' ),
'search_panel_field7' => array( 'field' => 'midalmacen',
'type' => 'search_panel_field' ),
'search_panel_field6' => array( 'field' => 'mid_valunit',
'type' => 'search_panel_field' ),
'search_panel_field5' => array( 'field' => 'md_legalizado',
'type' => 'search_panel_field' ),
'search_panel_field4' => array( 'field' => 'doclasedoc_id_fk',
'type' => 'search_panel_field' ),
'search_panel_field3' => array( 'field' => 'devolutivo_id_FK',
'type' => 'search_panel_field' ),
'search_panel_field2' => array( 'field' => 'cod_cta',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'almovdevdia_id_fk',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'-4' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field15' => array( 'field' => 'sys_status',
'type' => 'search_panel_field',
'required' => false ),
'simple_grid_field2' => array( 'field' => 'almovinddia_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'almovinddia_id' ),
'simple_grid_field24' => array( 'field' => 'midnroplaca',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field26' => array( 'type' => 'grid_field_label',
'field' => 'midnroplaca' ),
'simple_grid_field25' => array( 'field' => 'midnroserie',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field27' => array( 'type' => 'grid_field_label',
'field' => 'midnroserie' ),
'simple_grid_field' => array( 'field' => 'cod_cta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'cod_cta' ),
'simple_grid_field20' => array( 'field' => 'midcuenta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'midcuenta' ),
'simple_grid_field19' => array( 'field' => 'midcodelem',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'midcodelem' ),
'simple_grid_field15' => array( 'field' => 'mid_valunit',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'mid_valunit' ),
'simple_grid_field17' => array( 'field' => 'midalmacen',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'midalmacen' ),
'simple_grid_field21' => array( 'field' => 'midfechadoc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field28' => array( 'type' => 'grid_field_label',
'field' => 'midfechadoc' ),
'simple_grid_field1' => array( 'field' => 'almovdevdia_id_fk',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'almovdevdia_id_fk' ),
'simple_grid_field3' => array( 'field' => 'sys_status',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'sys_status' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>