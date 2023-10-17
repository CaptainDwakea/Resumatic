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
    <title>Resumatic:- 12 Resume mistakes and how to avoid them</title>
    <style>
        li {
            padding: 10px;
            font-size: 20px;
        }

        .img_r {
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
        <img src="img/security_clearance1.png" alt="" class="img_r">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">12 Resume mistakes and how to avoid them</h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                    <b>
                        Author - Paul Drury
                    </b>
                </div>
                <div>04 January. 9 min read</div>
            </div>
            <div class="social">
                <svg width="29" height="29" class="hk">
                    <path d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z"></path>
                </svg>

                <svg style="background: black;
                border-radius: 21px;" width="29" height="29" viewBox="0 0 29 29" fill="none" class="hk">
                    <path d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z" fill="#fff"></path>
                </svg>

                <svg width="29" height="29" class="hk">
                    <path d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79"></path>
                </svg>

            </div>
        </div>
        <p class="font1">When it comes to crafting your resume, you need to sweat the small stuff. Hiring managers will be looking for every indication of your suitability. Any resume mistake can easily count against you.</p>
        <p class="font1">In the excitement of your potential dream job appearing on the horizon, it is tempting to rush certain aspects of the application process. Perfecting your resume is the most time-consuming job search activity, so it is often the case that mistakes can creep in. Once you have sent off the resume, you won’t get a chance to correct it later. </p>
        <p class="font1">It might seem like some of these mistakes would never surface, but it is surprising what stress can do to someone. When your brain is frazzled by fleeting moments of opportunity and the odd crushing disappointment, sometimes small resume oversights slip through.
            Though they might not seem so serious at first, trust us, they could be taken as an indication of a wider malaise. If you want to give yourself the very best chance of securing that next role, take a breath and think about whether any of these mistakes apply to you. In this blog, we’ll look at:</p> <br>
        <h2>12 Resume mistakes</h2>
        <br>
        <p class="font1"> Here are twelve of the most common resume mistakes. Don’t dismiss them and make sure that you take the time to appreciate some of the nuance. </p><br>
        <h3>1. Pointless resume objective</h3><br>
        <p class="font1">If you are not right at the beginning of your career or looking to change careers, then a resume objective stating the role you wish to secure is unnecessary. If you apply for marketing manager roles, it is a waste of a precious sentence to say that you wish to pursue a career in marketing. Your whole resume is probably about marketing, the hiring manager gets it. Instead, pack the resume summary full of personality, achievement, and motivation.</p><br>
        <h3>2. Unrelated volunteering</h3><br>
        <p class="font1">You may have volunteered at countless organizations out of the goodness of your heart, but unless this activity has taught you skills that will be useful in your future role, sharing information about unrelated volunteering activities is a waste of space on the resume. You want to be talking about the things that matter at the interview. The worst thing that can happen is for a hiring manager to pursue an unhelpful tangent because they have a personal interest. Focus on what makes you great for the role in question.</p><br>
        <h3>3. Sparse detail for key roles</h3><br>
        <p class="font1">When the hiring manager spots a job title that interests them in the work experience section of the resume, they will be keen to read on and find out more. If you include minimal detail and talk about the responsibilities of the role rather than your achievements, they will be underwhelmed. The hiring manager will make the link between a disappointing couple of lines in the resume and the potential of an uninspiring interview. Include as much compelling detail as possible. Does your resume make them want to find out more?</p> <br>
        <h3>4. Adding a references section</h3><br>
        <p class="font1">There are certain mistakes that a candidate can commit during their job search that hint at a fatal lack of judgment. There is no requirement to include references in a resume these days, especially with the contact details of the referees. Data protection and privacy issues are well documented. Recruiters even use this section for their business development purposes. By all means, create a separate references document when you get to the offer stage—format it in the same way as your resume.</p><br>
        <h3>5. Skills section blunders</h3><br>
        <p class="font1">When you have a section of your resume that allows you to list a whole host of hard, soft, and technical skills, there is considerable scope for mistakes. For a start, this section should mainly contain hard and technical skills that few of your competition will master. Try not to include skills that are evident from your work experience bullet points—hiring managers can read between the lines. Examples of soft, behavioral skills should also be embedded within your accomplishments—not in this section. Do not play skills buzzword bingo.</p> <br>
        <h3>6. Not tailoring the resume</h3><br>
        <p class="font1">When you see a role pop up on your email notifications, the temptation is to send your resume off as soon as possible. While responding quickly is indeed vital in a job search, this should not happen if it comes at the expense of your application. You only get one chance to impress, so take your time to study the job description and tweak your resume where appropriate. It is important that you save each version of the resume for each employer so that you know what they are looking at during the interview stage.</p> <br>
        <h3>7. Sharing salary or benefit requirements</h3><br>
        <p class="font1">While it is understandable that you want to be on the same page as an employer in terms of your financial needs, the resume is not the place to start this conversation. If you include a hard number on the resume, you may even forgo the chance of a significant salary bump. Employers will pay you what you are worth to them—this is not always in line with a previous salary. By all means, ask for a salary range early in the discussions, but don’t torpedo your negotiating position by including salary requirements in your resume.</p> <br>
        <h3>8. Talking about responsibilities</h3><br>
        <p class="font1">Any applicant can copy/paste the job description into the work experience section. This is horribly common, but listing the responsibilities of the role does not offer any insight into your prowess. Every sentence of your resume should explore your achievements, personality, and motivations. Employers know what the job entails, and they will assume that you can do it, otherwise, you wouldn’t be applying. They want to understand how you go about your work—this can only be explored when you talk about achievements.</p> <br>
        <h3>9. Inappropriate length</h3><br>
        <p class="font1">If a hiring manager is interested in you, they won’t mind reading two pages of a career story. Do not skimp on the details if you have relevant information to share. If your career is over a decade, don’t write in a tiny font just to keep it to one page. Most mid-career resumes are two pages long. Equally, unless you are an academic, a resume should rarely be more than two pages. Reduce some of your early-career experience if required.</p> <br>
        <h3>10. Grammatical errors</h3><br>
        <p class="font1">It goes without saying that there is no place for poor grammar or spelling mistakes in a resume. This is a crucial document that may open career doors, so employers expect any applicant to be cautious with the smaller details. Any typos or formatting errors will reflect poorly on your attention to detail. In a job search with the tightest of margins between candidates, do you really want a spelling mistake to count against you? Proofread.</p> <br>
        <h3>11. Attaching a photo</h3><br>
        <p class="font1">Unless you work in modeling or entertainment, there is no requirement to attach a photo to a resume. This used to be common in certain European countries, but it is changing. There may even be discrimination issues if a hiring manager is seen to be swayed by an attractive photo. Leave it for the interview to impress them with your magnetic charms.</p> <br>
        <h3>12. Listing hobbies</h3><br>
        <p class="font1">It is rare that hobbies are listed on a resume. It may not necessarily be a mistake if you have an unusual hobby where you have achieved success and you wish it to be a talking point during the interview, but it is generally considered best to leave hobbies out of a professional job application. Space is at a premium on any resume, so the inclusion of a hobbies section may hint to the hiring manager that you do not have much else to say.</p> <br>
        <h2>Key takeaways</h2><br>
        <p class="font1">If you bear in mind these potential resume mistakes as you write and amend your resume, you shouldn’t go far wrong. Looking for mistakes in the five minutes before you send the resume off to the hiring manager will likely not end well.</p><br>
        <li>Know how you want to write your individual resume.</li>
        <li>Make decisions from the hiring manager’s point of view.</li>
        <li>Always tailor the resume according to the demands of the role.</li>
        <li>Get someone else to check for mistakes and proofread.</li>

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