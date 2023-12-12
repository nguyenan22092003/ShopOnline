<?php
//Hien thi loi o che do debug
error_reporting(E_ALL);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR);

//Tham so DB
// include "db_conn.php";

function sqlExecute($sql, $types='', ...$values) {
	global $conn;

	if ($types) {
		$stmt = $conn->prepare($sql);	
		$stmt->bind_param($types, ...$values);
		return $stmt->execute();		
	} else {
		return $conn->query($sql);
	}

}

function sqlGetAll($sql, $types = '', ...$values) {
	global $conn;

	$result = sqlExecute($sql, $types, ...$values);		
	return $result->fetch_all(MYSQLI_ASSOC);
}

function sqlGet($sql, $types = '', ...$values) {
	return sqlGetAll($sql, $types, ...$values)[0] ?? [];
}

function redirect($url) {
	header("Location: $url");
	exit;	
}