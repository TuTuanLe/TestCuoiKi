<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlcs') or die ('Can not connect to mysql');
   
    if(isset($_POST['id'])){
        $id= $_POST['id'];
        $str = "select * from nguoinghe nn, playlist p where nn.mann = p.manguoinghe and p.manguoinghe ='$id'";
        $html='
        <table class="table">
            <tr>
                <td>STT</td>
                <td>Tên PlayList</td>
                <td>Chức Năng</td>
            </tr>
        ';
        $query = mysqli_query($conn, $str);
        $html='
            <table class="table">
                <tr>
                    <td>STT</td>
                    <td>Tên PlayList</td>
                    <td>Chức Năng</td>
                </tr>
        ';
        if(mysqli_num_rows($query)>0)
        {
            $count=1;
            while($rows= mysqli_fetch_array($query)){
                $html.='
                    <tr>
                        <td>'.$count.'</td>
                        <td>'.$rows['tenplaylist'].'</td>
                        <td><button data-id="'.$rows['maplaylist'].'" class="btn btn-danger Xoa">Xóa</button></td>
                    </tr>
                ';
                $count++;
            }
        }
        $html.='</table>';
       echo $html;
    }
    if(isset($_POST['maplaylist'])){
        $maplaylist = $_POST['maplaylist'];
        mysqli_query($conn, "delete from playlist where maplaylist='$maplaylist'");
    }
    
?>