<!DOCTYPE html>
<html>
    <head>
        <title>Formulario 1</title>
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

            .nascimento {
                margin-left: 20px;
            }


        </style>
    </head>
    <body>
        <div class="total">
            <form method="POST" action="teste1.php">
                <legend>Cadastrar Usuário</legend>
                <div class="inputBox">
                    <label class="labelInput">Nome completo: </label>
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="digite o nome completo" required><br><br>
                    <label class="labelInput">Email: </label>
                    <input type="email" name="email" id="email" class="inputUser" placeholder="digite o seu email" required><br><br>
                    <label class="labelInput">Senha: </label>
                    <input type="password" name="senha" id="senha" class="inputUser" placeholder="digite a senha" required><br><br>
                    <label class="labelInput">Telefone: </label>
                    <input type="text" name="telefone" class="inputUser" placeholder="digite seu número" required><br><br>
                    <label class="labelInput">Cpf: </label>
                    <input type="text" name="cpf" class="inputUser" placeholder="digite seu cpf" required><br><br>
                </div>
                <div class="gener">
                    <label class="sexo">Genero: </label><br><br>
                    <div class="genero">
                        <input type="radio" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label><br>
                    </div>
                    <div  class="genero">
                        <input type="radio" name="genero" value="feminino" required>
                        <label for="feminino">Feminino</label><br>
                    </div>
                    <div class="genero">
                        <input type="radio" name="genero" value="outro" required>
                        <label for="outro">Outro</label><br>
                    </div>
                </div><br><br>
                <div class="nascimento">
                    <label for="data_nascimento"><b>Data de Nascimento: </b></label>
                    <input type="date" name="data_nascimento" required><br><br>
                </div>  
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                </div><br>
                <div class="inputBox">
                    <label for="estado" class="labelInput">Estado: </label>
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                </div><br>
                <div class="inputBox">
                    <label for="endereco" class="labelInput">Endereço: </label>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                </div><br>
                <input type="submit" class="resposta" value="Enviar">
            </form>
        </div>
    </body>
</html>