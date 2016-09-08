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

Array indexada - declarando uma array em uma variável.

```
$arrayOne = array(10, 10, 10);
$arrayTwo = array['string', 'string'];
$arrayThree = array[10, 1.5, 'string', 'string plus string', 10];
```

Podemos printar uma array com o print_r. O print_r retorna a array de forma legível, com as chaves. cada chave representa um valor.

```
$array = array(10, 10, 10);
print_r($array);
```

Array associativa - toda vez que alteramos/definimos uma chave do array, transformamos uma array indexada em array associativa. o "=>" referencia a chave ao valor.

```
$arrayAssociativa = array(
	'quark' => 'charles dickens',
	10 => 'jane austen',
	'key' => 'value',
	// note que declaramos um valor sem uma chave. neste caso o php vai definir a chave automaticamente a partir da ultima chave gerada.
	'machado de assis'
);
```

Podemos utilizar algum valor em especifico do array, apontando a chave.

```
// printando valor da chave 0
echo $array[0];
// printando valor da chave 1
echo $array[1];
// printando valor de uma array associativa
echo $arrayAssociativa['quark'];
```

bool array_key_exists (mixed $key, array $array) - Podemos veriricar se uma chave existe com a seguinte função.

```
// array_key_exists utiliza dois parametros, o primeiro é chave e o segundo é a array. no exemplo abaixo checamos se existe valor na chave zero da $array, que nos deve retornar o valor 0-nao ou 1-sim (checagem boleana).
echo array_key_exists(0, $array);
```

bool in_array (mixed $needle, array $haystack [,bool $strict = FALSE]) - para checar se um valor existe na array. o terceiro parametro pode ser utilizado para checar se o tipo de dados é o mesmo.

```
// se o valor existir na array e for do mesmo tipo do valor solicitado, retornamos 1, se não, 0.
echo in_array('machado de assim', $array, true);
```

int array_push (array &$array, mixed $value1 [,mixed $... ]) - adiciona um ou mais valores ao fim de uma array. o array_push funciona apenas com arrays indexadas, retorna erro se utilizado com array associativa.

```
// adicionando valores no array de forma tradicional
$array ('string1', 'string2'. 'string3');
array_push($array, 'string4');

// forma abreviada
$array[] = 'string5';

// definindo a chave que vai ter o valor alterado
$array['key'] = 'string6';
```

mixed array_pop (array &$array) - remove o ultimo item de uma array.

```
$array ('string1', 'string2'. 'string3');
$ultimoValor = array_pop($array);

// este retorna o ultimo valor removido do array.
echo $ultimoValor;

// este apresenta a array sem o ultimo valor que foi removido.
print_r($array);
```

void unset (mixed $var [,mixed $... ]) - remove o valor de uma variável. com ele podemos remover o valor de determinada chave na array.

```
$array ('string1', 'string2'. 'string3');
unset($array[1], $array[0]);

// se a chave for uma string, basta apontar a string em questão
unset($array['string1']);
```

bool sort (array &$array [,int $sort_flags = SORT_REGULAR ]) - randomiza os valores de uma array. 

```
$array ('string1', 'string2'. 'string3');
sort($array);
```

Ao randomizar uma array associativa, os valores das chaves são substituidos pelo indice. Podemos preservar os valores do índices, podemos usar o método asort.

bool asort (array &$array [,int $sort_flags = SORT_REGULAR ])

```
$array ('string1', 'string2'. 'string3');
asort($array);
```

bool ksort (array &$array [,int $sort_flags = SORT_REGULAR ]) - determina a ordem de uma array através do indice.

```
$array ('string1', 'string2'. 'string3');
ksort($array);
```

int count(mixed $array_or_countable [,int $mode = COUNT_NORMAL]) - retorna o número de valores de uma array ou objeto.

```
$array ('string1', 'string2'. 'string3');
count($authors);
count($authors, COUNT_RECURSIVE);
```

foreach loop - com o loop for each podemos executar alguma ação com base em cada índice.

```
$authors = array(
	'key1' => 'string1',
	'key2' => 'string2',
	'key3' => 'string3',
	'key4' => 'string4',
);
foreach ($authors as $key => $val) {
	echo $val. '('.$key.')\n';
}
```

Multi dimensional array - arrays dentro de arrays. podemos declarar uma array dentro de uma chave

