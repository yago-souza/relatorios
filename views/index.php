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
    <a href="./novo-relatorio.php">
        <button class="lista">
            Novo Relatório
        </button>
    </a>
    <a href="#">
        <button class="lista" style="margin-left: 15px">
            Funcionarios
        </button>
    </a>
</header>

<table id="relatorios-tabela">
    <tbody>
    <tr onclick="location.href='#';">
        <td>001</td>
        <td>Relatório 1</td>
        <td>Relatório de vendas mensais</td>
    </tr>
    <tr onclick="location.href='#';">
        <td>002</td>
        <td>Relatório 2</td>
        <td>Relatório de despesas trimestrais</td>
    </tr>
    <tr onclick="location.href='#';">
        <td>003</td>
        <td>Relatório 3</td>
        <td>Relatório de análise de mercado</td>
    </tr>
    <tr onclick="location.href='#';">
        <td>004</td>
        <td>Relatório 4</td>
        <td>Relatório de satisfação do cliente</td>
    </tr>
    </tbody>
</table>
</body>
</html>