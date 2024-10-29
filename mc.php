<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta Tags relacionado a SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Participe do site de batalhas de rima e freestyle, onde você pode assistir às melhores competições de rap ao vivo, acompanhar o calendário de eventos e ficar por dentro das próximas batalhas. Venha fazer parte da cultura hip hop!">
    <meta name="keywords" content="Batalha de rima, Rap, Freestyle, Cultura hip-hop, MCs, Competição de rap, Rimas criativas, Letras de rap, Eventos de freestyle, Comunidade de rappers, Beatmaking, Hip-hop nacional, Colaborações, História do rap, Vídeos de batalhas, batalha de rima, batalhas de rap, freestyle, MCs, rima improvisada, eventos de rap, batalhas de MCs, batalha de freestyle, batalhas de rima online, batalhas de rima ao vivo, rap improvisado, rimas de improviso, rap ao vivo, competições de rap, rap battles, rimas online, assistir batalhas de rima, próximos eventos de rap, calendário de batalhas, eventos de rima, batalhas de rima 2024, plataforma de rap, assistir rap online, agenda de batalhas de MCs, comunidade de rap, cultura hip hop, criar conta MC, site de batalhas de rima, eventos de hip hop, batalha de rima Brasil, competições de freestyle, próximos shows de rap, rap nacional, MCs brasileiros, rima de improviso ao vivo, batalhas de rima famosas, calendário de rimas, MCs de freestyle, eventos de hip hop online, shows de rap">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="language" content="pt-BR">
    <meta name="author" content="Verso Vivo - Batalhas de Rima e Cultura Rap">
    <meta name="publisher" content="Verso Vivo - Batalhas de Rima e Cultura Rap">
    <!-- Fim Meta Tags relacionado a SEO -->

  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos/mc.css">
  
  <title>Página dos Mc's</title>
</head>
<body>

  <!-- Começo do cabeçalho -->
  <header>
    <!-- Inicio da Barra de Nav -->
     <?php include("componentes/nav.php") ?>
    <!-- Fim da Barra de Nav -->
  </header>
  <!-- Fim do cabeçalho -->

  <!-- Todos os mc's -->
  <p class="nome">Todos os Mc's</p>
  <div class="tudo">
    <div class="loc1">
      <img src="imagens/apolo.jpg" alt="img1" title="imagem1" style="width: 16%; border-radius: 20px;">
      <p class="titulo1"><b>Apolo</b></p>
      <p class="subtitulo1"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i>apolomc@gmail.com</b></p>
      <p class="data1"><b>Vulgo</b></p>
    </div>
    <hr class="linha_horizontal">

    <div class="loc2">
      <img src="imagens/apolo.jpg" alt="img2" title="imagem2" style="width: 16%; border-radius: 20px;">
      <p class="titulo2"><b>Apolo</b></p>
      <p class="subtitulo2"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i>apolomc@gmail.com</b></p>
      <p class="data2"><b>Vulgo</b></p>
    </div>
    <hr class="linha_horizontal">

    <div class="loc3">
      <img src="imagens/apolo.jpg" alt="img3" title="imagem3" style="width: 16%; border-radius: 20px;">
      <p class="titulo3"><b>Apolo</b></p>
      <p class="subtitulo3"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i>apolomc@gmail.com</b></p>
      <p class="data3"><b>Vulgo</b></p>
    </div>
    <hr class="linha_horizontal">

    <div class="loc4">
      <img src="imagens/apolo.jpg" alt="img4" title="imagem4" style="width: 16%; border-radius: 20px;">
      <p class="titulo4"><b>Apolo</b></p>
      <p class="subtitulo4"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i>apolomc@gmail.com</b></p>
      <p class="data4"><b>Vulgo</b></p>
    </div>
    <hr class="linha_horizontal">

    <div class="loc5">
      <img src="imagens/apolo.jpg" alt="img5" title="imagem5" style="width: 16%; border-radius: 20px;">
      <p class="titulo5"><b>Apolo</b></p>
      <p class="subtitulo5"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i>apolomc@gmail.com</b></p>
      <p class="data5"><b>Vulgo</b></p>
    </div>
    <hr class="linha_horizontal">

    <div class="loc6">
      <img src="imagens/apolo.jpg" alt="img6" title="imagem6" style="width: 16%; border-radius: 20px;">
      <p class="titulo6"><b>Apolo</b></p>
      <p class="subtitulo6"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i>apolomc@gmail.com</b></p>
      <p class="data6"><b>Vulgo</b></p>
    </div>
    <hr class="linha_horizontal">
  </div>
  <!-- Fim de todos os mc's -->

  <!-- Footer -->
   <?php include("componentes/footer.php") ?>
  <!-- Fim do footer -->

  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Funcionamento do menu burguer -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const menuToggle = document.getElementById("menuToggle");
      const navbarNav = document.getElementById("navbarNav");

      menuToggle.addEventListener("click", function() {
        navbarNav.classList.toggle("show");
      });
    });
  </script>
   <!-- Fim do funcionamento do menu burguer -->
</body>
</html>