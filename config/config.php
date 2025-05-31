<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:villarentdb.database.windows.net,1433; Database = villadb", "villarentdb-admin", "Aksh@t32");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "villarentdb-admin", "pwd" => "Aksh@t32", "Database" => "villadb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:villarentdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
