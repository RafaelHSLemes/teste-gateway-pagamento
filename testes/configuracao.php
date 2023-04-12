<?php
	define("URL", "https://localhost/testes/");
	
$sandbox = true;
if($sandbox){
    define("EMAIL_PAGSEGURO", "rafaelhslemes@gmail.com");
    define("TOKEN_PAGSEGURO", "pRsF2gD1kkMm5Sov6436ad9ad9e85");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "rafaelhslemes@gmail.com");
    define("TOKEN_PAGSEGURO", "CLTOFRDESKyz4DkD6436adbbf2671");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}