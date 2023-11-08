<?php

$nome = addslashes($_POST['nome']);
$cpf = addslashes($_POST{'cpf'});
$endereco = addslashes($_POST{'endereco'});
$bairro = addslashes($_POST{'bairro'});
$cidade = addslashes($_POST{'cidade'});
$cep = addslashes($_POST{'cep'});
$uf = addslashes($_POST{'uf'});
$data_nascimento = addslashes($_POST{'data_nascimento'});
$sexo = addslashes($_POST{'sexo'});
$estado_civil = addslashes($_POST{'estado_civil'});
$email = addslashes($_POST{'email'});
$website = addslashes($_POST{'web site'});
$telefone = addslashes($_POST{'telefone'});
$celular = addslashes($_POST{'celular'});
$login = addslashes($_POST{'login'});
$senha = addslashes($_POST{'senha'});
$assuntos{} = addslashes($_POST{'assuntos{}'});

$para = "ttainara.santos098@gmail.com";
$assunto = "Coleta de Dados do Formulário";

$corpo =" Nome: ".$nome."\n"."cpf: ".$cpf."\n". "endereço: ".$endereço."\n". "bairro: ".$bairro. "\n". "cidade: ".$cidade. "\n". "cep: ".$cep. "\n". "uf ".$uf. "\n". "data_nascimento: ".$data_nascimento. "\n". "sexo: ".$sexo. "\n". "estado civil: ".$estadocivil. "\n". "email: ".$email. "\n". "website: ".$website. "\n". "telefone: ".$telefone."\n". "celular: ".$celular. "\n". "login: ".$login. "\n". "senha: ".$senha. "\n". "assuntos{}: ".$assuntos{};

$cabeca = "from: ttainara.santos@098gmail.com"."\n"."Relpy-to: ".$email."\n"."X-Mailler:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
} else{
    echo("Houve um erro ao enviar o e-mail!");
}
?>