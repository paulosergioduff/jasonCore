<?php

function centralInsere($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage)
	{
		 $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
         $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
         echo '<script> alert("Testado!")</script>';
	}



	