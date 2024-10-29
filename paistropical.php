<?php
    // Conexão com Banco de Dados
    $conecta_versovivo = mysqli_connect("localhost", "root", "", "bd_versovivo_senac") or trigger_error(mysqli_connect_errno(), E_USER_ERROR);
?>