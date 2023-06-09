<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Relatórios</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<header>
    <h1>Relatórios</h1>
    <img class="logo" src="../img/LOGO%20SPAAL%202%20JPG.jpg" alt="Logo da Empresa">
    <a href="#">
        <button class="lista">
            Aniversariantes
        </button>
    </a>
    <a href="#">
        <button class="lista" style="margin-left: 15px">
            Funcionarios
        </button>
    </a>
</header>

<form class="container__formulario"
      method="post">
    <div class="formulario__campo">
        <label class="campo__etiqueta" for="titulo">Titulo do relatório</label>
        <input name="titulo"
               value=""
               class="campo__escrita"
               required
               placeholder=""
               id='url' />
    </div>

    <div class="formulario__campo">
        <label class="campo__etiqueta" for="sql">Codigo relatório</label>
        <input name="codigo"
               value=""
               class="campo__escrita"
               required
               placeholder="Neste campo, dê o nome do vídeo"
               id='codigocodigo' />
    </div>

    <div class="formulario__campo">
        <label class="campo__etiqueta" for="sql">Arquivo sql</label>
        <input name="sql"
               accept="application/sql"
               type="file"
               class="campo__escrita"
               id='sql' />
    </div>

    <input class="formulario__botao" type="submit" value="Enviar" />
</form>
</body>
</html>