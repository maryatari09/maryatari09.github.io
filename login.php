<!DOCTYPE html>
<html>
<head>
    <title>APP PEMOGRAMAN WEB LANJUT</title>
    <style type="text/css">
        .frmlogin{
            font:bold 16px Tahoma,Verdana;
                display:block;
                border:#7596c0 1px solid;
                width:400px;
                height:280px;
                margin-left:auto;
                margin-right:auto;
                border-radius:5px;
                background-color:#98c1f3;
                box-shadow: 5px 5px 5px rgb(150, 149, 149); 
                visibility:visible;
                color:#e9ecf0;
        }
        h3{
            font:bold 20px Tahoma,Verdana;
                margin:0 0 0 0;
                padding:0 0 0 0;
                color:#2572d2;
                text-align:center;
                line-height:50px;
                border-bottom:#ffffff 1px solid;
        }
        form-group{
            margin:0 20px 0 20px;
        }
        input.input-text{
                font:normal 14px Tahoma,Verdana;
                padding:10px;
                margin:5px 0 5px 0;
                width:80%;
                background-color:#dee9f6;
        }
        button.btn-btn{
                font:bold 14px Tahoma,Verdana;
                padding:10px;
                margin:5px 0 10px 0;
                width:86%;
                text-align:center;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

</head>
<body align="center" id="bd">
    <div id="container">
        <div id="hasil"></div>
        <form class="frmlogin" id="formLogin" action="login_proses.php" method="post">
            <h3><span>LOGIN FORM</span></h3><p></p>
            <div class="form-group">
                <div class="form-group">
                <input type="text" name="username" id="username" class="input-text" placeholder="Username" />
                </div>
                <div class="form-group">
                <input type="password" name="password" id="password" class="input-text" placeholder="Password" /><p></p>
                </div>
                <div class="form-group">
                <button type="submit" id="tombollogin" class="btn-btn" value="Login">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
$(document).ready(function() {
    $("#tombollogin").click(function() {
 
        var aksilogin = $("#frmlogin").attr('action');
        var datalogin = {
            username: $("#username").val(),
            password: $("#password").val()
        };
 
        $.ajax({
            type: "POST",
            url: aksilogin,
            data: datalogin,
            success: function(aksi)
            {
                if(aksi == '1')
                    $("#frmlogin").slideUp('slow', function() {
                        $("#hasil").html("<p class='berhasil' align='center'>Anda Berhasil Login<br>Halaman akan dialihkan dalam 5 detik...<meta http-equiv='refresh' content='5; url=http://gedelumbung.com'></p>");
                    });
                else
                    $("#frmlogin").slideUp('slow', function() {
                        $("#hasil").html("<p class='gagal' align='center'>Username atau Password salah...!!! <br> <a onClick=buka(); style='cursor:pointer;'>Ulangi Lagi<a></p>");
                    });
                document.frmlogin.username.value = "";
                document.frmlogin.password.value = "";
            }
        });
        return false;
    });
});
function buka()
{
    $('#frmlogin').slideDown();
}
</script>
</html>