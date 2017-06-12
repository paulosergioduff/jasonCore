<?php 

Class JasonPost extends Post 
{
	

	public function post_feed($type, $value, $author, $destiny)
		{
			echo "Implementado!";

		}
	public function post_comment($type, $value, $author, $destiny)
		{
			echo "Implementado!";

		}
	public function post_in_page($type, $value, $author, $destiny)
		{
			echo "Implementado!";

		}

	public function dataAccess($protocol, $type, $server, $dataBase, $user, $password)
	{
			echo "Implementado!";

		}
	public function send_Mensage($protocol, $serverOrigin, $serverDestiny, $type, $autor, $mensage)
	{
			echo "Implementado!";

		}
	public function update_inbox($protocol, $serverOrigin, $serverDestiny, $type, $autor, $mensage)
	{
			echo "Implementado!";

		}
}



?>