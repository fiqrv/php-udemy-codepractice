<?php // Enter PHP Mode
declare(strict_types=1); // So that we can disable PHP data type juggling
echo "Hello World!"; // Semicolon denote the end of the line

// Exercise 1
?>
<h1><?php echo "Hello World!";?></h1>
<?php
// Or
echo "<h1>Hello World!</h1>";

/*
BLock Comments
*/

// Line Comments

// Variable
$age;

/* VARIABLE NAMING RULES ================================================================
May Content aphabets, numbers, and underscores
First character must be a letter or underscore, number are not allowed
Best practice
- Be descriptive
- Use meaningful abbreviations
- Avoid using single letter variable names except maybe for loop then its fine
- Be consistent, stick to the naming convention
- Avoid generic names

POPULAR NAMING CONVENTIONS ================================================================
- Camel Casing
$myName
- Pascal Casing
$MyName
- Snake Casing
$my_name
- Kebab Casing
$my-name
*/ 
// Good
$myName;
// Bad
$mn;


// OPERATOR
// ASSIGNMENT OPERATOR
$age = 20;
// echo $age;

$data = -24;
$data = 5_000_000;
$data = 12.34;
$data = 'John';
$data = "{$data} Smith";
// var_dump($data);
// var_dump($data[3]);
$data[3] = 'J';
// var_dump($data);
// String interpolation
// echo "My name is {$data}"; // Curly braces are optional

// $isLoggedIn = false;
// $hasBlogPosts;
// var_dump($isLoggedIn);

/*
// PHP is dynamically typed 
// 9 data type of PHP
null
bool
int
float (floating point number)
string
array
object
callable
resource
*/

// Array
$data = []; // Declare Empty Array
$data = ['Burger', 'Fries', 'Hotdog']; // Define Array with Values
$data[] = 'Pizza';
// var_dump($data[1]);

// Associative Array use key instead of index number
$data = [
    'name' => 'John',
    'age' => 20,
    'isLoggedIn' => true
];
$data ['isDrunk'] = false;
// var_dump($data);

// Multi Dimensional Array (Nested array no limit)
$data = [
        'school' => [
            'name' => 'John',
            'location' => 'New York',
            'classes' => [ '1', '2', '3' ]
        ],
        'school2' => [
            'name' => 'John',
            'location' => 'California',
            'classes' => [ '1', '2', '3' ]
        ]
    ];

// var_dump($data['school2']['location']);

// Type Casting
// Booleans 
// var_dump((bool) "");             // -> false
// var_dump((bool) "Some Text");    // -> true
// var_dump((boolean) "0");         // -> false
// var_dump((bool) "false");        // -> true     Wtf?
// var_dump((bool) 0);              // -> false
// var_dump((bool) 1);              // -> true
// var_dump((bool) -1);             // -> true
// var_dump((bool) null);           // -> false
// var_dump((bool) []);             // -> false
// var_dump((bool) ["hello"]);      // -> true

// Integers
// var_dump((int) false);        // -> 0
// var_dump((integer) true);     // -> 1
// var_dump((int) "-1");         // -> -1
// var_dump((int) "Hello");      // -> 0
// var_dump((int) "12 months");  // -> 12
// var_dump((int) 12.7);         // -> 12
// var_dump((int) null);         // -> 0

// Float
// var_dump((float) false);      // -> 0
// var_dump((float) true);       // -> 1
// var_dump((float) "-1");       // -> -1
// var_dump((float) "Hello");    // -> 0
// var_dump((float) "2.5 Hour"); // -> 2.5
// var_dump((float) null);       // -> 0

// Strings
// var_dump((string) false);     // -> ""
// var_dump((string) true);      // -> "1"
// var_dump((string) 0);         // -> "0"
// var_dump((string) 1.353);     // -> "1.353"
// var_dump((string) []);        // -> "Array"
// var_dump((string) ["John"]);  // -> "Array"
// var_dump((string) null);      // -> ""

// Arrays
// var_dump((array) false);      // -> [false]
// var_dump((array) true);       // -> [true]
// var_dump((array) 0);          // -> [0]
// var_dump((array) 1.353);      // -> [1.353]
// var_dump((array) "John");     // -> ["John"]
// var_dump((array) null);       // -> []

// Type juggling
// echo (string) 30; // -> "30" with or without (string) is the same

// Arithmetic Operators
$data = 1 + (2 - 3) * 4 / 5; // Can change the order of operations with the use of parenthesis
// var_dump($data);
$data = 11 % 2; // Modulo operator
$data = 10 ** 2; // Exponentiation 10 to the power of 2
// var_dump($data);

// Other Assignment Operators
$data = 10;
$data += 5; // Same as $data = $data + 5
// Also apply to other arithmetic operators
// var_dump($data)

