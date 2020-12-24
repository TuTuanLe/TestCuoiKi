<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Cuối Kì</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- câu 1 -->
<div class="container">
    <h3>Câu 1</h3>
    <div class="col-md-5">
    <form action="#" method="POST" class="form-group">
        <label for="">Mã Bài Hát</label>
        <input type="text" class="form-control" name="MaBaiHat" >
        <label for="" >Tên Bài Hát </label>
        <input type="text" class="form-control" name="TBH" >
        <label for="">Thể Loại</label>
        <input type="text" class="form-control" name="TheLoai" >
        <input type="submit" class="btn btn-primary btn-block" value="Them" name="Them" id="Them"  >
    </form>
    
    </div>
    
</div>
</body>
</html>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlcs') or die ('Can not connect to mysql');
    if(isset($_POST['Them'])  && $_POST['Them'] == 'Them')
    {
       
        $MaBaihat = $_POST['MaBaiHat'];
        $TenBaiHat = $_POST['TBH'];
        $TheLoai = $_POST['TheLoai'];
        echo "insert into baihat values ('$MaBaihat', '$TenBaiHat', '$TheLoai') ";
        $query = mysqli_query($conn, "insert into baihat values ('$MaBaihat', '$TenBaiHat', '$TheLoai') ");
        if(mysqli_num_rows($query) > 0)
        {
            echo "insert thanfh cong ";
        }else{
            echo "insert khong thnafh cong";
        }
    }



?>





