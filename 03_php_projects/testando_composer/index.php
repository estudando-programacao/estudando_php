<?php 

require_once ('vendor/autoload.php');

$faker = Faker\Factory::create();

echo $faker->name;
echo "<br>";
echo $faker->address;
echo "<br>";
echo $faker->text;
echo "<br>";
echo $faker->email;

// $whoops = new Whoops\Run();

// $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
 
// // Set Whoops as the default error and exception handler used by PHP:
// $whoops->register();  

// $var1 = "casaaa";

// if ($var1 == "casa") {
//     echo "{$var1}";
// } else {
//     throw new RuntimeException("[ERRO]");
// }

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger($faker->name);
$log->pushHandler(new StreamHandler('log/your.log', Logger::WARNING));

// add records to the log
$log->error('Bar');
$log->warning('lorem');
$log->error('Bar');
$log->warning('lorem');
$log->info('Bar');

echo "<h1>log registrado.</h1>";



