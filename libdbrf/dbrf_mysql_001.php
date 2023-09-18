<?php

//doc_id corresponde al número de cédula del funcionario
if (isset($_GET['doc_id'])) {
  $doc_id = $_GET['doc_id'];
}

// user_id correponde al nombre del usuario en el sistema
if (isset($_GET['user_id'])) {
  $user_id = $_GET['user_id'];
}
    
    // Crear una instancia de conexión a MySQL
   	$link = mysqli_connect("127.0.0.1:3307","root","1qaz2wsx","dbrf");
  // Establecer el juego de caracteres a UTF-8
    mysqli_set_charset($link, 'utf8');

   	//$linkA = mysqli_connect("127.0.0.1","root","1qaz2wsx","dbct");
	$no = 1;
	//rs 1
	$query_RsBloqueA = "SELECT * FROM q_info_inventario WHERE q_info_inventario.difuncionario = $doc_id";
	$RsBloqueA = mysqli_query($link,$query_RsBloqueA);
	$totalRows_RsBloqueA = mysqli_num_rows($RsBloqueA);
	$row_RsBloqueA = mysqli_fetch_assoc($RsBloqueA);
	//rs 2
	$query_RsBloqueB = "SELECT * FROM q_info_inventario WHERE q_info_inventario.difuncionario = $doc_id";
	$RsBloqueB = mysqli_query($link,$query_RsBloqueB);
	$totalRows_RsBloqueB = mysqli_num_rows($RsBloqueB);
	//rs 3
  $query_RsBloqueC = "SELECT * FROM q_info_inventario WHERE q_info_inventario.difuncionario = $doc_id";
	$RsBloqueC = mysqli_query($link,$query_RsBloqueC);
	$totalRows_RsBloqueC = mysqli_num_rows($RsBloqueC);
  $html = '
<html>
<body>
mpdf-->

<table class="items" width="100%" border="1" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
                                        <tr class="success">
                                          <td colspan="4">INVENTARIO</td>
  </tr>
                                        <tr bgcolor="#F7F7F7">
                                            <td>PERIODICIDAD</td>
                                          <td>AVANCE</td>
                                          <td colspan="2">PERIODO REPORTADO</td>
  </tr>
                                        <tr>
                                            <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                            <td>'.$row_RsBloqueA['difuncionario'].'%</td>
                                            <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                        	<td>'.$row_RsBloqueA['difuncionario'].'</td>
										</tr>
                                        <tr class="success">
                                            <td colspan="4">1. INFORMACIÓN DEL FUNCIONARIO | RESPONSABLE</td>
                                        </tr>
                                        <tr bgcolor="#F7F7F7">
                                          <td bgcolor="#F7F7F7">No. CONTRATO O CONVENIO</td>
                                          <td>VALOR DEL CONTRATO</td>
                                          <td>NOMBRE DEL CONTRATISTA</td>
                                          <td>DOCUMENTO</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#F7F7F7">FECHA DE SUSCRIPCI&Oacute;N | FIRMA</td>
                                          <td bgcolor="#F7F7F7">FECHA DE INICIO</td>
                                          <td bgcolor="#F7F7F7">FECHA DE TERMINACI&Oacute;N</td>
                                          <td bgcolor="#F7F7F7">PLAZO | VIGENCIA</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'|'.$row_RsBloqueA['difuncionario'].'</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#F7F7F7">COMPROMISO | RP</td>
                                          <td bgcolor="#F7F7F7">CDP</td>
                                          <td colspan="2" bgcolor="#F7F7F7">RUBRO</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td colspan="2">'.$row_RsBloqueA['difuncionario'].'</td>
                                        </tr>
                                        <tr>
										  <td bgcolor="#F7F7F7">OBJETO</td>
                                          <td colspan="3">'.$row_RsBloqueA['difuncionario'].'</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="success">SUPERVISI&Oacute;N DEL CONTRATO</td>
                                        </tr>
                                        <tr bgcolor="#F7F7F7">
                                          <td>SUPERVISOR</td>
                                          <td>CARGO</td>
                                          <td colspan="2">DEPENDENCIA</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td>'.$row_RsBloqueA['difuncionario'].'</td>
                                          <td colspan="2">'.$row_RsBloqueA['difuncionario'].'</td>
                                        </tr>
                                </table>
								<br />
								<h3>INFORMACI&Oacute;N SOBRE EJECUCI&Oacute;N DE PAGOS</h3>
								<hr>
