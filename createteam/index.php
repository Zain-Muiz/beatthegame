<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fantasy league 2020</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        li {
            list-style-type: none;
        }



        #bg {
            background-image: url('https://wallpapercave.com/wp/wp4844549.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 2vmin;
        }



        #bg-2 {

            background-image: url('https://www.seelatest.com/images/ipl-2020-tournament-begin-from-19-september-opening-sharjah.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 2vmin;

        }

        .block {
            display: block;
            width: 100%;
            border: none;
            border-right: 2px solid white;
            background-color: transparent;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block:hover {
            display: block;
            width: 100%;
            border: none;
            border-left: 2px solid white;
            border-right: 2px solid white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }

        .footer {
            width: 100%;
            color: white;
            font-weight: 600;
            font-size: 0.9em;
            background-color: #212529;

        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <!--  -->

        <div class="jumbotron jumbo-color mb-1" style="background-color:#212529;">
            <div class="row mb-0">


                <div class="col-12">
                    <h5 style="text-align:center; color:white;" id="heading">Max 7 players from a team</h5>
                </div><br><br><br>

                <div class="col item">



                    <img onmouseover="glowEnter(this)" onmouseout="glowLeave(this)" class="mx-auto d-block img circle "
                        src="csk.jpg">
                    <br>
                    <h2 class="caption" style="color:white;  ">CSK</h2>




                </div>


                <div class="col">
                    <img class="mx-auto d-block  circle " src="lol.png" style="width:70%;
                    height:auto; border-radius:100%; ">
                    <!--<h1 align="center" style="color:white; padding:10px;">VS</h1>-->
                </div>


                <!-- <div class="col">
                    <img src="elon.jpg"  class="mx-auto d-block img circle">
                </div>-->

                <div class="col item">

                    <img onmouseover="glowEnter(this)" onmouseout="glowLeave(this)" class="mx-auto d-block img circle"
                        src="MI.jpg" id="team_img">

                    <br>
                    <h2 class="caption" style="color:white; ">MI</h2>

                </div>
            </div>

        </div>
        <!-- header END -->


        <!-- first row with two cols for the navbars -->
        <div class="row mx-auto rounded mb-0 pb-1 pt-1" style="background-color:#212529;">
            <div class="col-12 col-md-5 mx-auto ">
                <ul class="nav nav-pills nav-justified nav-static-top my-auto" onClick="tabChange(event)">
                    <li class="nav-item">

                        <button id='wk' style="color:white; font-weight: 500;font-size:.9em;border-left:1px solid white;"
                            class=" block btn p-0 mt-2">WK</button>
                    </li>
                    <li class="nav-item">
                        <button id='bat' style="color:white; font-weight: 500;font-size:.9em"
                            class=" block btn p-0 mt-2">BAT</button>
                    </li>
                    <li class="nav-item">
                        <button id='ar' style="color:white; font-weight: 500;font-size:.9em"
                            class="block btn p-0 mt-2">AR</button>
                    </li>
                    <li class="nav-item">
                        <button id='bowl' style="color:white; font-weight: 500;font-size:.9em;"
                            class=" block btn p-0 mt-2 ">BOWL</button>
                    </li>

                    

                </ul>
            </div>




            <div class="col-12 col-md-5 mx-auto ">

                <!-- progressbar completed-->
                
                <ul class="nav nav-pills nav-justified nav-static-top my-auto row">
                    <li class="nav-item col-md-12 col-12">
                        <div class="w3-light-grey mt-2 rounded ">
                            <div id='progressBar' class="w3-blue" style="height:20px;width:0%"></div>
                        </div>
                    </li>
                 
                </ul>
                
            </div>
        </div>



        <!-- div row for the team players listing -->
        <div class="row mx-auto pb-5" style="background-position: center;background-color:#212529;url('');background-repeat: no-repeat;background-size: 90%; background-blend-mode: lighten; ">
            <!-- left side -->
            <div onmouseover="glowEnter2(this)" onmouseout="glowLeave2(this)"
                class="col-12 col-md-5 shadow rounded mt-2 pt-3 pb-3 mx-auto" id="bg-2-">

                <div class="row">
                    <div class="col-6 mx-auto" style = "color:white; font-weight:550;">Players</div>
                    <div class="col-6" id="remainingCredit">
                        
                    </div>
                </div>
                
                <div id="players"></div>

            </div>

            <!-- right side -->
            <div onmouseover="glowEnter3(this)" onmouseout="glowLeave3(this)"
                class="col-12 col-md-5 shadow rounded mt-2 pt-3 pb-3 mx-auto" id="bg-">

                
                <div class="row">
                    <div class="col-6 mx-auto" style = "color:white; font-weight:550;">My Team</div>
                    <div class=" col-6"id="usedCredit">
                        
                    </div>
                </div>
                
                <div id="myTeam"></div>
            </div>

        </div>






        <!-- footer final completed -->
        <div class="footer row p-0 mx-auto jumbotron jumbo-color mt-1">


            <div class="col-12">
                <!-- buttons to previous and continue -->
                <div class="row mx-auto mb-3 pt-2" style="background-color: #212529">
                    <div class="col-6 col-md-4 mx-auto">
                        <button style = "outline:none; border:none;" class="btn btn-danger block rounded pt-1 pb-1">HOME</button>
                    </div>

                    <div class="col-6 col-md-4 mx-auto"><button  style = "outline:none; border:none;" class="btn btn-success block rounded pt-1 pb-1">PLAY</button> </div>

                </div>


                <div class="row mx-auto mb-3">
                    <div class="col-12 text-center my-auto text-responsive text-center mx-auto  "
                        style="font-size:1.2em; font-weight:550;">FANTASY CRICKET LEAGUE 2020</div>

                </div>

                <div class="row mx-auto my-auto">
                    <div class="col-md-1 col-4  pb-3 mx-auto">
                        <img class="img-responsive mx-auto img-thumbnail img-fluid rounded-circle" style="width:25vmin;"
                            src="iste.png" alt="iste">
                    </div>
                </div>


            </div>


        </div>
    </div>



    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

</body>

</html>