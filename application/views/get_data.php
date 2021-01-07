<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'stunting' 
); 
 
// DB table to use 
$table = 'partisipan'; 
 
// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'name_anak', 'dt' => 0 ), 
    array( 'db' => 'bidan',  'dt' => 1 ), 
    array( 'db' => 'puskesmas',      'dt' => 2 ), 
    
); 
echo "asdadasda";
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);