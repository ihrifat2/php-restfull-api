<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//Get All users
$app->get('/api/users', function(Request $request, Response $response){
	$sql = "SELECT * FROM customers";

	try {
		//Get Db Object
		$db = new db();
		// Connect
		$db = $db->connect();

		$statement = $db->query($sql);
		$users = $statement->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($users);
	} catch(PDOException $e){
		echo "{'error': {'text': ".$e->getMessage()."}}";
	}
});

//Get Single user
$app->get('/api/user/{id}', function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	$sql = "SELECT * FROM customers WHERE id = $id";

	try {
		//Get Db Object
		$db = new db();
		// Connect
		$db = $db->connect();

		$statement = $db->query($sql);
		$user = $statement->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($user);
	} catch(PDOException $e){
		echo "{'error': {'text': ".$e->getMessage()."}}";
	}
});

//Add user
$app->post('/api/user/add', function(Request $request, Response $response){
	$first_name 	= $request->getParam('first_name');
	$last_name 		= $request->getParam('last_name');
	$phone 			= $request->getParam('phone');
	$email 			= $request->getParam('email');
	$address 		= $request->getParam('address');
	$city 			= $request->getParam('city');
	$state 			= $request->getParam('state');

	$sql = "INSERT INTO customers (first_name, last_name, phone, email, address, city, state) VALUES (:first_name, :last_name, :phone, :email, :address, :city, :state)";

	try {
		//Get Db Object
		$db = new db();
		// Connect
		$db = $db->connect();

		$statement = $db->prepare($sql);

		$statement->bindParam(':first_name', 	$first_name);
		$statement->bindParam(':last_name', 	$last_name);
		$statement->bindParam(':phone', 		$phone);
		$statement->bindParam(':email', 		$email);
		$statement->bindParam(':address', 		$address);
		$statement->bindParam(':city', 			$city);
		$statement->bindParam(':state', 		$state);

		$statement->execute();

		echo "{'notice': {'text': 'User Added'}}";
	} catch(PDOException $e){
		echo "{'error': {'text': ".$e->getMessage()."}}";
	}
});

//Update user
$app->put('/api/user/edit/{id}', function(Request $request, Response $response){
	$id = $request->getAttribute('id');

	$first_name 	= $request->getParam('first_name');
	$last_name 		= $request->getParam('last_name');
	$phone 			= $request->getParam('phone');
	$email 			= $request->getParam('email');
	$address 		= $request->getParam('address');
	$city 			= $request->getParam('city');
	$state 			= $request->getParam('state');

	$sql = "UPDATE customers SET first_name = :first_name, last_name = :last_name, phone = :phone, email = :email, address = :address, city = :city, state = :state WHERE id = $id";

	try {
		//Get Db Object
		$db = new db();
		// Connect
		$db = $db->connect();

		$statement = $db->prepare($sql);

		$statement->bindParam(':first_name', 	$first_name);
		$statement->bindParam(':last_name', 	$last_name);
		$statement->bindParam(':phone', 		$phone);
		$statement->bindParam(':email', 		$email);
		$statement->bindParam(':address', 		$address);
		$statement->bindParam(':city', 			$city);
		$statement->bindParam(':state', 		$state);

		$statement->execute();

		echo "{'notice': {'text': 'User Updated'}}";
	} catch(PDOException $e){
		echo "{'error': {'text': ".$e->getMessage()."}}";
	}
});

//Delete user
$app->delete('/api/user/delete/{id}', function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	$sql = "DELETE FROM customers WHERE id = $id";

	try {
		//Get Db Object
		$db = new db();
		// Connect
		$db = $db->connect();

		$statement = $db->prepare($sql);
		$statement->execute();

		echo "{'notice': {'text': 'User Deleted'}}";
	} catch(PDOException $e){
		echo "{'error': {'text': ".$e->getMessage()."}}";
	}
});