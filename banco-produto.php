<?php
function listaProdutos($conexao) {
 $produtos = array();
 $resultado = mysqli_query($conexao, "select * from produtos");
 while($produto = mysqli_fetch_assoc($resultado)) {
 array_push($produtos, $produto);
 }
 return $produtos;
}

function insereProduto($nome, $preco, $descricao, $conexao) {
    $query = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
   }
    
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}',
    categoria_id= {$categoria_id}, usado = {$usado} where id = {$id}";
    return mysqli_query($conexao, $query);
   }