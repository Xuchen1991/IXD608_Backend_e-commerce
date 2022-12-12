<?

function MYSQLIAuth() {
	return [

		"localhost", // localhost
		"i8201648_wp1", // my database user name
		"Kevinxxc1991", // database password
		"ixd608_store_products" // database name

	];
}

function PDOAuth() { // PDO = PHP data object
	return[
		"mysql:host=localhost;dbname=ixd608_store_products",
		"i8201648_wp1",
		"Kevinxxc1991",
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}



?>