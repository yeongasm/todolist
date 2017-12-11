<?php 
include_once("database.connection.php");

$sql = 'SELECT * FROM NPINS'; 
$results = $conn->query($sql); 
if (!$results){
	echo "ERROR: ".$sql."<br>".$results->error;
			return false;
} else {
	$i = 0;
	while ($row = $results->fetch_assoc()){
		echo "
		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/canvas.css\">
		<script src=\"../js/ajax.canvas.js\"></script>
		<div id=\"note_container\" class=\"container\">
			<div id=\"container_header\">
				<span id=\"note_title\" class=\"container_header\"><h3>".$row['PNAME']."</h3></span>
				<i id=\"trash_icon_".$i."\" class=\"trash_icon fa fa-trash\" aria-hidden=\"true\"><span id=\"note_id\" style=\"display: none\">".$row['PID']."</span></i>
				<div id=\"note_tag\" class=\"container_header\">".$row['PTAG']."</div>
			</div>
			<div id=\"note_text\">
				<div id=\"note_text_contents\">".$row['PTEXT']."</div>
			</div> 
		</div>";
		$i++;
	} 
}
?>