<style>



table.grid {
	border-collapse: collapse;
	width: 100%;
	border: 1px solid black;
	margin: 0 0 10px;
	background:white;


}
table.grid tr {
	border-top: 1px solid white;


}

table.grid tr td {
	border-right: 1px solid #ccc;
	vertical-align: middle;
	font-size: 1em;
	border-bottom: 1px solid #ccc;
	padding: 8px 10px;
	width:500px;
	color:black;
}
table.grid tr td > table {
	display: table;
}

table.grid th {
	
	background-image: -webkit-linear-gradient(top, white, #DFDFDF);
	padding: 4px 9px;
	border-right:1px solid white;
	color:#236A94;
	
}
a.edit {
	background-image: url("http://localhost/hubla_banten/themes/default/img/icons/color/16/edit.png");
	
}

a.delete {
	background-image: url("http://localhost/hubla_banten/themes/default/img/icons/color/16/minus_white.png");
	
}

.odd{
	background:#ccc; 
}

.even{
	background:white; 
}



</style>
<?php 

$user = array ('alfath thariq','adul rahman','ichan sukasih','echo code','hanif saputra','parman sutarjo','alif gomeng','tukul sambora','sammi simorangkir','farid hidayat');
echo "<table class='grid'>";

echo "<tr>";
echo "<th><input type='checkbox'></th>";
echo "<th>User Name</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Email</th>";
echo "<th>Action</th>";
echo "</tr>";

$i = 0;
foreach($user as $u){
	$warna = ($i % 2 == 0) ? 'class="even"</tr>':'class="odd"</tr>';
	$uname = explode(' ',$u);
	echo "<tr " . $warna;
	echo "<td ><input type='checkbox'></td>";
	echo "<td >$uname[0]"."$uname[1]</td>" ; 
	echo "<td >$uname[0]" . ' ' ."$uname[1]</td>" ;
	echo "<td >$uname[1]</td>" ;
	echo "<td >$uname[1]" . "@yahoo.com</td>" ;
	echo "<td><a class='edit'></a><a class='delete'></a></td>" ;
	echo "</tr>";
	$i++;
}

echo "</table>";

?>
