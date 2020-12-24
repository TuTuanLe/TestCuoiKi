<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 4</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <?php
        $html= '<table class="table">
                    <tr>
                        <th>STT</th>
                        <th>Tên Độc Giả</th>
                    </tr>';
        $StrQuery='select dg.tendocgia
                from docgia dg
                where not exists(
                    select * 
                    from sach s
                    where not exists(
                        select *
                        from muonsach ms
                        where ms.masach = s.masach and ms.madocgia = dg.madocgia ))';
        
        
        $conn = mysqli_connect('localhost', 'root', '', 'quanlithuvien') or die ('Can not connect to mysql');
        $Query = mysqli_query($conn,$StrQuery);
        if(mysqli_num_rows($Query)>0)
        {
            $count=1;
            while ($rows= mysqli_fetch_array($Query)){
                $html.='
                    <tr>
                        <td>'.$count.'</td>
                        <td>'.$rows['tendocgia'].'</td>
                    </tr>
                ';
            }
        }
        $html.="</table>";
        echo $html;
    ?>
    </div>
  
</body>
</html>