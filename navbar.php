<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/">
    <img src="https://qrcomunicacao.com.br/wp-content/uploads/2021/05/qr-logo-code-branco-1.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    qrERP
  </a>
	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="entradas.php">Entradas</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="saidas.php">Saídas</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#">Cartão de Crédito</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#">Freelas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Novo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Orçamento</a>
          <a class="dropdown-item" href="#">Proposta</a>
			<a class="dropdown-item" href="#">Contrato</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Teste</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Desativado</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Filtrar por...">
    </form>
  </div>
</nav>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>