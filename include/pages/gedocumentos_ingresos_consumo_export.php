<?php
			$optionsArray = array( 'totals' => array( 'doclasedoc_id' => array( 'totalsType' => '' ),
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
'do_depsup' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'as_nroasiento_fk',
'do_detalle',
'do_fechadoc',
'do_concepto',
'do_nrodoc',
'do_tipodoc',
'do_tipomov',
'doccnit',
'doclasedoc',
'doclasedoc_id',
'docnomproveedor',
'docodregion',
'do_dep',
'do_depsup',
'sys_user' ),
'exportFields' => array( 'as_nroasiento_fk',
'do_detalle',
'do_fechadoc',
'do_nrodoc',
'do_tipodoc',
'do_tipomov',
'doccnit',
'doclasedoc',
'doclasedoc_id',
'docnomproveedor',
'docodregion',
'sys_user',
'do_concepto',
'do_dep',
'do_depsup' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'as_nroasiento_fk' => array( 'export_field' ),
'do_detalle' => array( 'export_field1' ),
'do_fechadoc' => array( 'export_field2' ),
'do_concepto' => array( 'export_field4' ),
'do_nrodoc' => array( 'export_field5' ),
'do_tipodoc' => array( 'export_field6' ),
'do_tipomov' => array( 'export_field7' ),
'doccnit' => array( 'export_field8' ),
'doclasedoc' => array( 'export_field9' ),
'doclasedoc_id' => array( 'export_field10' ),
'docnomproveedor' => array( 'export_field11' ),
'docodregion' => array( 'export_field12' ),
'do_dep' => array( 'export_field13' ),
'do_depsup' => array( 'export_field14' ),
'sys_user' => array( 'export_field15' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field15',
'export_field4',
'export_field13',
'export_field14' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field15' => 'grid',
'export_field4' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field15',
'export_field4',
'export_field13',
'export_field14' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'as_nroasiento_fk',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'do_detalle',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'do_fechadoc',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'do_concepto',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'do_nrodoc',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'do_tipodoc',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'do_tipomov',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'doccnit',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'doclasedoc',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'doclasedoc_id',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'docnomproveedor',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'docodregion',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'do_dep',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'do_depsup',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'sys_user',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>