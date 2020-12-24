<?php
    $conn = mysqli_connect('localhost', 'root', '', 'quanlithuvien') or die ('Can not connect to mysql');
    if(isset($_POST['MaDocGia'])){
        $html='<p>Danh Sách Các Sách Đã Mượn</p>
            <table class="table">
                <tr>
                    <th>STT</th>
                    <th>Tên Sách</th>
                </tr>';
        $query = mysqli_query($conn, 'select * 
                                      from muonsach ms,docgia dg, sach s
                                      where ms.madocgia = dg.madocgia  and 
                                            ms.masach   = s.masach     and
                                            dg.madocgia = "'.$_POST['MaDocGia'].'"');
        if (mysqli_num_rows($query) > 0)
        {
            $count=1;
            while ($row = mysqli_fetch_array($query)){
                $html.='
                    <tr>
                        <td>'.$count.'</td>
                        <td>'.$row['tuade'].'</td>
                    </tr>
                ';
            }
        }
        $html.='</table>';
        echo $html;
    }

?>