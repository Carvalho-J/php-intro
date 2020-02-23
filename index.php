<?php //não é preciso fechar tag nesse caso pois só tem código php nesse exercício. Caso haja HMTL intercalando, usa-se  "? >"

$categorias = []; 

/*Array inicialmente criado vazio. Isso facilita a inserção ou remoção no caso de novas categorias.
Sendo fracamente tipado, não é necessário especificar o tipo de dado.
*/

$categorias[] = 'infantil'; //categorias acrescentadas ao array
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


print_r($categorias);