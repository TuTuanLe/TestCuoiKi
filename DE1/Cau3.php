<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 3</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div id="showData"></div>
    </>
    <script>
        $(document).ready(function(){      
            function showData(){
                $.ajax({
                    type: "POST",
                    url: "SuLiCau3.php",
                    success: function (response) {
                        $('#showData').html(response);                    
                    }
                });  
            }
            showData();
            $(document).on('click','.Xoa', function(){
                 var MaSach=$(this).data('masach');     
                 var MaDocGia =$(this).data('madocgia');
                 console.log(MaDocGia+MaSach);
                 $.ajax({
                     type: "POST",
                     url: "SuLiCau3.php",
                     data: {MaSach:MaSach, MaDocGia:MaDocGia},
                     success: function (response) {
                               showData();               
                     }
                 });
            });

        });

    </script>
</body>
</html>