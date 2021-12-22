<?php
require 'conexao.php';
require 'src/Item.php';
$item = new Item($conn);
$itens = $item->exibirTodos();

?>
<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border: 1px solid #dddddd;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .tdButton {
            border: 1px solid #dddddd;
            width: 10px;
        }
    </style>
</head>

<body>
    <form method="post" action="src/insert.php">
        <input type="hidden" name="id">
        Ação:<input type="text" name="afazer" class="justfield">

        <input type="submit" value="Adicionar">
    </form>
    <br>

    <table>
        <tr>
            <th>Listas</th>
        </tr>
        <?php

        foreach ($itens as $item) {
        ?>
            <tr>

                <td>
                    <li> <?php echo $item['conteudo'] ?> </li>
                </td>
                <td class="tdButton"><a href="src/delete.php?id=<?php echo $item['id'] ?>">X</a></td>
            </tr>
        <?php } ?>
        </tr>
    </table>

</body>

</html>