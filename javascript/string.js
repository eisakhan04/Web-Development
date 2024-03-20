let a = "Eisa baloch";
console.log(a);




///

// Define two strings
var str1 = "Hello";
var str2 = "World";

// Concatenate the two strings
var concatenatedString = str1 + " " + str2;
console.log("Concatenated string:", concatenatedString);




// Accessing individual characters of a string
console.log("Character at index 0:", concatenatedString[0]);
console.log("Character at index 1:", concatenatedString.charAt(1));

// Finding the length of a string
var lengthOfString = concatenatedString.length;
console.log("Length of the string:", lengthOfString);




// Converting string to uppercase and lowercase
var uppercaseString = concatenatedString.toUpperCase();
var lowercaseString = concatenatedString.toLowerCase();
console.log("Uppercase string:", uppercaseString);
console.log("Lowercase string:", lowercaseString);




// Extracting a substring
var substring = concatenatedString.substring(6, 11);
console.log("Substring:", substring);




// Finding the index of a substring
var indexOfSubstring = concatenatedString.indexOf("World");
console.log("Index of 'World':", indexOfSubstring);





// Checking if a string contains a substring
var containsSubstring = concatenatedString.includes("Hello");
console.log("Does it contain 'Hello'?", containsSubstring);






// Replacing a substring
var replacedString = concatenatedString.replace("World", "Universe");
console.log("Replaced string:", replacedString);
