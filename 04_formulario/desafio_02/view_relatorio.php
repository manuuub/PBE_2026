<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório da Compra</title>
</head>

<body>
    <h1>Resumo da Compra</h1>
    <p><strong>Cliente:</strong> <?= $nome ?></p>
    <table border="1">
        <tr>
            <td>Produto</td>
            <td>Preço</td>
            <td>Quantidade</td>
            <td>Subtotal</td>
        </tr>

        <?php foreach($produtos as $produto) :?> 
            <tr>
               <td> <?=$produto['nome']?> </td> 
                <td> <?=$produto['preco']?> </td>
                <td> <?=$produto['quantidade']?> </td> 
                <td> <?=$produto['subtotal']?> </td> 
       </tr>
       <?php endforeach ?>
  </table>

            <p>Total da Compra:R$ <?= $total?></p>
            <p>Desconto:R$ <?= $desconto?></p>

            <p>Obrigado pela sua compra! 🛍️<p>
            <h1>Valor Final:R$ <?= $valor_final?></h1>

</body>
</html>