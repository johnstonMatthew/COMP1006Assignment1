<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="A Webpage With a Form That Connects to a Database and Inserts any Data Into it That is Submitted Through the Form">
        <title> Connecting to a Database Assignment || Matthew Johnston" </title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="./css/styles.css">

        <!-- Fonts --> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Page Header -->
        <header>
            <img src="images/logo.png" alt="The Company Logo" width="180" height="121">
            <!-- Logo Made Using Three Images Found Using the Links Below
                https://commons.wikimedia.org/wiki/File:3-A-logo.png 
                https://www.vecteezy.com/free-png/sunshine-background?page=2
                https://www.flaticon.com/free-icon/letter-t_7825835 
            -->
            <nav>
                <menu>
                    <li> <a href="#founder"> Home </a></li>
                    <li> <p> | </p> </li>
                    <li> <a href=""> Store </a> </li>
                    <li> <p> | </p> </li>
                    <li> <a href="#signUp"> Sign Up </a> </li>
                </menu>
            </nav>
           
        </header>
        <!-- Page Main -->
        <main>
            <div id="articleBackgroundImg">
                <article>
                    
                    <figure>
                        <img src="images/founder.jpg" alt="Image of an Old Man on a Phone" width="418" height="278">
                        <!-- Old Man Image Downloaded From Pexel https://www.pexels.com/photo/man-in-brown-suit-jacket-3782199/ -->          
                        <figcaption> Our Founder: Richard Wolowitz </figcaption>
                        <!-- Any Similarities to an Actual Richard Wolowitz is Coincidental -->
                    </figure>
                    <div>
                        <h1> A Great Man Once Said... </h1>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, cum. Cupiditate facere quidem, ex quibusdam sint necessitatibus, earum ab quas asperiores doloremque minima doloribus deleniti. Autem corrupti officiis dignissimos asperiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore est officiis, tempora quidem omnis consectetur dolorum modi. Excepturi repellendus, cumque nam iste inventore eveniet numquam itaque cum voluptatem quidem natus! </p>
                    </div>

                </article>
            </div>

            <div class="sectionSeperator">
                <p> </p> <!-- Empty Paragraph Tags so the Seperator can be Created -->
            </div>

            <section id="signUp">
                <form method="post" action="submittedForm.php">
                    <h2> Sign Up </h2>

                    <div class="inputContainer">
                        <label for="input1"> Username </label>
                        <input type="text" name="username" id="input1" required>
                    </div>

                    <div class="inputContainer">
                        <label for="input2"> First Name </label>
                        <input type="text" name="firstName" id="input2" required>
                    </div>

                    <div class="inputContainer">
                        <label for="input3"> Last Name </label>
                        <input type="text" name="lastName" id="input3" required>
                    </div>

                    <div class="inputContainer">
                        <label for="input4"> Email Address </label>
                        <input type="email" name="email" id="input4" required>
                    </div>

                    <div class="inputContainer">
                        <label for="input5"> Date of Birth </label>
                        <input type="date" name="dateOfBirth" id="input5" min="1900-01-01" required>
                    </div>

                    <div id="buttonContainer">
                        <input type="submit" name="Submit" value="Create Account">
                        <input type="reset" value="Reset Form">
                    </div>
                        
                </form>
            </section>

        </main>

        <!-- Page Footer -->
         <footer>
            <nav>
                <menu>
                    <li> <a> Privacy Policy </a> </li>
                    <li> <p> | </p> </li>
                    <li> <a> Terms of Service</a> </li>
                </menu>
            </nav>
         
            <p> © All Images Licensed Under Creative Commons License || Matthew Johnston 1269081: 2025 Jan 18th</p> 
            
         </footer>
    </body>

</html>