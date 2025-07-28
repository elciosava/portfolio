<?php
// Conexão com o banco
$host = "localhost";
$dbname = "portfolio";
$user = "root";
$pass = "s4va6o841A@";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Busca visitas
    $stmt = $pdo->query("SELECT * FROM visitas ORDER BY data_hora DESC");
    $visitas = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relatório de Visitas</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        .btn-exportar {
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .cabecalho {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: space-around;
            align-items: center;
        }

        .menu {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-around;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        ul {
            list-style: none;
        }
        li{            
            display: inline-block;
            padding: 10px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="cabecalho">
        <div class="relatorio">
            <h2>Relatório de Visitas</h2>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="grafico_visitas.php" target="_blank">📊 Grafico por Minuto</a></li>
                    <li><a href="grafico_visitas_hora.php" target="_blank">💹 Grafico por Hora</a></li>
                </ul>
            </nav>
        </div>
        <div class="exportar">
            <a class="btn-exportar" href="exportar.php" target="_blank">📥 Exportar CSV</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>IP</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
                <th>Data/Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visitas as $v): ?>
                <tr>
                    <td><?= $v['id'] ?></td>
                    <td><?= $v['ip'] ?></td>
                    <td><?= $v['cidade'] ?></td>
                    <td><?= $v['estado'] ?></td>
                    <td><?= $v['pais'] ?></td>
                    <td><?= $v['data_hora'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>