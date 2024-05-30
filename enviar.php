<?php
$to = "alicenregina.nobrega@gmail.com"

$email = $_POST["email"];

$subj = ["Contato do Site"];

$mensagem = $POST["mensagem"]." <p>Enviado por: ".$_POST["nome"]." Assunto: ".$_POST["assunto"]. "</p>
";

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'De: '. $email . "\r\n" .
           'Responder para: '. $email . "\r\n"
           'X-Mailer: PHP/' . phpversion();

$status = mail($to, $subj, $mensagem, $headers);

if($status=true){
    print "<script>alert('Enviou com sucesso!');</script>";
    print "<script>location.href='index.php';</script>";
}
else{
    print "<script>alert('Não foi possível enviar');</script>";
    print "<script>location.href='index.php';</script>";
}
?>