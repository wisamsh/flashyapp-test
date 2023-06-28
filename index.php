<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Test Drive For Junior PHP Developer in flashyapp.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="assets/js/users.js"></script>
</head>

<body>

    <header>
        <!-- If Heade needed -->
    </header>

    <main id="main_container">
        <section id="main_sec">
            <div class="Client_card">

                <!--Head-->
                <div id="cont1" class="continer" style="display:block;">
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12 col-xs12">
                            <div class="c-image" id="c-image" data-info="c-image">
                                <img id="emp_profile" src="" />
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8 col-lg-8 col-sm-12 col-xs12 c-name" id="c-name" data-info="c-name">
                            <h1 id="emp_name"></h1>
                        </div>
                    </div>
                </div>

                <!--Boady-->

                <div id="cont2" class="container-fluid details" style="display:block;">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3  col-md-12  col-sm-12 col-xs-12">

                            <div class="client_card">
                                <div class="row g-0">
                                    <div class="col-lg-3 ">
                                        <img  src="assets/images/logo.png" class="user_image" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class=" label ">Team</h5>
                                            <p id="emp_team" class="card-text team-name"></p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="role_in_team" class="info label">
                                <p>Role in the team</p>
                                <h2 id="emp_role"></h2>
                            </div>
                            <div id="department" class="info_s label">
                                <p> Department or company</p>
                                <h2 id="emp_department">EF-502</h2>
                            </div>

                            <div id="location" class="info_s label">
                                <p>Location</p>
                                <h2 id="emp_location">United Stats</h2>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <div id="role_in_team" class="info label text-left">
                                <p>[team] member since</p>
                                <h3 id="emp_member_since"></h3>
                            </div>
                            <div id="department" class="info label text-left">
                                <p> Working in [company] since </p>
                                <h3>January 2017</h3>
                            </div>

                            <div id="location" class="info label text-left">
                                <p>Favorite [thing]</p>
                                <h3>Glassmorphism</h3>
                            </div>

                        </div>





                        <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <div id="role_in_team" class="info label text-left">
                                <p>My superpower</p>
                                <h3>illustrator</h3>
                            </div>
                            <div id="department" class="info label text-left">
                                <p> I want to be good at </p>
                                <h3 id="emp_good_at"></h3>
                            </div>

                            <div id="location" class="info label text-left">
                                <p>Favorite thing to do at work</p>
                                <h3>Making nice prototypes</h3>
                            </div>
                        </div>




                        <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">

                            <div id="role_in_team" class="info label text-left">
                                <p>Background / experience</p>
                                <h3 id="emp_background">
                                </h3>
                            </div>


                        </div>



                    </div>
                    <div class="d-flex flex-row-reverse">
                        
                        <div class="p-2">
                            <span><img src="assets/images/insta.png" /></span>
                            <span class="footer_label">maxmuster.com</span>
                        </div>
                       
                        <div class="p-2">
                            <span><img src="assets/images/linkdin.png" /></span>
                            <span class="footer_label">linkedin.com/in/maxmuster</span>
                        </div>
                        <div class="p-2">
                            <span><img src="assets/images/LinkLogo.png" /></span>
                            <span class="footer_label">instagram.com/maxmuster</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>

    </footer>
</body>

</html>