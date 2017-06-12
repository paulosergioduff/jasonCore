<?php

function typeData($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage)
	{
		if ($type == 'multitonPDO') {
			$crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
			$crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssage', $serverDestiny);
		}
	}

	function olaMundo()
		{
			echo "<BR><br>Olá mundo FUNÇÃO CHAMADA";
		}


	