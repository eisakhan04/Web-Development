//MDN docs
console.log("hi conditional statment");
let age = 5;

//  if (age >= 18){
//     console.log("you can Vote");
// }
// if(age < 18){
//     console.log("You are not eligible to vote");
// }
 
let mode = "dark";
let color;
if (mode === "dark") {
    color = "black";
}
else if(mode === "light"){
    color = "white" ;
}else{
    color = "white" ;
}

console.log(color);

if (mode === "dark") {
    color = "black";
}
else{
    color = "white" ;
}
console.log(color);

let num = 20;
if (num % 2 == 0)
{
    console.log(num  +" is even number");
} else {
    console.log(num , " is odd number");
}
let x = 6;
let y = 4;
if (x > y) console.log(x+" is greater than "+y);

else if (x < y) {
    console.log(x+ " is less than "+ y);
} else {
    console.log(x + " and " + y + " are equal");
}

//ternary operator
 Operator = (num >15 ) ? 'greater' : 'less';
 console.log(Operator);

//switch case  statement
let day = "monday";
switch (day) {
    case "sunday":
        console.log("Today is Sunday!");
        break;
    case "monday":
        console.log("Today is Monday!");
        //break;   //without this line code will execute next lines also
    default:
        console.log("I don't know what day it is.");
}  


//  practice  question
//  alert("Please enter your name");
//  let name= prompt("Please enter your name");
//  console.log(name);


// let number = prompt( "Enter a number" );
// if (number % 5 == 0 ){
//     console.log(number + " is divisible by 5") ;
// }
// else{
//     console.log(number + " is not divisible by 5") ;
// }

let n = prompt("Enter your score (0-100): ");
if( n >= 90 && n <= 100){
    grade = "A+";
}
else if(n >=80 && n < 90){
    grade = "A";
}
else if(n >=70 && n < 79){
    grade = "B";
}
else if(n >= 60 && n <= 69){
    grade = "C";
}
else if (n >=50 && n <= 59){
    grade = "D";
    }
else if (n >= 0 && n  <= 49)    {
    grade = "F";
}
console.log ("Your Grade is "+grade);
