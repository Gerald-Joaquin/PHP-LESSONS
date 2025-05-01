<!-- FUNCTIONS -->

<!-- Create different function -->

<?php
    
    // SIMPLE FUNCTION

    function myName(){
        echo"hello, Gerald";
    }
    myName();
    echo"<br>";

    //FUNCTION WITH ARGUMENTS

    function userName($Uname){
        echo "hello, " . $Uname;
    }
    userName("Gerald Joaquin");
    echo"<br>";

    //DEFAULT ARGUMENT VALUE

    function nickName ($Nname = "Guest"){ //Guest will be the default value of the argument
        echo "hello, " . $Nname . "<br>";
    }

    nickName(); //default value - will output 'guest' since theres no argument in the parenthesis
    nickName("Ge"); 
    nickName("Mark");
    echo"<br>";

    //FUNCTIONS - RETURNING VALUES

    function sum($num1, $num2) { // declared a function 'sum' with two parameters 'num1' & 'num2'
        $total = $num1 + $num2; // declared local varialble 'total' to get sum of two
        return $total; // sends that result back to wherever the function was called.
    }

    echo "5 + 10 = " . sum(5,10) . "<br>"; // since the value of sum return 15 it will be the output
    echo "10 + 10 = " . sum(10,10) . "<br>";

    //Another example

    function fullName($fname, $lname){
        $username = $fname . " " . $lname; // will concatenate
        return $username;
    }

    echo "Hello! " . fullName("Gerald", "Joaquin");
    echo"<br>";
    echo"<br>";

    //FUNCTIONS - VARIABLE OF NUMBERS OF ARGUEMENTS

    function students(...$studentName){ //...$studentName - this is a variadic parameters, this operator can accept multiple arguments
        $fullname = "";
        $len = count($studentName);

        for ($x = 0; $x < $len; $x++) {
            $fullname .= "Hello " . $studentName[$x] . "<br>";
        }
        return $fullname;
    }

    $name = students("Asassino Capusino", "Tralalelo tralala", "Bombambini Gusini", "Tralalelo tralala", "Bombambini Gusini");
    echo $name;
    echo"<br>";

    //Another example

    function familyName($lastname, ...$firstName){ 
        $fname = " "; //since it uses return, the data will store here
        $len = count($firstName); 

        for ($x = 0; $x < $len; $x++){ // will start at 0 and check if the value is less than $len and increment the value
            $fname .= "Hello, " . $firstName[$x] . "  " . $lastname."<br>";  //this operation will serve as the data on the funtion and make a greeting sentence and concatenate firstname according to index to lastname
        }
        return $fname; // will sends on the function when it is being called

    }

    $greet = familyName("Joaquin", "Cyrine", "Gerald", "Geremie", "Mark"); //first parameter would be the argument of $lastname in the function and the following would be the array of $firstname
    echo $greet;

    //FUNCTION - STRICT

    function total(int $m, int $n) {
        return $m + $n;
    }

    echo total(10, (int)"10 numbers");  // Output: 20 because the second argument converted into string because if not it will be erorr

?>