<!DOCTYPE html>
<html>
    <head>
        <title>Formulario 2</title>
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

            .turn {
                position: relative;
                text-align: left;
                margin-left: 20px;
            }

            .turno {
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

            .serie {
                position: relative;
                margin-left: 20px;
            }

            .atividade {
                position: relative;
                margin-left: 20px;
            }


        </style>
    </head>
    <body>
        <div class="total">
            <form method="POST" action="teste2.php">
                <legend>Matrícula Aluno</legend>
                <div class="inputBox">
                    <label class="labelInput">Nome do aluno: </label>
                    <input type="text" name="nome_aluno" id="nome" class="inputUser" placeholder="digite o nome do aluno" required><br><br>
                    <label class="labelInput">Nome da mãe: </label>
                    <input type="text" name="nome_mae" id="mae" class="inputUser" placeholder="digite o nome da mae" required><br><br>
                    <label class="labelInput">Nome do pai: </label>
                    <input type="text" name="nome_pai" id="pai" class="inputUser" placeholder="digite o nome do pai" required><br><br>
                    <label class="labelInput">Telefone: </label>
                    <input type="text" name="telefone" class="inputUser" placeholder="digite o numero do aluno" required><br><br>
                    <label class="labelInput">Email: </label>
                    <input type="email" name="email" id="email" class="inputUser" placeholder="digite o seu email do aluno" required><br><br>
                </div>
                <div class="turn">
                <label class="horario">Turno: </label><br><br>
                    <div class="turno">
                        <input type="radio" name="tempo" value="manha" required>
                        <label for="masculino">Manhã</label><br>
                    </div>
                    <div  class="genero">
                        <input type="radio" name="tempo" value="tarde" required>
                        <label for="feminino">Tarde</label><br>
                    </div>
                    <div class="genero">
                        <input type="radio" name="tempo" value="noite" required>
                        <label for="outro">Noite</label><br>
                    </div>
                </div><br><br>
                <div class="nascimento">
                    <label for="data_nascimento"><b>Data de Nascimento: </b></label>
                    <input type="date" name="data_nascimento" required><br><br>
                </div>  
                <div class="serie">
                    <label>Série: </label><br><br>
                    <select name="serie">
                        <option value="pré-escolar">pré-escolar</option>
                        <option value="1a série 1o grau">1a série 1o grau</option required>
                        <option value="2a série 1o grau">2a série 1o grau</option required>
                        <option value="3a série 1o grau">3a série 1o grau</option required>
                        <option value="4a série 1o grau">4a série 1o grau</option required>
                        <option value="5a série 1o grau">5a série 1o grau</option required>
                        <option value="6a série 1o grau">6a série 1o grau</option required>
                        <option value="7a série 1o grau">7a série 1o grau</option required>
                        <option value="8a série 1o grau">8a série 1o grau</option required>
                        <option value="1a série 2o grau">1a série 2o grau</option required>
                        <option value="2a série 2o grau">2a série 2o grau</option required>
                        <option value="3a série 2o grau">3a série 2o grau</option required>
                    </select>
                </div><br><br>
                <div class="atividade">
                    <label>Atividades Extracurriculares: </label><br><br>
                    <input type="checkbox" name="inf" value="informática">Informática<br>
                    <input type="checkbox" name="mus" value="música">Música<br>
                    <input type="checkbox" name="bal" value="ballet">Balet<br>
                    <input type="checkbox" name="pin" value="pintar">Pintura<br>
                    <input type="checkbox" name="jud" value="Judô">Judô<br>
                    <input type="checkbox" name="fut" value="futebol">Futebol<br>
                </div><br><br>
                <input type="submit" class="resposta" value="Enviar">
            </form>
        </div>
    </body>
</html>