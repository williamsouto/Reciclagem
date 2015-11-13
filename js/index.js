
// Variáveis globais
var collapsad = false;
var menuLateral = false;
var bannerDown = false;
var bannerFim = false;
var countNot = 0;
var atual = 0;
var array = [ "Digite", " aqui", " .", " .", " .", "" ];
var idRegistro;

// End Variáveis globais

// Timers
var intervalo = setInterval(verificarAnimacao, 100);
var intervaloNot = setInterval(animarNotificacao, 3000);
setInterval(campoPesquisar, 1000);
setInterval(animarPonteiro, 1000);

// Loads
$().ready(function() {
	animarBanners();
	$('#msgSuccess').hide();
});

// Eventos
$('#banner').click(function() {

	var obj = $('#banner');

	obj.fadeOut(2000, function() {
		obj.show();
	});
	obj.fadeOut(800, function() {
		obj.show();
	});
	obj.fadeOut(800, function() {
		obj.show();
	});
});

$('#drop-notificacao').click(function() {
	$('.badge-notificacao').text(0);
});

$('#btnSalvar').click(function(event) {

	$('#txtNome').val($('#txtEmail').val());
});

$('.ponteiro').click(function() {

	if (!collapsad) {
		$('.menu-lateral').animate({
							width : "-=169"	
						},350,
						function() {
							$('.ponteiro > i').removeClass(
									'fa-chevron-circle-left').addClass(
									'fa-chevron-circle-right');
						});
				$('.ponteiro').animate({
					left : '6%'
				}, 350);
				collapsad = true;
			} else {
				$('.menu-lateral').animate(
						{
							width : "+=169"
						},
						350,
						function() {
							$('.ponteiro > i').removeClass(
									'fa-chevron-circle-right').addClass(
									'fa-chevron-circle-left');
						});
				$('.ponteiro').animate({
					left : '15%'
				}, 350);
				collapsad = false;
			}
		});

$('.ponteiro').click(function() {

	if (!menuLateral) {
		$('.bg-body').animate({
			marginLeft : '-=160'
		}, 350);
		menuLateral = true;
	} else {
		$('.bg-body').animate({
			marginLeft : '+=160'
		}, 350);
		menuLateral = false;
	}
});

$('#cadastroAluno').submit(function() {

					var nomeAluno;
					var nomeDisciplina;

					if ($('#drpAluno option').is(':selected')) {
						nomeAluno = $('#drpAluno :selected').html();
					}

					if ($('#drpDisciplina option').is(':selected')) {
						nomeDisciplina = $('#drpDisciplina :selected').html();
					}
					
					$.post('http://localhost/soft/lib/Util.php',{
										func : 'verificaUrl',
										metodo: 'addDados',
										operacao: $('#hdOp').val(),
										codMatricula: $('#hdCodMatricula').val(), 
										codAluno : $('#drpAluno').val(),
										codDisciplina : $('#drpDisciplina').val(),
										nota : $('#txtNota').val(),
										nomeAluno : nomeAluno,
										nomeDisciplina : nomeDisciplina
									}, function(data) {
										
										var classe;
										var linha = '#' + $('#hdCodMatricula').val();
										var mensagem;
										var body = '<td>' + data['nomeAluno'] + '</td>' +
												   '<td>' + data['nomeDisciplina'] + '</td>' +
												   '<td>' + data['nota'] + '</td>' +
												   '<td>&nbsp;&nbsp;' +
												   		'<a href=\"#\" class=\"btnEditar\" id=\"' + data['codMatricula'] + '\">' +
												   			'<i class=\"fa fa-pencil-square-o btn-success btn-circle\"></i>' +
												   		'</a>&nbsp;&nbsp;&nbsp;' + 
												   		'<a href=\"#\" data-target=\"#mdlExcluirReg\" class=\"btnExcluir\" id=\"' + data['codMatricula'] + '\">' +
												   			'<i class=\"fa fa-times btn-danger btn-circle\"></i>' +
												   		'</a>' +
												   '</td>';
										
										// Verifica se a inserção, foi de um registro novo ou não, para construir a grid dinâmicamente. 
										if ($('#hdOp').val() == 'Editar') {
											mensagem = 'Registro n° ' + '<strong>' + data['codMatricula'] + '</strong> foi alterado com <strong>sucesso</strong>!';
											
											$(linha).html(body);
											
										} else {
											mensagem = 'O seu registro foi salvo com <strong>sucesso</strong>!<br>' +
											   			'N° registro - ' + '<strong>' + data['codMatricula'] + '</strong> gerado.';

											$('#matriculas').append('<tr id=\"' + data['codMatricula'] + '\">' +
																		body +
																	'</tr>');
										}
										
										$('#msgSuccess').html('<div class="alert alert-success alert-dismissible" role="alert">' +
																	'<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
																			'<span aria-hidden="true">&times;</span>' +
																	'</button>' +
																	'<span class="content-msg">' + mensagem + '</span>' +
															  '</div>');
										$('.adfda').show();
										$('#msgSuccess').show();
										
										$('.btnExcluir').click(function() {
											idRegistro = $(this).attr('id');
											$(this).attr('data-toggle','modal');
										});
										
										$('.btnEditar').click(function() {
											btnEditar(this);
										});
										
										limpaCampos();
									}, 'json');

					return false;
				});

