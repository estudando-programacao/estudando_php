### Funções

Um bloco de código que executa determinada ação. Uma função pode ter parametrôs.

```
// --------------------------------
// criando função
// --------------------------------
function createName($parameter, $anotherParameter) {
	echo 'teste';
}
```

Após criar uma função, podemos executa-la da seguinte maneira.

```
// --------------------------------
// chamando função
// --------------------------------
createName();
```

Definindo parametros para uma função. Podemos definir diversos parametro apenas seperando as variáveis por virgula.

```
// --------------------------------
// definindo paramentros
// --------------------------------
function bookBy($authorName, $year) {
	echo $year;
	echo '\n';
echo $authorName;
}
```

Definindo valores para os parametros de uma função.

```
// --------------------------------
// definindo valor para o parametros
// --------------------------------
bookBy('rafael do gueto', 1910);
```
Outra maneira de definir o valor, primeiro atribuindo o valor a variável e depois chamando a função a função com base nos parametros.

```
// --------------------------------
// definindo valor 2
// --------------------------------
$authorName = 'rafael do gueto';
$year = 1910;
bookBy($authorName, $year);
```

Definindo valores padrões para os parametros.

```
// --------------------------------
// todos os parametros padrões devem estar no fim da função, todos os parametros requisitados devem estar no início.
// --------------------------------
function bookBy($authorName, $year = 1910) {
	echo $year;
	echo '\n';
echo $authorName;
}
bookBy($authorName, $year);
```

Retornando valores com uma função. A intenção é que uma função sempre retorne um valor.

```
// --------------------------------
// retornando valores com funções
// --------------------------------
function bookBy($authorName, $year = 1910) {
	echo $year;
	echo '\n';
echo $authorName;
}
Function getAuthon() {
	return 'charles dickens';
}
$authorName = getAuthor();
bookBy($authorName, $year);
```

Podemos também atribuir uma função a uma variável, e utilizar a variável como se fosse uma função.

```
// --------------------------------
// funções com variáveis / atribuindo uma função a uma variável
// --------------------------------
function getAuthon() {
	return 'charles dickens';
}
$varFunName = 'getAuthor';
$varFunName();
```

Escopo de variáveis - variáveis podem ser utilizadas dentro do escopo, ao declarar uma variável dentro de uma função, o escopo desta está definida dentro da função.

```
$authorName = "machado de assis";

function setAuthorName() {
	$authorName = "drummon de andrade";
}
echo $authorName;
```

Variáveis globais - podemos definir variáveis globais, que podem ser manipuladas fora de uma função. As variáveis globais só podem ser utilizadas dentro de uma função.

```
$authorName = "machado de assis";

function setAuthorName() {
	global $authorName;
	$authorName = "drummon de andrade";
}
echo $authorName;
```