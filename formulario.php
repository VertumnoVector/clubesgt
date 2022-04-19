<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GBERAJ - Formulário</title>
  <link rel="shortcut icon" href="assets/img/favicon.ico" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/callHeadFooter.js"> </script>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/formulario.css" rel="stylesheet">
  <script src="scripts/js/vanilla-masker.min.js"></script>
</head>
<header id="header"></header>
<body>
<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="h-auto d-inline-block" src="assets/img/slide/1a.jpg" alt="First slide">
        <div class="carousel-caption text-start">
          <span class="mb-0 h1 p-shadow">
            <img src="assets/img/banner.png" width="60" height="60" class="d-inline-block align-top" alt="GBERAJ">&nbsp;GBERAJ
          </span>
          <p class="p-shadow">Grêmio Beneficente, Esportivo e Recreativo Antônio João</p>
          <b><p class="p-shadow">Mensalidades<br>Militar e familia: R$ 60,00<br>Militar individual: R$ 40,00<br>Civil e familia: R$ 75,00<br>Civil individual: R$ 75,00</p></b>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container marketing">
  <blockquote class="blockquote text-center">
    <h2 class="display-1">Ficha cadastral de sócio</h2>
  </blockquote>
  <hr class="featurette-divider">
  <form accept-charset="utf-8" class="row g-3 needs-validation" onsubmit="return confirm('Enviar cadastro para o clube?\nDepois disso, basta ir na secretaria com o documento pessoal em mãos e pagar a mensalidade')";  action="scripts/pdfgen.php" method="post" novalidate>
      <div class="form-group">
        <label for="formGroupExampleInput">Nome do sócio</label>
        <input type="text" name="nomeSocio" class="form-control" id="nomeSocio" placeholder="Ex.: Antonio João" required>
        <div class="invalid-feedback">
           Inserir um nome
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-8">
          <label for="formGroupExampleInput">Endereço</label>
          <input type="text" name="endereco" class="form-control" id="formGroupExampleInput" placeholder="Ex.: Av Miguel Sutil, 9999, vila militar" required>
          <div class="invalid-feedback">
           Inserir um endereço residencial
          </div>
        </div>
        <div class="col-md-4">
          <label for="inputZip">CEP</label>
          <input type="text" name="cep" class="form-control" id="inputZip" placeholder="Ex.: 78040-000" required>
          <div class="invalid-feedback">
           Insira o CEP
        </div>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <label for="formGroupExampleInput">Telefone fixo</label>
          <input type="text" name="fixo" class="form-control" id="telefone" placeholder="Ex.: (065) 0000-0000">
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput">Celular</label>
          <input type="tel" name="celular" class="form-control" id="formGroupExampleInput" placeholder="Ex.: (065) 12345-6789" required>
          <div class="invalid-feedback">
           Inserir um numero de celular
        </div>
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput">Whatsapp</label>
          <input type="tel" name="whatsapp" class="form-control" id="formGroupExampleInput" placeholder="Ex.: (065) 12345-6789" required>
          <div class="invalid-feedback">
           Pode ser o mesmo numero do celular
        </div>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4">E-mail</label>
          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Ex.: nome@servidor.com" required>
          <div class="invalid-feedback">
           Inserir um email valido
        </div>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4">Facebook</label>
          <input type="text" name="facebook" class="form-control" id="inputEmail4" placeholder="Ex.: @antoniojoao">
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <label for="formGroupExampleInput">Data de nascimento</label>
          <input type="text" name="nascimento" class="form-control" id="formGroupExampleInput" placeholder="dd/mm/aaaa" required>
          <div class="invalid-feedback">
           Inserir uma data valida
        </div>
        </div>
      </div>
      <div class="row g-3">
      <div class="col-md-6">
        <label for="formGroupExampleInput">RG:</label>
        <input type="text" name="rg" class="form-control" id="formGroupExampleInput" placeholder="Ex.: 123456789-0" required>
        <div class="invalid-feedback">
           Inserir o numero do seu RG
        </div>
      </div>
      <div class="col-md-6">
        <label for="formGroupExampleInput">CPF:</label>
        <input type="text" name="cpf" class="form-control" id="formGroupExampleInput" placeholder="Ex.: 123.456.789-01" required>
        <div class="invalid-feedback">
           Inserir seu CPF
        </div>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-md-3">
        <input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="Militar ativa"<?php if (isset($_POST["radio"]) && $_POST["radio"] == "Militar ativa"): ?>checked='checked'<?php endif; ?>/>
        <label class="form-check-label" for="gridRadios1">
          Militar ativa
        </label>
      </div>
      <div class="col-md-3">
        <input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="Militar reserva" <?php if (isset($_POST["radio"]) && $_POST["radio"] == "Militar reserva"): ?>checked='checked'<?php endif; ?>>
        <label class="form-check-label" for="gridRadios1">
        Militar Reserva
      </label>
    </div>
    <div class="col-md-3">
      <input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="Civil" <?php if (isset($_POST["radio"]) && $_POST["radio"] == "Civil"): ?>checked='checked'<?php endif; ?>>
      <label class="form-check-label" for="gridRadios1">
      Civil
    </label>
    </div>
    <div class="col-md-2">
      <input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="FAIPE" <?php if (isset($_POST["radio"]) && $_POST["radio"] == "FAIPE"): ?>checked='checked'<?php endif; ?>>
      <label class="form-check-label" for="gridRadios1">
      Convênio FAIPE
    </label>
    </div>
    </div>

    <div class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4">Local de trabalho:</label>
        <input type="text" name="trabalho"class="form-control" id="inputEmail4" placeholder="Ex.: 9º BEC" required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4">Telefone comercial</label>
        <input type="tel" name="telComercial" class="form-control" id="inputEmail4" placeholder="Ex.: (065) 12345-6789" required>
      </div>
    </div>

    <hr class="featurette-divider-less">
    <p class="fs-6">Dependentes:<i> Somente cônjuge e filhos menores de 18 anos ou até 24 anos quando estudante e sem renda própria, comprovado.</i></p>

    <div class="row g-3">
      <div class="col-md-8">
        <label for="inputEmail4">Nome completo 1º Dependente</label>
        <input type="text" name="nomeDep1" class="form-control" id="inputEmail4" placeholder="Nome completo do 1º dependente">
      </div>
      <div class="col-md-4">
        <label for="inputEmail4">Data de nascimento</label>
        <input type="text" name="nascimentoDep1" class="form-control" id="inputEmail4" placeholder="Ex.: dd/mm/aaaa">
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-8">
        <label for="inputEmail4">Nome completo 2º Dependente</label>
        <input type="text" name="nomeDep2" class="form-control" id="inputEmail4" placeholder="Nome completo do 2º dependente">
      </div>
      <div class="col-md-4">
        <label for="inputEmail4">Data de nascimento</label>
        <input type="text" name="nascimentoDep2" class="form-control" id="inputEmail4" placeholder="Ex.: dd/mm/aaaa">
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-8">
        <label for="inputEmail4">Nome completo 3º Dependente</label>
        <input type="text" name="nomeDep3" class="form-control" id="inputEmail4" placeholder="Nome completo do 3º dependente">
      </div>
      <div class="col-md-4">
        <label for="inputEmail4">Data de nascimento</label>
        <input type="text" name="nascimentoDep3" class="form-control" id="inputEmail4" placeholder="Ex.: dd/mm/aaaa">
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-8">
        <label for="inputEmail4">Nome completo 4º Dependente</label>
        <input type="text" name="nomeDep4" class="form-control" id="inputEmail4" placeholder="Nome completo do 4º dependente">
      </div>
      <div class="col-md-4">
        <label for="inputEmail4">Data de nascimento</label>
        <input type="text" name="nascimentoDep4" class="form-control" id="inputEmail4" placeholder="Ex.: dd/mm/aaaa">
      </div>
    </div>
    <p class="lh-sm"><br>*Declaro ter conhecimento, bem como seguir as diretrizes do <a href="assets/docs/estatuto.pdf" target="_blank">estatuto do clube</a> e da diretoria.</p>
    <p class="lh-sm">*Anexar cópia de documento pessoal com foto, do titular e cópia de documento que comprove a condição de dependente.</p>
    <p class="lh-sm">*Anexar documento que comprove vínculo com FAIPE(em caso de convênio) contendo previsão de conclusão de curso.</p>

    <hr class="featurette-divider-less">

    <div class="d-flex justify-content-center">
      <div>
        <button class="btn btn-primary" type="submit" name="submit">Enviar formulário</button>
      </div>
    </div>
    </div>
  </form>
</div>
<hr class="featurette-divider">
<!-- Modal -->
<div class="modal fade" id="agendaModal" tabindex="-1" aria-labelledby="agendaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agendaModalLabel">Agenda de reservas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex p-2 row">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FCampo_Grande&showTitle=0&showDate=1&showPrint=0&showTabs=0&showCalendars=0&showNav=1&src=bmlqNDloM291NWc4MWE4OWltNDJkZjBjYW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23D50000" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        <center><br><div class="col-md-5">
          <button type="button" class="btn btn-sm btn-primary" onclick="window.location.href='https://api.whatsapp.com/send?phone=556592846999&text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20uma%20reserva';">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
            Reservar
          </button>
        </div></center>
       
      </div>
    </div>
  </div>
</div>

<!--fim do modal--> 
</main>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scripts/js/mask.js"></script>
</body>
<footer id="footer" class="footer text-center text-white" style="background-color:#00a652;"></footer>
</html>
