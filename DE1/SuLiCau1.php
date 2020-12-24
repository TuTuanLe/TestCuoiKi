<?php
    // chèn dũ liệu 
    if(isset($_POST['MaSach']) ){
        $conn = mysqli_connect('localhost', 'root', '', 'quanlithuvien') or die ('Can not connect to mysql');
        $MaSach = $_POST['MaSach'];
        $TuaDe = $_POST['TuaDe'];
        $NamSanXuat = $_POST['NamSanXuat'];
        $Gia = $_POST['Gia'];
        $TrangThai =0;
        if(isset($_POST['TrangThai']))
        {
            $TrangThai=1;
        }
        $str = "insert into Sach values ('$MaSach','$TuaDe',$Gia,'$NamSanXuat', $TrangThai)";
        $result = mysqli_query($conn , $str);
    }


    // lấy dữ liệu 
    $output='';
    $conn = mysqli_connect('localhost', 'root', '', 'quanlithuvien') or die ('Can not connect to mysql');
    $sql_select = mysqli_query($conn,'select * from sach ' );
    $output.='
        <table class="table">
            <tr>
                <th>Mã Sách </th>
                <th>Tựa Đề</th>
                <th>Giá</th>
                <th>Năm Sản Xuất</th>
                <th>Trạng Thái</th>
            </tr>';
    if(mysqli_num_rows($sql_select)>0)
    {
        while($row = mysqli_fetch_array($sql_select)){
            $output.='
                <tr>
                    <td>'.$row['masach'].'</td>
                    <td>'.$row['tuade'].'</td>
                    <td>'.$row['gia'].'</td>
                    <td>'.$row['namxb'].'</td>
                    <td>'.$row['trangthai'].'</td>
                </tr>';
        }
    }
    $output.="</table>";
    echo $output;

?>