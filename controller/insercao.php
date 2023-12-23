<?php
    require("bancoConexao.php");
    $hellou = $conexao -> consultaBanco();
    echo $hellou;
?>