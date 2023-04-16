<?php
    include_once '../routines/connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Nome da Página -->
    <title>Meus Dados - ATEMPORAL</title>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">



    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
        color: gray;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    body{
        height: 100vh;
        width: 100%;

        background-color: transparent;
    }

    main{
        height: auto;
        width: 100%;
    }

    .meus-dados-bg{
        width: 100%;
        height: auto;
    }

    form{
        height: auto;
        width: 100%;

        display: flex;
        justify-content: space-between;
        gap: 40px;
    }

    .foto-usuario{
        width: 26%;
        height: auto;

        overflow: hidden;
    }

    .dados-usuario{
        width: 100%;
        height: auto;

        overflow: hidden;
    }

    img{
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 140px;
        height: 140px;
        object-fit: cover;
        margin-bottom: 10px;
        background-color: white;
    }
</style>
<body>
    <?php
        $stmGetData = $connection->prepare("SELECT*FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
        $stmGetData->bind_param('s',$_SESSION['login']);
        $stmGetData->execute();
        $dadosUsuario = $stmGetData->get_result();

        while($dados = $dadosUsuario->fetch_assoc()){
            $nomeUsuario = $dados['NOME_VENDEDOR'];
            $tipoUsuario = $dados['TIPO_VENDEDOR'];
            $foneUsuario = $dados['FONE_VENDEDOR'];
            $emailUsuario = $dados['EMAIL_VENDEDOR'];
            $cpfUsuario = $dados['CPF_VENDEDOR'];
            $dataCadUsuario = $dados['DTA_CAD_VENDEDOR'];
            $dataNascimentoUsuario = $dados['DTA_NASC_VENDEDOR'];
            $imagemUsuario = $dados['IMAGEM_VENDEDOR'];
        }

        if (empty($imagemUsuario)) {
            $imagemUsuario = '../media/defaultUser.png';
        }
    ?>
    
    <main>
        <div class="meus-dados-bg">
            <form method="POST" action="../routines/alterarDadosVendedor.php" enctype="multipart/form-data">
                <div class="foto-usuario">
                    <label for="alterarFoto">
                        <img src="<?=$imagemUsuario?>?ver=<?=Date('his')?>" alt="Foto de Perfil" name="fotoPerfil">
                    </label>
                    <input type="file" id="alterarFoto" name="alterarFoto" value="">
                </div>

                <div class="dados-usuario">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$nomeUsuario?>" disabled name="novoNome">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?=$emailUsuario?>" disabled name="novoEmail">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$cpfUsuario?>" disabled name="novoCpf">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefone para Contato</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="com DDD" value="<?=$foneUsuario?>" name="novoTelefone" id="telefone" minlength="14" maxlength="14">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" value="<?=$dataNascimentoUsuario?>" disabled name="novoDataNascimento">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Salvar" name="saveBtn">
                </div>
            </form>
        </div>
    </main>
    
</body>
<script>
    const fone = document.getElementsById("telefone");

    fone.addEventListener("keypress", () => {
        const foneValue = fone.value.replace(/[^0-9]/g, "").replace(/^([\d]{2})([\d]{5})?([\d]{4})?/, "($1)$2-$3");
    
        fone.value = foneValue;
    });
</script>
</html>