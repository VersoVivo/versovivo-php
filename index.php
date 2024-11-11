<?php require_once("paistropical.php") ?>

<!-- Script para listar as batalhas -->
<?php
//Query para as consultas das batalhas (Trocar pela query correta)
$listarBatalhas = "SELECT * FROM eventos LIMIT 3";

$batalhas = mysqli_query($conecta_versovivo, $listarBatalhas);

//Array com as informações das caixas de batalhas
$caixaBatalhas = mysqli_fetch_assoc($batalhas);

//Formatação da data e hora
$dataHoraFormatada = date("d/m H:i", strtotime($caixaBatalhas["data_hora_evento"]));
?>

<!-- Script para listar os MCs -->
<?php
$listarMcs = "SELECT * FROM usuarios WHERE status_conta = 1 LIMIT 6";

$mcs = mysqli_query($conecta_versovivo, $listarMcs);

$caixasMcs = mysqli_fetch_assoc($mcs);
?>


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

    <!-- Favicon, link do bootstrap e link do CSS -->
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/index.css">

    <!-- CSS - Mapa Leafletjs -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">

    <!-- JS - Mapa Leafletjs -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <title>VersoVivo</title>
</head>

<body>

    <!-- Inicio Cabeçalho -->
    <header>
        <!-- Inicio Barra de nav -->
        <?php include("componentes/nav.php") ?>
        <!-- Fim Barra de nav -->


        <!-- Banner de fundo dos Mc's -->
        <div class="banner">
            <img src="imagens/fundo_mc.jpg.jpeg" alt="Banner da página principal" title="Seja Bem-vindo(a)">
            <p class="mais_eventos" style="font-family:sans-serif;">Batalhas em Chamas</p>
            <p class="paragrafo" style="font-family: cursive;">VersoVivo na pista! Não fica de fora, cola nos
                <br>
                próximos duelos e solta a rima que vai virar hit!
            </p>
        </div>
        <!-- Fim do banner de fundo dos Mc's -->
    </header>
    <!-- Fim Cabeçalho -->


    <!-- Batalhas -->
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Fim Batalhas -->

    <br><br>


<div class="tudo">
    
        <!--Localização das batalhas-->
        <?php do { ?>
    
            <div class="loc1">
                <div class="img1">
                    <img src="imagens/bd_versovivo/<?php echo ($caixaBatalhas['imagem1_thumb']); ?>" alt="<?php echo ($caixaBatalhas["titulo_eventos"]); ?>" title="<?php echo ($caixaBatalhas["titulo_eventos"]); ?>" style="width: 20%; border-radius: 20px;">
                    <p class="titulo1"><b><?php echo ($caixaBatalhas["titulo_eventos"]); ?></b></p>
                    <p class="subtitulo1"><b><i class="fas fa-map-marker-alt" style="color: #BF4410;"></i> <?php echo ($caixaBatalhas["endereco"]); ?>, <?php echo ($caixaBatalhas["bairro"]); ?></b></p>
                    <p class="data1"><b><?php echo ($dataHoraFormatada); ?></b></p>
                </div>
            </div>
            <hr class="linha_horizontal">
    
        <?php } while ($caixaBatalhas = mysqli_fetch_assoc($batalhas)); ?>
        <!--Fim de localização das batalhas-->
