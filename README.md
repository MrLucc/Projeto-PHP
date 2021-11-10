# Cadastro de endereços.

 - Criei um projeto com as seguintes stacks:(Laravel,Composer,Mysql).
 - app/Console/Commands/ImportCidades.php (consome a API do IBGE refente ao meu estado).
 - utilize o comamdo `php artisan command:ImportCidades` pra consumir API/ assim salvando dados no arquivo `saveCity.txt`.

 ## referente ao crud e os endpoint's 

 - 1° POST `/citySave` :salva novo endereço passando (logradouro, numero, bairro).

 - 2° PUT `/cityUpdate/{id}`: para atualiza endereço já existente precisa passar o id na rota.

 - 3° GET ALL(`/cityAll`) / GET LOGRADOURO(`/city/{logradouro}`): para utilizar "GET LOGRADOURO" no final da rota basta colocar logradouro de um endereço já existente.

 - 4° DELETE `/cityDelete/{id}`: precisa informar id do endereço existente no final da rota para deletar. 