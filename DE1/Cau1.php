<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Cuối Kì</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- câu 1 -->
<div class="container">


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_">
                                                Open modal
                                            </button>
<div class="modal" id="myModal_">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    <h3>Câu 1</h3>
    <form action="#" method="POST" class="form-group">
        <label for="">Mã Sách</label>
        <input type="text" class="form-control" name="MaSach" id="MaSach">
        <label for="">Tựa Đề</label>
        <input type="text" class="form-control" name="TuaDe" id="TuaDe">
        <label for="">Năm sản xuất</label>
        <input type="date" class="form-control" name="NamSanXuat" id="NamSanXuat">
        <label for="">Giá</label>
        <input type="number" class="form-control" name="Gia" id="Gia">
        <label for="">Trạng Thái</label>
        <input type="checkbox" class="form-control" name="TrangThai" value="yes" id="TrangThai">
        <input type="submit" class="btn btn-primary" value="Them" name="Them" id="Them"  >
    </form>
    
</div>
<h3>Load Du Lieu Ra Bang</h3>
<div id="load_data"></div>
</body>
</html>
    
<script> 
  

    $(document).ready(function(){
        function fetch_data()
        {
            $.ajax({
                type: "POST",
                url: "SuLiCau1.php",
                success: function (data) {
                        $('#load_data').html(data);         
                }
            });
        }
        fetch_data();
        $("#Them").on('click', function(){
            var MaSach= $('#MaSach').val();
            var TuaDe = $('#TuaDe').val();
            var NamSanXuat= $('#NamSanXuat').val();
            var Gia = $('#Gia').val();
            var TrangThai = $('#TrangThai').val();
            $.ajax({
                type: "POST",
                url: "SuLiCau1.php",
                data: {MaSach:MaSach,TuaDe:TuaDe,NamSanXuat:NamSanXuat, Gia:Gia, TrangThai:TrangThai},
                success: function (response) {
                        // alert("insert Du Lieu Thanh Cong");          
                        fetch_data(); 
                }
            });
        });
      
    });

    

</script>





