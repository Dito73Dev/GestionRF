<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "dbusers_at_127_0_0_1";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->getDefault();
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->getDefault();
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "dbusers_at_127_0_0_1";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "dbusers_at_127_0_0_1";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "dbusers_at_127_0_0_1";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["global_users"] = "dbusers_at_127_0_0_1";
		$connectionsIds["alasientos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alconceptos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["tparam_estadoasientos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["inv_almacen"] = "dbrf_at_127_0_0_1";
		$connectionsIds["tparam_tipo_movimiento"] = "dbrf_at_127_0_0_1";
		$connectionsIds["tparam_status"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_vinc"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_estados"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_type"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_traslados"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_reintegros"] = "dbrf_at_127_0_0_1";
		$connectionsIds["q_global_enservicio"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_vinc_adm"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_estados_vinc"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alcuentasalma"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alelemdevolutivo"] = "dbrf_at_127_0_0_1";
		$connectionsIds["almarcas"] = "dbrf_at_127_0_0_1";
		$connectionsIds["cgc_0"] = "dbrf_at_127_0_0_1";
		$connectionsIds["cgc_1"] = "dbrf_at_127_0_0_1";
		$connectionsIds["cgc_2"] = "dbrf_at_127_0_0_1";
		$connectionsIds["cgc_4"] = "dbrf_at_127_0_0_1";
		$connectionsIds["cgc_6"] = "dbrf_at_127_0_0_1";
		$connectionsIds["Mi_inventario"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alelemconsumo"] = "dbrf_at_127_0_0_1";
		$connectionsIds["tparam_sn"] = "dbrf_at_127_0_0_1";
		$connectionsIds["geunidmedida"] = "dbrf_at_127_0_0_1";
		$connectionsIds["q_ctrl_alelemdevolutivo"] = "dbrf_at_127_0_0_1";
		$connectionsIds["q_ctrl_alelemconsumo"] = "dbrf_at_127_0_0_1";
		$connectionsIds["tparam_valor_uvt"] = "dbrf_at_127_0_0_1";
		$connectionsIds["global_periodos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["geclasedocto"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_sign_a"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_vinc_sign"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_sol_sign_b"] = "dbrf_at_127_0_0_1";
		$connectionsIds["gedocumentos_ingresos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alasientos_gestion"] = "dbrf_at_127_0_0_1";
		$connectionsIds["global_type_doc"] = "dbrf_at_127_0_0_1";
		$connectionsIds["contractor_master_proveedores"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_ctrl_numdocumento"] = "dbrf_at_127_0_0_1";
		$connectionsIds["dependencias_001"] = "dbedl_at_127_0_0_1";
		$connectionsIds["dependencia"] = "dbedl_at_127_0_0_1";
		$connectionsIds["almovdevdia_ingresos_d"] = "dbrf_at_127_0_0_1";
		$connectionsIds["global_type_tax"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alelemdevolutivo_consulta"] = "dbrf_at_127_0_0_1";
		$connectionsIds["almovinddia_ingresos_d"] = "dbrf_at_127_0_0_1";
		$connectionsIds["cgc_consulta"] = "dbrf_at_127_0_0_1";
		$connectionsIds["gedocumentos_ingresos_consumo"] = "dbrf_at_127_0_0_1";
		$connectionsIds["almovconsdia_ingresos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alelemconsumo_consulta"] = "dbrf_at_127_0_0_1";
		$connectionsIds["gedocumentos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["alasientos_gestion_e"] = "dbrf_at_127_0_0_1";
		$connectionsIds["global_type_legal"] = "dbrf_at_127_0_0_1";
		$connectionsIds["gedocumentos_egresos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["gedocumentos_egresos_consumo"] = "dbrf_at_127_0_0_1";
		$connectionsIds["aldevindiv_egresos"] = "dbrf_at_127_0_0_1";
		$connectionsIds["almovinddia"] = "dbrf_at_127_0_0_1";
		$connectionsIds["almovinddia_legalizados"] = "dbrf_at_127_0_0_1";
		$connectionsIds["almovdevdia"] = "dbrf_at_127_0_0_1";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>