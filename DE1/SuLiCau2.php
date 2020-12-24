<?php 
$conn = mysqli_connect('localhost', 'root', '', 'quanlithuvien') or die ('Can not connect to mysql');
$NgayMuon = $_POST['NgayMuon'];
$query = mysqli_query($conn, "select * from sach where namxb='$NgayMuon'");
$result = array();

if (mysqli_num_rows($query) > 0)
{
    $temp=1;
    while ($row = mysqli_fetch_array($query)){
        $result[] = array(
            'stt'    => $temp,
            'masach' => $row['masach'],
            'tuade'  => $row['tuade']
        ); 
        $temp++;
    }
}
die (json_encode($result));
?>