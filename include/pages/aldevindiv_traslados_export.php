<?php
			$optionsArray = array( 'totals' => array( 'transact_id' => array( 'totalsType' => '' ),
'username_id' => array( 'totalsType' => '' ),
'sol_rad' => array( 'totalsType' => '' ),
'sol_estado' => array( 'totalsType' => '' ),
'sol_userfr' => array( 'totalsType' => '' ),
'sol_userid' => array( 'totalsType' => '' ),
'sol_userto' => array( 'totalsType' => '' ),
'sol_fecha' => array( 'totalsType' => '' ),
'sol_mailnot' => array( 'totalsType' => '' ),
'sol_type' => array( 'totalsType' => '' ),
'usr_fecha' => array( 'totalsType' => '' ),
'usr_username' => array( 'totalsType' => '' ),
'sol_obs' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'sol_estado',
'sol_fecha',
'sol_mailnot',
'sol_obs',
'sol_rad',
'sol_type',
'sol_userfr',
'sol_userto',
'transact_id',
'username_id',
'usr_username' ),
'exportFields' => array( 'sol_estado',
'sol_fecha',
'sol_mailnot',
'sol_obs',
'sol_rad',
'sol_type',
'sol_userfr',
'sol_userto',
'transact_id',
'username_id',
'usr_username' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'sol_estado' => array( 'export_field' ),
'sol_fecha' => array( 'export_field1' ),
'sol_mailnot' => array( 'export_field2' ),
'sol_obs' => array( 'export_field3' ),
'sol_rad' => array( 'export_field4' ),
'sol_type' => array( 'export_field5' ),
'sol_userfr' => array( 'export_field6' ),
'sol_userto' => array( 'export_field8' ),
'transact_id' => array( 'export_field9' ),
'username_id' => array( 'export_field10' ),
'usr_username' => array( 'export_field12' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field8',
'export_field9',
'export_field10',
'export_field12' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field12' => 'grid',
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
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field8',
'export_field9',
'export_field10',
'export_field12' ) ),
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
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field8',
'export_field9',
'export_field10',
'export_field12' ) ) ),
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
'export_field' => array( 'field' => 'sol_estado',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'sol_fecha',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'sol_mailnot',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'sol_obs',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'sol_rad',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'sol_type',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'sol_userfr',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'sol_userto',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'transact_id',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'username_id',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'usr_username',
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