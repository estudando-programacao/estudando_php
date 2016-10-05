### Classes

Classes ajudam na reutilização do código atual, na manutenção e no encapsulamento de códigos.

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
};
```

Definindo parametros obrigatórios para um novo objeto através de um contrutor.

```
class Pessoa {
	public $firstName;
	public $lastName;
	public $yearBorn;
	
	// note que definimos parametros dentro da função, que são linkados aos valores do objeto, quando este é criado / podemos definir aqui no construtor uma string vazia, para evitar erro ao criar o objeto sem valores.
	function __construct($firstName = '', $lastName = '', $yearBorn = '') {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->yearBorn = $yearBorn;
	};
	
	public function getFirstName() {
		return $this->firstName;
	};
	
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	};
};

// ao criar um objeto, somos obrigados a declarar os valores de cada parametro, se não é apresentado erro.
$pessoaBombeiro = new Pessoa('thierry', 'rene', 26);

// note que utilizamos o metodo atraves do objeto
echo $pessoaBombeiro->getFirstName();
```

Herença - pense no conceito, se um pai tem diversas qualidades, seu filho deve herda-las. O conceito de herença na programação determina que podemos extender as funcionalidades de uma class (pai) para outra class (filha).

```
// class pai (Pessoa)
class Pessoa {
	public $firstName;
	public $lastName;
	public $yearBorn;
	
	function __construct($firstName = '', $lastName = '', $yearBorn = '') {
		echo 'Construtor Pessoa'.PHP_EOL;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->yearBorn = $yearBorn;
	};
	
	public function getFirstName() {
	
		// a constante PHP_OEL é uma forma de quebrar linha compátivel com qualquer SO.
		return $this->firstName.PHP_EOL;
	};
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	};
	public function getFullName() {
		echo 'Pessoa->getFullName()'.PHP_EOL;
		return $this->firstName. ' ' .$this->lastName.PHP_EOL; 
	}
	
};

// class filha (Policial)
// criamos uma nova class para extender as funcionalidades da class pessoa
Class Policial extends Pessoa {
	public $steveName = 'steve';
	
	public function getSteveName() {
		return $this->steveName.PHP_EOL; 
	}
}

// criamos um objeto a partir da nossa classe filha Policial
// agora esse objeto tem acesso a todos os métodos da class Pessoa, conforme os exemplos abaixo, onde definimos o objeto declarando os dados do construtor presente na class Pessoa.
$newPubFun = new Policial('marcos', 'saldanha', 55);
echo $newPubFun->getFullName();
```

Propriedade e métodos Protegidos - define que as Propriedades e Métodos só podem ser acessadas pela classe que as criou e pelas classes filhas que a herdarem. Para acessar estes dados, precisamos criar métodos getter e setters dentro da class, não podemos acessa-los diretamente através da variável.

```
Class Policial extends Pessoa {
	protected $steveName = 'steve';
	
	public function getSteveName() {
		return $this->steveName.PHP_EOL; 
	}
}

// se tentarmos alterar o valor do $steveName fora da class, conforme o exemplo abaixo, é apresentado erro, pois dados protegidos só podem ser manipulados dentro da propria class.
$newPubFun = new Policial();
$newPubFun->steveName('thierry');
```

Propriedades e Métodos Privados - a propriedade privada torna exclusivo da class o uso da propriedade, ou seja, não pode ser utilizada por classes filha muito menos fora da class.

```
class Policial extends Pessoa {
	private $steveName = 'steve';
	private $steveFullName = 'steve da silva';
	public function getFullName() {
		return $this->steveName.PHP_EOL;
	}
	public function getCompleteName() {
		// chamamos a função getFullName, que retorna o nome completo através da propriedade $steveFullName e depois o valor do $steveName
		return $this->getFullName.' a.k.a '.$this->steveName();
	}
}
$newPubFun = new Policial();

// para retornar utilizar os valores fora da class, utilizamos os métodos criados, ou criamos algum método para interagir com os dados.
// forma correta de retornar dados
$newPubFun->getFullName().PHP_EOL;

// forma incorreta de requisitar dados de uma propriedade privada.
// LEMBRAR SEMPRE QUE UMA PROPRIEDADE PRIVADA PODE APENAS SER UTILIZADA DENTRO DA CLASS QUE A CRIOU.
$newPubFun->steveFullName('thierry rene matos');
```

Propriedades e Métodos Estáticos - declarar propriedades e métodos como estático faz com que possamos utilizar os métodos e propriedades sem declarar um objeto (o que poupa espaço na memória). Propriedades estáticas não podem aser acessadas com o operador de objetos -> . Para acessar uma propriedade estática da própria class, utilizamos o operador de resolução de escopo self:: . Para acessar a propriedade de uma classe pai, utilizamos o operador parent:: .

```
<?php

// criamos a class pai Foo
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
    
    	// note que acessamos a propriedade com o operador self::
        // note que declaramos a propriedade com $
        return self::$my_static;
    }
}

// criamos a class filha Bar
class Bar extends Foo
{
    public function fooStatic() {
    
    	// para acessar a propriedade de uma class pai, como no exemplo abaixo, utilizamos o operador de resolução de escopo ::parent .
    	// note que declaramos a propriedade com $
        return parent::$my_static;
    }
}

// acessando propriedade estática
// printamos o valor da propriedade $my_static. note que printamos o valor com o operador de resolução de escopo :: . 
print Foo::$my_static . "\n";

// novo objeto foo
$foo = new Foo();

// acessand métodos estáticos
print $foo->staticValue() . "\n";

?>
```

Inclusão de arquivos (include) - utilizamos o include para incluir arquivos dentro de um script php. Por exemplo, ao invés de criamos a class e o script no mesmo arquivo, podemos apenas criar a class, e então incluir a mesma no arquivo que desejamos utiliza-la.

```
// vamos supor que a class Pessoa esteja em um arquivo separado na mesma pasta (Pessoa.php).
include 'Pessoa.php';
// abaixo garantimos que o arquivo é incluido apenas uma vez no script. útil para arquivos que contenham classes e funcões.
include_once 'Pessoa.php';

// após a inclusão do arquivo, podemos criar um objeto, se possível, a partir da class, e utilizar seus métodos.
$novaPessoa = new Pessoa();
echo $novaPessoa->printarNome();
```

Requisição de arquivos (require) - primeramente, a principal diferença para o include é que o include continua a execução do script caso a inclusão do arquivo venha a falhar. O require apresenta um erro fatal e finaliza o script.

```
// note a similariade com o include
require 'Pessoa.php';
// também temos o require_once
require_once 'Pessoa.php';

// após a requisição do arquivo, podemos criar um objeto, se possível, a partir da class, e utilizar seus métodos.
$novaPessoa = new Pessoa();
echo $novaPessoa->printarNome();
```