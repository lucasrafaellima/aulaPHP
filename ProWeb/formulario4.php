<!DOCTYPE html>
<html>
    <head>
        <title>Formulario 4</title>
        <meta charset="utf-8">
        <meta name="author" content="Lucas Lima">
        <meta name="Description" content="pagina pra integrar banco de dados">
        <meta name="keyword" content="html5 com db">
        <style>

            .total {
                color: white;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0,0,0,0.8);
                padding: 15px;
                border-radius: 15px;
                margin-top: 100px;
                width: 20%;
            }

            legend {
                font-size: 25px;
                border: 1px solid #338c22;
                padding: 10px;
                background: #338c22;
                border-radius: 8px;
                text-align: center;
            }

            form {
                border: 3px solid #338c22;
                border-radius: 12px;
                /*padding: 10px;*/
            }


            .inputBox {
                position: relative;
                text-align: left;
                margin-left: 20px;
            }

            .inputUser {
                padding: 5px;
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                font-size: 15px;
                width: 90%;
            }
            
            ::placeholder {
                color: white;
            }

            .gener {
                position: relative;
                text-align: left;
                margin-left: 20px;
            }

            .genero {
                display: inline-block;
            }

            .resposta {
                padding: 5px;
                padding-left: 40%;
                padding-right: 40%;
                margin-bottom: 10px;
                margin-left: 10px;
                background: #338c22;
                border: 1px solid #338c22;
                border-radius: 10px;
                color: white;
            }

            .fornecedor {
                margin-left: 20px;
            }

            .serie {
                width: 60%;
                border: 1px solid #338c22;
                border-radius: 10px;
                background-color: rgba(0,0,0,0.4);
                color: white;
            }

            .data {
                border: 1px solid #338c22;
                border-radius: 10px;
                background-color: rgba(0,0,0,0.4);
                color: white;
            }


        </style>
    </head>
    <body>
        <div class="total">
            <form method="POST" action="teste4.php">
                <legend>Cadastro de fornecedores</legend>
                <div class="inputBox">
                    <label class="labelInput">Código do fornecedor: </label>
                    <input type="text" name="codigo" class="inputUser" placeholder="" required><br><br>
                    <label class="labelInput">Nome: </label>
                    <input type="text" name="nome" class="inputUser" placeholder="nome do fornecedor" required><br><br>
                    <label class="labelInput">CNPJ: </label>
                    <input type="text" name="cnpj" class="inputUser" placeholder="" required><br><br>
                    <label class="labelInput">Email: </label>
                    <input type="email" name="email" class="inputUser" placeholder="email do fornecedor" required><br><br>
                    <label class="labelInput">Telefone: </label>
                    <input type="text" name="telefone" class="inputUser" placeholder="digite seu número" required><br><br>
                    <label class="labelInput">Cidade: </label>
                    <input type="text" name="cidade" class="inputUser" placeholder="digite seu número" required><br><br>
                    <div class="pais">
                        <label>País: </label><br><br>
                        <select name="pais" class="serie">
                            <option value="Brasil">Brasil</option required>
                            <option value="Espanha">Espanha</option required>
                            <option value="Japao">Japão</option required>
                            <option value="Portugal">Portugal</option required>
                            <option value="China">China</option required>
                            <option value="India">India</option required>
                            <option value="EUA">EUA</option required>
                            <option value="Argentina">Argentina</option required>
                            <option value="Italia">Itália</option required>
                        </select>
                    </div><br>
                    <div class="fantasia">
                        <label>Fantasia: </label><br><br>
                        <select name="fantasia" class="serie">
                            <option value="A">A</option>
                            <option value="B">B</option required>
                            <option value="C">C</option required>
                            <option value="D">D</option required>
                            <option value="E">E</option required>
                            <option value="F">F</option required>
                            <option value="G">G</option required>
                            <option value="H">H</option required>
                            <option value="I">I</option required>
                        </select>
                    </div><br>
                </div>
                <div class="fornecedor">
                    <label for="fornecedor"><b>Data: </b></label>
                    <input type="date" name="data_fornecedor" class="data" required><br><br>
                </div> 
                <div class="inputBox">
                    <label class="labelInput">Observação: </label>
                    <textarea name="observacao" class="inputUser" placeholder="" required></textarea><br><br>
                </div>
                <input type="submit" class="resposta" value="Enviar">
            </form>
        </div>
    </body>
</html>