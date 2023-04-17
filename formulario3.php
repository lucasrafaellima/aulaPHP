<!DOCTYPE html>
<html>
    <head>
        <title>Formulario 3</title>
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
                margin-top: 170px;
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

            .estocagem {
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
            <form method="POST" action="teste3.php">
                <legend>Cadastrar roupas</legend>
                <div class="inputBox">
                    <div class="linha">
                        <label>Linha: </label><br><br>
                        <select name="produto" class="serie">
                            <option value="Short">Shorts</option>
                            <option value="Bermuda">Bermuda</option required>
                            <option value="Calca">Calça</option required>
                            <option value="Chapeu">Chapéu</option required>
                            <option value="Tenis">Tenis</option required>
                            <option value="Sapato">Sapato</option required>
                            <option value="Camiseta">Camiseta</option required>
                            <option value="Polo">Polo</option required>
                            <option value="Regata">Camisa regata</option required>
                            <option value="Oculos">Óculos</option required>
                        </select>
                    </div><br>
                    <div class="marca">
                        <label>Marca do produto: </label><br><br>
                        <select name="marca_produto" class="serie">
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option required>
                            <option value="Puma">Puma</option required>
                            <option value="Urban">Urban</option required>
                            <option value="Rider">Rider</option required>
                            <option value="Renner">Renner</option required>
                            <option value="Hering">Hering</option required>
                            <option value="Polo">Polo</option required>
                            <option value="Chicago">Chicago</option required>
                            <option value="Oakley">Oakley</option required>
                        </select>
                    </div><br>
                    <label class="labelInput">Descrição do produto: </label>
                    <input type="text" name="descricao" id="descricao" class="inputUser" placeholder="especifique o produto" required><br><br>
                    <div class="fornecedor">
                        <label>Fornecedor: </label><br><br>
                        <select name="fornecedor_produto" class="serie">
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
                    <label class="labelInput">Estoque inicial: </label>
                    <input type="number" name="estoque" class="inputUser" placeholder="" required><br><br>
                    <label class="labelInput">Custo unitário: </label>
                    <input type="text" name="custo" class="inputUser" placeholder="00,00" required><br><br>
                    <label class="labelInput">Preço de venda: </label>
                    <input type="text" name="preco" class="inputUser" placeholder="00,00" required><br><br>
                    <label class="labelInput">Telefone: </label>
                    <input type="text" name="telefone" class="inputUser" placeholder="digite seu número" required><br><br>
                    <label class="labelInput">Cpf: </label>
                    <input type="text" name="cpf" class="inputUser" placeholder="000.000.000-00" required><br><br>
                </div>
                <div class="estocagem">
                    <label for="data_estocagem"><b>Data de estocagem: </b></label>
                    <input type="date" name="data_estocagem" class="data" required><br><br>
                </div>  
                <input type="submit" class="resposta" value="Enviar">
            </form>
        </div>
    </body>
</html>