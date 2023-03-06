<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	$servername = "192.168.150.213";
	$username = "webprogmi212";
	$password = "b3ntRhino98";
	$dbname = "webprogmi212";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
}
?>

<?php
$db = $conn;

$tableName = "jsdurano_guests";

$columns = ['gstname', 'email', 'website', 'vtuber', 'messages'];

$fetchdata = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
    if (empty($db)){
        $msg = "Database Connection Error";
    } elseif (empty($columns) || !is_array($columns)){
        $msg = "Column names must be defined in an indexed array";
    } elseif (empty($tableName)){
        $msg = "Guestlist is empty";
    } else {

        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY id ASC";
        $result = $db->query($query);

        if ($result == true){
            if ($result->num_rows > 0){
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "Error you got no Maidens";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
?>
</body>
</html>