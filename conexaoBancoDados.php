<?php
    //Dados de Acesso ao Banco
    $servidorBanco = 'SERVIDOR';
    $senhaBanco ='SENHA';
    $usuarioBanco ='USUARIO';
    $bdados ='BDADOS';



    //FUNÇÕES BANCO DE DADOS
    function verificar($consulta){
    global $servidorBanco, $usuarioBanco, $senhaBanco, $bdados;
    $conexao = mysqli_connect($servidorBanco, $usuarioBanco, $senhaBanco, $bdados);
    $gravacoes = mysqli_query($conexao, $consulta);
    $dados = array();
    while($linha = mysqli_fetch_assoc($gravacoes)){
        $dados[] = $linha; 
    }
    if (empty ($dados)){
        $msg = "Sucesso!";
    }else{
        $msg = "Já cadastrado!";
    }
    mysqli_close($conexao);
    return $msg;
    }

    function executar($consulta){
    global $servidorBanco, $usuarioBanco, $senhaBanco, $bdados;
    $conexao = mysqli_connect($servidorBanco, $usuarioBanco, $senhaBanco, $bdados);
    if(mysqli_query($conexao, $consulta))
    {
        $msg = "Sucesso!";
    }
    else
    {
        $msg = "Falha!";
    }
    mysqli_close($conexao);
    return $msg;
    }
    
    function selecionar($consulta){
    global $servidorBanco, $usuarioBanco, $senhaBanco, $bdados;
    $conexao = mysqli_connect($servidorBanco, $usuarioBanco, $senhaBanco, $bdados);

    $gravacoes = mysqli_query($conexao, $consulta);

    $dados = array();
    while($linha = mysqli_fetch_assoc($gravacoes))
    {
    $dados[] = $linha; 
    }
    mysqli_close($conexao);
    return $dados;
    }
?>