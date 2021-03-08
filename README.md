# Conexão de Banco de Dados MySQL+PHP Usando MYSQLI_CONNECT()
Cria conexão com o Banco de Dados MySQL PHP Usando MYSQLI e facilita a consulta:


Para configurar o Crud basta trocar os dados de acesso a o banco:

# Dados de Acesso ao Banco

$servidorBanco = 'BANCO DE DADOS';

$senhaBanco ='SENHA';

$usuarioBanco ='USUÁRIO';

$bdados ='BANCO DE DADOS';


Logo após a configuração do CRUD basta importar o arquivo usando require():

# Importando conexão com o banco

include('conexaoBancoDados.php');


Em seguida receba os dados em formato de array chamando a função desejada e passando como parâmetro a consulta SQL:

# Fazendo a consulta SQL

$consulta="SELECT * FROM usuarios";

$usuarios = selecionar($consulta);

foreach ($usuarios as $usuario){

 print_r($usuario);
 
}


*Usar a função selecionar() para consultas do tipo SELECT que retornam um array, veriicar() para consultar se já possui o dado em banco, executar() para consultas que não retornam valores - ex: INSERT, DELETE
