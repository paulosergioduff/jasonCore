<?php
require_once('jasonCore.class.php');
Class JasonPost extends Post
{
                public function post_feed($type, $value, $author, $destiny)
                {
                                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
                }
                public function post_comment($type, $value, $author, $destiny)
                {
                                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
                }
                public function post_in_page($type, $value, $author, $destiny)
                {
                                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
                }
                public function send_Menssage($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage)
                {
                                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
                }
                public function update_inbox($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage)
                {
                                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                                $crud->insert($autor, $menssage, $protocol, $type, '*****', 'menssagem', $serverDestiny);
                }
}
?>