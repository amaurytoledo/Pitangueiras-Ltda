<?php

$chamado = $_POST['descricao'];
$descricao = MD5($_POST['chamado']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db('db_pitangueira');
$query_select = "SELECT chamado FROM tb_atividade WHERE chamado = '$chamado'";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['chamado'];


  if($chamado == "" || $chamado == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo chamado deve ser preenchido');window.location.href='
    index.html';</script>";

    }else{
      if($logarray == $chamado){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse chamado já existe');window.location.href='
        index.html';</script>";
        die();

      }else{
        $query = "INSERT INTO tb_atividade (chamado,descricao) VALUES ('$chamado','$descricao')";
        $insert = mysqli_query($query,$connect);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Chamado cadastrado com sucesso!');window.location.
          href='index.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse chamado');window.location
          .href='index.html'</script>";
        }
      }
    }
?>