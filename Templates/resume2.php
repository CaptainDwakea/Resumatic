<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../php pages/index.php'); 
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resume Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css -->

    <link rel="stylesheet" href="assets/css/main.css">
    <!-- <link rel="stylesheet" href="assets/css/resume.css"> -->
    <link rel="stylesheet" href="css pages/home.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .header-nav {
            padding: 5px 50px;
            position: fixed;
            display: flex;
            background-color: #1d3557;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        h2 {
            /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
            color: #98c1d9;
            font-size: 2.5rem;
            font-weight: 700;
        }

        .nav-contents {
            margin-left: 10px;
            color: #1d3557;
            font-size: 15px;
            text-decoration: none;
            align-content: center;
            font-weight: 600;
            /* margin: auto; */
            justify-content: space-between;
        }

        .nav-contents:hover {
            color: #003049;
            text-decoration: none;
        }

        .nav-block {
            align-items: center;
        }

        .nav-button {
            margin-left: 20px;
            width: 100px;
            height: 40px;
            background: white;
            border: 0px solid black;
            outline: none;
            cursor: pointer;
            color: #003049;
            font-size: 17px;
            font-weight: 500;
            border-radius: 50px;
            text-align: center;
            transition: all .5s ease;
        }

        .nav-button:hover {
            background: #003049;
            color: #ffffff;
        }


        .down {
            padding-top: 0px;
        }

        .card-header {
            background-color: #22577a;
        }

        .title_dropdown {
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .btn-link:hover {
            color: #669bbc;
        }

        .down-preview {
            top: 100px;
        }

        .all-content {
            padding-top: 100px;
        }

        /* .box{
        box-shadow: black;
       } */

        button.print-btn.btn.btn-primary {
            align-self: center;
            font-size: 17px;
            width: auto;
            border-radius: 20px;
        }

        .nav-contents {
            color: white;
            font-size: 1.7rem;
            font-weight: 500;
        }

        div#headingSeven {
            border-radius: 0px 0px 10px 10px;
        }

        div#headingOne {
            border-radius: 10px 10px 0px 0px;
        }

        i {
            margin-right: 1px;
        }

        /* #preview-sc{
    position:fixed;
    top:100px;
} */
    </style>
</head>

