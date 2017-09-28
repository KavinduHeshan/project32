<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> DMC</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

    <script src="js files/angular.min.js"></script>
    <script src="js files/angular-animate.js"></script>
    <script src="js files/jquery.min.js"></script>
    <script src="js files/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/npm.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/header/footer.css">
    <script src="js files/header.js"></script>
    <link rel="stylesheet" href="bootstrap/css/login.css">
    <script src="angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/General.css">
    <link rel="stylesheet" href="css/navbar_both.css">

</head>

<!--header-->
<nav class="navbar navbar-default  container-fluid" style="background-color:#b3e0ff;margin-bottom: 0!important; " role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row  "style="background-color:#b3e0ff "  >

        <img class="col-sm-1 " style="height:100%;overflow: hidden"  src="img/Emblem_of_Sri_Lanka.svg.png"/>
        <div class="col-sm-10  title" >
            <p>Disaster Managemant center<br>
                Badulla District</p>
        </div>
        <img class="col-sm-1 col-lg-1 col-md-1  " width="50px"  height="130px" style="float: right;overflow: hidden; margin-top:0%" src="img/DMC (1).png"/>
    </div>

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span><!--
            <span class="icon-bar">uytsfgdh</span>
            <span class="icon-bar">tyugfhgh</span>
            <span class="icon-bar"></span>-->
        </button>
        <a class="navbar-brand" href="#">Title</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>

        <ul style="font-size:15px" class="nav navbar-nav navbar-right " >
            <li><a href="#"> <span class="glyphicon glyphicon-user"  > sgdh</span></a> </li>
            <li><a href="#">Logout</a></li>
            <!--     <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
                         <li><a href="#">Separated link</a></li>
                     </ul>
                 </li>-->
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<!-- header-->

<div class="row  " id="contain"  >
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 navbar_both" id="navleft"  >



        <table class="btn-group-vertical  ">

            <!--            <tr > <button type="button" class="btn btn-default btn-block">Apple</button> </tr>-->
            <tr > <button type="button" class="btn btn-default btn-block">Stakeholder  Information</button> </tr>
            <tr > <button type="button" class="btn btn-default btn-block">Gauge Reporters Contacts</button> </tr>
            <tr > <button type="button" class="btn btn-default btn-block">Documents</button> </tr>
            <tr > <button type="button" class="btn btn-default btn-block">Rain Graphs</button> </tr>
            <tr > <button type="button" class="btn btn-default btn-block">Message history</button> </tr>
            <tr > <button type="button" class="btn btn-default btn-block">Users</button> </tr>
            <tr > <button type="button" class="btn btn-default btn-block">settings </button> </tr>

        </table>

    </div>




    <div class="col-lg-8 col-sm-12 col-xs-12 col-md-10 " >
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>



        <div class="row"   >

            <div class="col-lg-8 col-lg-offset-2 admin_msg_win">
                <!--  <ul class="nav nav-tabs nav-tabs-justified">
                     <li class="active" data-toggle="tab"><a href="#tab1">Home</a></li>
                     <li><a data-toggle="tab"  href="#tab2">Profile</a></li>
                     <li><a data-toggle="tab"  href="#tab3">Messages</a></li>
                 </ul>

                 <div class="tab-content">
                     <div class="tab-pane fade in active" id="tab1">



                     </div>

                     <div class="tab-pane fade in active" id="tab2">
     bvmvm
                     </div>

                     <div class="tab-pane fade in active" id="tab3">
     bvm
                     </div>
                 </div>
     -->

                <div class="nav ">
                    <ul class="nav nav-tabs nav-tabs-justified" style="background-color:rgba(128, 128, 128, 0.17);">
                        <li class="active"><a data-toggle="tab" href="#sectionA">ADD</a></li>
                        <li><a data-toggle="tab" id="sss" href="#sectionB">Update</a></li>
                        <li><a data-toggle="tab" href="#sectionc">Delete</a></li>


                    </ul>
                    <div class="tab-content">
                        <!-- Addition-->
                        <div id="sectionA" class="tab-pane fade in active">
                            <br>
                            <div class="row">
                                <div class="col-lg-9 col-lg-offset-1">
                                    <legend class="legends">User Type</legend>
                                    <form style="padding:10px!important;margin-right: 20px;"
                                          class="form-group admin_msg_win"
                                          role="form">
                                        <center>

                                            <input type="radio" id="addstaffradio" class="radiobutton " name="radio"><label
                                                    for="radio1">Staff</label>
                                            <input type="radio" id="addgaugeradio" class="radiobutton" name="radio"><label
                                                    for="radio2">GaugeRanger </label>
                                            <input type="radio" id="addotherradio" class="radiobutton" name="radio"><label
                                                    for="radio3">Other officers </label>

                                        </center>

                                    </form>
                                    <div style="margin:10px;" id="add">


                                    </div>

                                </div>
                            </div>

                        </div>

                        <!--   end of Addition-->

                        <!--update-->

                        <div id="sectionB" class="tab-pane fade">


                            <br>
                            <div class="row">
                                <div class="col-lg-9 col-lg-offset-1">
                                    <legend class="legends">User Type</legend>
                                    <form style="padding:10px!important;margin-right: 20px;"
                                          class="form-group admin_msg_win"
                                          role="form">
                                        <center>

                                            <input type="radio" id="updatestaffradio" class="radiobutton "
                                                   name="radio"><label
                                                    for="radio1">Staff</label>
                                            <input type="radio" id="updategaugeradio" class="radiobutton"
                                                   name="radio"><label
                                                    for="radio2">GaugeRanger </label>
                                            <input type="radio" id="updateotherradio" class="radiobutton"
                                                   name="radio"><label
                                                    for="radio3">Other officers </label>

                                        </center>

                                    </form>
                                    <div style="margin:10px;" id="update">



                                    </div>

                                </div>
                            </div>

                        </div>

                        <!--end of update-->
                        <!-- Delete-->
                        <div id="sectionc" class="tab-pane fade">

                            <br>
                            <div class="row">
                                <div class="col-lg-9 col-lg-offset-1">
                                    <legend class="legends">User Type</legend>
                                    <form style="padding:10px!important;margin-right: 20px;"
                                          class="form-group admin_msg_win"
                                          role="form">
                                        <center>

                                            <input type="radio" id="deletestaffradio" class="radiobutton "
                                                   name="radio"><label
                                                    for="radio1">Staff</label>
                                            <input type="radio" id="deletegaugeradio" class="radiobutton"
                                                   name="radio"><label
                                                    for="radio2">GaugeRanger </label>
                                            <input type="radio" id="deleteotherradio" class="radiobutton"
                                                   name="radio"><label
                                                    for="radio3">Other officers </label>

                                        </center>

                                    </form>
                                    <div style="margin:10px;" id="delete">



                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--  end of delete-->
                    </div>
                </div>
            </div>




        </div></div>



    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  navbar_both" id="navright">

        <table class="btn-group-vertical" style="margin: 0;padding: 0;">
            <tr >
                <td>
                    <ul class="nav nav-pills navbar-btn-justified " role="listbox">
                        <li role="presentation" class="nav_badge"  ><a href="#">inbox <span class="badge" >42</span></a></li>
                        <li role="presentation"  class="nav_badge" ><a href="#">Requets<span class="badge">3</span></a></li>
                        <li role="presentation"  class="nav_badge " ><a href="#">Alerts<span class="badge alert-danger">3</span></a></li>
                    </ul>
                </td>
            </tr>



        </table>

        <table class="table table-bordered table-responsive">
            <tr >
                <th class="nav_th" >
                    Weather Report
                </th>
            </tr>
            <tr style="text-align: center; ">
                <td>
                    ffhg<br>hjkj<br>


                </td>

            </tr>
            <tr >
                <th class="nav_th"  >
                    Dangerous Areas
                </th>
            </tr>
            <tr class="alert-danger"><td>gfg<br>guh</td></tr>

            <tr >
                <th class="nav_th"  >
                    Warned Areas
                </th>
            </tr>
            <tr class="alert-warning"><td>gfg<br>guh</td></tr>
        </table>
    </div>

