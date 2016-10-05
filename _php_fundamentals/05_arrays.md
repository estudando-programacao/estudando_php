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