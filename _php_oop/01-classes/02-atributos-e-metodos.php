<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    
    require('./class/AtributosMetodos.class.php');
    
    /* teste 1
    * testando atribuição de valor e tentando puxar em outro método
    */
    
    // // criado novo objeto a martir da class AtributosMetodos
    // // note que aqui utilizando a mesma atribução -> para os métodos presentes na classe / pensar que o $this é substituido pelo objeto gerado.
    // $pessoa = new AtributosMetodos();
    // $pessoa->setUsuario('thierry', 26, 'web developer');
    
    // // verificar arquivo view
    // $pessoa->getUsuario();
    
    /* teste 2
    * testando atribuição de valor e tentando puxar em outro método
    */
    
    // criado novo objeto a martir da class AtributosMetodos
    // note que aqui utilizando a mesma atribução -> para os métodos presentes na classe. pensar que o $this é substituido pelo objeto gerado.
    $pessoa = new AtributosMetodos();
    $pessoa->setUsuario('thierry', 26, 'web developer');
    
    // verificar arquivo view
    $usuario = $pessoa->getUsuario();
    echo $usuario;
    
    echo '<hr>';
    
    // teste demonstrando alteração de valor de atributo direto  (motivo de variável ser privada)
    // $pessoa->Idade = 'banana';
    
    // teste demonstrando alteração do atributo através do metodo com validação falsa
    // $pessoa->setUsuario('thierry2', 'teste', 'full stack');
    
    // teste demonstrando alteração do atributo através do metodo com validação verdadeira
    $pessoa->setUsuario('thierry2', 30, 'full stack');
    
    // teste atribuindo o valor ao método com condição falsa / se houver numero o condição é verdadeira
    // $pessoa->setIdade('banana');
    
    // demonstrando como alterar valor de parametro sem mexer diretamente no valor
    $pessoa->Envelhecer();
    $pessoa->Envelhecer();
    // note que após a executação deste método, a idade é aumentada em 2 numeros.
    
    // debugando objeto para vizualizar dados atribuidos.
    $pessoa->getClasse();
    
    ?>
</body>

</html> 