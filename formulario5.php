<!DOCTYPE html>
<html>
    <head>
        <title>Formulario 5</title>
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
                margin-left: 20px;
                background: #338c22;
                border: 1px solid #338c22;
                border-radius: 10px;
                color: white;
            }

            .data_compra {
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
            <form method="POST" action="teste5.php">
                <legend>Cadastro de compras</legend>
                <div class="inputBox">
                    <label class="labelInput">Nome: </label>
                    <input type="text" name="nome" class="inputUser" placeholder="nome do cliente" required><br><br>
                    <label class="labelInput">Cpf: </label>
                    <input type="text" name="cpf" class="inputUser" placeholder="000.000.000-00" required><br><br>
                    <label class="labelInput">Valor do produto: </label>
                    <input type="text" name="produto_valor" class="inputUser" placeholder="00,00" required><br><br>
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
                    <label class="labelInput">Estado: </label>
                    <input type="text" name="estado" class="inputUser" placeholder="Estado do cliente" required><br><br>
                    <div class="pagamento">
                        <label>Opções de pagamento: </label><br><br>
                        <select name="pagamento" class="serie">
                            <option value="pix">Pix</option>
                            <option value="boleto bancario">Boleto bancário</option required>
                            <option value="credito">Crédito</option required>
                            <option value="debito">Débito</option required>
                            <option value="tranferencia bancaria">Transferência bancária</option required>
                            </select>
                    </div><br>
                </div>
                <div class="data_compra">
                    <label for="data_compra"><b>Data da compra: </b></label>
                    <input type="date" name="data_compra" class="data" required><br><br>
                </div> 
                <div class="inputBox">
                    <label class="labelInput">Valor do frete: </label>
                    <input type="text" name="frete" class="inputUser" placeholder="00,00" required><br><br>    
                </div>
                <div class="data_compra">
                    <label for="data_entrega"><b>Data de entrega: </b></label>
                    <input type="date" name="data_entrega" class="data" required><br><br>
                </div>
                <div class="gener">
                    <label class="sexo">Formato do produto: </label><br><br>
                    <div class="genero">
                        <input type="radio" name="forma_produto" value="fisico" required>
                        <label for="masculino">Físico</label><br>
                    </div>
                    <div  class="genero">
                        <input type="radio" name="forma_produto" value="virtual" required>
                        <label for="feminino">Virtual</label><br>
                    </div>
                </div><br><br>
                <input type="submit" class="resposta" value="Enviar">
            </form>
        </div>
    </body>
</html>