</div>


    <br>


    <!--Botão de ver mais-->
    <div class="button1">
        <button class="dropdown-title" onclick="window.location.href='batalhas.php'" style="border: 2px solid rgb(255, 255, 255); border-radius: 6px; display: flex; align-items: center; width: 110px; margin-left: 63%; height: 40px; background-color: transparent; cursor: pointer;">
            <b style="margin-left: 10%; white-space: nowrap; color: #ffffff; font-size: 13px;">Ver tudo</b>
            <i class="fas fa-chevron-down" style="margin-left: 20px; color: #BF4410;"></i>
        </button>
    </div>
    <!--Fim do botão de ver mais-->

    <br><br><br><br><br><br>

    <!--Fundo dos Mc's-->
    <div class="banner">
        <img src="imagens/fundo_rapper.jpeg" alt="Banner dos MC's" title="Banner dos MC's" style="width: 140%; margin-left: -40%; height: 800px; filter: brightness(50%);">
        <p class="mais_eventos" style="margin-top: -600px; margin-left: 60px; filter: brightness(100%);">Principais MC's</p>
    </div>
    <!--Fim do fundo dos Mc's-->


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--Imagens dos MC's-->
    <div class="blocos" style="margin-left: 50%; margin-top: -26%; position: relative; position: absolute;">
        <div class="container">
            <div class="linha" style="margin-left: -187%;">

                <div class="bloco1" style="margin-right: 50px;"><img src="imagens/<?php echo ($mcs['imagem1_thumb']); ?>" alt="Imagem 1"><p class="nome1">Vulgo</p></div>

                <div class="bloco2" style="margin-right: 50px;"><img src="imagens/<?php echo ($mcs['imagem1_thumb']); ?>" alt="Imagem 2"><p class="nome2">Vulgo</p></div>

                <div class="bloco3"><img src="imagens/<?php echo ($mcs['imagem1_thumb']); ?>" alt="Imagem 3"><p class="nome3">Vulgo</p></div>

            </div>
            
            <div class="linha" style="margin-left: -187%;">
                
                <div class="bloco4" style="margin-right: 50px;"><img src="imagens/<?php echo ($mcs['imagem1_thumb']); ?>" alt="Imagem 4"><p class="nome3">Vulgo</p></div>

                <div class="bloco5" style="margin-right: 50px;"><img src="imagens/<?php echo ($mcs['imagem1_thumb']); ?>" alt="Imagem 5"><p class="nome4">Vulgo</p></div>

                <div class="bloco6"><img src="imagens/<?php echo ($mcs['imagem1_thumb']); ?>" alt="Imagem 6"><p class="nome6">Vulgo</p></div>

            </div>
        </div>
    </div>
    <!--Fim das imagens dos MC's-->

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>

    <!--Botão de ver mais-->
    <div class="button2">
        <button class="dropdown-title" onclick="window.location.href='mc.php'" style="border: 2px solid rgb(255, 255, 255); border-radius: 6px; display: flex; align-items: center; width: 110px; margin-left: 75%; height: 40px; background-color: transparent; cursor: pointer; margin-top: 8%;">
            <b style="margin-left: 10%; white-space: nowrap; color: #BF4410; font-size: 13px;">Ver tudo</b>
            <i class="fas fa-chevron-down" style="margin-left: 20px; color: #BF4410;"></i>
        </button>
    </div>
    <!--Fim do botão de ver mais-->


    <!-- Inicio Rodapé -->
     <?php include("componentes/footer.php"); ?>
    <!-- Fim Rodapé -->


    <!-- jQuery versão 3.6.1 com correção de segurança -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>

    <!-- Popper.js versão 1.16.0 para manipulação de pop-ups e tooltips em Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Bootstrap versão 4.4.1 para funcionalidades principais e visuais do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Lightbox2 para visualização de imagens em um modal estilizado -->
    <script src="lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>

    <!-- Script personalizado (index.js) para funcionalidades específicas da página -->
    <script src="scripts/index.js"></script>

    <!-- jQuery versão 3.3.1 para compatibilidade com Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Popper.js versão 1.14.7, versão alternativa para Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Bootstrap versão 4.3.1 para funcionalidades e estilos do framework -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- jQuery versão 3.6.0 para manipulação de DOM e compatibilidade geral -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap versão 4.5.2 com dependência popper.js e compatibilidade adicional para funcionalidades avançadas -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap versão 5.3.3 com funcionalidades de bundle para versões mais recentes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    mysqli_free_result($batalhas);
    mysqli_free_result($mcs);

    mysqli_close($conecta_versovivo);
    ?>
</body>

</html>