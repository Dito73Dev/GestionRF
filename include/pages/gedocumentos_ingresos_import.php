<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'as_nroasiento_fk',
'do_detalle',
'do_fechadoc',
'do_file',
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
'fieldItems' => array( 'as_nroasiento_fk' => array( 'import_field' ),
'do_detalle' => array( 'import_field1' ),
'do_fechadoc' => array( 'import_field2' ),
'do_file' => array( 'import_field3' ),
'do_concepto' => array( 'import_field4' ),
'do_nrodoc' => array( 'import_field5' ),
'do_tipodoc' => array( 'import_field6' ),
'do_tipomov' => array( 'import_field7' ),
'doccnit' => array( 'import_field8' ),
'doclasedoc' => array( 'import_field9' ),
'doclasedoc_id' => array( 'import_field10' ),
'docnomproveedor' => array( 'import_field11' ),
'docodregion' => array( 'import_field12' ),
'do_dep' => array( 'import_field13' ),
'do_depsup' => array( 'import_field14' ),
'sys_user' => array( 'import_field15' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field15',
'import_field4',
'import_field13',
'import_field14' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field15' => 'grid',
'import_field4' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field15',
'import_field4',
'import_field13',
'import_field14' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'as_nroasiento_fk',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'do_detalle',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'do_fechadoc',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'do_file',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'do_concepto',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'do_nrodoc',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'do_tipodoc',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'do_tipomov',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'doccnit',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'doclasedoc',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'doclasedoc_id',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'docnomproveedor',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'docodregion',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'do_dep',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'do_depsup',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'sys_user',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>