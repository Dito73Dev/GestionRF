<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'almovinddia_ingresos_d' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'master' => array( 'gedocumentos_ingresos' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'almovdevdia_id' => array( 'totalsType' => '' ),
'doclasedoc_id_fk' => array( 'totalsType' => '' ),
'legalizado' => array( 'totalsType' => '' ),
'mddclasedoc' => array( 'totalsType' => '' ),
'mddnrodoc' => array( 'totalsType' => '' ),
'mddfechadoc' => array( 'totalsType' => '' ),
'mddalmacen' => array( 'totalsType' => '' ),
'mddtipoestruc' => array( 'totalsType' => '' ),
'devolutivo_id_FK' => array( 'totalsType' => '' ),
'mddcuenta' => array( 'totalsType' => '' ),
'mddcodelem' => array( 'totalsType' => '' ),
'mddnomelem' => array( 'totalsType' => '' ),
'mdd_cantmovto' => array( 'totalsType' => 'TOTAL' ),
'mdd_cantmovto_verifica' => array( 'totalsType' => '' ),
'mdd_valunit' => array( 'totalsType' => 'TOTAL' ),
'mdd_tax' => array( 'totalsType' => '' ),
'mdd_valmovto' => array( 'totalsType' => 'TOTAL' ),
'geusuario' => array( 'totalsType' => '' ),
'gefechaactua' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'almovdevdia_id',
'legalizado',
'mddcuenta',
'mddcodelem',
'mddnomelem',
'mdd_valunit',
'mdd_cantmovto',
'mdd_valmovto',
'mddfechadoc',
'geusuario' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'almovdevdia_id',
'legalizado',
'devolutivo_id_FK',
'mddnomelem',
'mddnrodoc',
'mddfechadoc',
'mddcuenta',
'mddcodelem',
'mddclasedoc',
'mddalmacen',
'mdd_valunit',
'mdd_valmovto',
'mdd_cantmovto',
'geusuario',
'doclasedoc_id_fk' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'mddcodelem' => array( 'simple_grid_field',
'simple_grid_field5' ),
'geusuario' => array( 'simple_grid_field3',
'simple_grid_field20' ),
'mdd_cantmovto' => array( 'simple_grid_field4',
'simple_grid_field10',
'simple_grid_field14' ),
'mdd_valmovto' => array( 'simple_grid_field6',
'simple_grid_field17',
'simple_grid_field18' ),
'mdd_valunit' => array( 'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9' ),
'mddcuenta' => array( 'simple_grid_field11',
'simple_grid_field13' ),
'mddfechadoc' => array( 'simple_grid_field12',
'simple_grid_field19' ),
'mddnomelem' => array( 'simple_grid_field15',
'simple_grid_field16' ),
'almovdevdia_id' => array( 'simple_grid_field1',
'simple_grid_field2' ),
'legalizado' => array( 'grid_field',
'grid_field1' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'inline_add',
'details_found',
'page_size',
'print_panel',
'add',
'update_selected',
'delete' ),
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
'grid' => array( 'simple_grid_field2',
'simple_grid_field1',
'grid_field1',
'grid_field',
'simple_grid_field13',
'simple_grid_field11',
'simple_grid_field5',
'simple_grid_field',
'simple_grid_field16',
'simple_grid_field15',
'simple_grid_field8',
'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field4',
'simple_grid_field14',
'simple_grid_field17',
'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field12',
'simple_grid_field20',
'simple_grid_field3',
'details_preview',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view',
'grid_alldetails_link',
'grid_details_link' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'above-grid' => array( 'inlineadd_link',
'details_found',
'recsPerPage',
'print_friendly',
'add_link',
'updateselected_link',
'deleteselected_link' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'inline_add' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'add' => 'above-grid',
'update_selected' => 'above-grid',
'delete' => 'above-grid',
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
'simple_grid_field2' => 'grid',
'simple_grid_field1' => 'grid',
'grid_field1' => 'grid',
'grid_field' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field3' => 'grid',
'details_preview' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'master_info' => 'top' ),
'itemLocations' => array( 'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'footcell_field5' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'footcell_field6' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'footcell_field7' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
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
'cellId' => 'cell_details' ) ),
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
'search_panel_field3',
'search_panel_field4',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field15',
'search_panel_field2',
'search_panel_field5' ),
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
'grid_field' => array( 'simple_grid_field',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field15',
'simple_grid_field1',
'grid_field' ),
'master_info' => array( 'master_info' ),
'print_details' => array( 'print_details' ),
'details_preview' => array( 'details_preview' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link' ),
'grid_field_label' => array( 'simple_grid_field13',
'simple_grid_field16',
'simple_grid_field8',
'simple_grid_field5',
'simple_grid_field10',
'simple_grid_field17',
'simple_grid_field19',
'simple_grid_field2',
'grid_field1',
'simple_grid_field20' ),
'grid_field_totals' => array( 'simple_grid_field9',
'simple_grid_field14',
'simple_grid_field18' ),
'update_selected' => array( 'update_selected' ),
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
'tags' => array( 'almovdevdia_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'legalizado_fieldheadercolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'mddcuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'mddcodelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'mddnomelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'mdd_valunit_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'mdd_cantmovto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'mdd_valmovto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'mddfechadoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'geusuario_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
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
'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'almovdevdia_id_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'legalizado_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'mddcuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'mddcodelem_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'mddnomelem_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'mdd_valunit_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'mdd_cantmovto_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'mdd_valmovto_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'mddfechadoc_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'geusuario_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
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
12 ),
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
'tags' => array( 'mdd_valunit_fieldfootercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array( 'mdd_cantmovto_fieldfootercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array( 'mdd_valmovto_fieldfootercolumn' ),
'items' => array( 'simple_grid_field18' ),
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
'fixedAtClient' => false ) ),
'width' => 13,
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
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'add',
'update_selected',
'delete' ) ) ),
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
array( 'cell' => 'headcell_field9' ) ) ),
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
array( 'cell' => 'cell_field9' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 13 ) ),
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
array( 'cell' => 'footcell_field9' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'almovdevdia_id',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'almovdevdia_id',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field1' ),
'field' => 'legalizado',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'legalizado',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'mddcuenta',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'mddcuenta',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'mddcodelem',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'mddcodelem',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'mddnomelem',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'mddnomelem',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'mdd_valunit',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'mdd_valunit',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'mdd_valunit',
'columnName' => 'field' ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'mdd_cantmovto',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'mdd_cantmovto',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'mdd_cantmovto',
'columnName' => 'field' ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'mdd_valmovto',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'mdd_valmovto',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'mdd_valmovto',
'columnName' => 'field' ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'mddfechadoc',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'mddfechadoc',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'geusuario',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'geusuario',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ),
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
'grid_details_link' ) ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ) ),
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
'search_panel_field5',
'search_panel_field2',
'search_panel_field15',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field4',
'search_panel_field3',
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
'search_panel_field' => array( 'field' => 'almovdevdia_id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field1' => array( 'field' => 'doclasedoc_id_fk',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'geusuario',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'mdd_cantmovto',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'mdd_valmovto',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'mdd_valunit',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'mddalmacen',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'mddclasedoc',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'mddcodelem',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'mddcuenta',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'mddfechadoc',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 'mddnrodoc',
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
'label' => array( 'type' => 0,
'text' => 'Nuevo elemento' ),
'icon' => array( 'fa' => 'plus-circle' ) ),
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
'icon' => array( 'fa' => 'trash-o' ) ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field' => array( 'field' => 'mddcodelem',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field3' => array( 'field' => 'geusuario',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field4' => array( 'field' => 'mdd_cantmovto',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'field' => 'mdd_valmovto',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field7' => array( 'field' => 'mdd_valunit',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field11' => array( 'field' => 'mddcuenta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field12' => array( 'field' => 'mddfechadoc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'gedocumentos_ingresos' => 'true' ) ),
'simple_grid_field15' => array( 'field' => 'mddnomelem',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'search_panel_field15' => array( 'field' => 'mddnomelem',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'devolutivo_id_FK',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'almovinddia_ingresos_d' => true ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'almovinddia_ingresos_d',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link',
'text' => array( 'type' => 0,
'text' => 'Cantidad' ),
'font-family' => 'Roboto',
'font-size' => '15px' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'almovinddia_ingresos_d',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'mddcuenta' ),
'simple_grid_field1' => array( 'field' => 'almovdevdia_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'mddnomelem' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'mdd_valunit' ),
'simple_grid_field9' => array( 'type' => 'grid_field_totals',
'field' => 'mdd_valunit',
'totals' => 'TOTAL' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'mddcodelem' ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'mdd_cantmovto' ),
'simple_grid_field14' => array( 'type' => 'grid_field_totals',
'field' => 'mdd_cantmovto',
'totals' => 'TOTAL' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'mdd_valmovto' ),
'simple_grid_field18' => array( 'type' => 'grid_field_totals',
'field' => 'mdd_valmovto',
'totals' => 'TOTAL' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'mddfechadoc' ),
'grid_field' => array( 'field' => 'legalizado',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'search_panel_field5' => array( 'field' => 'legalizado',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'update_selected' => array( 'type' => 'update_selected',
'label' => array( 'type' => 0,
'text' => 'Legalizar seleccionados' ),
'icon' => array( 'glyph' => 'ok' ),
'buttonStyle' => 'success' ),
'simple_grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'almovdevdia_id' ),
'grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'legalizado' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'geusuario' ),
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