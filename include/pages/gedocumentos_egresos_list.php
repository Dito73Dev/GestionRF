<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'aldevindiv_egresos' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'master' => array( 'alasientos_gestion_e' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'doclasedoc_id' => array( 'totalsType' => '' ),
'as_nroasiento_fk' => array( 'totalsType' => '' ),
'docodregion' => array( 'totalsType' => '' ),
'do_detalle' => array( 'totalsType' => '' ),
'do_fechadoc' => array( 'totalsType' => '' ),
'do_file' => array( 'totalsType' => '' ),
'do_legaliza' => array( 'totalsType' => '' ),
'do_nrodoc' => array( 'totalsType' => '' ),
'do_tipodoc' => array( 'totalsType' => '' ),
'do_tipomov' => array( 'totalsType' => '' ),
'doccnit' => array( 'totalsType' => '' ),
'doclasedoc' => array( 'totalsType' => '' ),
'docnomproveedor' => array( 'totalsType' => '' ),
'egreso' => array( 'totalsType' => '' ),
'sys_fecha' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'do_concepto' => array( 'totalsType' => '' ),
'do_dep' => array( 'totalsType' => '' ),
'do_depsup' => array( 'totalsType' => '' ),
'do_email' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'do_nrodoc',
'doclasedoc_id',
'docodregion',
'do_fechadoc',
'doclasedoc',
'doccnit',
'docnomproveedor',
'do_depsup',
'do_dep',
'do_detalle',
'do_concepto' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'as_nroasiento_fk',
'do_email',
'do_depsup',
'do_dep',
'do_concepto',
'sys_user',
'docodregion',
'docnomproveedor',
'doclasedoc_id',
'doclasedoc',
'doccnit',
'do_tipomov',
'do_tipodoc',
'do_nrodoc',
'do_fechadoc',
'do_detalle' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'do_detalle' => array( 'simple_grid_field1',
'simple_grid_field6' ),
'do_fechadoc' => array( 'simple_grid_field2',
'simple_grid_field3' ),
'do_concepto' => array( 'simple_grid_field4',
'simple_grid_field8' ),
'do_nrodoc' => array( 'simple_grid_field5',
'simple_grid_field' ),
'doclasedoc' => array( 'simple_grid_field9',
'simple_grid_field15' ),
'doclasedoc_id' => array( 'simple_grid_field10',
'simple_grid_field11' ),
'docodregion' => array( 'simple_grid_field12',
'simple_grid_field14' ),
'do_dep' => array( 'simple_grid_field13',
'simple_grid_field18' ),
'do_depsup' => array( 'simple_grid_field16',
'simple_grid_field17' ),
'doccnit' => array( 'grid_field',
'grid_field2' ),
'docnomproveedor' => array( 'grid_field1',
'grid_field3' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'inline_add',
'delete',
'details_found',
'page_size',
'print_panel' ),
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
'grid' => array( 'simple_grid_field',
'simple_grid_field5',
'simple_grid_field11',
'simple_grid_field10',
'simple_grid_field14',
'simple_grid_field12',
'simple_grid_field3',
'simple_grid_field2',
'simple_grid_field15',
'simple_grid_field9',
'grid_field2',
'grid_field',
'grid_field3',
'grid_field1',
'simple_grid_field17',
'simple_grid_field16',
'simple_grid_field18',
'simple_grid_field13',
'simple_grid_field6',
'simple_grid_field1',
'simple_grid_field8',
'simple_grid_field4',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1',
'details_preview' ),
'top' => array( 'master_info',
'text' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
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
'simple_grid_field' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field9' => 'grid',
'grid_field2' => 'grid',
'grid_field' => 'grid',
'grid_field3' => 'grid',
'grid_field1' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field4' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_details_link1' => 'grid',
'details_preview' => 'grid',
'master_info' => 'top',
'text' => 'top' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link1' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'details_found' => array( 'details_found' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field14',
'search_panel_field15' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field16',
'grid_field',
'grid_field1' ),
'master_info' => array( 'master_info' ),
'print_details' => array( 'print_details' ),
'grid_details_link' => array( 'grid_details_link',
'grid_details_link1' ),
'grid_field_label' => array( 'simple_grid_field11',
'simple_grid_field14',
'simple_grid_field6',
'simple_grid_field15',
'simple_grid_field8',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field',
'simple_grid_field3',
'grid_field2',
'grid_field3' ),
'text' => array( 'text' ),
'details_preview' => array( 'details_preview' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'do_nrodoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'doclasedoc_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'docodregion_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'do_fechadoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'doclasedoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'doccnit_fieldheadercolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'docnomproveedor_fieldheadercolumn' ),
'items' => array( 'grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'do_depsup_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'do_dep_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'do_detalle_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'do_concepto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'do_nrodoc_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'doclasedoc_id_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'docodregion_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'do_fechadoc_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'doclasedoc_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'doccnit_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'docnomproveedor_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'do_depsup_fieldcolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'do_dep_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'do_detalle_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'do_concepto_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12,
13 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 13 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 14,
'height' => 4 ) ) ),
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
'items' => array( 'add',
'inline_add',
'delete' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
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
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
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
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
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
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 14 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
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
'items' => array( 'simple_grid_field' ),
'field' => 'do_nrodoc',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'do_nrodoc',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'doclasedoc_id',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'doclasedoc_id',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'docodregion',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'docodregion',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'do_fechadoc',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'do_fechadoc',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'doclasedoc',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'doclasedoc',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field2' ),
'field' => 'doccnit',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'doccnit',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field3' ),
'field' => 'docnomproveedor',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'docnomproveedor',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'do_depsup',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'do_depsup',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'do_dep',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'do_dep',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'do_detalle',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'do_detalle',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'do_concepto',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'do_concepto',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ) ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ) ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ),
'c' => array( 'model' => 'c2',
'items' => array( 'text' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'details_found' => array( 'type' => 'details_found' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field3',
'search_panel_field14',
'search_panel_field13',
'search_panel_field4',
'search_panel_field15',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'as_nroasiento_fk',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'do_detalle',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'do_fechadoc',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'do_email',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'do_concepto',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'do_nrodoc',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'do_tipodoc',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'do_tipomov',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'doccnit',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'doclasedoc',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'doclasedoc_id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field11' => array( 'field' => 'docnomproveedor',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'docodregion',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 'do_dep',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field14' => array( 'field' => 'do_depsup',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field15' => array( 'field' => 'sys_user',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
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
'add' => array( 'type' => 'add',
'icon' => array( 'fa' => 'files-o' ),
'label' => array( 'type' => 0,
'text' => 'Nuevo documento' ),
'buttonSize' => 'large',
'font-family' => 'Roboto' ),
'grid_edit' => array( 'type' => 'grid_edit',
'buttonStyle' => 'success' ),
'grid_view' => array( 'type' => 'grid_view',
'buttonStyle' => 'info' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete',
'label' => array( 'type' => 0,
'text' => 'Borrar selección' ),
'buttonStyle' => 'danger',
'icon' => array( 'fa' => 'trash-o' ),
'buttonSize' => 'large',
'font-family' => 'Roboto' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 'do_detalle',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field2' => array( 'field' => 'do_fechadoc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field4' => array( 'field' => 'do_concepto',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field5' => array( 'field' => 'do_nrodoc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field9' => array( 'field' => 'doclasedoc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'field' => 'doclasedoc_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field12' => array( 'field' => 'docodregion',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'label' => array( 'field' => 'docodregion',
'table' => 'gedocumentos_ingresos',
'type' => 3 ) ),
'simple_grid_field13' => array( 'field' => 'do_dep',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'alasientos_gestion' => 'true',
'alasientos_gestion_e' => 'true' ) ),
'simple_grid_field16' => array( 'field' => 'do_depsup',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'almovdevdia_ingresos' => true,
'aldevindiv_egresos' => true ) ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'almovdevdia_ingresos_d',
'badge' => true,
'hideIfNone' => false,
'showCount' => true,
'font-family' => 'Roboto',
'bold' => true,
'font-size' => '18px',
'text' => array( 'type' => 0,
'text' => 'Ingresar elementos' ),
'icon' => array( 'fa' => 'angle-double-down' ) ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'doclasedoc_id' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'docodregion' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'do_detalle' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'doclasedoc' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'do_concepto' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'do_depsup' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'do_dep' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Ingresos devolutivos',
'type' => 0 ),
'editedByRte' => false,
'font-family' => 'Roboto',
'font-size' => '30px',
'bold' => true,
'color' => '#116bf0' ),
'grid_field' => array( 'field' => 'doccnit',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field1' => array( 'field' => 'docnomproveedor',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'do_nrodoc' ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'do_fechadoc' ),
'grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'doccnit' ),
'grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'docnomproveedor' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'aldevindiv_egresos',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'aldevindiv_egresos',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>