<table class="items" width="100%" border="1" style="font-size: 9pt; border-collapse: collapse; " cellpadding="7">
      <thead>
        <tr>
              <th>PLACA</th>
              <th>SERIE</th>
              <th>CUENTA </th>
              <th>ELEMENTO</th>
              <th>MARCA</th>
              <th>FECHA DE COMPRA</th>
              <th>PRECIO</th>
            </tr>
      </thead>
      <tbody>
        ';

  while ($row_RsBloqueB = mysqli_fetch_assoc($RsBloqueB)) {
$html .= ' 
          <tr>
            <th>'.$row_RsBloqueB['di_nroplaca'].'</th>
            <td>'.$row_RsBloqueB['di_nroserie'].'</td>
            <td>'.$row_RsBloqueB['dicuenta'].'->'.$row_RsBloqueB['dicodelem'].'</td>
            <td>'.$row_RsBloqueB['ed_nomelemento'].'</td>
            <td>'.$row_RsBloqueB['ma_nommarca'].'</td>
            <td>'.$row_RsBloqueB['di_fechacompra'].'</td>
            <td>$ '.number_format($row_RsBloqueB['di_valorcompra'], 2, '.', ',').'</td>
          </tr>
          ';
 } 
$html .= '
      </tbody>
    </table>
<div style="text-align: center; font-style: italic;">N&uacute;mero de pagos : '.$totalRows_RsBloqueB.'</div>
<br />
								<h3>DESARROLLO DE ACTIVIDADES EN EL PERIODO REPORTADO</h3>
								<hr>
<table class="items" width="100%" border="1" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
  <tr class="success">
    <td colspan="4">ACTIVIDADES DESARROLLADAS</td>
  </tr>
  <tr>
    <td colspan="4">'.$row_RsBloqueA['difuncionario'].'</td>
  </tr>
    <tr>
    <td bgcolor="#F7F7F7">DECLARA INCONFORMIDAD EN EL CUMPLIMIENTO DEL CONTRATO PARA ESTE PERIODO REPORTADO?</td>
    <td bgcolor="#F7F7F7">RAZON DE LA INCONFORMIDAD</td>
    <td bgcolor="#F7F7F7">DECLARA INCUMPLIMIENTO EN EL DESARROLLO DEL CONTRATO PARA ESTE PERIODO REPORTADO?</td>
    <td bgcolor="#F7F7F7">RAZON DEL INCUMPLIMIENTO</td>
  </tr>
  <tr>
    <td>'.$row_RsBloqueA['difuncionario'].'</td>
    <td>'.$row_RsBloqueA['difuncionario'].'</td>
    <td>'.$row_RsBloqueA['difuncionario'].'</td>
    <td>'.$row_RsBloqueA['difuncionario'].'</td>
  </tr>
  <tr>
    <td bgcolor="#F7F7F7">NOTA</td>
    <td colspan="3" bgcolor="#F7F7F7">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"> En el evento que se detallen modificaciones al contrato / convenio, es necesario que se indique la fecha en la cual las mismas se realizaron, fecha de aprobaci&oacute;n de la garant&iacute;a y en general el cumplimiento de otros requisitos se&ntilde;alados en el documento mediante el cual se realiz&oacute; la modificaci&oacute;n. Cabe precisar que no todas las modificaciones implican aprobaci&oacute;n de garant&iacute;as. Es deber del supervisor verificar cada caso particular.</td>
  </tr>
</table>
<br />
								<h3>DESARROLLO DE LAS OBLIGACIONES ESPEC&Iacute;FICAS</h3>
								<hr>
