<?php
session_start();
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
    $view->getEnvironment()->addGlobal('flash', $container['flash']);
    return $view;
};


// Register provider
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['db'] = function ($c) {
    
    $pdo = new PDO("mysql:host=" . "localhost" . ";dbname=" . "slimdb",
        "root", "password1");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
}; 
 
$app->get('/', function (Slim\Http\Request $request, Slim\Http\Response $response, array $args)   {
	
	$basePath = $request->getUri()->getBasePath();
   $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'password_status' => '',
			'thanks'=>'',
			'base_url' =>$basePath
		    ],
          ];
          return $this->view->render($response, 'login.twig.html', $vars);
});



$app->get('/login', function (Slim\Http\Request $request, Slim\Http\Response $response, array $args)   {
	
	$basePath = $request->getUri()->getBasePath();
   $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'thanks'=>'',
			'base_url' =>$basePath
		    ],
          ];
          return $this->view->render($response, 'login.twig.html', $vars);
})->setName('login'); 
	
	 
$app->post('/postlogin', function($request, $response, $args)  use($app) {
  
	$connection = $this->get("db");
	$basePath = $request->getUri()->getBasePath();
	$username=$request->getParam('username');;
	$password=$request->getParam('password');
	
	if (!empty($username) && !empty($password) ){

    $query='select count(*) from slimtable where username="'.$username.'" and  password="'.$password.'"';
	$result=$connection->query($query);
	$num_rows=$result->fetchColumn();
	 if($num_rows >0)
	 {
	  $password_status=1;
	 }  
	 else
	 {
		 $password_status=2;
     }	
	 
	  $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'password_status' => $password_status,
			'thanks'=>'',
			'base_url' =>$basePath
		    ],
          ];
	  $this->flash->addMessage('password_status', $password_status);
	 return $response->withRedirect($this->get('router')->pathFor('login'));
 	} 
	
	else {
	       
		   
		   return $response->withRedirect($this->get('router')->pathFor('login'));
		   
 
	}
	
 
})->setName('postlogin'); 


$app->run();
