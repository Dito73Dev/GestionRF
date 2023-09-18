<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbldbusers_at_127_0_0_1__global_users;
	var $tbldbrf_at_127_0_0_1__alasientos;
	var $tbldbrf_at_127_0_0_1__alconceptos;
	var $tbldbrf_at_127_0_0_1__alcuentasalma;
	var $tbldbrf_at_127_0_0_1__aldevindiv;
	var $tbldbrf_at_127_0_0_1__aldevindiv_sol;
	var $tbldbrf_at_127_0_0_1__aldevindiv_sol_estados;
	var $tbldbrf_at_127_0_0_1__aldevindiv_sol_estados_vinc;
	var $tbldbrf_at_127_0_0_1__aldevindiv_sol_type;
	var $tbldbrf_at_127_0_0_1__aldevindiv_sol_vinc;
	var $tbldbrf_at_127_0_0_1__alelemconsumo;
	var $tbldbrf_at_127_0_0_1__alelemdevolutivo;
	var $tbldbrf_at_127_0_0_1__almarcas;
	var $tbldbrf_at_127_0_0_1__almovconsdia;
	var $tbldbrf_at_127_0_0_1__almovdevdia;
	var $tbldbrf_at_127_0_0_1__almovinddia;
	var $tbldbrf_at_127_0_0_1__cgc_0;
	var $tbldbrf_at_127_0_0_1__cgc_1;
	var $tbldbrf_at_127_0_0_1__cgc_2;
	var $tbldbrf_at_127_0_0_1__cgc_4;
	var $tbldbrf_at_127_0_0_1__cgc_6;
	var $tbldbrf_at_127_0_0_1__geclasedocto;
	var $tbldbrf_at_127_0_0_1__gedocumentos;
	var $tbldbrf_at_127_0_0_1__geunidmedida;
	var $tbldbrf_at_127_0_0_1__global_periodos;
	var $tbldbrf_at_127_0_0_1__global_type_doc;
	var $tbldbrf_at_127_0_0_1__global_type_legal;
	var $tbldbrf_at_127_0_0_1__global_type_tax;
	var $tbldbrf_at_127_0_0_1__inv_almacen;
	var $tbldbrf_at_127_0_0_1__q_ctrl_alelemconsumo;
	var $tbldbrf_at_127_0_0_1__q_ctrl_alelemdevolutivo;
	var $tbldbrf_at_127_0_0_1__q_ctrl_numdocumento;
	var $tbldbrf_at_127_0_0_1__q_global_enservicio;
	var $tbldbrf_at_127_0_0_1__q_lista_elementos_tyr_gestionados_group_00;
	var $tbldbrf_at_127_0_0_1__tparam_estadoasientos;
	var $tbldbrf_at_127_0_0_1__tparam_sn;
	var $tbldbrf_at_127_0_0_1__tparam_status;
	var $tbldbrf_at_127_0_0_1__tparam_tipo_movimiento;
	var $tbldbrf_at_127_0_0_1__tparam_valor_uvt;
	var $tbldbct_at_127_0_0_1__contractor_master;
	var $tbldbedl_at_127_0_0_1__dependencia;
	var $tbldbedl_at_127_0_0_1__dependencias_001;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "global_users", "varname" => "dbusers_at_127_0_0_1__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "alasientos", "varname" => "dbrf_at_127_0_0_1__alasientos", "altvarname" => "alasientos", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "alconceptos", "varname" => "dbrf_at_127_0_0_1__alconceptos", "altvarname" => "alconceptos", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "alcuentasalma", "varname" => "dbrf_at_127_0_0_1__alcuentasalma", "altvarname" => "alcuentasalma", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "aldevindiv", "varname" => "dbrf_at_127_0_0_1__aldevindiv", "altvarname" => "aldevindiv", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "aldevindiv_sol", "varname" => "dbrf_at_127_0_0_1__aldevindiv_sol", "altvarname" => "aldevindiv_sol", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "aldevindiv_sol_estados", "varname" => "dbrf_at_127_0_0_1__aldevindiv_sol_estados", "altvarname" => "aldevindiv_sol_estados", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "aldevindiv_sol_estados_vinc", "varname" => "dbrf_at_127_0_0_1__aldevindiv_sol_estados_vinc", "altvarname" => "aldevindiv_sol_estados_vinc", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "aldevindiv_sol_type", "varname" => "dbrf_at_127_0_0_1__aldevindiv_sol_type", "altvarname" => "aldevindiv_sol_type", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "aldevindiv_sol_vinc", "varname" => "dbrf_at_127_0_0_1__aldevindiv_sol_vinc", "altvarname" => "aldevindiv_sol_vinc", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "alelemconsumo", "varname" => "dbrf_at_127_0_0_1__alelemconsumo", "altvarname" => "alelemconsumo", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "alelemdevolutivo", "varname" => "dbrf_at_127_0_0_1__alelemdevolutivo", "altvarname" => "alelemdevolutivo", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "almarcas", "varname" => "dbrf_at_127_0_0_1__almarcas", "altvarname" => "almarcas", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "almovconsdia", "varname" => "dbrf_at_127_0_0_1__almovconsdia", "altvarname" => "almovconsdia", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "almovdevdia", "varname" => "dbrf_at_127_0_0_1__almovdevdia", "altvarname" => "almovdevdia", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "almovinddia", "varname" => "dbrf_at_127_0_0_1__almovinddia", "altvarname" => "almovinddia", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "cgc_0", "varname" => "dbrf_at_127_0_0_1__cgc_0", "altvarname" => "cgc_0", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "cgc_1", "varname" => "dbrf_at_127_0_0_1__cgc_1", "altvarname" => "cgc_1", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "cgc_2", "varname" => "dbrf_at_127_0_0_1__cgc_2", "altvarname" => "cgc_2", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "cgc_4", "varname" => "dbrf_at_127_0_0_1__cgc_4", "altvarname" => "cgc_4", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "cgc_6", "varname" => "dbrf_at_127_0_0_1__cgc_6", "altvarname" => "cgc_6", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "geclasedocto", "varname" => "dbrf_at_127_0_0_1__geclasedocto", "altvarname" => "geclasedocto", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "gedocumentos", "varname" => "dbrf_at_127_0_0_1__gedocumentos", "altvarname" => "gedocumentos", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "geunidmedida", "varname" => "dbrf_at_127_0_0_1__geunidmedida", "altvarname" => "geunidmedida", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "global_periodos", "varname" => "dbrf_at_127_0_0_1__global_periodos", "altvarname" => "global_periodos", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "global_type_doc", "varname" => "dbrf_at_127_0_0_1__global_type_doc", "altvarname" => "global_type_doc", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "global_type_legal", "varname" => "dbrf_at_127_0_0_1__global_type_legal", "altvarname" => "global_type_legal", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "global_type_tax", "varname" => "dbrf_at_127_0_0_1__global_type_tax", "altvarname" => "global_type_tax", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "inv_almacen", "varname" => "dbrf_at_127_0_0_1__inv_almacen", "altvarname" => "inv_almacen", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "q_ctrl_alelemconsumo", "varname" => "dbrf_at_127_0_0_1__q_ctrl_alelemconsumo", "altvarname" => "q_ctrl_alelemconsumo", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "q_ctrl_alelemdevolutivo", "varname" => "dbrf_at_127_0_0_1__q_ctrl_alelemdevolutivo", "altvarname" => "q_ctrl_alelemdevolutivo", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "q_ctrl_numdocumento", "varname" => "dbrf_at_127_0_0_1__q_ctrl_numdocumento", "altvarname" => "q_ctrl_numdocumento", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "q_global_enservicio", "varname" => "dbrf_at_127_0_0_1__q_global_enservicio", "altvarname" => "q_global_enservicio", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "q_lista_elementos_tyr_gestionados_group_00", "varname" => "dbrf_at_127_0_0_1__q_lista_elementos_tyr_gestionados_group_00", "altvarname" => "q_lista_elementos_tyr_gestionados_group_00", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "tparam_estadoasientos", "varname" => "dbrf_at_127_0_0_1__tparam_estadoasientos", "altvarname" => "tparam_estadoasientos", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "tparam_sn", "varname" => "dbrf_at_127_0_0_1__tparam_sn", "altvarname" => "tparam_sn", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "tparam_status", "varname" => "dbrf_at_127_0_0_1__tparam_status", "altvarname" => "tparam_status", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "tparam_tipo_movimiento", "varname" => "dbrf_at_127_0_0_1__tparam_tipo_movimiento", "altvarname" => "tparam_tipo_movimiento", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "tparam_valor_uvt", "varname" => "dbrf_at_127_0_0_1__tparam_valor_uvt", "altvarname" => "tparam_valor_uvt", "connId" => "dbrf_at_127_0_0_1", "schema" => "", "connName" => "dbrf");
		$this->lstTables[] = array("name" => "contractor_master", "varname" => "dbct_at_127_0_0_1__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "dbedl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "dbedl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "dbedl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "dbedl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>