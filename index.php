<!DOCTYPE html>
<html>
<head>
	<title>TABLELESS</title>	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</head>
<body>

<style type="text/css">
.divTable{
 display: table;
 width: 100%;
}
.divTableRow {
 display: table-row;
 border-bottom: 2px solid #000;
}
.divTableHeading {
 background-color: #EEE;
 display: table-header-group;
}
.divTableCell, .divTableHead {
 border: 1px solid #999999;
 display: table-cell;
 padding: 3px 10px;
}
.divTableCell {
 font-size: 12px;
 font-weight: normal;
 border: 0px;
 border-bottom: 2px solid #EEE;
}
.highlight.over, .highlight:hover {
 background-color: #EEE;
 cursor: pointer;
}
.divTableHeading {
 background-color: #EEE;
 display: table-header-group;
 font-weight: bold;
}
.divTableFoot {
 background-color: #EEE;
 display: table-footer-group;
 font-weight: bold;
}
.divTableBody {
 display: table-row-group;
}
.margin {
 margin: 2px;
}
</style>


	<head>
		<nav class="navbar navbar-default">
  <div class="container 	container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</head>

   <div class='container'>
	 <div class='row'>

	 <div class='col-md-12'>
	  <div class='col-md-12'>
	   <h3>Lista de Notas Fiscas</h3>
	   <div class="well" style="bottom: 30px;">
	  	 <span>Filtros de pesquisa avançada</span>
	   </div>
	  </div>
	 </div	>
	 
	 <div class="col-md-12">	
	  <div class="col-md-10">
	    <div class="divTable">
		  <div class="divTableBody">
			<div class="divTableRow">
				<div class="divTableCell">Num</div>
				<div class="divTableCell">Série</div>
				<div class="divTableCell">Emitido em</div>
				<div class="divTableCell">Destinatário</div>
				<div class="divTableCell">Emitente</div>
				<div class="divTableCell">Valor</div>
				<div class="divTableCell">Icone</div>
				<div class="divTableCell">Status</div>
			</div>
			<?php foreach([1,2,3,4] as $number) { ?>
			<div class="divTableRow highlight">
				<div class="divTableCell">
					<a href=''>108456</a><br>
					<small>Speed encontrado em 01/23/2201</small>
				</div>
				<div class="divTableCell">2</div>
				<div class="divTableCell">
					08/09/2018 15:12
				</div>
				<div class="divTableCell">
					<strong>SAPORA SA</strong><br>
					0921662000013
				</div>
				<div class="divTableCell">
					<strong>BRS SUPRIMENTO</strong><br>
					0921662000013
				</div>
				<div class="divTableCell">
					R$ 570.64 
				</div>
				<div class="divTableCell">
					Icone
				</div>
				<div class="divTableCell">
					<span class='badge margin'>5 Advertencias</span><br>
					<span class='badge margin'>3 Erros</span>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	</div>
	<div class="col-md-2">
	  <h4>Filtros</h4>
	  <p>Utilize filtros pré-definidos
	  para agilizar suas buscas de documentos</p>

	  <ul class="list-unstyled">
	  <?php foreach([1,2,3,4,5,6,7] as $element) { ?>
		 <li><a href="">Busca pelo criterio 	<? echo element ?></a></li>
	  <?php } ?>
	  </ul>
	</div>
</div>
</body>
</html>