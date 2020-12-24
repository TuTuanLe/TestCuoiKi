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
    <h3>Câu 2</h3>
    <div class="col-md-5">
        <label>Ngày Sinh</label>
        <input type="date" class="form-control" name="ngaysinh"  id="ngaysinh">
    </div>
    <div id="result">
    </div>
    <script>
        $(document).ready(function (e) {
            $('#ngaysinh').change(function(){
                var date= $('#ngaysinh').val();
                $.ajax({
                    type: "POST",
                    url: "SuLiCau22.php",
                    data: {date:date},
                    success: function (response) {
                    $('#result').html(response);     
                    }
                });
            }); 
        });
    </script>
</div>
</body>
</html>







