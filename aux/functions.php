<?php

function typeData($protocol, $serverOrigin, $serverDestiny, $type, $autor, $mensage)
	{
		if ($type == 'multitonPDO') {
			$crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
			$crud->insert($autor, $mensage, $protocol, $type, '*****', 'mensage', $serverDestiny);
		}
	}