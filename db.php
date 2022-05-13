<?

$db = new PDO('mysql:host=localhost;dbname=market', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
