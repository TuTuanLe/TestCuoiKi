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
    <h3>Câu 5</h3>
    <div class="col-md-5">
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'qlcs') or die ('Can not connect to mysql');
            $str = "     select bh.tenbaihat , count(bh.mabaihat) as solan
                         from baihat bh, playlist_baihat bh_p
                         WHERE bh.mabaihat = bh_p.mabaihat 
                         group by bh.mabaihat
                         order by solan desc 
                         limit 10
            ";
            $query = mysqli_query($conn, $str);
            $html='
                <table class="table">
                    <tr>
                        <th>TÊN BÀI HÁT</th>
                        <th>SỐ LẦN</th>
                    </tr>
            ';
           
            if(mysqli_num_rows($query)>0)
            {
                $count=1;
                while($rows= mysqli_fetch_array($query))
                {
                    $html.='
                    <tr>
                        <td>'.$count.'</td>
                        <td>'.$rows['tenbaihat'].'</td>
                        <td>'.$rows['solan'].'</td>
                    <tr>';
                }
            }
            $html.="</table>";
            echo $html;
        ?>
</div>
</body>
</html>







