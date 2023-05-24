<?php
session_start();
include_once("conectar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listagem</title>
        <link rel="stylesheet" href="listar.css">
    </head>
    <body>
        <h1>Lista de usuários</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Data Nascimento</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Endereco</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                $result_usuarios = "SELECT * FROM usuarios";
                $resultado_usuarios = mysqli_query($conexão, $result_usuarios);
                while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)) {
                    echo "<tr>";
                    echo "<td>" . $row_usuarios['id'] . "</td>"; 
                    echo "<td>" . $row_usuarios['nome'] . "</td>";
                    echo "<td>" . $row_usuarios['email'] . "</td>";
                    echo "<td>" . $row_usuarios['senha'] . "</td>";
                    echo "<td>" . $row_usuarios['telefone'] . "</td>";
                    echo "<td>" . $row_usuarios['cpf'] . "</td>";
                    echo "<td>" . $row_usuarios['genero'] . "</td>";
                    echo "<td>" . $row_usuarios['data_nasc'] . "</td>";
                    echo "<td>" . $row_usuarios['cidade'] . "</td>";
                    echo "<td>" . $row_usuarios['estado'] . "</td>";
                    echo "<td>" . $row_usuarios['endereco'] . "</td>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>