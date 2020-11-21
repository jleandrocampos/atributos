<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Atributos Águia</title>
</head>

<body>

<div class="container">
    <div class="my-5">
<?php

class Ave {
    public $nome;
    public $origem;
    //public $habitat;
    public $alimentacao;
    public $reproducao;
    public $reino;
    public $subreino;

    private function habitat(){
        return 'Habitat:'.PHP_EOL.'Vivem principalmente perto do mar, de rios e lagos <br />';
    }

    public function oHabitat(){
        return $this-> habitat();
    }

}
$ave = new Ave();

$ave->nome = 'Nome:'.PHP_EOL.'Águia <br />';
echo ($ave->nome);

$ave->origem = 'Origem:'.PHP_EOL.'Aves de Rapina <br />';
echo ($ave->origem);

//$ave->habitat = 'Habitat:'.PHP_EOL.'vive principalmente perto do mar, de rios e lagos <br />';
echo ($ave->Ohabitat());

$ave->alimentacao = 'Alimentação:'.PHP_EOL.'coelhos, esquilos, cobras, marmotas <br />';
echo ($ave->alimentacao);

$ave->reproducao = 'Reprodução:'.PHP_EOL.'inicia-se em meados de janeiro e prolonga-se até maio-setembro <br />';
echo ($ave->reproducao);

$ave->reino = 'Reino:'.PHP_EOL.'Animalia <br />';
echo ($ave->reino);

$ave->subreino = 'Sub_Reino:'.PHP_EOL.'Eumetazoa <br />';
echo ($ave->subreino);


?>

    </div>
</div>
</body>
</html>
