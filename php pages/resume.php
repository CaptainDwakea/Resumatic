<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Resume Page</title>
        <link rel="icon" type="image/x-icon" href="../images/resumatic.png">
        <meta name ="description" content="">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css pages/resume.css">
    </head>
    <body class="main">
        <div class="header">
            <h2>Resumatic</h2>
        <nav class="nav-block">
            <!-- <a href=""class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo" ></a> -->
            <a href="../php pages/home.php" class="nav-contents">Home</a>
            <a href="../php pages/resume.php" class="nav-contents">Create</a>
            <a href="" class="nav-contents">Resources</a>
            <a href="" class="nav-contents">Templates</a>
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
        <section id="about-sc" class="page">
            <diV class="container">
                <div class="about-cnt">
                    <form action="" class="cv-form" id="cv-form">
                        <div class="cv-form-blk">
                            <div class="cv-form-row-title">
                                <h3>About Section</h3>
                            </div>
                            <div class ="cv-form-row cv-form-row-about">
                                <div class="cols-3">
                                    <div class="form-elem">
                                        <label for="" class="form-label">First Name <button type="button" class= "button1" onclick="alert('Please enter a Valid First Name ')"> i </button></label>
                                        <input name = "firstname" type="text" class="form-control firstname" id="" onkeyup="generateCV()" placeholder="e.g. Dwayne">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class="form-elem">
                                        <label for="" class="form-label">Middle Name</label>
                                        <input name = "middlename" type="text" class="form-control middlename" id="" onkeyup="generateCV()" placeholder="e.g. George">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class="form-elem">
                                        <label for="" class="form-label">Last Name</label>
                                        <input name = "lastname" type="text" class="form-control lastname" id="" onkeyup="generateCV()" placeholder="e.g. Nixon">
                                        <span class="form-text"></span>
                                    </div>
                                </div>

                                <div class="cols-3">
                                    <div class="form-elem">
                                        <label for ="" class = "form-label">Your Photo</label>
                                        <input name ="image" type="file" class="form-control image" id="" accept="image/*" onchange="previewImage()">
                                    </div>
                                    <div class="form-elem">
                                        <label for="" class="form-label">Designation</label>
                                        <input name = "designation" type="text" class="form-control designation" id="" onkeyup="generateCV()" placeholder="e.g. Senior Engineer">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class="form-elem">
                                        <label for="" class="form-label">Address</label>
                                        <input name = "address" type="text" class="form-control address" id="" onkeyup="generateCV()" placeholder="e.g. Don Bosco Institute of Technology">
                                        <span class="form-text"></span>
                                    </div>
                                </div>

                                    <div class="cols-3">
                                        <div class="form-elem">
                                            <label for="" class="form-label">Email</label>
                                            <input name = "email" type="text" class="form-control email" id="" onkeyup="generateCV()" placeholder="e.g. dwaynenixon2004@gmail.com">
                                            <span class="form-text"></span>
                                        </div>
                                        <div class="form-elem">
                                            <label for="" class="form-label">Phone Number</label>
                                            <input name = "phoneno" type="text" class="form-control phoneno" id="" onkeyup="generateCV()" placeholder="e.g. 9321740058">
                                            <span class="form-text"></span>
                                        </div>
                                        <div class="form-elem">
                                            <label for="" class="form-label">Summary</label>
                                            <input name = "summary" type="text" class="form-control summary" id="" onkeyup="generateCV()" placeholder="e.g. Hard-Worker">
                                            <span class="form-text"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class="cv-form-row-title">
                                <h3>Achievements</h3>
                            </div>

                            <div class="row-separator repeater">
                                <div class="repeater" data-repeater-list = "group-a">
                                    <div data-repeater-item>
                                        <div class="cv-form-row cv-form-row-achievements">
                                            <div class ="cols-2">
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Title</label>
                                                    <input name = "achieve_title" type="text" class="form-control achieve_title" id="" onkeyup="generateCV()" placeholder="e.g. Best Organizer">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Description</label>
                                                    <input name = "achieve_description" type="text" class="form-control achieve_description" id="" onkeyup="generateCV()" placeholder="e.g. Colloseum 2024">
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

                        <div class="cv-form-blk">
                            <div class="cv-form-row-title">
                                <h3>Experience</h3>
                            </div>

                            <div class="row-separator repeater">
                                <div class="repeater" data-repeater-list = "group-b">
                                    <div data-repeater-item>
                                        <div class="cv-form-row cv-form-row-experience">
                                            <div class ="cols-3">
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Title</label>
                                                    <input name = "experience_title" type="text" class="form-control experience_title" id="" onkeyup="generateCV()" placeholder="e.g. Senior Lecturer">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Company/Organization</label>
                                                    <input name = "experience_company" type="text" class="form-control experience_company" id="" onkeyup="generateCV()" placeholder="e.g. DBIT">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Location</label>
                                                    <input name = "experience_location" type="text" class="form-control experience_location" id="" onkeyup="generateCV()" placeholder="e.g. Mumbai">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>

                                            <div class ="cols-3">
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Start Date</label>
                                                    <input name = "experience_start" type="date" class="form-control experience_start" id="" onkeyup="generateCV()" placeholder="e.g. November 2022">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">End Date</label>
                                                    <input name = "experience_end" type="date" class="form-control experience_end" id="" onkeyup="generateCV()" placeholder="e.g. May 2026">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Job Description</label>
                                                    <input name = "experience_description" type="text" class="form-control experience_description" id="" onkeyup="generateCV()" placeholder="e.g. Computer Engineering ">
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

                        <div class="cv-form-blk">
                            <div class="cv-form-row-title">
                                <h3>Education</h3>
                            </div>

                            <div class="row-separator repeater">
                                <div class="repeater" data-repeater-list = "group-c">
                                    <div data-repeater-item>
                                        <div class="cv-form-row cv-form-row-education">
                                            <div class ="cols-3">
                                                <div class="form-elem">
                                                    <label for="" class="form-label">School/College</label>
                                                    <input name = "education_school" type="text" class="form-control education_school" id="" onkeyup="generateCV()" placeholder="e.g. DBIT">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Degree</label>
                                                    <input name = "education_degree" type="text" class="form-control education_degree" id="" onkeyup="generateCV()" placeholder="e.g. BE Computer Science">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">City</label>
                                                    <input name = "education_city" type="text" class="form-control education_city" id="" onkeyup="generateCV()" placeholder="e.g. Mumbai">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>

                                            <div class ="cols-3">
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Start Date</label>
                                                    <input name = "education_start" type="date" class="form-control education_start" id="" onkeyup="generateCV()" placeholder="e.g. November 2022">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Graduation Date</label>
                                                    <input name = "education_graduation" type="date" class="form-control education_graduation" id="" onkeyup="generateCV()" placeholder="e.g. May 2026">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">CGPA/Percentage</label>
                                                    <input name = "education_cgpa" type="text" class="form-control education_cgpa" id="" onkeyup="generateCV()" placeholder="e.g. 9.1">
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

                        <div class="cv-form-blk">
                            <div class="cv-form-row-title">
                                <h3>Skills</h3>
                            </div>

                            <div class="row-separator repeater">
                                <div class="repeater" data-repeater-list = "group-e">
                                    <div data-repeater-item>
                                        <div class="cv-form-row cv-form-row-skills">
                                            <div class="form-elem">
                                                <label for="" class="form-label">Skills</label>
                                                <input name = "skill" type="text" class="form-control skill" id="" onkeyup="generateCV()" placeholder="e.g. Html">
                                                <span class="form-text"></span>
                                            </div>
                                            <button data-repeater-delete type="button" class="repeater-remove-btn">-</button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create value="Add" class="repeater-add-btn">+</button>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class="cv-form-row-title">
                                <h3>Projects</h3>
                            </div>

                            <div class="row-separator repeater">
                                <div class="repeater" data-repeater-list = "group-d">
                                    <div data-repeater-item>
                                        <div class="cv-form-row cv-form-row-project">
                                            <div class ="cols-3">
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Project Name</label>
                                                    <input name = "project_name" type="text" class="form-control project_name" id="" onkeyup="generateCV()" placeholder="e.g. Resumatic">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Project Link</label>
                                                    <input name = "project_link" type="text" class="form-control project_link" id="" onkeyup="generateCV()" placeholder="e.g. www.resumatic.com">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class="form-elem">
                                                    <label for="" class="form-label">Description</label>
                                                    <input name = "project_description" type="text" class="form-control project_description" id="" onkeyup="generateCV()" placeholder="e.g. Resume Building Website">
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
            </diV>
        </section>
        <hr><br>

       <!--<section id="preview-sc" class="print_area">
            <div class="container">
                <div class="preview-cnt">
                    <div class="preview-cnt-l text-black">
                        <div class=" "preview-blk>
                            <div class="preview-image">
                                <img src="" alt="" id="image_dsp">
                            </div>
                            <div class="preview-item preview-item-name">
                                <span class="preview-item-val fw-6" id="name_dsp">
                                </span>
                            </div>
                            <div class="preview-item">
                                <span class="preview-item-val text-uppercase fw-6 ls-1" id="designation_dsp"></span>
                            </div>
                        </div>

                        <div class="preview-blk">
                            <div class="preview-blk-title">
                                <h3>About</h3>
                            </div>
                            <div class="preview-blk-list">
                                <div class="preview-item">
                                    <span class="preview-item-val" id="phoneno_dsp"></span>
                                </div>
                                <div class="preview-item">
                                    <span class="preview-item-val" id="email_dsp"></span>
                                </div>
                                <div class="preview-item">
                                    <span class="preview-item-val" id="address_dsp"></span>
                                </div>
                                <div class="preview-item">
                                    <span class="preview-item-val" id="summary_dsp"></span>
                                </div>
                            </div>
                        </div>

                        <div class="preview-blk">
                            <div class="preview-blk-title">
                                <h3>Skills</h3>
                            </div>
                            <div class="skills-item-preview-blk-list" id="skills_dsp">

                            </div>
                        </div>
                    </div>

                    <div class="preview-cnt-r bg-sea">
                        <div class="preview-blk">
                            <div class ="preview-blk-title">
                                <h3>Achievements</h3>
                            </div>
                            <div class="achievements-items preview-blk-list" id="achievements_dsp">

                            </div>
                        </div>
                        <div class="preview-blk">
                            <div class ="preview-blk-title">
                                <h3>Education</h3>
                            </div>
                            <div class="education-items preview-blk-list" id="educations_dsp">
                                
                            </div>
                        </div>
                        <div class="preview-blk">
                            <div class ="preview-blk-title">
                                <h3>Experience</h3>
                            </div>
                            <div class="experience-items preview-blk-list" id="experiences_dsp">
                                
                            </div>
                        </div>
                        <div class="preview-blk">
                            <div class ="preview-blk-title">
                                <h3>Projects</h3>
                            </div>
                            <div class="projects-items preview-blk-list" id="projects_dsp">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="print-btn-sc">
            <div class="container">
                <button type="button" class="print-btn btn btn-primary" onclick="printCV()">Print CV</button>
            </div>
        </section>--> 
        
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src = "../js pages/script.js"></script>
        <script src = "../js pages/app.js"></script>
    </body>
</html>