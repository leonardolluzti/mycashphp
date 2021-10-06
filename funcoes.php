<?php
	 function tratar_erros($erro_numero)
	 {
		 $mensagem_erro = "";
		 switch($erro_numero)
		 {
			case 1045:  $mensagem_erro = "O usuário ou senha são inválidos, favor rever isso";break;
			case 1146:  $mensagem_erro = "Essa tabela não existe";break;
			default: $mensagem_erro = "Erro não identificado";break;
		 }
		return $mensagem_erro;
	 }
	function mask($val, $mask)
	{
		$maskared = '';
		$k = 0;
		for($i = 0;$i<=strlen($mask)-1; $i++)
		{
			if($mask[$i] == '#')
			{
				if(isset($val[$k]))
				$maskared .= $val[$k++];
			}
			else
			{
				if(isset($mask[$i]))
				$maskared .= $mask[$i];
			}
		}
		return $maskared;
	}
?>