<?php //não é preciso fechar tag nesse caso pois só tem código php nesse exercício. Caso haja HMTL intercalando, usa-se  "? >"

$categorias = [2]; //criado como array por ser mais fácil percorrer com um laço de repetição se necessário.
$categorias[] = "infantil"; 
$categorias[] = "adolescente";
$categorias[] = "adulto";


/*Array inicialmente criado vazio. Isso facilita a inserção ou remoção no caso de novas categorias.
Sendo fracamente tipado, não é necessário especificar o tipo de dado.
*/

//print_r($categorias);

$nome = $_POST['nome'];//no método post as requisições vão no corpo e são ocultas. 
$idade = $_POST['idade'];//alterando para get elas vão no header e ficam visiveis na própia url

/* 
código usado para teste
var_dump($nome);
var_dump($idade);
return 0;

*/


if($idade >= 6 && $idade <= 12) //Idade maior ou igual a 6 e menor ou igual a 12 entra na categoria infantil. 
    {
        for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[1] == "infantil")
                    echo "O competidor ", $nome. " tem ", $idade. " anos e pertence à categoria infatil.";
            }
    }
else if($idade >= 13 && $idade <= 17) //Idade maior ou igual a 13 e menor ou igual a 17 entra na categoria adolescente.
    {
        for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[1] == "adolescente")
                    echo "O competidor ", $nome. " tem ", $idade. " anos e pertence à categoria adolescente.";
            }
    }
else //Demais casos vão para adulto.
    {
        for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[1] == "adulto")
                    echo "O competidor ", $nome. " tem ", $idade. " anos e pertence à categoria adulto.";
            }
        
    }
   