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
'totals' => array( 'aldevindiv_id' => array( 'totalsType' => '' ),
'di_almacen' => array( 'totalsType' => '' ),
'di_cuenta' => array( 'totalsType' => '' ),
'di_codelem' => array( 'totalsType' => '' ),
'cod_cta' => array( 'totalsType' => '' ),
'di_nroplaca' => array( 'totalsType' => '' ),
'di_nroserie' => array( 'totalsType' => '' ),
'di_funcionario' => array( 'totalsType' => '' ),
'di_depsup' => array( 'totalsType' => '' ),
'di_dep' => array( 'totalsType' => '' ),
'di_ubica' => array( 'totalsType' => '' ),
'di_fechacompra' => array( 'totalsType' => '' ),
'di_fecha_asigacion' => array( 'totalsType' => '' ),
'di_valorcompra' => array( 'totalsType' => '' ),
'alelemdevolutivo_id_fk' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'di_nroplaca',
'di_nroserie',
'cod_cta',
'alelemdevolutivo_id_fk',
'di_cuenta',
'di_codelem',
'di_fechacompra',
'di_valorcompra',
'di_almacen',
'di_funcionario',
'di_depsup',
'di_dep',
'di_fecha_asigacion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'di_fecha_asigacion',
'alelemdevolutivo_id_fk',
'di_dep',
'di_depsup',
'di_funcionario',
'di_codelem',
'di_cuenta',
'di_almacen' ),
'filterFields' => array( 'cod_cta' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'di_nroplaca' => array( 'simple_grid_field5',
'simple_grid_field6' ),
'di_nroserie' => array( 'simple_grid_field7',
'simple_grid_field8' ),
'cod_cta' => array( 'grid_field',
'grid_field2' ),
'alelemdevolutivo_id_fk' => array( 'grid_field1',
'grid_field3' ),
'di_cuenta' => array( 'grid_field6',
'grid_field11' ),
'di_codelem' => array( 'grid_field7',
'grid_field12' ),
'di_fechacompra' => array( 'simple_grid_field',
'simple_grid_field1' ),
'di_valorcompra' => array( 'simple_grid_field9',
'simple_grid_field10' ),
'di_almacen' => array( 'grid_field4',
'grid_field5' ),
'di_funcionario' => array( 'grid_field8',
'grid_field13' ),
'di_depsup' => array( 'grid_field9',
'grid_field15' ),
'di_dep' => array( 'grid_field10',
'grid_field16' ),
'di_fecha_asigacion' => array( 'grid_field14',
'grid_field17' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel',
'filter_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'top' => array(  ),
'grid' => array( 'simple_grid_field6',
'simple_grid_field5',
'simple_grid_field8',
'simple_grid_field7',
'grid_field2',
'grid_field',
'grid_field3',
'grid_field1',
'grid_field11',
'grid_field6',
'grid_field12',
'grid_field7',
'simple_grid_field1',
'simple_grid_field',
'simple_grid_field10',
'simple_grid_field9',
'grid_field5',
'grid_field4',
'grid_field13',
'grid_field8',
'grid_field15',
'grid_field9',
'grid_field16',
'grid_field10',
'grid_field17',
'grid_field14',
'grid_checkbox_head',
'grid_checkbox',
'grid_view' ) ),
'formXtTags' => array( 'above-grid' => array( 'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'filter_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'simple_grid_field6' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field7' => 'grid',
'grid_field2' => 'grid',
'grid_field' => 'grid',
'grid_field3' => 'grid',
'grid_field1' => 'grid',
'grid_field11' => 'grid',
'grid_field6' => 'grid',
'grid_field12' => 'grid',
'grid_field7' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field9' => 'grid',
'grid_field5' => 'grid',
'grid_field4' => 'grid',
'grid_field13' => 'grid',
'grid_field8' => 'grid',
'grid_field15' => 'grid',
'grid_field9' => 'grid',
'grid_field16' => 'grid',
'grid_field10' => 'grid',
'grid_field17' => 'grid',
'grid_field14' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_view' => 'grid' ),
'itemLocations' => array( 'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
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
'details_found' => array( 'details_found' ),
'list_options' => array( 'list_options' ),
'-' => array( '-2',
'-',
'-1',
'-3' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'print_records' => array( 'print_records' ),
'print_button' => array( 'print_button' ),
'print_scope' => array( 'print_scope' ),
'print_panel' => array( 'print_panel' ),
'advsearch_link' => array( 'advsearch_link' ),
'export' => array( 'export' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field4',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field14',
'search_panel_field' ),
'filter_panel_field' => array( 'filter_panel_field' ),
'filter_panel' => array( 'filter_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'grid_field' => array( 'simple_grid_field5',
'simple_grid_field7',
'grid_field',
'grid_field1',
'grid_field6',
'grid_field7',
'simple_grid_field',
'simple_grid_field9',
'grid_field4',
'grid_field8',
'grid_field9',
'grid_field10',
'grid_field14' ),
'grid_field_label' => array( 'simple_grid_field6',
'simple_grid_field8',
'grid_field2',
'grid_field3',
'grid_field11',
'grid_field12',
'simple_grid_field1',
'simple_grid_field10',
'grid_field5',
'grid_field13',
'grid_field15',
'grid_field16',
'grid_field17' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'expand_button' => array( 'expand_button' ) ),
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
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'di_nroplaca_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'di_nroserie_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'cod_cta_fieldheadercolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'alelemdevolutivo_id_fk_fieldheadercolumn' ),
'items' => array( 'grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'di_cuenta_fieldheadercolumn' ),
'items' => array( 'grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'di_codelem_fieldheadercolumn' ),
'items' => array( 'grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'di_fechacompra_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'di_valorcompra_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'di_almacen_fieldheadercolumn' ),
'items' => array( 'grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'di_funcionario_fieldheadercolumn' ),
'items' => array( 'grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'di_depsup_fieldheadercolumn' ),
'items' => array( 'grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'di_dep_fieldheadercolumn' ),
'items' => array( 'grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 14 ),
'rows' => array( 0 ),
'tags' => array( 'di_fecha_asigacion_fieldheadercolumn' ),
'items' => array( 'grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'view_column' ),
'items' => array( 'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'di_nroplaca_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'di_nroserie_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'cod_cta_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'alelemdevolutivo_id_fk_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'di_cuenta_fieldcolumn' ),
'items' => array( 'grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'di_codelem_fieldcolumn' ),
'items' => array( 'grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'di_fechacompra_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'di_valorcompra_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'di_almacen_fieldcolumn' ),
'items' => array( 'grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'di_funcionario_fieldcolumn' ),
'items' => array( 'grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'di_depsup_fieldcolumn' ),
'items' => array( 'grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'di_dep_fieldcolumn' ),
'items' => array( 'grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 14 ),
'rows' => array( 1 ),
'tags' => array( 'di_fecha_asigacion_fieldcolumn' ),
'items' => array( 'grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 14 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 15,
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
'search_panel',
'filter_panel' ) ) ),
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
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
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
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field12' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
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
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ),
array( 'cell' => 'cell_field12' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
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
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'di_nroplaca',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'di_nroplaca',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'di_nroserie',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'di_nroserie',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field2' ),
'field' => 'cod_cta',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'cod_cta',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field3' ),
'field' => 'alelemdevolutivo_id_fk',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'alelemdevolutivo_id_fk',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field11' ),
'field' => 'di_cuenta',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'grid_field6' ),
'field' => 'di_cuenta',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field12' ),
'field' => 'di_codelem',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'grid_field7' ),
'field' => 'di_codelem',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'di_fechacompra',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'di_fechacompra',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'di_valorcompra',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'di_valorcompra',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field5' ),
'field' => 'di_almacen',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'grid_field4' ),
'field' => 'di_almacen',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field13' ),
'field' => 'di_funcionario',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'grid_field8' ),
'field' => 'di_funcionario',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field15' ),
'field' => 'di_depsup',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'grid_field9' ),
'field' => 'di_depsup',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field16' ),
'field' => 'di_dep',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'grid_field10' ),
'field' => 'di_dep',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field17' ),
'field' => 'di_fecha_asigacion',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'grid_field14' ),
'field' => 'di_fecha_asigacion',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
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
'items' => array( 'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
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
'hide_search_panel',
'-3',
'export' ) ),
'-2' => array( 'type' => '-' ),
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
'print_records' => array( 'type' => 'print_records' ),
'print_button' => array( 'type' => 'print_button' ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'export' => array( 'type' => 'export' ),
'-3' => array( 'type' => '-' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field14',
'search_panel_field',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field4' ) ),
'search_panel_field4' => array( 'field' => 'di_almacen',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'di_cuenta',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'di_codelem',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'di_funcionario',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field9' => array( 'field' => 'di_depsup',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 'di_dep',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field14' => array( 'field' => 'di_fecha_asigacion',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field' => array( 'field' => 'alelemdevolutivo_id_fk',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'filter_panel_field' => array( 'field' => 'cod_cta',
'type' => 'filter_panel_field' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'simple_grid_field5' => array( 'field' => 'di_nroplaca',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'font-family' => 'Roboto',
'bold' => true,
'font-size' => '14px' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'di_nroplaca' ),
'simple_grid_field7' => array( 'field' => 'di_nroserie',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'di_nroserie' ),
'grid_field' => array( 'field' => 'cod_cta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'cod_cta' ),
'grid_field1' => array( 'field' => 'alelemdevolutivo_id_fk',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'alelemdevolutivo_id_fk' ),
'grid_field6' => array( 'field' => 'di_cuenta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'di_cuenta' ),
'grid_field7' => array( 'field' => 'di_codelem',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'di_codelem' ),
'simple_grid_field' => array( 'field' => 'di_fechacompra',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'di_fechacompra' ),
'simple_grid_field9' => array( 'field' => 'di_valorcompra',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'di_valorcompra' ),
'grid_field4' => array( 'field' => 'di_almacen',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'di_almacen' ),
'grid_field8' => array( 'field' => 'di_funcionario',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'di_funcionario' ),
'grid_field9' => array( 'field' => 'di_depsup',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'di_depsup' ),
'grid_field10' => array( 'field' => 'di_dep',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'di_dep' ),
'grid_field14' => array( 'field' => 'di_fecha_asigacion',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'di_fecha_asigacion' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_view' => array( 'type' => 'grid_view' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
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