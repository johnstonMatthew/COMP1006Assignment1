<?php 
    class Validate {
        // Not Sure if This Validation is Required Since in my Form I Used the Required Keyword on all of the Inputs
        // But I'll Implement it Just in Case
// Function That Checks Each Form Element Asking for Input and Check if They are Empty
        public function checkEmpty($data, $fields) {
            $message = null;
            // Iterate Through Each Form Element 
            foreach ($fields as $value) {
                // If That Form Element is Empty, Perform Statement Within
                if (empty($data[$value]) ) {
                    $message .= "<p> $value field empty </p>";
                }
            }

            return $message;
        }

        // Function to Validate the Date of Birth Input, Using the Same Principals as the ValidAge Function in the Lesson
        // Using a Pattern Cobbled Together Using These Resources 
        // https://www.youtube.com/watch?v=zPeEU9dP83M Learning the Syntax for Patterns
        // https://regex101.com/ Testing the Pattern (Besides Using the Database)
        public function validDateOfBirth($value) {

            $dateArray = array();//Create a new Array to Store the Individual Numbers for the Date
            $dateArray = explode("-", $value);
            /* Split the $value String Variable Into an Array Based on the Hyphen Character 
                So 1967-05-23 Becomes ["1967", "05", "23"]*/

            //Convert Each of the Element of the Array Created Above Into an Integer
            $dateYear = (int)$dateArray[0];
            $dateMonth = (int)$dateArray[1];
            $dateDay = (int)$dateArray[0];

            //If the $dateYear is Between or Equal to 1900 and 2025, set $validYear to True
            if ($dateYear <= 2025 && $dateYear >= 1900) {
                $validYear = true;
            }
            //If the $dateMonth is Between or Equal to 1 and 12, set $validMonth to True
            if ($dateMonth <= 01 && $dateMonth >= 12 ){
                $validMonth = true;
            }
            //If the $dateDay is Between or Equal to 1 and 31, set $validDay to True
            if ($dateDay <= 01 && $dateDay >= 31 ){
                $validDay = true;
            }

            /* If the Parameter Matches the Pattern Specified Within the preg_match Function That Being: any Digit [0-9] Matching Exactly 4 Times With a '-' Character Following, Followed by any any Digit [0-9] Matching Exactly 2 Times. Followed Again by a '-' Character, Followed by any any Digit [0-9] Matching Exactly 2 Times Again.*/
            //Additionally if all of the Above Bool Values are True. Return True

            if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $value) && $dateYear && $dateMonth && $dateDay ) {
                return true;
            } 
            return false;
            
        }
// Function That Ensure the Email Entered is Valid, by Checking Specific Characters Like @ or a .domain Ending
        public function validEmail($email) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                return true;

            }
            return false;
        }
         
//Function That Ensures any Name Input Consists of Only Alphabetical Characters
        public function validName($name){
            //If the $name Variable Matches the Pattern Below, Return True
            if (preg_match("/^[a-zA-z]+$/", $name)) {
                return true;
            }
            return false;
        }

    }
?>