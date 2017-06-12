<?php
require_once('jasonCore.class.php');
Class JasonPost extends Post
{
    public function post_feed($type, $value, $author, $destiny)
    {
        switch ($a) {
            case 1: {
                $type == 'multitonPDO';
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $mensage, $protocol, $type, '*****', 'feed', $serverDestiny);
                break;
            }
            case 2: {
                $type == 'json';
                break;
            }
        }
    }
    public function post_comment($type, $value, $author, $destiny)
    {
        switch ($a) {
            case 1: {
                $type == 'multitonPDO';
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $mensage, $protocol, $type, '*****', 'comment', $serverDestiny);
                break;
            }
            case 2: {
                $type == 'json';
                break;
            }
        }
    }
    public function post_in_page($type, $value, $author, $destiny)
    {
        switch ($a) {
            case 1: {
                $type == 'multitonPDO';
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $mensage, $protocol, $type, '*****', 'mensage', $serverDestiny);
                break;
            }
            case 2: {
                $type == 'page';
                break;
            }
        }
    }
    
    public function send_Mensage($protocol, $serverOrigin, $serverDestiny, $type, $autor, $mensage)
    {
        
                $crud = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                $crud->insert($autor, $mensage, $protocol, $type, '*****', 'mensagem', $serverDestiny);
             
    }
    public function update_inbox($protocol, $serverOrigin, $serverDestiny, $type, $autor, $mensage)
    {
        echo "comming soon";
    }
}
?>