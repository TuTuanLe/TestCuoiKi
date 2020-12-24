<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Cuối Kì</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <h3>Câu 3</h3>
    <div class="col-md-5">
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'qlcs') or die ('Can not connect to mysql');
            $str = "select * from nguoinghe";
            $query = mysqli_query($conn, $str);
            $html='
                <select id="TenNguoiNghe" class="form-control">
            
            ';
            if(mysqli_num_rows($query)>0)
            {
                while($rows = mysqli_fetch_array($query)){
                    $html.='
                        <option value="'.$rows['mann'].'">'.$rows['tennn'].'</option>
                    ';
                }
            }
            $html.="</select>";
            echo $html;
        
        ?>

   
    <div id="result"></div>
    </div>
    
    <script>
        $(document).ready(function (e) {
           function getData(){
                var id= $('#TenNguoiNghe').val();
                $.ajax({
                    type: "POST",
                    url: "SuLiCau3.php",
                    data: {id:id},
                    success: function (response) {
                        $("#result").html(response);                        
                    }
                });               
            }
            $('#TenNguoiNghe').change(function(){
                getData();
            });
            
            $(document).on('click','.Xoa',function(){
                var maplaylist=$(this).data('id');    
                $.ajax({
                    type: "POST",
                    url: "SuLiCau3.php",
                    data: {maplaylist:maplaylist},
                    success: function (response) {
                        getData();                
                    }
                });
            });

        });
    </script>
</div>
</body>
</html>







