<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/index.css">
<title>Softbox</title>
</head>
<body>
	<!--Inicio do menu -->
	<header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
						aria-expanded="false">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar">Teste 1</span> <span class="icon-bar">Teste 2</span>
						<span class="icon-bar">Teste 3</span>
					</button>
					<a class="navbar-brand" href="index.html">Home</a>
				</div>

				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" id="txtPesquisar">
						</div>
						<button type="submit" class="btn btn-default" id="btnPesquisar">Pesquisar</button>
					</form>

					<span id="titulo"><?php echo ('Softbox')?></span>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" id="drop-notificacao" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false"> <i class="fa fa-bell-o" id="notificacao"></i>
								<b class="badge-notificacao">4</b>
						</a>
							<ul class="dropdown-menu fadeInNotf">
								<li class="bg-success">
									<div class="panel-notificacao">
										<div class="row">
											<div class="col-md-2">
												<span><i class="fa fa-user-plus"></i></span>
											</div>
											<div class="col-md-10">
												<p>Verifique o banco de dados, para saber se as
													informações contidas no relatório coincidem.</p>
												<a href="#">Learn more</a>
											</div>
										</div>
									</div>
								</li>
								<li class="bg-danger">
									<div class="panel-notificacao">
										<div class="row">
											<div class="col-md-2">
												<span><i class="fa fa-get-pocket"></i></span>
											</div>
											<div class="col-md-10">
												<p>Seu nível de segurança esta baixo, vá até o painel de
													configuração, e aumente a precisão.</p>
												<a href="#">Learn more</a>
											</div>
										</div>
									</div>
								</li>
								<li class="bg-default">
									<div class="panel-notificacao">
										<div class="row">
											<div class="col-md-2">
												<span><i class="fa fa- fa-cloud"></i></span>
											</div>
											<div class="col-md-10">
												<p>Salve seus dados na nuvem. É simples e rápido!</p>
												<a href="#">Learn more</a>
											</div>
										</div>
									</div>
								</li>
							</ul></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--Fim do menu -->

	<h1></h1>

	<section>
		<!-- Menu lateral -->
		<nav class="nav">
			<div class="menu">
				<div class="head-menu">
					<span>Menu</span>
				</div>
				<ul class="nav menu-list">
					<li><a href="#"><i class="fa fa-calendar-plus-o">&nbsp;&nbsp;Agenda</i></a></li>
					<li><a href="#"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Relatório</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;Mensagem</a></li>
				</ul>
			</div>
			
			<div class="menu-lateral">
				<div class="head-mensagem">
					<ul class="nav">
						<li>
							<div class="row">
								<div class="col-md-5">
									<div class="mensagem"></div>
								</div>
								<div class="col-md-7">
									<p id="msgFeeds">
										<i class="fa fa-2x fa-comments-o"><span
											class="badge badge-primary">14</span></i> Mensagens
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="body-mensagem">
					<ul class="nav">
						<li><span class="unread"> <a href="#"> <img src="./img/1.png"> <span>Os
										relatórios da semana estão prontos para serem consultados.</span>
							</a>
						</span></li>
						<li><span class="unread"> <a href="#"> <img src="./img/4.png"> <span>Reunião
										da equipe foi adiada para as 14:30, todos os participantes
										estão informados.</span>
							</a>
						</span></li>
						<li><span class="unread"> <a href="#"> <img src="./img/5.png"> <span>Todos
										os integrantes do projeto ERP, por favor ficar atento as
										notícias. </span>
							</a>
						</span></li>
						<li class="active testeKey"><a href="#" class="ponteiro"> <i
								class="fa fa-2x fa-chevron-circle-left"></i>
						</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Fim do Menu lateral -->

		<div class="bg-body">
			<div class="container-fluid">
				<div id="msgSuccess">
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<span class="content-msg"></span>
					</div>
				</div>

				<!-- Banners -->
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="panel banner-green" id="banner">
							<div class="banner-content" onmouseover="inAnimacao(this)"
								onmouseout="outAnimacao(this)">
								<i class="fa fa-thumbs-o-up fa-5x"></i> <span>Aprovados</span>
								<p>180</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="panel banner-blue" id="banner">
							<div class="banner-content" onmouseover="inAnimacao(this)"
								onmouseout="outAnimacao(this)">
								<i class="fa fa-hourglass-start fa-5x"></i> <span>Pendentes</span>
								<p>23</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="panel banner-red" id="banner">
							<div class="banner-content" onmouseover="inAnimacao(this)"
								onmouseout="outAnimacao(this)">
								<i class="fa fa-thumbs-o-down fa-5x"></i> <span>Reprovados</span>
								<p>360</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="panel banner-yellow" id="banner">
							<div class="banner-content" onmouseover="inAnimacao(this)"
								onmouseout="outAnimacao(this)">
								<i class="fa fa-sticky-note fa-5x"></i> <span>Em análise</span>
								<p>21</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim Banners -->

				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-user-plus"></i> Cadastro de aluno
							</div>
							<div class="panel-body">
								<form method="get">
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Nome</label> <input type="text" class="form-control"
													placeholder="Informe o nome..." id="txtNomeAluno">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Endereco</label> <input type="text"
													class="form-control" placeholder="Informe o endereco..."
													id="txtEndereco">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary"
										id="btnSalvarAluno" value="">Salvar</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-book"></i> Cadastro de Disciplina
							</div>
							<div class="panel-body">
								<form method="get">
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Nome da disciplina</label> <input type="text"
													class="form-control"
													placeholder="Informe o nome da disciplina...">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Sigla</label> <input type="text" class="form-control"
													placeholder="Informe a sigla ...">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary"
										id="btnSalvarDisciplina" value="">Salvar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-inverse">
							<div class="panel-heading">Formulario</div>
							<div class="panel-body">
								<div class="col-lg-12">
									<form method="POST" id="cadastroAluno">
										<input type="hidden" name="codMatricula" id="hdCodMatricula"
											value=""> <input type="hidden" name="operacao" id="hdOp"
											value="Novo">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label for="drpAluno">Aluno</label><select id="drpAluno"
														class="form-control" required>
															<?php echo $this->content['Alunos'];?>
														</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-8">
												<div class="form-group">
													<label for="drpDisciplina">Disciplina</label> <select
														id="drpDisciplina" class="form-control" required>
															<?php echo $this->content['Disciplinas'];?>
														</select>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="form-group">
													<label for="txtNota">Nota</label> <input type="text"
														class="form-control" id="txtNota"
														placeholder="Digite a nota...">
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-success" id="btnSalvar"
											value="">Salvar</button>
										<button type='reset' class="btn btn-default" id="btnLimpar">Limpar
											Campos</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="panel widget">
							<div class="list-group-item head-widget">
								<span>Situacoes de Alunos</span>
							</div>
							<div class="list-group">
								<button type="button" class="list-group-item">Cras justo odio</button>
								<button type="button" class="list-group-item">Dapibus ac
									facilisis in</button>
								<button type="button" class="list-group-item">Morbi leo risus</button>
								<button type="button" class="list-group-item">Porta ac
									consectetur ac</button>
								<button type="button" class="list-group-item">Vestibulum at eros</button>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-inverse">
					<div class="panel-heading">
						Alunos Cadastrados <a href="#collapseExample"
							data-toggle="collapse" aria-expanded="false"
							aria-controls="collapseExample"><i
							class="fa fa-angle-double-up pull-right"></i></a>
					</div>
					<div class="panel-body" class="collapse" id="collapseExample">
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Aluno</th>
											<th>Disciplina</th>
											<th>Nota</th>
											<th>Ações</th>
										</tr>
									</thead>
									<tbody id='matriculas'>
										<?php echo $this->content['Matriculas']; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Modal Excluir registro-->
	<div class="modal fade" id="mdlExcluirReg" tabindex="-2" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Excluir Registro</h4>
				</div>
				<div class="modal-body">
					<p>Tem certeza que deseja excluir o registro?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btnMdlExcluir">Sim</button>
					<button type="button" class="btn btn-default" data-dismiss="modal"
						id="btnMdlCancelar">Cancelar</button>
				</div>
			</div>
		</div>
	</div>

	<script src="./js/jquery-1.11.3.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/index.js"></script>
</body>
</html>