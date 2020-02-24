<?php //não é preciso fechar tag nesse caso pois só tem código php nesse exercício. Caso haja HMTL intercalando, usa-se  "? >"

$categorias = []; //criado como array por ser mais fácil percorrer com um laço de repetição se necessário.

/*Array inicialmente criado vazio. Isso facilita a inserção ou remoção no caso de novas categorias.
Sendo fracamente tipado, não é necessário especificar o tipo de dado.
*/

$categorias[] = 'infantil'; 
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = 'Jean';
$idade = 25;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12) //Idade maior ou igual a 6 e menor ou igual a 12 entra na categoria infantil. 
    {
        for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[1] == 'infantil')
                    echo "O competidor ", $nome. " pertence à categoria infantil";
            }
    }
elseif($idade >= 13 && $idade <= 18) //Idade maior ou igual a 13 e menor ou igual a 18 entra na categoria adolescente.
    {
        for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[1] == 'adolescente')
                    echo "O competidor ", $nome. " pertence à categoria adolescente.";
            }
    }
else //Demais casos vão para adulto.
    {
        for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[1] == 'adulto')
                    echo "O competidor ", $nome. " pertence à categoria adulto";
            }
        
        echo 'adulto'; 
    }