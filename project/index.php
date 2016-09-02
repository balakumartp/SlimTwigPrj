<?php
ini_set("display_errors",1);
 
require 'vendor/autoload.php';
 
$config = [
    'settings' => [
        'displayErrorDetails' => 1,
    ],
];
$app = new Slim\App($config);
$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'cache' => 'cache'
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};

$container['db'] = function ($c) {
    
    $pdo = new PDO("mysql:host=" . "localhost" . ";dbname=" . "slimdb",
        "root", "password1");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
}; 
 
$app->get('/', function (Slim\Http\Request $request, Slim\Http\Response $response, array $args)   {
   $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'thanks'=>''
		    ],
          ];
          return $this->view->render($response, 'register.twig.html', $vars);
})->setName('register');
	
	 
$app->get('/checkdata[/{username}]', function ($request, $response, $args) {
	$connection = $this->get("db");
	$username=$args['username'];
	$query='select count(*) from slimtable where username="'.     $args['username'].'"';
	$result=$connection->query($query);
	$num_rows=$result->fetchColumn();
	 if($num_rows >0)
	 {
	  $response->write("User Already Exists");
	 }  
         return $response;
})->setName('checkdata'); 

	
$app->post('/register', function(Slim\Http\Request $request, Slim\Http\Response $response, array $args){
	$firstname = $request->getParam('firstname');
 	$lastname = $request->getParam('lastname');
	$username = $request->getParam('username');
	$password = $request->getParam('password');
	$connection = $this->get("db");
	$uri = $request->getUri();
	$query="insert into slimtable(`firstname`,`lastname`,`username`,`password`) values('$firstname','$lastname','$username','$password')";
    $result=$connection->query($query);
	if($result)
	  {  
		      $vars = [
            'page' => [
            'thanks' => "Registered Successfully"
		    ],
        ];
      $basePath = $request->getUri()->getBasePath();
       		 //return $this->view->render($response, 'register.twig.html', $vars);
			 
			return $response->withHeader('Location', $basePath);
	  }	  
});
$app->run();
