<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header("Content-type: text/html; charset=utf-8");
require 'fpdf/fpdf.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$nome = "NOME DO SÓCIO";
$getnome = strtoupper($_POST["nomeSocio"]);
$endereco = "ENDEREÇO";
$getendereco = $_POST["endereco"]."\nCEP: ".$_POST["cep"];
$contatos = "CONTATOS";
$getcontatos = "FIXO: ".$_POST["fixo"]." || CELULAR: ".$_POST["celular"]." || WHATSAPP: ".$_POST["whatsapp"];
$redes = "REDES SOCIAIS";
$getredes = "E-MAIL: ".$_POST["email"]."\nFACEBOOK: ".$_POST["facebook"];
$dtnascimento = "DATA DE NASCIMENTO DO SÓCIO";
$getdtnascimento = $_POST["nascimento"];
$rgcpf = "RG E CPF";
$getrgcpf = "RG: ".$_POST["rg"]."\nCPF: ".$_POST["cpf"];
$associado = "TIPO DE ASSOCIADO";
$getassociado = isset($_POST["radio"]) ? $getassociado = $_POST["radio"] : $getassociado = "Não especificado";
$trabalho = "LOCAL DE TRABALHO";
$gettrabalho = $_POST["trabalho"];
$telcomercial = "TELEFONE COMERCIAL";
$gettelcomercial = $_POST["telComercial"];

$dependente = "DADOS DO DEPENDENTE";
$getdependente1 = "NOME: ".$_POST["nomeDep1"]."\nDATA DE NASCIMENTO: ".$_POST["nascimentoDep1"];
$getdependente2 = "NOME: ".$_POST["nomeDep2"]."\nDATA DE NASCIMENTO: ".$_POST["nascimentoDep2"];
$getdependente3 = "NOME: ".$_POST["nomeDep3"]."\nDATA DE NASCIMENTO: ".$_POST["nascimentoDep3"];
$getdependente4 = "NOME: ".$_POST["nomeDep4"]."\nDATA DE NASCIMENTO: ".$_POST["nascimentoDep4"];


class PDF extends FPDF
{
    function Header()
    {
    // Logo
        $this->Image("../assets/img/banner2.png",5,3,25);
    // Arial bold 15
        $this->SetFont('Arial','B',15);
    // Move to the right
        $this->Cell(50);
    // Title
        $this->Cell(100,10,'FICHA DE CADASTRO DE SÓCIO',1,0,'C');
    // Line break
        $this->Ln(15);
    }

    function FieldFormat($label)
    {
    // Arial 12
        $this->SetFont('Helvetica','B',10);
    // Background color
        $this->SetFillColor(200,220,255);
    // Title
        $this->Cell(0,6,"$label",0,1,'L',true);
    // Line break
        $this->Ln(2);
    }

    function FieldFormat2($label)
    {
    // Arial 12
        $this->SetFont('Helvetica','B',10);
    // Background color
        $this->SetFillColor(100,220,255);
    // Title
        $this->Cell(0,6,"$label",1,1,'C',true);
    // Line break
        $this->Ln(2);
    }

