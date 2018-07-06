<?php // Exemplo de como ter retorno de cabeçalho http - documentação php.org
function get_contents() {
  file_get_contents("http://example.com");
  var_dump($http_response_header);
  //print_r($http_response_header); Outra forma de mostrar os dados na tela
}
get_contents();
var_dump($http_response_header);
?>