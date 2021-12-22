<!-- Puxa o cabeçalho -->
<?php require_once 'header.php'; ?>

<!-- Puxa o menu -->
<?php require_once 'navbar.php'; ?>

<h1>Entradas <small>v21.12.21.11.55</small></h1>

<table class="tablesorter table table-hover" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Valor</th>
      <th scope="col">Parcela</th>
      <th scope="col">Vencimento</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
	  
	  $sheetName = "teste-php";

    // Novo link adaptado para versão V4 da API do google
    $url = "https://sheets.googleapis.com/v4/spreadsheets/$spreadsheetId/values/$sheetName!$range?majorDimension=ROWS&key=$key";

    $file = file_get_contents( $url );
    $entradas = json_decode( $file );
    $coluna = $entradas->{'values'};
    for ( $i = 1; $i < sizeof( $coluna ); $i++ ) {

      // Parâmetrizar as colunas
		$cliente = $coluna[$i][0];
		$valor = $coluna[$i][1];
		$parcela = $coluna[$i][2];
		$vencimento = $coluna[$i][3];
		$status = $coluna[$i][4];
		$dataPagamento = $coluna[$i][5];
		$obs = $coluna[$i][10];
		$about = $coluna[$i][9];
		$tipoCobranca = $coluna[$i][12];
		$dataEnvio = $coluna[$i][5];
		$numNF = $coluna[$i][7];
		$linkNF = $coluna[$i][8];
		$email = $coluna[$i][11];
		$nossoNum = $coluna[$i][13];
		
      if ( $status == "Cancelado" ) {
        $statusButton = '<button type="button" class="btn btn-danger btn-sm">' . $status . '</button>';
      } elseif ( $status == "Inadimplente" ) {
        $statusButton = '<button type="button" class="btn btn-danger btn-sm">' . $status . '</button>';
      } elseif ( $status == "Atrasado" ) {
        $statusButton = '<button type="button" class="btn btn-danger btn-sm">' . $status . '</button>';
      } elseif ( $status == "Enviar Boleto" ) {
        $statusButton = '<button type="button" class="btn btn-warning btn-sm">' . $status . '</button>';
      } elseif ( $status == "Aguardando Pagamento" ) {
        $statusButton = '<button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Cobrança enviada em ' . $dataEnvio . '">' . $status . '</button>';
      } elseif ( $status == "Emitir Nota Fiscal" ) {
        $statusButton = '<button type="button" class="btn btn-warning btn-sm">' . $status . '</button>';
      } elseif ( $status == "Concluído" ) {
        $statusButton = '<button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Pago em ' . $dataPagamento . '">' . $status . '</button>';
      } elseif ( $status == "Pago" ) {
        $statusButton = '<button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Pago em ' . $dataPagamento . '">' . $status . '</button>';
      } else {
        $statusButton = '';
      }

      $trClass = '<tr>';

      if ( $status == "Cancelado" ) {
        $trClass = '<tr class="table-danger">';
      } elseif ( $status == "Inadimplente" ) {
        $trClass = '<tr class="table-danger">';
      } elseif ( $status == "Atrasado" ) {
        $trClass = '<tr class="table-danger">';
      } elseif ( $status == "Enviar Boleto" ) {
        $trClass = '<tr class="table-warning">';
      } elseif ( $status == "Aguardando Pagamento" ) {
        $trClass = '<tr class="table-warning">';
      } elseif ( $status == "Emitir Nota Fiscal" ) {
        $trClass = '<tr class="table-warning">';
      } else {
        $trClass = '<tr>';
      }
		
		if ( $about == '' ) {
        $aboutButton = '';
      } else {
        $aboutButton = '<button type="button" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="left" title="' . $about . '">Ref.:</button>';
      }
		
		if ( $obs == '' ) {
        $obsButton = '';
      } else {
        $obsButton = '<button type="button" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="left" title="' . $obs . '">Obs.:</button>';
      }

      echo $trClass . '<th scope="row">' . $cliente . '</th><td>' . $valor . '</td><td>' . $parcela . '</td><td>' . $vencimento . '</td><td>' . $statusButton . '</td><td>' . $obsButton . ' ' . $aboutButton . '</td><td><i class="fas fa-file-invoice-dollar text-muted"></i> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-file-alt"></i></button> <i class="fas fa-pen text-muted"></i> <i class="fas fa-trash-alt text-muted"></i> <i class="fas fa-paper-plane text-muted"></i> <i class="fas fa-share-alt text-muted"></i></td></tr>';

      if ( $cliente == "" && $valor == "" ) {
        break;
      }
    }
    ?>
  </tbody>
</table>
