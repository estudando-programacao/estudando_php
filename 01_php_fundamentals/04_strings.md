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