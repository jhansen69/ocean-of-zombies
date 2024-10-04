// backend/config/database.php
require_once __DIR__ . '/../vendor/autoload.php';
DB::$user = getenv('DB_USER');
DB::$password = getenv('DB_PASS');
DB::$dbName = getenv('DB_NAME');
DB::$host = getenv('DB_HOST');
