<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Resumatic :- Resources</title>
    <!-- <style>
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
            color: #ffffff;
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

    </style> -->
</head>

<body>
    <header class="non_print_area">
        <div class="header-nav non_print_area" style="display: flex;">
            <h2>Resumatic</h2>
            <nav class="nav-block">
                <a href="" class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo"></a>
                <a href="../php pages/home_new.php" class="nav-contents">Home</a>
                <a href="../Templates/resume2.php" class="nav-contents">Create</a>
                <a href="" class="nav-contents">Resources</a>
                <!-- <a href="" class="nav-contents">Templates</a> -->
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
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1>Resumatic :- Resources</h1>
            <p>Welcome to our comprehensive blog on resume building – your one-stop resource for creating a compelling
                and effective resume that opens doors to the career of your dreams. Whether you're a recent graduate
                entering the job market for the first time or a seasoned professional looking to advance your career,
                our Resume Builder Blog is here to guide you through the art of crafting the perfect resume.
                Our blog is meticulously curated to provide you with expert advice, best practices, and practical tips
                to ensure your resume stands out in today's competitive job market.</p>
        </div>
        <div class="content-right">
            <img src="img/home.svg" alt="iBlog">
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>
        <!-- <div class="year-box adjust-year">
            <div>
                <h3>Year </h3>
            </div>
            <div>
                <input type="radio" name="year" id=""> 2020
            </div>
            <div>
                <input type="radio" name="year" id=""> 2021
            </div>
        </div> -->
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/RIO_-_Women_coding.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="../Resources/blogpost.php">
                    <h3>Resume dos and don'ts: expert advice for successful applications</h3>
                </a>

                <div>Author Name:- Charlotte Grainger</div>
                <span>07 January | 16 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img\lotte9024_someone_working_on_a_desk_writing_a_letter_career_ill_4b8ad647-5dc9-4e56-b9ef-8ef2484f8488.png"
                    alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="/blogpost.html">
                    <h3>12 Resume mistakes and how to avoid them</h3>
                </a>

                <div>Author Name :- Paul Drury</div>
                <span>07 January | 9 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/How_to_Make_a_Resume_on_iPhone__1_.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="/blogpost.html">
                    <h3>The key parts of a resume: a guide to resume building</h3>
                </a>

                <div>Author Name :- Emily Stoker</div>
                <span>07 April | 8 min read</span>
            </div>
        </div>


    </div>
</body>

</html>