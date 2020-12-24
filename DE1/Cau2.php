<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <input type="date" class="form-control" name="NgayMuon" id="NgayMuon">
            <div id="result"></div>
        </div>      
        <script language="javascript">
            $('#NgayMuon').change(function (e)
            { 
                var NgayMuon = $('#NgayMuon').val();
                $.ajax({
                type: "POST",
                url: "SuLiCau2.php",
                data: {NgayMuon:NgayMuon},
                dataType: 'json',
                success: function (result) {
                    var html ='';
                    html+='<table class="table" >';
                    html+='<tr><td>STT</td><td>Mã Sách</td><td>Tựa Đề</td><tr>';
                    $.each(result,function(key,item){
                        html += '<tr>';
                                html +=  '<td>';
                                    html +=  item['stt'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['masach'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['tuade'];
                                html +=  '</td>';
                        html +=  '<tr>';
                    });
                    html+='</table>';
                    

                    $('#result').html(html);
                 }
            }); 
        });  
 
    </script>
         
    </body>
</html>