</div>
</div>





<footer id="ft" >
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-4 col-xs-6">
                    <h3> Ministry of Disaster Management  </h3>
                    <ul>
                        <li> <a href="info@dmc.gov.lk"> Website: info@dmc.gov.lk</a> </li>
                        <li> E-mail :  eoc@dmc.gov.lk</li>
                        <li > Tel   :  +94 11 2136136 </li>



                    </ul>
                </div>

                <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                    <h3>Badulla center </h3>
                    <ul>
                        <li> <a href="info@dmc.gov.lk"> Website: info@dmc.gov.lk</a> </li>
                        <li> E-mail :  eoc@dmc.gov.lk</li>
                        <li > Tel   :  +94 11 2136136 </li>
                    </ul>
                </div>
                <div class="col-lg-4  col-md-2 col-sm-4 col-xs-6">
                    <h3> Emergency contacts </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>

                    </ul>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left" > Copyright © uva Wellassa University  <?php echo date("Y")?>. All right reserved. </p>

        </div>
    </div>
    <!--/.footer-bottom-->


</footer>

</body>
<script>


    $(document).ready(function () {
        var addform = '<form class="admin_msg_win" id="addform" action="a.php" method="POST" role="form">';
        var delform = '<form class="admin_msg_win" id="delform" action="a.php" method="POST" role="form">';
        var updateform = '<form class="admin_msg_win" id="updateform" action="a.php" method="POST" role="form">';
        var txt2 = ' <legend class="legends">Addition</legend>';
        var txt3 = '<div class="form-group ">';
        var name=' <label for="">Name</label> <input type="text" class="form-control" name="" id="" placeholder="Input..."> ';
        var id='  <label for="">ID Number</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var designation=' <label for="">Designation</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var username=' <label for="">username</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var password=' <label for="">password</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var telno=' <label for="">telno</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var address=' <label for="">Address</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var emp=' <label for="">Emp id</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var area=' <label for="">Area </label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var grama=' <label for="">Grama Niladari Devision</label> <input type="text" class="form-control" name="" id=""placeholder="Input...">';
        var txt6 = '</div>';
        var txt7 = '<button type="submit" class="btn btn-primary">Submit</button>';


        /****addition ***/
        var addstaff = 0;
        var addgauge = 0;
        var addother = 0;

        $("#addstaffradio").on({
            change: function (e) {
                if (addstaff == 0) {
                    addother = 0;
                    addgauge = 0;
                    $("#add").empty();
                    $("#add").append(addform);
                    $("#addform").append(txt2, txt3, name,id,emp,designation,username,password,address,telno, txt6, txt7);
                    addstaff = 1;
                }
                else {
                    $("#add").empty();
                    addstaff = 0;
                }

            }
        });

        $("#addgaugeradio").on({
            change: function (e) {
                if (addgauge == 0) {
                    addother = 0;
                    addstaff = 0;
                    $("#add").empty();
                    $("#add").append(addform);
                    $("#addform").append(txt2, name,id,area,grama,username,password,address,telno, txt6, txt7);
                    addgauge = 1;
                }
                else {
                    $("#add").empty();
                    addgauge = 0;
                }

            }
        });

        $("#addotherradio").on({
            change: function (e) {
                if (addother == 0) {
                    addgauge = 0;
                    addstaff = 0;
                    $("#add").empty();
                    $("#add").append(addform);
                    $("#addform").append(txt2, txt3, txt4, txt7);
                    addother = 1;
                }
                else {
                    $("#add").empty();
                    addother = 0;
                }

            }
        });

        /**** end of addition ****/


        /*** update   ****/
        var updatestaff = 0;
        var updategauge = 0;
        var updateother = 0;

        $("#updatestaffradio").on({
            change: function (e) {
                if (updatestaff == 0) {
                    updateother = 0;
                    updategauge = 0;
                    $("#update").empty();
                    $("#update").append(updateform);
                    $("#updateform").append(txt2, txt3, txt4, txt5, txt6, txt7);
                    updatestaff = 1;
                }
                else {
                    $("#update").empty();
                    updatestaff = 0;
                }

            }
        });

        $("#updategaugeradio").on({
            change: function (e) {
                if (updategauge == 0) {
                    updateother = 0;
                    updatestaff = 0;
                    $("#update").empty();
                    $("#update").append(updateform);
                    $("#updateform").append(txt2, txt5, txt6, txt7);
                    updategauge = 1;
                }
                else {
                    $("#update").empty();
                    updategauge = 0;
                }

            }
        });

        $("#updateotherradio").on({
            change: function (e) {
                if (updateother == 0) {
                    updategauge = 0;
                    updatestaff = 0;
                    $("#update").empty();
                    $("#update").append(updateform);
                    $("#updateform").append(txt2, txt3, txt4, txt7);
                    updateother = 1;
                }
                else {
                    $("#update").empty();
                    updateother = 0;
                }

            }
        });
        /*** end of update ***/

        /*** Delete ***/

        var deletestaff = 0;
        var deletegauge = 0;
        var deleteother = 0;

        $("#deletestaffradio").on({
            change: function (e) {
                if (deletestaff == 0) {
                    deleteother = 0;
                    deletegauge = 0;
                    $("#delete").empty();
                    $("#delete").append(delform);
                    $("#delform").append(txt2, txt3, txt4, txt5, txt6, txt7);
                    addstaff = 1;
                }
                else {
                    $("#delete").empty();
                    deletestaff = 0;
                }

            }
        });

        $("#deletegaugeradio").on({
            change: function (e) {
                if (deletegauge == 0) {
                    deleteother = 0;
                    deletestaff = 0;
                    $("#delete").empty();
                    $("#delete").append(delform);
                    $("#delform").append(txt2, txt5, txt6, txt7);
                    deletegauge = 1;
                }
                else {
                    $("#delete").empty();
                    deletegauge = 0;
                }

            }
        });

        $("#deleteotherradio").on({
            change: function (e) {
                if (deleteother == 0) {
                    deletegauge = 0;
                    deletestaff = 0;
                    $("#delete").empty();
                    $("#delete").append(delform);
                    $("#delform").append(txt2, txt3, txt4, txt7);
                    deleteother = 1;
                }
                else {
                    $("#delete").empty();
                    deleteother = 0;
                }

            }
        });

        /*** end of delete ***/

    });

</script>
<script>

 /*   $(function(){
        $('.div1, .div2').css({ height: $(window).innerHeight() });
        $(window).resize(function(){
            $('.div1, .div2').css({ height: $(window).innerHeight() });
        });
    });*/

var out= $("#contain").outerHeight()+"px";
 var outer= $("#navleft,#navright").outerHeight()+"px";
 $("#navleft,#navright").css("height",out);


$("#contain").change(function ()
{var out= $("#contain").outerHeight()+"px";
    var outer= $("#navleft,#navright").outerHeight()+"px";
    $("#navleft,#navright").css("height",out);
});
</script>

</html>