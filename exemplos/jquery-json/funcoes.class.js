// Classe para chamar o Json.
function json(){
	var qtd;
	var retorno;

	// Resgatar valores.
	json.prototype.resgatarValores = function(){
		$('#resultado').html('Carregando dados...');

		// Estrutura de resultado.
		$.getJSON('http://localhost/novoMVC/areaDeTrabalho/selectTabela.php', function(data){
			this.qtd = data.dados.length;
			this.retorno = '';

			for (i = 0; i < this.qtd; i++){
				this.retorno += 'ID: ' + data.dados[i].id + '<br />';
				this.retorno += 'Categoria: ' + data.dados[i].Categoria + ' - ';
				this.retorno += 'titulo: ' + data.dados[i].titulo + '<br /><br />';
			}

			$('#resultado').html(this.retorno);
		});

	}

}

// Objeto.
var obj = new json();
obj.resgatarValores();