$('#btnMdlCancelar').click(function() {
	idRegistro = null;
});


$('.btnExcluir').click(function() {
	idRegistro = $(this).attr('id');
	$(this).attr('data-toggle','modal');
});

$('#btnMdlExcluir').click(function() {
	$.post('http://localhost/soft/lib/Util.php', {
		func : 'verificaUrl',
		metodo : 'removeMatricula',
		codMatricula : idRegistro
	}, function(data) {
		if (data) {
			var classe = '#' + idRegistro;
			$(classe).remove();
			mensagem = 'O registro ' + '<strong>' + idRegistro + '</strong> foi excluido com <strong>sucesso</strong>!';
			
			$('#msgSuccess').html('<div class="alert alert-success alert-dismissible" role="alert">' +
										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
											'<span aria-hidden="true">&times;</span>' +
										'</button>' +
										'<span class="content-msg">' + mensagem + '</span>' +
								  '</div>');
			
			$('#msgSuccess').show();

			idRegistro = null;
			$('#btnMdlCancelar').click();
			$('#hdOp').val('Novo');
		}
		
		return false;
	});
});

$('.btnEditar').click(function() {
	btnEditar(this);
});

// EndEventos

// Métodos

function verificarAnimacao() {

	if (parseInt($('.banner-blue').height()) <= 140 && bannerDown == true) {
		bannerDown = false;

		$('.banner-blue').stop();
		$('.banner-blue').slideDown(800, function() {
			bannerFim = true;
			$('.banner-blue').slideUp(1000);
		});
	} else if (parseInt($('.banner-blue').height()) <= 180 && bannerFim == true) {
		$('.banner-blue').stop();
		$('.banner-blue').slideDown(800);
		clearInterval(intervalo);
	}
}

function animarTitulo(margin) {

	$(".navbar-collapse > span").animate({
		left : "+=" + margin.toString() + ""
	}, 350);
}

function animarBanners() {

	var margin = parseInt($('.navbar-collapse > span').css("margin-left"));
	margin = margin + 600;
	$(".navbar-collapse > span").css("margin-left", "-600px").css("position",
			"relative");

	$('.banner-yellow').css('left', '520px');
	$('.banner-yellow').animate({
		left : "-=520px"
	}, 350);

	$('.banner-green').css('left', '-800px');
	$('.banner-green').animate({
		left : "0px"
	}, 350, function() {
		animarTitulo(margin);
	});

	$('.banner-blue').hide();
	$('.banner-blue').slideDown(700, function() {
		bannerDown = true;
		$('.banner-blue').slideUp(900);
	});
}

function animarPonteiro() {
	$('#ponteiro > i').animate({
		width : '500',
		height : '+=500'
	}, 400, function() {
		$('#ponteiro > i').animate({
			width : '500',
			height : '+=500'
		}, 400);
	});
}

function animarNotificacao() {
	if (countNot <= 5) {
		$('#notificacao').addClass('notificacao');
		setTimeout(function() {
			$('#notificacao').removeClass('notificacao');
		}, 2000);
		countNot++;
	} else {
		clearInterval(intervaloNot);
	}
}

function campoPesquisar() {
	document.getElementById("txtPesquisar").placeholder += array[atual];

	if (atual == 5) {
		atual = 0;
		document.getElementById("txtPesquisar").placeholder = array[5];
	} else {
		atual++;
	}
}

function inAnimacao(e) {
	e.className = "banner-content-hover";
}

function outAnimacao(e) {
	e.className = "banner-content";
}

function btnEditar(e) {
	$.post('http://localhost/soft/lib/Util.php', {
		func: 'verificaUrl',
		metodo: 'selecionaMatricula',
		codMatricula: $(e).attr('id')
	}, function(data) {
		$('#hdCodMatricula').val(data['codMatricula']);
		$('#hdOp').val('Editar');
		$('#drpAluno option[value=' + data['codAluno'] + ']').attr('selected', true);
		$('#drpDisciplina option[value=' + data['codDisciplina'] + ']').attr('selected', true);
		$('#txtNota').val(data['nota']);
		
		$('#btnLimpar').click(function() {
			$('#drpAluno option').removeAttr('selected');
			$('#drpDisciplina option').removeAttr('selected');
			limpaCampos();
		});
		
	}, 'json');
}

function limpaCampos() {
	$('#drpAluno option:first').attr('selected', true);
	$('#drpDisciplina option:first').attr('selected', true);
	$('#txtNota').val('');
	$('#hdOp').val('Novo');
	$('#hdCodMatricula').val('');
}

// EndMetodos

