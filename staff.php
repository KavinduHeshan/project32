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

<div class="row " id="contain"  >
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 navbar_both" id="navleft">



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




    <div class="col-lg-8 col-sm-12 col-xs-12 col-md-10 ">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>



        <div class="row"   >

            <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12">

                <div class="Staff_forms admin_msg_win">
                    <form action="" method="POST" role="form">
                        <legend class="legends" >Messaging Service</legend>

                        <div class="form-group">
                            <label for="">Message</label>
                            <input type="text" class="form-control" name="message" id="" placeholder="type your message here">
                            <div style="margin-top: 10px;">
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1 col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8">
                                        <table class="table-responsive table">
                                            <tr> <td  ><label class=" " >staff</label> </td> <td><input type="checkbox"> </td></tr>
                                            <tr> <td><label class="">officers</label> </td> <td><input type="checkbox"> </td></tr>
                                            <tr> <td><label class="">gauge rangers</label> </td> <td><input type="checkbox"> </td></tr>
                                            <tr> <td><label class="">public</label> </td> <td><input type="checkbox"> </td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary admin_msg_submit" >Submit</button>
                        </div></form>

                    <a href="#" style="position:relative;margin-bottom:1px;"> settings <span class="glyphicon glyphicon-cog" style="font-size: medium;"></span></a>
                </div>
            </div>




            <div class="col-lg-6 col-md-6 col-sm-12 container-fluid">

                <div class="admin_msg_win" >
                    <legend class="legends" >Report generation</legend>
                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <table>
                                <tr > <button type="button" class="btn btn-default btn-block">Daily Report</button> </tr>
                                <tr > <button type="button" class="btn btn-default btn-block">Weekly Report</button> </tr>
                                <tr > <button type="button" class="btn btn-default btn-block">Monthly Report</button> </tr>
                                <tr > <button type="button" class="btn btn-default btn-block">Progrss Report</button> </tr>
                                <tr > <button type="button" class="btn btn-default btn-block">view Reports</button> </tr>
                            </table>
                        </div>

                    </div>
                </div>


            </div>


        </div>




    </div>



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
<script type="text/javascript">
    var out= $("#contain").outerHeight()+"px";
    $(".navbar_both").css("height",out);

</script>
</html>