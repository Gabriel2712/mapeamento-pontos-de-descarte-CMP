<?php  
    $criterio=$_POST['criterio'];
    $chave=$_POST['chave'];
    $chave = trim($chave);
    if ($criterio != 'tudo' && !$chave)
    {
        echo 'Impossível realizar a pesquisa! Volte e preencha o campo novamente.';
        exit;
    }
    $criterio = addslashes($criterio);
    $chave = addslashes($chave);
?>