<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível:</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
                    serão gastos com combustível durante uma viagem, com base no
                consumo do seu veículo, e com a distância determinada por você!</p>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do Valor (R$) do Consumo</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">
                    <label for="combustivel">Escolha de Cobustivel:</label>
                    <select type="text" class="campoTexto" name="combustivel" required>
                        <option value="gasolina" selected>Gasolina</option>
                        <option value="etanol">Etanol</option>
                        <option value="disel">Disel</option>
                    </select>
                    <br><br>
                    <label for="valor">Valor do Cobustível:</label>
                    <input type="number" class="campoTexto" name="valor" step="0.01" required/>
                    <br><br>
                    <label for="distancia">Distância em km a ser Percorrida:</label>
                    <input type="number" class="campoTexto" name="distancia" step="0.1" required/>
                    <br><br>
                    <label for="autonomia">Consumo de combustível do veículo (km/L):</label>
                    <input type="number" class="campoTexto" name="autonomia" step="0.1" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>