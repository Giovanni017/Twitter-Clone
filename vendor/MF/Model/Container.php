<?php

namespace MF\Model;

use App\Connection;

class Container {

	public static function getModel($model) {
		$class = "\\App\\Models\\".ucfirst($model);
		$conn = new \PDO(

			"mysql:host=localhost;dbname=twitter_clone;charset=utf8",
			
			"root",
			
			"root");
			
			

		return new $class($conn);
	}
}


?>