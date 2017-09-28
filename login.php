<?php
include "header.php";
?>

<div class="row">

    <div class="container col-sm-4"></div>

    <div class="col-sm-4 container-fluid loginwindow">
        <form action="" onsubmit="return false;log();"  method="POST"   id="loginform"  role="form">
            <legend style=" text-align: center " > <h1 id="logh1">Login </h1> </legend>
            <div class="form-group form-horizontal">
                <label  class="marginform" for="username">username</label>
                <input type="text" class="form-control" name="username" required id="user" placeholder="Username">
                <label class="marginform"  for="password">password</label>
                <input type="password" class="form-control " name="" id="pass" placeholder="Password" required>
                <div class="form-inline">  <label style="margin: 2%" for="savebox">save your login</label><input type="checkbox"></div>
                <div class="form-horizontal hidden" style="text-align: center; color: red"> <h4>Username/Password incorrect</h4></div>
            </div>
            <button type="submit" class="btn btn-primary btn-success"   id="logsubmit">Login</button>
        </form>
    </div>



</div>
<script>

    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP ");
    }
    $("#loginform").submit(function () {

        var login="username="+$("#user").val()+"&password="+$("#pass").val()+"&val=l";
        alert(login);

        xhttp.open("post","<?php echo $_SERVER['PHP_SELF']  ?>","true");
        xhttp.send(login);
        var  a=xhttp.responseText;


    });




</script>
<?php
include  "footer.php";
?>








