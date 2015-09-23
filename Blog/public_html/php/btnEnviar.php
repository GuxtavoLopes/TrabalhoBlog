<?php
  // Destinatário
  $para = "gltechlopes@gmail.com";

  // Assunto do e-mail
  $assunto = "Contato do site";

  // Campos do formulário de contato
  $nome = $_POST[`nome`];
  $endereco = $_POST[`endereco`];
  $email = $_POST[`email`];
  $telefone = $_POST[`telefone`];
  $mensagem = $_POST[`descricao`];

  // Monta o corpo da mensagem com os campos
  $corpo = "Nome: $nome <br>Endereco: $endereco <br>";
  $corpo .= "E-mail: $email <br>Telefone: $telefone<br>";
  $corpo .= "Mensagem: $mensagem ";

  // Cabeçalho do e-mail
  $header = "De: $nome <$para> Enviar para: $email ";
  $header .= "Content-Type: text/html; charset=iso-8859-1 ";

  mail($para, $assunto, $corpo, $header);

  $msg = "Sua mensagem foi enviada com sucesso.";

  // Mostra a mensagem acima e redireciona para index.html
  echo "<script>location.href=`contato.html`; alert(`$msg`);</script>";

 ?>