<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../php pages/index.php'); 
    exit();
}

?>

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
    <title>Resumatic:- Resume dos and don'ts: expert advice for successful applications</title>
    <style>
         li {
            padding: 10px;
            font-size: 20px;
        }
        .h2-util{
  color: black;
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
        <hr>
    </div>
    <div class="post-img">
        <img src="img/11.svg" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">Resume dos and don'ts: expert advice for successful applications</h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                    <b>
                        Author - Charlotte Grainger
                    </b>
                </div>
                <div>04 January. 16 min read</div>
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
        <p class="font1">Mastering the art of resume writing no longer needs to be a mystery. If you want to land more
            interviews and get hired faster, we’ve got you covered. Let’s take a look at the golden rules for writing
            this potentially powerful document.</p>
        <p class="font1">Your resume is the key to your professional progression. When you’re ready to take the next
            step on the career ladder, you need to tell your story persuasively to spark the reader’s imagination. It’s
            a tall order. To make matters even harder, you don’t have long to make that first impression. Hiring
            managers spend less than seven seconds reviewing each new resume that lands on their desks. So, how can you
            make sure that your next application hits the mark fast?</p>
        <p class="font1">Luckily, we have the answers you’ve been looking for. While each resume is unique to the
            candidate, there are some hard and fast rules you need to follow. Understanding them will ensure that your
            application gets more than a mere cursory glance from the hiring manager. To help you along the way, the
            following guide will touch upon these core topics: </p> <br>
        <li>How you can choose the right words for your professional resume</li>
        <li>The best way to showcase your education and training</li>
        <li>Advice on how to effectively highlight your past experience</li>
        <li>The design dos and don’ts that you need to know about</li>
        <li>Final thoughts on how you can master your resume writing</li>

        <h2 class="h2-util">Choosing the right words: resume dos and don’ts</h2>
        <br>
        <p class="font1">When you’re writing a resume, choose your words wisely. The phrases you use tell the hiring
            manager what type of professional you are. It’s not merely about getting all of the right content down on
            the page. You need to do so in a stylish and articulate manner. Before you put pen to paper, it’s helpful to
            take a look at these resume dos and don'ts.</p><br>
        <h2 class="h2-util">Do's in Resume</h2><br>

        <h3>1. Do aim to use a varied vocabulary</h3><br>
        <p class="font1">Your vocabulary speaks volumes about you. If your resume reads like a broken record, it’s
            unlikely to win over the hiring manager. Read your document and see how many times you repeat the same word.
            For example, if you keep saying that you are “excellent” at things, you might want to look for different
            adjectives to get the job done. Spice things up a little.</p><br>

        <h3>2. Do use powerful action verbs</h3><br>
        <p class="font1">Your resume should captivate the hiring manager. If it’s crammed full of bland words, it won’t
            do the job. Try sliding in some powerful action verbs. These words give your application color and movement.
            Weave them into the document to entice the reader.</p><br>

        <h3>3. Do add some personality to your writing</h3><br>
        <p class="font1">Before the hiring manager meets you, they only have your resume and cover letter to go on. Now,
            you might be the most charismatic person in the world but how can they tell? When you write your resume,
            read it and see what’s missing. Allow your voice to come through the writing here. Don’t be afraid to
            sprinkle in your own personality. </p><br>

        <h3>4. Do make sure you include keywords</h3><br>
        <p class="font1">Experts estimate that a massive 75% of resumes will never be reviewed by a hiring manager. Why?
            Because most businesses now use Applicant Tracking Systems (ATS) to filter incoming resumes. Before you can
            land the job, you need to beat the bots. <br>To make sure that your resume is ATS-friendly, you need to use
            the right keywords in the document. Go back to the job advert to find the right terms here. You should use
            the same words in your resume that the employer has used in the advert. These are likely to be the keywords
            that the hiring manager has put into the ATS software as a filter. </p><br>

        <h3>5. Do include your degrees in this section </h3><br>
        <p class="font1">First up, if you have degrees, you need to include them here. You should list your institute
            name, your qualification, the year you received it, and your grade. And voilà, you’re done! Of course, you
            can also bullet-point extra details, such as specific modules or awards.</p><br>

        <h3>6. Do emphasize any additional training you have</h3><br>
        <p class="font1">If you’ve done some extra training, don’t forget to mention it on your resume. You can add
            details of your training beneath the rest of your education. Simply bullet-point it there. You should also
            include the institute or provider and the dates that you completed the training.</p><br>

        <h3>7. Do brag about your achievements </h3><br>
        <p class="font1">Chances are, you’ve got a lot to brag about. Don’t be modest when it comes to your resume.
            Consider what achievements will wow the hiring manager and outline them in this section. Start out by noting
            down the things of which you are most proud. It may be excelling in a certain project, getting a promotion,
            or managing a team of people. <br> When you have a succinct list, add them as bullet points beneath the
            corresponding job title. Be as detailed as possible here. Explain what you did and the impact that it had,
            quantifying that impact where possible. Using that formula will help you share your story accurately. </p>
        <br>

        <h3>8. Do quantify your tasks and duties </h3><br>
        <p class="font1">How much value can you bring to the role? That is the question you should answer for the hiring
            manager. Quantifying your tasks and duties will help you do just that. So, instead of saying that you
            “served customers and dealt with complaints,” you should say that you “served 100+ customers per shift and
            resolved an average of 7 complaints”.
            <br>
            The second statement tells the hiring manager just what you are capable of. It also shows them that you have
            a high level of attention to detail. You know the facts. You know the figures. And you’re not shy about
            stating them directly on your professional resume.
        </p><br>

        <h3>9. Do include volunteer experience too </h3><br>
        <p class="font1">Do you have any volunteer experience that is relevant to the vacancy? If the answer is yes, you
            should absolutely include it on your resume. It doesn’t matter whether this was a paid role or one that you
            undertook for free, if it fits the bill, you need to talk about it. You can include voluntary positions
            beneath your main experience or add a volunteering section. </p><br>

        <h3>10. Do make use of the white space</h3><br>
        <p class="font1">You don’t have to cover every inch of your resume. White space can be powerful when used
            correctly. Space out the sections of your resume so that the document is easy to read. When the hiring
            manager looks at your application, they should be able to quickly find the most important information. </p>
        <br>

        <h3>11. Do send your resume as a PDF</h3><br>
        <p class="font1">You’ve ticked a whole bunch of boxes, and now all that there is left to do is send your resume.
            Don’t fall at the final hurdle. When sending an application, you should use a PDF format. This file type is
            the best as it keeps every element of your resume in place.
            <br>
            If you use a Word Document, the format of the document may change depending on how it is opened. That could
            mean that your resume looks a real mess, even though you worked tirelessly on the design. Never forget this
            golden rule when applying for jobs.
        </p><br>

        <h2 class="h2-util">Don't in Resume</h2><br>
        <h3>1. Don’t bamboozle the reader with jargon</h3><br>
        <p class="font1">Jargon is a snooze-fest. When you’re writing your resume, steer clear of industry-specific
            terms that cannot be understood outside of that setting. Here’s the thing—you have no idea who will read
            your resume first. It could be someone who has limited experience in your field. If that is the case, you
            don’t want to confuse them with impenetrable words.</p><br>


        <h3>2. Don’t use a long word for no good reason</h3><br>
        <p class="font1">As the late, great George Orwell wrote: “Never use a long word where a short one will do.” <br>
            You might think that including long, complicated words in your resume makes you look smart. It doesn’t.
            Instead, you are likely to alienate or even confuse the reader. You don’t want to give the hiring manager
            any reason to pass over your resume. </p><br>


        <h3>3. Don’t rely on tired, old clichés </h3><br>
        <p class="font1">Clichés are lazy writing. Saying that you are the “cream of the crop” or you can “exceed their
            expectations” is basically meaningless. Hiring managers have heard it a thousand times before and, frankly,
            they are bored of it. Find unique ways to accurately describe what it is that you will bring to the
            position. Be specific and paint them a colorful picture.</p><br>


        <h3>4. Don’t write numbers out in full</h3><br>
        <p class="font1">Writing numbers out in full is a waste of space. Instead of saying that you “managed twelve
            workers,” say that you “managed 12 workers”. This small change will mean that you have more room on your
            resume for the important details. It also looks neat and tidy.</p><br>


        <h3>5. Don’t always include your high school education</h3><br>
        <p class="font1">Don’t waste valuable resume real estate on your high school education. If you have a degree,
            the hiring manager can deduce that you probably completed high school or undertook a similar qualification.
            You don’t need to spell it out for them on your resume.</p><br>


        <h3>6. Don’t write too much about your qualifications</h3><br>
        <p class="font1">Spoiler: the hiring manager doesn’t have the time to read a memoir about your college days.
            While they may have been the best years of your life, you don’t need to elaborate on them. Some candidates
            waste space by writing a short blurb about their degrees. You don’t need to do that. Save the space for
            other sections of your resume instead.</p><br>


        <h3>7. Don’t include experience that is not relevant </h3><br>
        <p class="font1">Let’s say you’re going for a sales manager position. Should you include your experience working
            in a hospital? The answer to this question should be obvious: no.
            <br>
            Your resume is not a short history of your career experience—it is a marketing resource. It aims to land you
            the job for which you are applying. Nothing more, nothing less. Avoid including experience or job roles that
            don’t align with the role for which you’re applying.
        </p><br>


        <h3>8. Don’t be vague about your experiences</h3><br>
        <p class="font1">Always add in details. One well-known marketing principle is that specific details are far more
            memorable than generic messages. Once you have the basic information down on your resume, add in some color.
            That may mean quantifying your everyday experiences —as we mentioned above—or throwing in a descriptive
            anecdote. </p><br>


        <h3>9. Don’t go for a “unique” resume design </h3><br>
        <p class="font1">Yes, you want to catch the hiring manager’s eye, but being too experimental with your resume
            designs is likely to backfire. Looks are subjective and there’s a chance that the reader won’t appreciate
            your flair for creativity. It doesn’t end there. If it doesn’t follow a traditional format, your resume may
            not get past the ATS software in the first place.</p><br>

        <br>
        <h2 class="h2-util">Key takeaways </h2><br>
        <li>Resume writing can be demanding. However, if you perfect this practice, it will increase your chances of
            landing a job interview.</li>
        <li>The words that you choose to use have real power. Take the time to pick out the most effective terms when
            writing your resume.</li>
        <li>When you have completed that stage, take the time to ensure that your resume looks the part. You can use a
            template to help you along the way.</li>
        <li>Before applying for jobs, follow our final resume dos and don’ts. Doing so will give you the highest chance
            of being a successful applicant.</li>

    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2 class="h2-util">People who read this also read</h2>
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