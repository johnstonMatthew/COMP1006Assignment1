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

            <div id="signUp">
                <article>
                    <?php
                        include_once('includes/crud.php');
                        include_once('includes/validate.php');

                        $crud = new crud();
                        $validate = new validate();

                        if (isset($_POST['Submit'])) {
                            $username = $crud->escape_string($_POST['username']);
                            $firstName = $crud->escape_string($_POST['firstName']);
                            $lastName = $crud->escape_string($_POST['lastName']);
                            $email = $crud->escape_string($_POST['email']); 
                            $dateOfBirth = $crud->escape_string($_POST['dateOfBirth']); 

                            $message = $validate->checkEmpty($_POST, array('username', 'firstName', 'lastName', 'email', 'dateOfBirth'));
                            
                            $checkEmail = $validate->validEmail($_POST['email']);

                            $validDateOfBirth = $validate->validDateOfBirth($_POST['dateOfBirth']);

                            $validFirstName = $validate->validName($_POST['firstName']);
                            $validLastName = $validate->validName($_POST['lastName']);

                            // If Statement That Checks if the message Variable Above Gets Returned as Null, If it Does Perform the Echo Statements Within
                            if ($message != null) {
                                echo "<h2> There was an Error in Creating Your Account </h2>";
                                echo "<p> $message </p>";
                                echo "<a href='javascript:self.history.back();'> Go Back </a>";
                                // ^^^ Links Back to the Previous Page
                            //Else if Statement That Checks if the validDateOfBirth Variable Gets Returned as False, if it Does Perform the Echo Statements Within
                            } else if (!$validDateOfBirth){
                                echo "<h2> There was an Error in Creating Your Account </h2>";
                                echo "<p> Please Provide a Valid Date of Birth </p>";
                                echo "<a href='javascript:self.history.back();'> Go Back </a>";
                                // ^^^ Links Back to the Previous Page
                            //Else if Statement That Checks if the checkEmail Variable Gets Returned as False, if it Does Perform the Echo Statements Within
                            } else if (!$checkEmail) {
                                echo "<h2> There was an Error in Creating Your Account </h2>";
                                echo "<p> Please Provide a Valid Email </p>";
                                echo "<a href='javascript:self.history.back();'> Go Back </a>";
                                // ^^^ Links Back to the Previous Page
                            
                            } else if (!$validFirstName || !$validLastName) {
                                echo "<h2> There was an Error in Creating Your Account </h2>";
                                echo "<p> Your Name(s) Contains Invalid Characters </p>";
                                echo "<a href='javascript:self.history.back();'> Go Back </a>";
                                // ^^^ Links Back to the Previous Page
                            //If Every if/Else if Statement Above is False, Meaning That There is no Issues Within the Users Input is Valid. Perform Statements Within
                            } else {
                                $result = $crud->execute("INSERT INTO assignonetable(userName, firstName, lastName, email, dateOfBirth) VALUES 
                                    ('$username', '$firstName', '$lastName', '$email', '$dateOfBirth')");
                                // ^^^ Variable That Calls Upon the execute Function in the Crud Class, That Runs the Above SQL Statement, Adding the Users Input to the Database
                                echo "<h2> Welcome to Advanced Technology Corp </h2>";
                                echo "<p> Your Account has Been Created </p>"; 
                                echo "<a href='index.php'> Go Back </a>";                       
                            }
                        } 
                    ?>
                </article>
            </div>

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

            <p> © All Images Licensed Under Creative Commons License || Matthew Johnston 1269081: 2025 Jan 18th </p>
            
         </footer>
    </body>

</html>