// Comparison Operators
// $a == $b     Equal	                    true if $a is equal to $b after type juggling.
// $a === $b	Identical	                true if $a is equal to $b, and they are of the same type.
// $a != $b	    Not equal	                true if $a is not equal to $b after type juggling.
// $a <> $b	    Not equal	                true if $a is not equal to $b after type juggling.
// $a !== $b	Not identical	            true if $a is not equal to $b, or they are not of the same type.
// $a < $b	    Less than	                true if $a is strictly less than $b.
// $a > $b	    Greater than	            true if $a is strictly greater than $b.
// $a <= $b	    Less than or equal to	    true if $a is less than or equal to $b.
// $a >= $b	    Greater than or equal to	true if $a is greater than or equal to $b.
// $a <=> $b	Spaceship	                An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.
// var_dump(1 === "1");

// Error Control Operators
// @var_dump((string)[1]) // By adding @ ignores the warning

// Incrementing and Decrementing Operators
$data = 5;
$data++; // Same as $data += 1 or $data = $data + 1
// var_dump(++$data); // Increment by 1 after before displayed

// Logical Operators
$age = 31;
$data = $age > 30 && $age < 40;
// var_dump($data);
// AND is using &&, OR is using ||

// Operator Precedence
// Associativity	Operators	                                    Additional Information
// (n/a)	        clone new	                                    clone and new
// right	        **	                                            arithmetic
// (n/a)	        + - ++ -- ~                                     (int) (float) (string) (array) (object) (bool) @	arithmetic (unary + and -), increment/decrement, bitwise, type casting and error control
// left	                                                            instanceof	type
// (n/a)	        !	                                            logical
// left	            * / %	                                        arithmetic
// left	            + - .	                                        arithmetic (binary + and -), array and string (. prior to PHP 8.0.0)
// left	            << >>	                                        bitwise
// left	            .	                                            string (as of PHP 8.0.0)
// non-associative	< <= > >=	                                    comparison
// non-associative	== != === !== <> <=>	                        comparison
// left	            &	                                            bitwise and references
// left	            ^	                                            bitwise
// left	            |	                                            bitwise
// left	            &&	                                            logical
// left	            ||	                                            logical
// right	        ??	                                            null coalescing
// non-associative	? :	                                            ternary (left-associative prior to PHP 8.0.0)
// right	        = += -= *= **= /= .= %= &= |= ^= <<= >>= ??=	assignment
// (n/a)	        yield from	                                    yield from
// (n/a)	        yield	                                        yield
// (n/a)	        print	                                        print
// left	            and	                                            logical
// left	            xor	                                            logical
// left	            or	                                            logical

// Constants
const FIXED_VALUE = 10; // This is a constant best written in all caps
// Can no longer reassign the value of FIXED_VALUE
// var_dump(FIXED_VALUE);

// String Concatenation or can use string interpolation
// var_dump("Hello " . FIXED_VALUE ." World");
// Concatenation can also use abreviation
$message = "Hello my name is";
$message .= " John";
// var_dump($message);

// Control Structures
$score = 80;

// If Statement
if($score >= 80) {
    echo "A";
} else if ($score > 70) {
    echo "B";
} else {
    echo "C";
}

// Switch Statement
switch($score) {
    case 80:
        echo "A";
        break;
    case 70:
        echo "B";
        break;
    default:
        echo "C";
}

// Match expression new to php 8.0.0
$score = 80;
var_dump(match($score) {
    80 => "A",
    70 => "B",
    default => "C",
});

/**
 * Get the status message based on the payment status.
 *
 * @param int $paymentStatus The payment status.
 * @return string The status message.
 */
function getStatus(int|float $paymentStatus) : ? string // Function that returns a string or null other example is : void which return nothing
{
    // Match the payment status to get the corresponding message
    $message = match($paymentStatus){
        1 => "Pending",
        2 => "Paid",
        default => "No parameter provided"
    };

    // Log the status message
    error_log($message);

    // Return the status message
    return $message;
};

// Union type

$statusPayment = getStatus(1);
var_dump($statusPayment);

var_dump(false && true);

function example(){
    echo "example function is called";
    return true;
}

var_dump(false && example()); // Short circuiting so that unecessary processing is not done

// While loop
$a = 1;
while($a <= 15){
    // echo $a . "</br>";
    $a++;
}

// Do while loop
$a = 1;
do{
    // echo $a . "</br>";
    $a++;
} while ($a <= 15);

// For loop
for($a = 1; $a <= 15; $a++){
    if($a % 2 == 1){
        continue;
    }
    // echo $a . "</br>";
}

// For each
$name=["John", "Jane", "Jack", "Jill"];
foreach($name as $key => $value){
    echo $key . " => " . $value . "</br>";
}
echo "<br>";
var_dump ((1996%4));
var_dump ((1996%100));
var_dump ((1996%400));
echo "<br>";
var_dump ((2000%4));
var_dump ((2000%100));
var_dump ((2000%400));
echo "<br>";
var_dump ((1900%4));
var_dump ((1900%100));
var_dump ((1900%400));
?>