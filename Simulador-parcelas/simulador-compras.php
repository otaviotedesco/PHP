<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Compras</title>
    <link rel="stylesheet" href="simulador-compras-styles.css">
</head>
<body>
    <div class="container">
        <h1>Simulador de Compras</h1>
        <form id="simuladorForm" method="POST">
            <div class="form-group">
                <label for="valorTotal">Valor Total da Compra:</label>
                <input type="number" id="valorTotal" name="valorTotal" required>
            </div>
            <div class="form-group">
                <label for="parcelas">Quantidade de Parcelas:</label>
                <input type="number" id="parcelas" name="parcelas" required>
            </div>
            <div class="form-group">
                <label for="juros">Taxa de Juros (% ao mês):</label>
                <input type="number" id="juros" name="juros" step="0.01">
            </div>
            <button type="submit">Calcular</button>
        </form>
        <div class="result" id="result"></div>
    </div>

    <script>
        document.getElementById('simuladorForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const valorTotal = parseFloat(document.getElementById('valorTotal').value);
            const parcelas = parseInt(document.getElementById('parcelas').value);
            const juros = parseFloat(document.getElementById('juros').value) / 100;

            let valorParcela, valorTotalFinal;

            if (juros > 0) {
                valorParcela = valorTotal * (juros * Math.pow(1 + juros, parcelas)) / (Math.pow(1 + juros, parcelas) - 1);
                valorTotalFinal = valorParcela * parcelas;
            } else {
                valorParcela = valorTotal / parcelas;
                valorTotalFinal = valorTotal;
            }

            document.getElementById('result').innerHTML = `
                <p>Valor de cada parcela: R$ ${valorParcela.toFixed(2)}</p>
                <p>Valor total a ser pago: R$ ${valorTotalFinal.toFixed(2)}</p>
            `;
        });
    </script>
</body>
</html>