<body>
    <header class="non_print_area">
        <div class="header-nav non_print_area" style="display: flex;">
            <h2>Resumatic</h2>
            <nav class="nav-block">
                <a href="" class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo"></a>
                <a href="../php pages/home_new.php" class="nav-contents">Home</a>
                <!--<a href="../php pages/resume.php" class="nav-contents">Create</a>-->
                <!-- <a href="" class="nav-contents">Resources</a>
                <a href="" class="nav-contents">Templates</a> -->
                <?php
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, show a logout button
                    echo '<a href="../php pages/logout.php"><button class="nav-button">Logout</button></a>';
                } else {
                    // User is not logged in, show a login button
                    echo '<a href="../php pages/index.php"><button class="nav-button">Login</button></a>';
                }
                ?>
            </nav>
        </div>
    </header>

    <div class="all-content">
        <div class="row">
            <div class="col-md-6 non_print_area">
                <section id="about-sc" class="all-content">
                    <div class="container down">


                        <div id="accordion">
                            <div class="card" style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed title_dropdown" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ABOUT ME
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="" class="cv-form" id="cv-form">
                                            <div class="about-cnt">
                                                <div class="cv-form-blk">
                                                    <!-- <div class="cv-form-row-title">
                                                    <h3>about section</h3>
                                                </div> -->
                                                    <!-- <div class = "cv-form-row cv-form-row-about"> -->
                                                    <div class="cols-3">

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">First Name</label>
                                                            <input name="firstname" type="text" class="form-control firstname" id="demo" onkeyup="generateCV()" placeholder="e.g. John">
                                                            <span class="form-text"></span>
                                                        </div>

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Middle Name <span class="opt-text">(optional)</span></label>
                                                            <input name="middlename" type="text" class="form-control middlename" id="" onkeyup="generateCV()" placeholder="e.g. Herbert">
                                                            <span class="form-text"></span>
                                                        </div>

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Last Name</label>
                                                            <input name="lastname" type="text" class="form-control lastname" id="" onkeyup="generateCV()" placeholder="e.g. Doe">
                                                            <span class="form-text"></span>
                                                        </div>
                                                    </div>

                                                    <div class="cols-3">

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Your Image</label>
                                                            <input name="image" type="file" class="form-control image" id="" accept="image/*" onchange="previewImage()">
                                                        </div>

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Designation</label>
                                                            <input name="designation" type="text" class="form-control designation" id="" onkeyup="generateCV()" placeholder="e.g. Sr.Accountants">
                                                            <span class="form-text"></span>
                                                        </div>

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Address</label>
                                                            <input name="address" type="text" class="form-control address" id="" onkeyup="generateCV()" placeholder="e.g. Lake Street-23">
                                                            <span class="form-text"></span>
                                                        </div>

                                                    </div>

                                                    <div class="cols-3">

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Email</label>
                                                            <input name="email" type="text" class="form-control email" id="" onkeyup="generateCV()" placeholder="e.g. johndoe@gmail.com">
                                                            <span class="form-text"></span>
                                                        </div>

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Phone No:</label>
                                                            <input name="phoneno" type="text" class="form-control phoneno" id="" onkeyup="generateCV()" placeholder="e.g. 456-768-798, 567.654.002">
                                                            <span class="form-text"></span>
                                                        </div>

                                                        <div class="form-elem">
                                                            <label for="" class="form-label">Summary</label>
                                                            <input name="summary" type="text" class="form-control summary" id="" onkeyup="generateCV()" placeholder="e.g. Doe">
                                                            <span class="form-text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed title_dropdown" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            ACHIEVEMENTS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="" class="cv-form" id="cv-form">
                                            <div class="cv-form-blk">
                                                <!-- <div class="cv-form-row-title">
                                                <h3>achievements</h3>
                                            </div> -->

                                                <div class="row-separator repeater">
                                                    <div class="repeater" data-repeater-list="group-a">
                                                        <div data-repeater-item>
                                                            <div class="cv-form-row cv-form-row-achievement">
                                                                <div class="cols-2">
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Title</label>
                                                                        <input name="achieve_title" type="text" class="form-control achieve_title" id="" onkeyup="generateCV()" placeholder="e.g. johndoe@gmail.com">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Description</label>
                                                                        <input name="achieve_description" type="text" class="form-control achieve_description" id="" onkeyup="generateCV()" placeholder="e.g. johndoe@gmail.com">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                </div>
                                                                <button data-repeater-delete type="button" class="repeater-remove-btn">-</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" data-repeater-create value="Add" class="repeater-add-btn">+</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed title_dropdown" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            EXPERIENCE
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="" class="cv-form" id="cv-form">
                                            <div class="cv-form-blk">
                                                <!-- <div class="cv-form-row-title">
                                                <h3>experience</h3>
                                            </div> -->

                                                <div class="row-separator repeater">
                                                    <div class="repeater" data-repeater-list="group-b">
                                                        <div data-repeater-item>
                                                            <div class="cv-form-row cv-form-row-experience">
                                                                <div class="cols-3">
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Title</label>
                                                                        <input name="exp_title" type="text" class="form-control exp_title" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Company /
                                                                            Organization</label>
                                                                        <input name="exp_organization" type="text" class="form-control exp_organization" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Location</label>
                                                                        <input name="exp_location" type="text" class="form-control exp_location" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                </div>

                                                                <div class="cols-3">
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Start Date</label>
                                                                        <input name="exp_start_date" type="date" class="form-control exp_start_date" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">End Date</label>
                                                                        <input name="exp_end_date" type="date" class="form-control exp_end_date" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Description</label>
                                                                        <input name="exp_description" type="text" class="form-control exp_description" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                </div>

                                                                <button data-repeater-delete type="button" class="repeater-remove-btn">-</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" data-repeater-create value="Add" class="repeater-add-btn">+</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed title_dropdown" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            EDUCATION
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="" class="cv-form" id="cv-form">
                                            <div class="cv-form-blk">
                                                <!-- <div class="cv-form-row-title">
                                                <h3>education</h3>
                                            </div> -->

                                                <div class="row-separator repeater">
                                                    <div class="repeater" data-repeater-list="group-c">
                                                        <div data-repeater-item>
                                                            <div class="cv-form-row cv-form-row-experience">
                                                                <div class="cols-3">
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">School</label>
                                                                        <input name="edu_school" type="text" class="form-control edu_school" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Degree</label>
                                                                        <input name="edu_degree" type="text" class="form-control edu_degree" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">City</label>
                                                                        <input name="edu_city" type="text" class="form-control edu_city" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                </div>

                                                                <div class="cols-3">
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Start Date</label>
                                                                        <input name="edu_start_date" type="date" class="form-control edu_start_date" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">End Date</label>
                                                                        <input name="edu_graduation_date" type="date" class="form-control edu_graduation_date" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Description</label>
                                                                        <input name="edu_description" type="text" class="form-control edu_description" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                </div>

                                                                <button data-repeater-delete type="button" class="repeater-remove-btn">-</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" data-repeater-create value="Add" class="repeater-add-btn">+</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed title_dropdown" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            PROJECTS
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFive" class="collapse " aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="" class="cv-form" id="cv-form">
                                            <div class="cv-form-blk">
                                                <!-- <div class="cv-form-row-title">
                                                <h3>projects</h3>
                                            </div> -->

                                                <div class="row-separator repeater">
                                                    <div class="repeater" data-repeater-list="group-d">
                                                        <div data-repeater-item>
                                                            <div class="cv-form-row cv-form-row-experience">
                                                                <div class="cols-3">
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Project
                                                                            Name</label>
                                                                        <input name="proj_title" type="text" class="form-control proj_title" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Project
                                                                            link</label>
                                                                        <input name="proj_link" type="text" class="form-control proj_link" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                    <div class="form-elem">
                                                                        <label for="" class="form-label">Description</label>
                                                                        <input name="proj_description" type="text" class="form-control proj_description" id="" onkeyup="generateCV()">
                                                                        <span class="form-text"></span>
                                                                    </div>
                                                                </div>
                                                                <button data-repeater-delete type="button" class="repeater-remove-btn">-</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" data-repeater-create value="Add" class="repeater-add-btn">+</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed title_dropdown" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            SKILLS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="" class="cv-form" id="cv-form">
                                            <div class="cv-form-blk">
                                                <!-- <div class="cv-form-row-title">
                                                <h3>skills</h3>
                                            </div> -->

                                                <div class="row-separator repeater">
                                                    <div class="repeater" data-repeater-list="group-e">
                                                        <div data-repeater-item>
                                                            <div class="cv-form-row cv-form-row-skills">
                                                                <div class="form-elem">
                                                                    <label for="" class="form-label">Skill</label>
                                                                    <input name="skill" type="text" class="form-control skill" id="" onkeyup="generateCV()">
                                                                    <span class="form-text"></span>
                                                                </div>

                                                                <button data-repeater-delete type="button" class="repeater-remove-btn">-</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" data-repeater-create value="Add" class="repeater-add-btn">+</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="border-radius: 0px 0px 10px 10px;">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link colpased title_dropdown" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            COLOUR SELECTION
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseSeven" class="collapse " aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="color-l d-flex">
                                            <label for="colour" style="font-size:17px; padding-right: 10px; font-weight:600;">Colour For left region:-</label>
                                            <input type="color" name="color" id="one" onclick="click_l()">
                                        </div>
                                        <!-- <div class="color-l d-flex">
                                            <label for="colour" style="font-size:17px; padding-right: 10px; font-weight:600;">Colour for right region:-</label>
                                            <input type="color" name="color" id="Two" onclick="click_r()">
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="print-btn-sc">
                    <div class="container" style="margin:auto;">
                        <button type="button" class="print-btn btn btn-primary " onclick="printCV()">Print Resume</button>
                    </div>
                </section>

            </div>


            <div class="col-md-6 align-self-center">
                <section id="preview-sc" class="print_area">
                    <div class="container">
                        <div class="preview-cnt">
                            <div class="preview-cnt-l bg-green text-white">
                                <div class="preview-blk">
                                    <div class="preview-image">
                                        <img src="" alt="" id="image_dsp">
                                    </div>
                                    <div class="preview-item preview-item-name">
                                        <span class="preview-item-val fw-6" id="fullname_dsp">David James ELuvathingal</span>
                                    </div>
                                    <div class="preview-item">
                                        <span class="preview-item-val text-uppercase fw-6 ls-1" id="designation_dsp">Web developer</span>
                                    </div>
                                </div>

                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>about</h3>
                                    </div>
                                    <div class="preview-blk-list">
                                        <div class="preview-item">
                                            <i class="bi bi-telephone"></i>
                                            <span class="preview-item-val" id="phoneno_dsp">1511155454</span>
                                        </div>
                                        <div class="preview-item">
                                            <i class="bi bi-envelope-fill"></i>
                                            <span class="preview-item-val" id="email_dsp">lorem@gmail.com</span>
                                        </div>
                                        <div class="preview-item d-flex">
                                            <i class="bi bi-geo-alt-fill "></i>
                                            <span class="preview-item-val" id="address_dsp">301,Vixion apt,dombivili,Navi-Mumbai</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>skills</h3>
                                    </div>
                                    <div class="skills-items preview-blk-list" id="skills_dsp">
                                    </div>
                                </div>
                            </div>

                            <div class="preview-cnt-r bg-white">

                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>Profile</h3>
                                    </div>
                                    <span class="preview-item-val" id="summary_dsp"></span>
                                </div>

                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>Achievements</h3>
                                    </div>
                                    <div class="achievements-items preview-blk-list" id="achievements_dsp"></div>
                                </div>

                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>educations</h3>
                                    </div>

                                    <div class="educations-items preview-blk-list">
                                        <div class="mine" style="margin:10px" id="educations_dsp"></div>
                                    </div>
                                </div>


                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>experiences</h3>
                                    </div>
                                    <div class="experiences-items preview-blk-list" id="experiences_dsp"></div>
                                </div>

                                <div class="preview-blk">
                                    <div class="preview-blk-title">
                                        <h3>projects</h3>
                                    </div>
                                    <div class="projects-items preview-blk-list" id="projects_dsp"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    </ <!-- bootstrap js -->


    <script>
        function click_l() {
            let input = document.getElementById('one').value;
            // document.body.style.background=input;
            let elements = document.getElementsByClassName('preview-cnt-l');
            for (let i = 0; i < elements.length; i++) {
                elements[i].style.background = input;
            }
        }
        document.body.addEventListener("click", click);


        function click_r() {
            let input_r = document.getElementById('two').value;
            // document.body.style.background=input;
            let elements_r = document.getElementsByClassName('preview-cnt-r');
            for (let i = 0; i < elements_r.length; i++) {
                elements_r[i].style.background = input_r;
            }
        }
        document.body.addEventListener("click", click_r);
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- jquery repeater cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom js -->
    <script src="assets/js/script.js"></script>
    <!-- app js -->
    <script src="assets/js/app.js"></script>
</body>

</html>