<?php
/*use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
*/
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));

$client = new Client();
$res = $client->request('GET', 'http://unicorns.idioti.se/', ['headers'=>['Accept'=>'application/json']]);
$data = json_decode($res->getBody(), true);
$more = file_get_contents('http://unicorns.idioti.se/' . $_GET['id']);
print $more;



?>

<!DOCTYPE html>
<html>
<head>
<title>Unicorn Page</title>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Välkommen</h1>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>

  </div>
</div>
</head>
<body>

  <div class="container">

            <form action="index.php" method="get">
              <hr>
                <div class="form-group">
                    <label for="id">Sök: </label>
                    <input type="number" id="id" name="id" class="form-control">
                    <input type="submit" value="Ok" class="btn btn-success">

                </div>
                <div class="form-group">

              </div>



<hr>
<?php
for ($i=0; $i < count($data); $i++) {
  echo "<h3>" . ($data[$i]['id']) . ": " . ($data[$i]['name']). "<a href='index.php?id=".$data[$i]['id']."' class='btn btn-default' style='float:right;'>" . "Visa" . "</a>" .
  "</h3>" ;

if(($data[$i])['id'] != NULL)
{
  $log->info ("User in: " . $_GET['id']);
}



//($data[$i]['id']) . ": " . ($data[$i]['name'])
}
echo "Hello, " . $name;
//$log->info("hej");
?>
</body>
</html>

</p>
