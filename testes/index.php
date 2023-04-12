<?php
	include './configuracao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>RafaelHSLemes - PagSeguro</title>
    </head>
    <body>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        
        
        <button onclick="pagamento()">Pagar</button>
        <span class="endereco" data-endereco="<?php echo URL; ?>></span>
        <script type="text/javascript">
        	function pagamento() {
        		var endereco = jQuery('.endereco').attr("data-endereco");
        		$.ajax({
        		url: endereco + "pagamento.php",
        		type: 'POST',
        		dataType: 'json',
        		success: function retorno () {
        			PagSeguroDirectPayment.setSessionId(retorno.id);
        		}
        	});
        }
        </script>
    </body>