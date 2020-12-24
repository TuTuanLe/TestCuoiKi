<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlcs') or die ('Can not connect to mysql');
    if(isset($_POST['date'])){
        $date = $_POST['date'];
        $str = "select * from casi where namsinh ='$date'";
        $query = mysqli_query($conn, $str);
        $html='<p>Danh Sách Ca Sĩ</p>
                <table class="table">
                    <tr>
                        <th>STT</th>
                        <th>Tên Ca Si</th>
                    </tr>
        ';
        if(mysqli_num_rows($query)>0)
        {
            $count=1;
            while($rows = mysqli_fetch_array($query))
            {
                $html.= '
                    <tr>
                        <td>'.$count.'</td>
                        <td>'.$rows['tencasi'].'</td>
                    </tr>
                ';
                $count++;
            }
        }
        $html.= '</table>';
        echo $html;
    }
?>