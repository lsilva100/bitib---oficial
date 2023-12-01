<?php

    $nome = addslashes($_POST{'nome'});
    $telefone = addslashes($_POST{'telefone'});
    $empresa = addslashes($_POST{'empresa'});
    $mensagem = addslashes($_POST{'mensagem'});

    $para = "pedro.b.oliveira15@gmail.com";
    $assunto = "Prospecter";

    $corpo = "Nome: ".$nome."\n"."Telefone: ".$telefone."\n"."empresa: ".$empresa."\n"."mensagem: ".$mensagem;

    $cabeca = "From: ilsilvalukas@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!");
    }else{
        echo ("Erro no envio do email");
    }
?>