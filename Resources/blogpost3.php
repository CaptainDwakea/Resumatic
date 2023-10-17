<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blogpost.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Resumatic:- The key parts of a resume: a guide to resume building</title>
    <style>
        li {
            padding: 10px;
            font-size: 20px;
        }
        .img_r{
            height: 100vh;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
<header class="non_print_area">
        <div class="header-nav non_print_area" style="display: flex;">
            <h2>Resumatic</h2>
            <nav class="nav-block">
                <a href="" class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo"></a>
                <a href="../php pages/home_new.php" class="nav-contents">Home</a>
                <a href="../php pages/resume.php" class="nav-contents">Create</a>
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
    <!-- <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/logo.png" width="94px" alt=""></span>
            </a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <form action="/search.html" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div>

    </nav> -->
    <div class="max-width-1 m-auto">
    </div>
    <div class="post-img">
        <img src="img/resume_dos_donts_expert_advice.png" alt="" class="img_r"> 
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">The key parts of a resume: a guide to resume building</h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                    <b>
                        Author - Emily Stoker
                    </b>
                </div>
                <div>04 January. 8 min read</div>
            </div>
            <div class="social">
                <svg width="29" height="29" class="hk">
                    <path
                        d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z">
                    </path>
                </svg>

                <svg style="background: black;
                border-radius: 21px;" width="29" height="29" viewBox="0 0 29 29" fill="none" class="hk">
                    <path
                        d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z">
                    </path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z"
                        fill="#fff"></path>
                </svg>

                <svg width="29" height="29" class="hk">
                    <path
                        d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79">
                    </path>
                </svg>

            </div>
        </div>
        <p class="font1">The parts of a resume you should include are important. Every job seeker has to learn at some
            point what they are. In this comprehensive guide, we’ll take you through the pieces of the puzzle that are
            vital for a top-performing resume!.</p>
        <p class="font1">While thinking outside the box is great on some occasions, your resume is a formal document to
            communicate your professional profile and worth as quickly as possible. In order to do this, it’s only fair
            to meet the hiring manager’s expectations when it comes to the structure and parts of a resume.

            The first step to doing this is understanding the parts of a resume that are essential. That’s where we’re
            here to help you! In this blog post, we will cover the following topics:</p> <br>
        <li>The importance of the various parts of a resume</li>
        <li>What are the key parts of a resume?</li>
        <li>Additional parts of a resume that are optional</li>
        <li>What to avoid including on your resume</li><br>
        <div></div>

        <h2>Why the different parts of a resume are important</h2>
        <br>
        <p class="font1">Hiring managers often have to pick from dozens, if not hundreds, of candidates. As such, they
            usually have developed the skill of skimming resumes to see their relevance quickly.
            <br>
            When a hiring manager does quickly scan a resume, they are expecting a certain format and layout. That’s why
            it’s important that your resume is structured in the standard way, using the parts of a resume that they
            expect to see. The hiring manager will be making a snap judgment about your resume. So you want to make it
            easy for them to decide in your favor. You don’t want to leave it up to chance as to whether or not yours
            will make the cut.
            <br>The obligatory sections of a resume each have an important function. They have evolved to be what they
            are because they are a great way to present the skills, experience, and qualifications that you will bring
            to a role. Keep on reading to see which parts of a resume are essential for any job seeker.
        </p><br>

        <h2>What are the key parts of a resume?</h2><br>
        <p class="font1">We’ve established that some parts of a resume are simply non-negotiable. Here is a list of the
            primary parts of a resume that should be included:</p>
        <ol>
            <li>Resume header</li>
            <li>Resume summary</li>
            <li>Employment history section</li>
            <li>Education section</li>
            <li>Skills section</li>
        </ol>
        <br>
        <h2>What are the 5 parts of a resume?</h2><br>
        <p class="font1">Across most industries, it’s a pretty universal agreement that each job seeker should include
            these five parts of their resume. Let’s break down what each part of the resume refers to and what it should
            be used for.</p><br>

        <h3>1. Resume header</h3><br>
        <p class="font1">The resume header is the part of your resume where you include your name, job title, and
            contact details. Right off the bat, you want the hiring manager to see who you are, what you do, and how
            they can get hold of you if they want to call you in for an interview.</p><br>

        <h3>2. Resume summary</h3><br>
        <p class="font1">Your resume summary is the part of your resume that is sometimes referred to as the resume
            profile. It should break down who you are as a professional in three to five sentences. This is the part of
            your resume that the employer will scan when deciding whether or not to continue reading. So, make sure that
            you do a good job at capturing your most valuable attributes for this particular job!</p><br>

        <h3>3. Previous employment section</h3><br>
        <p class="font1">In most resume examples, the previous employment section is the most important part of a
            resume. This is where you should list in reverse chronological order the different job positions that you’ve
            had. That means your most recent position should be at the top to make it easier for the reader to skim. You
            can explain what your key responsibilities were in each job as a bullet point list below the job title.
            <br>
            Remember that alongside the job title, you should include the name of the organization, the dates of
            employment, and the job location. If you want to see an example of how this part of the resume works, you
            can check out our library of resume examples to understand the best way to write this in practice.
        </p><br>

        <h3>4. Skills section</h3><br>
        <p class="font1">If you have additional keywords or skills that you still need to show off in order to impress
            the hiring manager and the ATS, then this is the part of your resume that will do just that. This section
            should be a bullet point list of your most relevant skills in order of importance. </p><br>

        <h3>5. Education section</h3><br>
        <p class="font1">Finally, your education section should not be neglected. Here you should list your most recent
            formal education qualifications such as higher education certificates. If you don’t have a college degree or
            equivalent then you should remember to list your high school credentials here.</p><br>

        <h2>Additional parts of a resume</h2><br>
        <p class="font1">From time to time the five obligatory sections aren’t necessarily enough. It can be a good idea
            to highlight some experience or skills that are difficult to position in other parts of a resume. In this
            case, you can create a new subheading and list your accomplishments or achievements in the style of a bullet
            point list (like the skills part of your resume) or in the style of the previous employment part of your
            resume, which is a little more detailed.
            <br>
            Here are some ideas of other elements that might be helpful to highlight on your resume:
        </p><br>

        <li>Training, certifications, and licenses</li>
        <li>Language skills</li>
        <li>Projects and freelance work</li>
        <li>Volunteer work</li>
        <li>Awards and honors</li>
        <li>Publications</li>

        <br>
        <h2>Resume mistakes to avoid</h2><br>
        <p class="font1">Now that we’ve explored what you should include in your resume, it begs the question: what
            should you avoid adding to your resume? Remember that you have limited space to capture the hiring manager’s
            attention. Anything that is not relevant to branding yourself as the perfect person for the job you’re
            applying for should not be included. </p><br>

        <h3>Adding hobbies</h3><br>
        <p class="font1">Avoid writing too much - if any - personal information about what you like to do in your spare
            time. This is something that can be discussed in the interview if the hiring manager is interested. In some
            instances, if you have a hobby that directly ties into your USP as a candidate, you can consider adding it.
            But in most cases, since you need to keep your resume as short as possible, there simply isn’t space to talk
            about your hobbies.</p><br>

        <h3>Letting the resume go over one page</h3><br>
        <p class="font1">If you have under 10 years of professional experience, your resume should ideally be kept to
            one page. That means that you need to become a pro at condensing your experience into small spaces.</p><br>

        <h2>Key takeaways</h2><br>
        <li>You need to meet the hiring manager’s expectations by including the key parts of a resume.</li>
        <li>Taking a moment to consider the format of your resume and the order of the parts of your resume is vital.
        </li>
        <li>Include important keywords in each part of your resume to beat the ATS and the 7-second rule.</li>
        <li>Aside from the must-have five parts of a resume, there are additional sections you can add. However, always
            remember which ones to avoid.</li>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>People who read this also read</h2>
        <div class="row">


            <div class="home-article more-post">
                <div class="home-article-img">
                    <img src="img/lotte9024_someone_working_on_a_desk_writing_a_letter_career_ill_4b8ad647-5dc9-4e56-b9ef-8ef2484f8488.png"
                        alt="article">
                </div>
                <div class="home-article-content font1 center">
                    <a href="../Resources/blogpost.php">
                        <h3>12 Resume mistakes and how to avoid them</h3>
                    </a>

                    <div>Author Name :- Paul Drury</div>
                    <span>07 January | 9 min read</span>
                </div>
            </div>
            <div class="home-article more-post">
                <div class="home-article-img">
                    <img src="img/RIO_-_Women_coding.png" alt="article">
                </div>
                <div class="home-article-content font1 center">
                    <a href="../Resources/blogpost2.php"><h3>Resume dos and don'ts: expert advice for successful applications</h3></a>
                    
                    <div>Author Name :- Charlotte Grainger</div>
                    <span>07 January | 16 min read</span>
                </div>
            </div>
            <div class="home-article more-post">
                <div class="home-article-img">
                    <img src="img/How_to_Make_a_Resume_on_iPhone__1_.png" alt="article">
                </div>
                <div class="home-article-content font1 center">
                    <a href="../Resources/blogpost3.php">
                        <h3>The key parts of a resume : <br>A guide to resume building</h3>
                    </a>

                    <div>Author Name :- Emily Stoker</div>
                    <span>07 April | 8 min read</span>
                </div>
            </div>

        </div>
    </div>

</body>

</html>