    function ChapterBody($formField)
    {

    // Helvetica 12
        $this->SetFont('Helvetica','',10);
    // Output justified text
        $this->MultiCell(0,5,$formField);
    // Line break
        $this->Ln(2);
    // Mention in italics
        $this->SetFont('Helvetica','I');

    }
    function PrintForm($nome, $getnome, $endereco, $getendereco, $contatos, $getcontatos,$redes,$getredes,$dtnascimento,$getdtnascimento,$rgcpf,$getrgcpf,$associado,$getassociado,$trabalho,$gettrabalho,$telcomercial,$gettelcomercial,$dependente,$getdependente1,$getdependente2,$getdependente3,$getdependente4)
    {
        $this->AddPage();
        $this->FieldFormat($nome);
        $this->ChapterBody($getnome);

        $this->FieldFormat($endereco);
        $this->ChapterBody($getendereco);

        $this->FieldFormat($contatos);
        $this->ChapterBody($getcontatos);

        $this->FieldFormat($redes);
        $this->ChapterBody($getredes);

        $this->FieldFormat($dtnascimento);
        $this->ChapterBody($getdtnascimento);

        $this->FieldFormat($rgcpf);
        $this->ChapterBody($getrgcpf);

        $this->FieldFormat($associado);
        $this->ChapterBody($getassociado);

        $this->FieldFormat($trabalho);
        $this->ChapterBody($gettrabalho);

        $this->FieldFormat($telcomercial);
        $this->ChapterBody($gettelcomercial);

        $this->FieldFormat2('DEPENDENTES');

        $this->FieldFormat($dependente);
        $this->ChapterBody(strtoupper($getdependente1));

        $this->FieldFormat($dependente);
        $this->ChapterBody(strtoupper($getdependente2));

        $this->FieldFormat($dependente);
        $this->ChapterBody(strtoupper($getdependente3));

        $this->FieldFormat($dependente);
        $this->ChapterBody(strtoupper($getdependente4));


    }

    function Footer()
    {
    // Position at 1.5 cm from bottom
        $this->SetY(-15);
    // Arial italic 8
        $this->SetFont('Arial','I',10);
    // Page number
        $this->Line(66,283,140,283);
        $this->SetLineWidth(10);

        $this->Cell(0,10,strtoupper($_POST["nomeSocio"])." - Associado",0,0,'C');


        $this->SetY(-35);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,"*Declaro ter conhecimento, bem como seguir as diretrizes do estatuto do clube e da diretoria.",0,0,'L');

    }
}


$pdf = new PDF();
$title = 'FICHA DE CADASTRO DE SÓCIO';
$pdf->SetTitle($title);
$pdf->PrintForm($nome,$getnome,$endereco,$getendereco,$contatos,$getcontatos,$redes,$getredes,$dtnascimento,$getdtnascimento,$rgcpf,$getrgcpf,$associado,$getassociado,$trabalho,$gettrabalho,$telcomercial,$gettelcomercial,$dependente,$getdependente1,$getdependente2,$getdependente3,$getdependente4);

$pdf->Output();


//CONFIGURAÇÃO DO PHPMAILER PARA UOLHOST. USANDO VERSAO 6.2X. VERSAO ANTERIOR NAO FUNCIONA!

/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
$enviaFormularioParaNome = 'Secretaria';
$enviaFormularioParaEmail = 'clubesargentoscuiaba@gmail.com';
$caixaPostalServidorNome = 'Ficha cadastro: '.$getnome;
$caixaPostalServidorEmail = 'comercial@gremioantoniojoao.com.br';
$caixaPostalServidorSenha = '36422621';
/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/

/* abaixo as variaveis principais, que devem conter em seu formulario*/

$assunto  ='Ficha cadastro de: '.$getnome;
$mensagem = 'Envio automático gerado formulário do site https://gremioantoniojoao.com.br';

$mensagemConcatenada = 'Formulário gerado via website'.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>';
$mensagemConcatenada .= 'Nome: '.$getnome.'<br/>';
$mensagemConcatenada .= 'Contato: '.$getcontatos.'<br/>';
$mensagemConcatenada .= 'Assunto: '.$assunto.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>';
$mensagemConcatenada .= 'Mensagem: "'.$mensagem.'"<br/>';

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
$mail->Port  = 587;
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = utf8_decode($assunto);
$mail->Body  = utf8_decode($mensagemConcatenada);

$pdfdoc = $pdf->Output('', 'S');
$mail->addStringAttachment($pdfdoc, $getnome.'.pdf');

$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));


if(!$mail->Send()){
    $mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
}else{
    $mensagemRetorno = 'Formulário enviado com sucesso!';

}

session_destroy();//Retirar as informações do cache
?>