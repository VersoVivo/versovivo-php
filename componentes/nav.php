<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="imagens/logo.svg" alt="Logo: VersoVivo" title="Logo: VersoVivo"
                        class="d-inline-block align-text-top img-fluid">
                </a>

                <!-- Botão do menu hamburguer -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <!-- Fim do botão do menu hamburguer -->

                <!-- Navbar colapsável -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="batalhas.php">Batalhas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mc.php">Mc's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Acesso</a>
                        </li>
                    </ul>
                    <!-- Fim navbar colapsável -->


                    <!-- Barra de Pesquisa -->
                    <form class="d-flex me-3">
        <div class="search">
            <div class="search-box">
                <div class="search-field">
                    <input placeholder="Pesquisar Batalha..." class="input" type="text">
                    <div class="search-box-icon">
                    <button class="btn-icon-content">
                    <i class="fas fa-search" style="color: white; width: 30%;"></i> <!-- Ícone de lupa do Font Awesome -->
                    </button>
                    </div>
        </div>
            </div>
                </div>
                    </form>
                    <!-- Fim barra de Pesquisa -->



                    <!-- Ícone do usuário -->
                    <div class="navbar-text" style="position: relative;">
                        <span id="abrirConfig">
                            <img src="imagens/iconeUser.svg" alt="Ícone: Usuário" class="rounded-circle" style="cursor: pointer; width: 40px;">
                        </span>
                    <!-- Fim ícone do usuário -->


                    <!-- Botão para abrir o modal -->
                    <!--<button onclick="mostrarModal()">Minha Conta</button>-->

                     <!-- Modal de informações do usuário --> 
                     <div id="infoUsuario" style="display:none; position:fixed; top: 50px; right: 10px; width: 300px; height: 400px; background-color: #fff; border: 1px solid #ccc; border-radius: 20px; padding: 20px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);">
                     <h4>Minha Conta</h4>
                     <ul style="list-style: none; padding: 0;">
                     <li><strong>Nome:</strong></li>
                     <li><strong>Email:</strong></li>
                     <li><strong>Último login:</strong></li>
                     </ul>

                     <hr style="margin-top: 20%;">

                     <h4 style="margin-top: 8%;">Configurações</h4>
                     <ul style="list-style: none; padding: 0;">
                     <li><a href="#" onclick="editarPerfil()">Editar perfil</a></li>
                     <li><a href="#" onclick="alterarSenha()">Alterar senha</a></li>
                     <li><a href="#" onclick="sair()">Sair</a></li>
                     </ul>
                    <!-- Fim do modal de informações do usuário --> 


                     <!-- Botão para fechar o modal -->
                     <button onclick="fecharModal()" style="border-radius: 6px; width: 50%; margin-top: 6%;">Fechar</button>
                     </div>


                    <!-- Funcionamento geral -->
                    <script>
                    // Função para exibir o modal
                       function mostrarModal() {
                       document.getElementById("infoUsuario").style.display = "block";
                      }

                    // Função para fechar o modal
                       function fecharModal() {
                       document.getElementById("infoUsuario").style.display = "none";
                      }

                    // Lógica para editar o perfil
                       function editarPerfil() {
                       window.location.href = "editar_perfil.html"; // Redireciona para a página de edição
                      }

                    // Lógica para alterar a senha
                       function alterarSenha() {
                       const novaSenha = prompt("Digite sua nova senha:");
                       if (novaSenha) {
                       alert("Senha alterada com sucesso!"); // Mostra um alerta de confirmação
                    // Aqui, você pode adicionar a lógica para atualizar a senha no backend
                       }
                    }

                   // Lógica para sair
                       function sair() {
                       alert("Você saiu da conta."); // Mensagem de confirmação
                       window.location.reload(); // Recarrega a página como simulação de logout
                    }
                </script>
                <!-- Fim do funcionamento geral -->


                        <!-- Script para abrir a tela -->
                        <script>
                            document.getElementById('abrirConfig').addEventListener('click', function () {
                                var infoUsuario = document.getElementById('infoUsuario');
                                if (infoUsuario.style.display === 'none') {
                                    infoUsuario.style.display = 'block';
                                } else {
                                    infoUsuario.style.display = 'none';
                                }
                            });
                        </script>
                        <!-- Fim do script para abrir a tela -->

                    </div>
                </div>
            </div>
        </nav>
</body>
</html>