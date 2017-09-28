<?php
include "header.php";
include_once 'db.php';
?>

<div class="row">

    <div class="container col-sm-4"></div>

    <div class="col-sm-4 container-fluid loginwindow">
        <form action="process.php" onsubmit=" " method="POST" id="loginform" role="form">
            <legend style=" text-align: center "><h1 id="logh1">Login </h1></legend>
            <div class="form-group form-horizontal">
                <label class="marginform" for="username">username</label>
                <input type="text" class="form-control" name="username" required id="user" placeholder="Username">
                <label class="marginform" for="password">password</label>
                <input type="password" class="form-control " name="" id="pass" placeholder="Password" required>
                <div class="form-inline"><label style="margin: 2%" for="savebox">save your login</label><input
                            type="checkbox"></div>
                <div ng-app="" class="form-horizontal text-danger"   style="text-align: center; color: red"><h5 id="incorrect"  ></h5></div>
            </div>
            <button type="submit" class="btn btn-primary btn-success" id="logsubmit">Login</button>
        </form>
    </div>


</div>

<script>
    $(document).ready(function(){
        $("#loginform").submit(function(e){
e.preventDefault();
            $("#incorrect").html(" ");
            $.post("process.php",
                {
                    username: $("#user").val(),
                    password:  $("#pass").val(),
                    value:"1"
                },
                function(data,status){
                    $("#incorrect").html(data);
                    $("#pass").val('');
                });
        });
    });
</script>
<script>


//$("#loginform").submit(function (e) {
//  var login = "username=" + $("#user").val()+ "&password=" + $("#pass").val() + "&value=l";
//    var login="aaa";
//
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function() {
//        if (this.readyState == 4 && this.status == 200) {
//            alert(this.responseText);
//        }
//    }
//    xhttp.open("GET", "a.php", true);
//    xhttp.send(login);
//   e.preventDefault();
//});




</script>
<?php
include "footer.php";
?>








