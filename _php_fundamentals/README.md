# Estudando php
## Zero to hero

### Constantes

Podemos definir um valor para uma constante. Uma constante pode ser utilizada em qualquer lugar, como uma variavel global.

```
define('CHECK_CONSTANT', 'Sou uma constante!');
```

### Determinando tipos

Checando o tipo de dado.

```
is_int($varInt);
is_string($varStrinf);
is_bool($boolVar);
is_float($varFloat);

// check constantes
echo defined('CHECK_CONSTANT');
```

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

### Strings

HereDoc / Here Document - printar texto com a mesma formatação que foi declarado.
```
// --------------------------------
// -- Here Document, HereDoc
// --------------------------------
$famousQuote = <<<EOT
    Be not afraid of greatness;
    some are born great,
    some achieve greatness,
    and others have greatness thrust upon them.

                          - William Shakespeare
EOT;

print <<<QUOTE
    Electric communication will never be a substitute for the face of someone
    who with their soul encourages another person to be brave and true.
            - Charles Dickens

$famousQuote
QUOTE;
```
print() - similar ao echo, mas com algumas limitações.
```
// --------------------------------
// -- print() / echo
// --------------------------------
print "This above all: to thine own self be true\n"; // funcina com echo
print("The lady doth protest too much, methinks\n");  // funcina com echo
echo  "Et", "tu", ",", "Brute", "!"; // não funciona com print, retorna erro
echo  "Et", " tu", ", ", "Brute", "!";

// multiline - funciona em ambos
print "
Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Morbi tincidunt commodo est. In sit amet eleifend dui. 
Nam euismod porta ultrices. 
";
```
str_replace() - essa função substitui alguma parte da string por outra definida no parametro da função.
```
// --------------------------------
// -- str_replace()
// --------------------------------
$quote = "To be or not to be? That is the question.";
$replaced = str_replace("be", "know", $quote, $replacementCount);
echo $replaced;
echo $replacementCount;
```
str_split() - essa função divide a string, se baseando no tamanho definimo no parametro dela, e transforma cada parte em um item de uma array.
```
// --------------------------------
// -- str_split()
// --------------------------------
$quote = "It is a melancholy truth that even great men have their poor relations.";
$quote = str_split($quote, 8);
print_r($quote);
```
strlen() - essa função retorna o tamanho de uma string em int
```
// --------------------------------
// -- strlen()
// --------------------------------
$quote = "There is no great genius without a mixture of madness.";
$length = strlen($quote);
echo $length;
```
strpos() - essa função verifica se determinado parametro se encontra na string. o parametro opicional define a partir de que caracter odeve ser localizado o parametro.
```
// --------------------------------
// -- strpos()
// --------------------------------
$quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";
echo strpos($quote, "fear");
echo strpos($quote, "fear", 26);
```
substr() - essa função cria uma string a partir de outra string, mas tirando partes que podemos definir através dos parametro.
```
// --------------------------------
// -- substr()
// --------------------------------
$quote = "Only those who will risk going too far can possibly find out how far one can go.";
//echo substr($quote, 4); # remove os quatro primeiro caracteres e apresente o resto da string
//echo substr($quote, -4); # remove os quatro ultimos caracteres.
//echo substr($quote, 0, -5); # remove do começo, até o quinto de trás pra frente
echo substr($quote, 3, 2); # inicia no terceiro caracter e aproveita apenas os dois seguintes
```
Caixa alta ou não - função para alterar o a string mara maiuscula ou minuscula
```
// --------------------------------
// -- caixa alta / caixa baixa
// --------------------------------
$quote = "To be or not to be, that is the question.";
$quote = strtoupper($quote);
$quote = strtolower($quote);
echo $quote;
```

### Arrays

Uma coleção de tipos de dados. O tipo de dado não importa. Cada valor tem uma chave relacionada, que se inicia no 0.

```
array(10, 10, 10);
array['string', 'string'];
```

Declarando uma array em uma variável.

```
$arrayOne = array(10, 10, 10);
$arrayTwo = array['string', 'string'];
```










