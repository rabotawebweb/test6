<?php
$servername = "localhost";
$database = "test6";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$html1 = '<table><tr><td>TEL</td><td>NAME</td><td>DATA</td></tr>';

if($_POST['text'] == 'get_tel') {
	
	$result = mysqli_query($conn, 'SELECT * FROM telefony ');
	while ($row = mysqli_fetch_assoc($result)) {
		$html1 .= '<tr><td>'.$row['tel'].'</td><td>'.$row['name'].'</td><td>'.$row['data'].'</td></tr>';
	}
	$html1 .= '</table>';
	
	print $html1;
	
} else {

	parse_str($_POST['text'], $data1);

	$tel1 = $data1['tel1'];
	$name1 = $data1['name1'];
	$desc1 = $data1['data1'];

	//print  $desc1;

	$sql = "INSERT INTO telefony (tel, name, data) VALUES ('$tel1', '$name1', '$desc1')";
	if(mysqli_query($conn, $sql)){
		echo "Записи успешно вставлены.";
	} else{
		echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($conn);
	}

}

mysqli_close($conn);
?>