```
$author = array(
	'masculino' => array (
		'machado de assis' => array (
			'braz cubas',
			'dom casmurro'
		),
		'carlos drummond' => array (
			'poesia1',
			'poesia2'
		)
	),
	'feminino' => array (
		'clarice lispector' => array (
			'livro1',
			'livro2'
		),
		'ivete semgalo' => array (
			'teste1',
			'teste2'
		)
	)
);
```

Para escolher o valor a ser retornado, podemos utilizar o método a seguir.

```
// retorna todos os valores da array masculino
print_r($authors['masculino']);

// retorna todos os valores da array feminino
print_r($authors['feminino']);

// para retornar o valor de algum item dentro destes, basta especificar as chaves
print_r($authors[masculino][machado de assis][1]);
```

### Classes

Classes ajudam na reutilização do código atual, na manutenção e no encapsulamento.

Criando uma class

```
class Pessoa {
	
}
```

Criando um objeto da class.

```
$pessoaProfessor = new Pessoa();
```

Definindo propriedades para a class.

```
class Pessoa {
	public $firsName = 'thierry rene';
	public $lastName = 'matos';
	public $yearBorn = 1989;
}
```

Acessando a propriedade de um objeto.

```
// o sinal -> é um object operator, ou operador de objetos. utilizamos para acessar as propriedades de um objeto. 
$pessoaProfessor->firstName;
// definido valor
$pessoaProfessor->firstName = 'thierry rene matos';
```

Definindo constantes em uma class.

```
class Pessoa {
	const AVG_LIFE_SPAN = 79;
	
	public $firsName = 'thierry rene';
	public $lastName = 'matos';
	public $yearBorn = 1989;
}
```

Acessando os dados de uma constante.

```
// utilizamos o scope resolution operator :: para acessar os dados de uma constante
echo $pessoaProfessor::AVG_LIFE_SPAN;
// também podemos acessar diretamente da class
echo Person::AVG_LIFE_SPAN;
```

Criando métodos na class.

métodos são funções que executam ações dentro de uma class.

```
class Pessoa {
	const AVG_LIFE_SPAN = 79;
	
	public $firsName = 'thierry rene';
	public $lastName = 'matos';
	public $yearBorn = 1989;
	
	// metodo get
	public function getFirstName() {
		
	};
	
	// metodo set
	public function setFirstName($tempName) {
		
	}
}
```

Peseudo variável $this

O $this é uma referencia direta ao atual objeto/class. Neste caso, ao utilizar o $this, podemos alterar as propriedades da classe.

```
class Pessoa {
	const AVG_LIFE_SPAN = 79;
	
	public $firstName = 'thierry rene';
	public $lastName = 'matos';
	public $yearBorn = 1989;
	
	// metodo get
	public function getFirstName() {
		// utilizamos o $this para retornar o valor da propriedade $firstName
		return $this->firstName;
	};
	
	// metodo set
	public function setFirstName($tempName) {
		// utilizamos o $this para referenciar o metodo set
		$this->firstName = $tempName;
	}
}
```

Acessandos os metodos através de um objeto. Note que neste exemplo não utilizamos o $this, pois não estamos trabalhando dentro da class/objeto, então devemos referenciar o objeto criado.

```
class Pessoa {
	const AVG_LIFE_SPAN = 79;
	
	public $firstName = 'thierry rene';
	public $lastName = 'matos';
	public $yearBorn = 1989;
	
	// metodo get
	public function getFirstName() {
		// utilizamos o $this para retornar o valor da propriedade $firstName
		return $this->firstName;
	};
	
	// metodo set
	public function setFirstName($tempName) {
		// utilizamos o $this para referenciar o metodo set
		$this->firstName = $tempName;
	}
}

// criamos o objeto
$pessoaProfessor = new Pessoa();

// utilizamos o metodo set através do objeto criado
$pessoaProfessor->setFirstName('thierry rene');

// utilizamos o metodo get atraves do objeto criado
$pessoaProfessor->getFirstName();
```

Contrutores - utilizamos os construtores para definir os valores padrões de um objeto. Todo objeto criado a partir de uma class com construtor, já recebe valores padrões.

```
class Pessoa {
	public $firstName;
	public $lastName;
	public $yearBorn;
	
	// note que os valores padrões da função agora são declarados no construtor, para que cada objeto, ao ser criado, possa utiliza-los.
	function __construct() {
		$this->firstName = 'thierry rene';
		$this->lastName = 'matos';
		$this->yearBorn = 1989;
	};
	
	public function getFirstName() {
		return $this->firstName;
	};
	
	public function setFirstName($tempName) {
		$this->firstName = $tempName;
	};
}