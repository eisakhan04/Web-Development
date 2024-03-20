//For loop to print numbers 1 to 5:

for (let i = 1; i <= 5; i++) {
    console.log(i);
  }

  
//For loop to print even numbers from 2 to 10:
for (let i = 2; i <= 10; i += 2) {
    console.log(i);
  }

  
  //For loop to print numbers in reverse from 5 to 1:'
  for (let i = 5; i >= 1; i--) {
      console.log(i);
  }

  //or loop to print multiples of 3 from 3 to 15:
  for (let i = 3; i <= 15; i += 3) {
    console.log(i);
  }

  //While loop to print numbers 1 to 5:
  let i = 1;
  while (i <= 5) {
    console.log(i);
    i++;
  }

  
  //While loop to print powers of 2 from 2 to 32:
  let pwer = 1;
while (pwer <= 32) {
  console.log(pwer);
  power *= 2;
}


//Do-while loop to print numbers 1 to 5:

let numm = 1;
do {
  console.log(numm);
  num++;
} while (numm <= 5);


//For-in loop to iterate through an array:
const arr = [1, 2, 3, 4, 5];
for (let index in arr) {
  console.log(arr[index]);
}


//



//For-of loop to iterate through an array:
const arra = [1, 2, 3, 4, 5];
for (let element of arra) {
  console.log(element);
}
//For-of loop to iterate through an object:

const objj = { a: 1, b: 2, c: 3 };
for (let key in objj) {
  console.log(`${key}: ${objj[key]}`);
}
//These examples demonstrate various types of loops in JavaScript along with console logging for each iteration.

T


// For loop to print numbers 1 to 5:

for (let i = 1; i <= 5; i++) {
  console.log(i);
}
// This loop starts with i equal to 1, and it increments i by 1 in each iteration until i becomes greater than 5. It prints the value of i in each iteration.

// For loop to print even numbers from 2 to 10:

for (let i = 2; i <= 10; i += 2) {
  console.log(i);
}

// This loop starts with i equal to 2, and it increments i by 2 in each iteration until i becomes greater than 10. It prints only even numbers.

// For loop to print numbers in reverse from 5 to 1:

for (let i = 5; i >= 1; i--) {
  console.log(i);
}


// This loop starts with i equal to 5, and it decrements i by 1 in each iteration until i becomes less than 1. It prints the numbers in reverse order.

// For loop to print multiples of 3 from 3 to 15:
for (let i = 3; i <= 15; i += 3) {
  console.log(i);
}


// This loop starts with i equal to 3, and it increments i by 3 in each iteration until i becomes greater than 15. It prints only multiples of 3.

// While loop to print numbers 1 to 5:

let ii = 1;
while (ii <= 5) {
  console.log(i);
  ii++;
}
// This loop starts with i equal to 1. It continues to execute as long as i is less than or equal to 5. It prints the value of i in each iteration and then increments i by 1.

// While loop to print powers of 2 from 2 to 32:
let power = 1;
while (power <= 32) {
  console.log(power);
  power *= 2;
}
// This loop starts with power equal to 1. It continues to execute as long as power is less than or equal to 32. It prints power in each iteration and then multiplies power by 2.

// Do-while loop to print numbers 1 to 5:

let num = 1;
do {
  console.log(num);
  num++;
} while (num <= 5);    

              

// This loop iterates through each index of the array and prints the corresponding element.

// For-of loop to iterate through an array:
const array = [1, 2, 3, 4, 5];
for (let element of array) {
  console.log(element);
}

// This loop directly iterates through each element of the array and prints it.

// For-of loop to iterate through an object:

const obj = { a: 1, b: 2, c: 3 };
for (let key in obj) {
  console.log(`${key}: ${obj[key]}`);
}

//print 1 to 5 
for(let i = 1; i<=5; i++){
  console.log(i);
}