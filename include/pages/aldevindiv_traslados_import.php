<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'sol_estado',
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
'fieldItems' => array( 'sol_estado' => array( 'import_field' ),
'sol_fecha' => array( 'import_field1' ),
'sol_mailnot' => array( 'import_field2' ),
'sol_obs' => array( 'import_field3' ),
'sol_rad' => array( 'import_field4' ),
'sol_type' => array( 'import_field5' ),
'sol_userfr' => array( 'import_field6' ),
'sol_userto' => array( 'import_field8' ),
'transact_id' => array( 'import_field9' ),
'username_id' => array( 'import_field10' ),
'usr_username' => array( 'import_field12' ) ) ),
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
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field9',
'import_field10',
'import_field12' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field12' => 'grid' ),
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
'import_field8',
'import_field9',
'import_field10',
'import_field12' ) ),
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
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field9',
'import_field10',
'import_field12' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'sol_estado',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'sol_fecha',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'sol_mailnot',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'sol_obs',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'sol_rad',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'sol_type',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'sol_userfr',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'sol_userto',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'transact_id',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'username_id',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'usr_username',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>