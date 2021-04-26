<html>
    <head>
        <title>Sign Up</title>
        <link href="register.css" rel="stylesheet" />
        <link href="https://fonts.google.com/specimen/Lato?selection.family=Lato:ital,wght@1,300#glyphs" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Lembrete: include arms, head, footer, e outros arquivos .php após tudo pronto -->
    </head>
    <body>
        <div class="cadastro">
        <h1>Cadastro de Usuário</h1>
        </div>
        <form method="post" action="recepcao.php">

        <div class="cadastro2">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nickname aqui..."><br><br>
        </div>

        <div class="cadastro3">
        <label>Email: </label>
        <input type="email" name="email" placeholder="Digite seu email aqui..."><br><br>
        </div>

        <div class="cadastro4">
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Digite sua senha aqui..."><br><br>
        </div>

        <div class="cadastro5">
        <label>Chave: </label>
        <input type="text" name="chave" placeholder="Digite uma palavra chave"><br><br>
        </div>
        <div class="cadastro6">
        <input type="submit" value="Finalizar Cadastro">
        <input type="reset" value="Resetar Cadastro"><br><br>
        </div>
    </body>
</html>