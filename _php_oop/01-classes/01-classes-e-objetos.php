<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    
        require('./class/ClassesObjetos.class.php');
        
        // criando nova instancia do objeto
        // note que aqui os valores não são apresentados setados, pois a atribuição direta na variável é feita depois.
        $teste = new ClassesObjetos();
        $teste->getCLass('De introdução', 'mostrar uma classe');
        // var dumb
        $teste->verClass();
        
        // aqui é feita a atribuição do valor na variável, por isso ao gerar este objeto são apresentado valores diferentes.
        // definindo novos valores no objeto
        $teste->Classe = 'Classe 2';
        $teste->Funcao = 'Ver atributos';
        // var dumb
        $teste->verClass();
        
    ?>
</body>
</html>