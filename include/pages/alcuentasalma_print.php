<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'alelemdevolutivo' => array( 'displayPreview' => 1 ),
'alelemconsumo' => array( 'displayPreview' => 1 ) ),
'totals' => array( 'cuentasalma_id' => array( 'totalsType' => '' ),
'ca_codcuentat' => array( 'totalsType' => '' ),
'ca_codcuenta' => array( 'totalsType' => '' ),
'ca_nomcuenta' => array( 'totalsType' => '' ),
'nombrecuenta' => array( 'totalsType' => '' ),
'ca_recibemovto' => array( 'totalsType' => '' ),
'ca_tipocuenta' => array( 'totalsType' => '' ),
'geusuario' => array( 'totalsType' => '' ),
'gefechaactua' => array( 'totalsType' => '' ),
'tac_vidautil' => array( 'totalsType' => '' ),
'tac_codcta' => array( 'totalsType' => '' ),
'nicsp_cuentacostocod' => array( 'totalsType' => '' ),
'nicsp_cuentacostonam' => array( 'totalsType' => '' ),
'nicsp_cuentadepcod' => array( 'totalsType' => '' ),
'nicsp_cuentadepname' => array( 'totalsType' => '' ),
'nicsp_cuentacostonew' => array( 'totalsType' => '' ),
'nicsp_cuentacostoservicio' => array( 'totalsType' => '' ),
'nicsp_cuentacostocodnopp' => array( 'totalsType' => '' ),
'nicsp_comodato_entrega' => array( 'totalsType' => '' ),
'nicsp_comodato_recibe' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ca_codcuenta',
'ca_nomcuenta',
'ca_recibemovto',
'tac_vidautil',
'tac_codcta',
'nicsp_cuentadepcod',
'nicsp_cuentacostonew',
'nicsp_cuentacostoservicio',
'nicsp_cuentacostocodnopp',
'nombrecuenta' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ca_codcuenta' => array( 'simple_grid_field2',
'simple_grid_field5' ),
'ca_nomcuenta' => array( 'simple_grid_field3',
'simple_grid_field6' ),
'ca_recibemovto' => array( 'simple_grid_field4',
'simple_grid_field7' ),
'tac_vidautil' => array( 'simple_grid_field8',
'simple_grid_field10' ),
'tac_codcta' => array( 'simple_grid_field9',
'simple_grid_field11' ),
'nicsp_cuentadepcod' => array( 'simple_grid_field12',
'simple_grid_field13' ),
'nicsp_cuentacostonew' => array( 'simple_grid_field14',
'simple_grid_field17' ),
'nicsp_cuentacostoservicio' => array( 'simple_grid_field15',
'simple_grid_field18' ),
'nicsp_cuentacostocodnopp' => array( 'simple_grid_field16',
'simple_grid_field19' ),
'nombrecuenta' => array( 'simple_grid_field',
'simple_grid_field1' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader' ),
'grid' => array( 'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field6',
'simple_grid_field3',
'simple_grid_field7',
'simple_grid_field4',
'simple_grid_field10',
'simple_grid_field8',
'simple_grid_field11',
'simple_grid_field9',
'simple_grid_field13',
'simple_grid_field12',
'simple_grid_field17',
'simple_grid_field14',
'simple_grid_field18',
'simple_grid_field15',
'simple_grid_field19',
'simple_grid_field16',
'simple_grid_field1',
'simple_grid_field',
'details_preview',
'details_preview1' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'simple_grid_field5' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field12',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field' ),
'grid_field_label' => array( 'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field13',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field1' ),
'details_preview' => array( 'details_preview',
'details_preview1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'ca_codcuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'ca_nomcuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'ca_recibemovto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'tac_vidautil_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'tac_codcta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'nicsp_cuentadepcod_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'nicsp_cuentacostonew_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'nicsp_cuentacostoservicio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'nicsp_cuentacostocodnopp_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'nombrecuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'ca_codcuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'ca_nomcuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'ca_recibemovto_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'tac_vidautil_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'tac_codcta_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'nicsp_cuentadepcod_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'nicsp_cuentacostonew_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'nicsp_cuentacostoservicio_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'nicsp_cuentacostocodnopp_fieldcolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'nombrecuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
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
9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 10,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
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
'cells' => array( array( 'cell' => 'cell_field' ),
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
'colspan' => 10 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
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
'items' => array( 'simple_grid_field5' ),
'field' => 'ca_codcuenta',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'ca_codcuenta',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'ca_nomcuenta',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'ca_nomcuenta',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'ca_recibemovto',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'ca_recibemovto',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'tac_vidautil',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'tac_vidautil',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'tac_codcta',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'tac_codcta',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'nicsp_cuentadepcod',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'nicsp_cuentadepcod',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'nicsp_cuentacostonew',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'nicsp_cuentacostonew',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'nicsp_cuentacostoservicio',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'nicsp_cuentacostoservicio',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'nicsp_cuentacostocodnopp',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'nicsp_cuentacostocodnopp',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'nombrecuenta',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'nombrecuenta',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field2' => array( 'field' => 'ca_codcuenta',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'ca_codcuenta' ),
'simple_grid_field3' => array( 'field' => 'ca_nomcuenta',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'ca_nomcuenta' ),
'simple_grid_field4' => array( 'field' => 'ca_recibemovto',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'ca_recibemovto' ),
'simple_grid_field8' => array( 'field' => 'tac_vidautil',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'tac_vidautil' ),
'simple_grid_field9' => array( 'field' => 'tac_codcta',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'tac_codcta' ),
'simple_grid_field12' => array( 'field' => 'nicsp_cuentadepcod',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'nicsp_cuentadepcod' ),
'simple_grid_field14' => array( 'field' => 'nicsp_cuentacostonew',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'nicsp_cuentacostonew' ),
'simple_grid_field15' => array( 'field' => 'nicsp_cuentacostoservicio',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'nicsp_cuentacostoservicio' ),
'simple_grid_field16' => array( 'field' => 'nicsp_cuentacostocodnopp',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'nicsp_cuentacostocodnopp' ),
'simple_grid_field' => array( 'field' => 'nombrecuenta',
'type' => 'grid_field' ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'nombrecuenta' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'alelemdevolutivo',
'items' => array(  ),
'popup' => false ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'alelemconsumo',
'items' => array(  ),
'popup' => false ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>