<table class="items" width="100%" border="1" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
          <thead>
            <tr>
                <th>ORDINAL</th>
                <th>OBLIGACI&Oacute;N</th>
                <th>ACTIVIDAD REALIZADA</th>
				<th>ESTADO</th>
              </tr>
          </thead>
          <tbody>
            ';
  while ($row_RsBloqueC = mysqli_fetch_assoc($RsBloqueC)) {
$html .= '
              <tr>
                <th>'.$row_RsBloqueC['difuncionario'].'</th>
                <td>'.$row_RsBloqueC['difuncionario'].'</td>
                <td>'.$row_RsBloqueC['difuncionario'].'</td>
				        <td>'.$row_RsBloqueC['difuncionario'].'</td>
              </tr>
               ';
 } 
$html .= '
          </tbody>
        </table>
<div style="text-align: center; font-style: italic;">N&uacute;mero de obligaciones procesadas: '.$totalRows_RsBloqueC.'</div>
<br />
<br />
<p><strong>Firma</strong></p>
<p>Nombre:'.$row_RsBloqueA['difuncionario'].'<br />
Documento:'.$row_RsBloqueA['difuncionario'].'<br />
Dependencia:'.$row_RsBloqueA['difuncionario'].'</p>
<br />
Notas:<br><br/>Para efectos de admisibilidad y fuerza probatoria seg&uacute;n lo dispuesto en la ley 527 de 1999, el interesado puede probar la validez del mismo a trav&eacute;s del siguiente sitio WEB: http://gestion.mincit.gov.co/Athena/GestionContrato. La coincidencia entre la informaci&oacute;n desplegada en pantalla y la contenida en informe impreso, confirma la autenticidad del informe emitido.<br />
El documento se ha validado a trav&eacute;s del ingreso de esta clave din&aacute;mica por '.$row_RsBloqueA['difuncionario'].'.
<br/>
</div>
<br />
<p>Fecha | Hora de firma:'.$row_RsBloqueA['difuncionario'].'<br />
Firmado por:'.$row_RsBloqueA['difuncionario'].'<br />
Firmado desde la IP:'.$row_RsBloqueA['difuncionario'].'</p>
</body>
</html>';
require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'Letter', 'margin_top' => '30', 'margin-bottom' => '20' ]);
  $mpdf->SetHTMLHeader('
<div style="height: 500px; text-align: right; font-weight: bold;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" style="color:#0000BB;"><div align="center"><span style="font-weight: bold; font-size: 14pt;"></span>INFORME DE ACTIVIDADES | C&Oacute;DIGO:<strong>'.$row_RsBloqueA['difuncionario'].'</strong><br />
      GRUPO DE CONTRATOS<br />
      <br />
      <br />
    </div>
    </strong></td>
  </tr>
</table>
</div>');
  $mpdf->SetHTMLFooter('<table width="100%"><tr><td width="33%">{DATE j-m-Y}</td><td width="33%" align="center">{PAGENO}/{nbpg}</td><td width="33%" style="text-align: right;">Informe de actividades</td>
    </tr>
</table>');
$mpdf->SetTitle("INFORME DE ACTIVIDADES DEL CONTRATISTA");
$mpdf->SetAuthor("MinCIT");
$mpdf->SetWatermarkText("Informe de actividades:".$row_RsBloqueA['difuncionario']);
$mpdf->SetProtection(array());
$mpdf->showWatermarkText = true;
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML( $html );
// Ruta completa del archivo de salida en una carpeta específica
$rutaArchivoPDF = 'documentos/'.$row_RsBloqueA['difuncionario'].'.pdf';

// Guardar el PDF en la carpeta específica
$mpdf->Output($rutaArchivoPDF, \Mpdf\Output\Destination::FILE);

//$mpdf->Output('documentos/'.$row_RsBloqueA['difuncionario'].'.pdf', 'F' );
$mpdf->Output();
exit;

?>