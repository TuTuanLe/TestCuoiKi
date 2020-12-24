<?php
            $conn = mysqli_connect('localhost', 'root', '', 'quanlithuvien') or die ('Can not connect to mysql');
            $query = mysqli_query($conn, 'select * from muonsach ms,docgia dg where ms.madocgia = dg.madocgia');   
            $html = '
                <table class="table">
                    <tr>
                        <td>STT</td>
                        <td>Tên Độc Giả</td>
                        <td>Mã Sách</td>
                        <td>Chức Năng</td>
                    </tr>';
          
            if (mysqli_num_rows($query) > 0)
            {
                $count=1;
                while ($row = mysqli_fetch_array($query)){
                    $html.='<tr>';
                        $html.='<td>'.$count.'</td>';
                        $html.='<td>'.$row['tendocgia'].'</td>';
                        $html.='<td>'.$row['masach'].'</td>';
                        $html.='<td><button class="btn btn-danger Xoa" data-madocgia='.$row['madocgia'].' data-masach='.$row['masach'].'  >Xóa</button></td>';
                    $html.='</tr>';
                    $count++;
                }
            }
            $html.='</table>';
            echo $html;
            if(isset($_POST['MaSach']) && isset($_POST['MaDocGia']))
                  $queryDelete = mysqli_query($conn,'delete from muonsach where masach="'.$_POST['MaSach'].'" and madocgia = "'.$_POST['MaDocGia'].'"' );  

?>