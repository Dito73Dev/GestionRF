<?php
			$optionsArray = array( 'totals' => array( 'transact_id_fk' => array( 'totalsType' => '' ),
'transactvinc_id' => array( 'totalsType' => '' ),
'aldevindiv_id_fk' => array( 'totalsType' => '' ),
't_cuenta' => array( 'totalsType' => '' ),
't_elemento' => array( 'totalsType' => '' ),
't_fecha_compra' => array( 'totalsType' => '' ),
't_marca' => array( 'totalsType' => '' ),
't_placa' => array( 'totalsType' => '' ),
't_serie' => array( 'totalsType' => '' ),
't_valor_compra' => array( 'totalsType' => '' ),
'transactvinc_status' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'transactvinc_status',
't_cuenta',
't_elemento',
't_fecha_compra',
't_marca',
't_placa',
't_serie',
't_valor_compra' ),
'exportFields' => array( 'transactvinc_status',
't_cuenta',
't_elemento',
't_fecha_compra',
't_marca',
't_placa',
't_serie',
't_valor_compra' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'transactvinc_status' => array( 'export_field3' ),
't_cuenta' => array( 'export_field4' ),
't_elemento' => array( 'export_field5' ),
't_fecha_compra' => array( 'export_field6' ),
't_marca' => array( 'export_field7' ),
't_placa' => array( 'export_field8' ),
't_serie' => array( 'export_field9' ),
't_valor_compra' => array( 'export_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ) ),
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
'items' => array( 'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ) ) ),
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
'export_field3' => array( 'field' => 'transactvinc_status',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 't_cuenta',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 't_elemento',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 't_fecha_compra',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 't_marca',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 't_placa',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 't_serie',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 't_valor_compra',
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