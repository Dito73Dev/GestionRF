<?php
			$optionsArray = array( 'totals' => array( 'cgc_di' => array( 'totalsType' => '' ),
'pos_1' => array( 'totalsType' => '' ),
'pos_2' => array( 'totalsType' => '' ),
'pos_4' => array( 'totalsType' => '' ),
'pos_6' => array( 'totalsType' => '' ),
'pos_9' => array( 'totalsType' => '' ),
'pos_9num' => array( 'totalsType' => '' ),
'CodigoContable' => array( 'totalsType' => '' ),
'Descripcion_9' => array( 'totalsType' => '' ),
'Imputable' => array( 'totalsType' => '' ),
'Clasifica' => array( 'totalsType' => '' ),
'Manual' => array( 'totalsType' => '' ),
'Reciproca' => array( 'totalsType' => '' ),
'AplBanco' => array( 'totalsType' => '' ),
'Naturaleza' => array( 'totalsType' => '' ),
'Saldo' => array( 'totalsType' => '' ),
'Vigente' => array( 'totalsType' => '' ),
'CodigoEntidad' => array( 'totalsType' => '' ),
'EntidadContablePublica' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Saldo',
'pos_9num',
'CodigoContable',
'Descripcion_9',
'Imputable' ),
'exportFields' => array( 'pos_9num',
'CodigoContable',
'Descripcion_9',
'Imputable',
'Saldo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Saldo' => array( 'export_field' ),
'pos_9num' => array( 'export_field6' ),
'CodigoContable' => array( 'export_field7' ),
'Descripcion_9' => array( 'export_field8' ),
'Imputable' => array( 'export_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field6',
'export_field7',
'export_field8',
'export_field9' ) ),
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
'items' => array( 'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field' ) ) ),
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
'export_field' => array( 'field' => 'Saldo',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'pos_9num',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'CodigoContable',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Descripcion_9',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'Imputable',
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