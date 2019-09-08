<?php

/* We need to specify where to look for templates. */
define('TEMPLATE_DIRECTORY', __DIR__  . '/templates');
define('TEMPLATE_404', '404.html');


require_once '../src/index.php';

/*
not needed  if we don't use blueprints 

require_once 'IndexBP.class.php';
require_once 'FruitsBP.class.php';

/* Creating the app */
$app = new Flask();

$app->route('/fruits', function() {
    return json_encode([
        'apple',
        'banana',
        'raspberry',
        'papaya',
        'orange'
    ]); 
});



//gurugeek  8 Sept 2019 
// simple example to display a variable in the twig template
// we would need to display elements from the mysql 'pages' table like title and content
// and show them in the template 




$app->route ('/', function () {
    $fruit = "papaya";
    return render_template('index.html', ['fruit' => $fruit]);;

});


//TODO 
// we need to fetch data from the DB for the pages so something like
//$sql="select * from pages where page='".mysqli_escape_string($db,$p)."'";
//$res=mysqli_query($db,$sql);
// so we need to use the page title for a dynamic route /$_GET['page']



// Not sure if blueprints are needed 

/*
/* Blueprints */
//$index_bp = new IndexBP();
//$fruits_bp = new FruitsBP();

/* Registering our blueprints */
//$app->register_blueprint($index_bp);
//$app->register_blueprint($fruits_bp);
/* Running our app */
$app->run(true);
