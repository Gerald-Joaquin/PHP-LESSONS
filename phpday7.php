<!-- Create and display different types of arrays. -->

<?php  
    //INDEXED ARRAY -----------------------------------------------------------------------
                  //   0       1       2
   $cars = array("Volvo", "BMW", "Toyota");
   

   echo $cars[1];   // will get the index 1 in the array which is 'BMW'
   echo $len = count($cars); // this built-in function will count the number of items in the array which is '3'
   echo "<br>";

   //Using for function 
   for ($x = 0; $x < $len;$x++ ){
    echo "Car available: " . $cars[$x];
    echo "<br>";
   }

   //CHANGING VALUE OF AN ARRAY
   $foods = array("Hotdog", "Egg", "Fish", "Chicken"); 

   $foods[0] = "Cheesedog";
   var_dump($foods); //function in PHP is used to display structured information (type and value) about one or more variables.
   echo "<br>";
   echo $foods[0];
   echo "<br>";

   //LOOP THROUGH AN INDEXED ARRAY 

   foreach ($foods as $food){ //This tells PHP: “Go through each item in the $foods array.”
    echo "$food";
    echo "<br>";
   }

   //ACCESS ASSOCIATIVE ARRAYS ------------------------------------------------------------

   $names = array("Gerald" => "Joaquin", "Mark" => "Santos", "Razzel" => "Dallego");

   echo $names["Gerald"]; // will show the value of index 'Gerald' which is 'Joaquin'
   
   $names["Razzel"] = "Enriquez"; // will change the value using the key name inside of array 
   echo "<br>";
   var_dump($names);

   //DECLARE EMPTY ARRAY

   $place = []; // will declare an array items index by index

   $place[0] = "Antipolo";
   $place[1] = "Manila";
   $place[2] = "Teresa";

   echo "<br>";
   var_dump($place);
   echo "<br>";
   echo $place[1]; // check if it is correct
   

   //DECLARE EMPTY ARRAY USING ASSOCIATIVE ARRAY 

   $baranggay = []; 

   $baranggay["Antipolo"] = "San Jose";
   $baranggay["Teresa"] = "Dalig";
   $baranggay["Morong"] = "San Guillermo";

   echo "<br>";
   var_dump($baranggay);
   echo "<br>";
   echo $baranggay["Antipolo"];
   
   //MIXING ARRAY 

   $account = [];  //have arrays with both indexed and named keys

   $account[0] = "Gerald";
   $account[1] = "Geraldjoaquin1@gmail.com";
   $account["age"] = 19;

   echo "<br>";
   var_dump($account);
   

   // MULTIDIMENSIONAL ARRAYS --------------------------------------------------------------------

   //two dimensional arrays - arrays of an arrays of arrays

   $inventory = array(
    array("Tshirt", 20, 1),
    array("Short", 30, 10),
    array("Pants", 10, 8),
    array("Jacket", 20, 18)
   );

   echo "<br>";    // will get the index items first
   echo "<br>";    //   array 1 '0'- 1st index which is tshirt '0'        '1' for 20 stock               '2' for numbers of sold     || this is how it works
   echo "Item: " . $inventory[0][0] . " Available stock: " . $inventory[0][1] . " Sold: " . $inventory[0][2];
   echo "<br>";
   echo "Item: " . $inventory[1][0] . " Available stock: " . $inventory[1][1] . " Sold: " . $inventory[1][2];
   echo "<br>";
   echo "Item: " . $inventory[2][0] . " Available stock: " . $inventory[2][1] . " Sold: " . $inventory[2][2];
   echo "<br>";
   echo "Item: " . $inventory[3][0] . " Available stock: " . $inventory[3][1] . " Sold: " . $inventory[3][2];

   for ($row = 0; $row < 4; $row++) {  // using for loop inside of for loop
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>"; // since it has html node 'ul', items will be unordered list or bullet points
      for ($col = 0; $col < 3; $col++) { // '0' is the default value so it will be item and once the value incremented it will increase to '1' which is stock and '2' for number of solds
        echo "<li>".$inventory[$row][$col]."</li>"; // using 'li' it will be list style, to access the value 'row' will serve as 1st index while 'col' serve as the number index that have the 1st index
      }
    echo "</ul>";
  }
?>