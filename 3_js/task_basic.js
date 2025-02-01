// -------------------------------------------------------------------------  DataType And Operation
// -------------------------------------------------------------------------  1

// var numOne = 1000
// var NumTwo = 500
// console.log(numOne / NumTwo)
// console.log(numOne - NumTwo)
// console.log(numOne + NumTwo)
// console.log(numOne * NumTwo)
// var avgNumOne = 7
// var avgNumTwo = 9
// var avgNumThree = 2
// console.log((avgNumOne + avgNumTwo + avgNumThree) / 3)
// var num = 150
// var dis = 0.7
// console.log(num * dis)
// var age = prompt("Enter your age:");
// age = Number(age)
// if (age >= 18 && age <= 30) {
//     console.log(true)
// } else {
//     console.log(false)
// }
// var num1 = Number(prompt("Enter number 1:"));
// var num2 = Number(prompt("Enter number 2:"));
// var result = num1 ** num2;
// console.log(result);
// var num1 = Number(prompt("Enter number 1:"));
// var num2 = Number(prompt("Enter number 2:"));
// var remainder = num1 % num2;
// console.log(remainder);


// -------------------------------------------------------------------------  2
// console.log(typeof(100))
// console.log(typeof(73.9))
// console.log(typeof(Nan))
// console.log(typeof("Water"))
// console.log(typeof(false))
// console.log(typeof(9 != 11))
// console.log("Orang" + "e")
// console.log("Orange" - "s")
// console.log("4" + "8")
// console.log("4" - "8")
// console.log("name" + 3)
// console.log("name" - 3)
// console.log(82 * "word")
// console.log(1 + "hello")
// console.log("hello" + 1)
// console.log(1 + true)
// console.log("hello" + true)
// console.log(typeof(Infinity))
// console.log(1 == '1')
// console.log(1 === '1')

// -------------------------------------------------------------------------  String
// -------------------------------------------------------------------------  1
// var name = "Welcome to Orange";
// console.log(name.toUpperCase());
// console.log(name.substring(8, 10));
// console.log(name.replace("Welcome to", "Hello from"));
// console.log(name.toLowerCase());
// console.log(name.length);
// console.log(name.replace("Orange", '"Orange"'));
// console.log(name.concat(" Jordan"));

// -------------------------------------------------------------------------  2
// var str = "cactus";
// var firstChar = str[0];
// var result = "";
// for (var i = 0; i < str.length; i++) {
//     if (str[i] === firstChar) {
//         result += "*";
//     } else {
//         result += str[i];
//     }
// }
// console.log(result);

// -------------------------------------------------------------------------  Array
// -------------------------------------------------------------------------  1
// var myArray = ["Coding", "Academy", "By", "Orange"];
// myArray.push("Jordan");
// console.log(myArray);
// myArray.pop();
// console.log(myArray);
// var newArr1 = myArray.slice(0, 2);
// console.log(newArr1);
// var newArr2 = ["Welcome", "To", ...myArray];
// console.log(newArr2);
// var newArr3 = myArray.slice(1);
// console.log(newArr3);
// var str = myArray.join(" ");
// console.log(str);
// console.log(myArray);
// var newArr4 = [myArray[0], myArray[3]];
// console.log(newArr4);

// -------------------------------------------------------------------------  2
// var fruit = ["banana", "apple", "orange", "watermelon"]; 
// var vegetables = ["carrot", "tomato", "pepper", "lettuce"];
// vegetables.pop();
// console.log(vegetables);
// fruit.shift();
// console.log(fruit);
// var indexOfOrange = fruit.indexOf("orange");
// console.log(indexOfOrange);
// fruit.push(indexOfOrange);
// console.log(fruit);
// var vegetablesLength = vegetables.length;
// console.log(vegetablesLength);
// vegetables.push(vegetablesLength);
// console.log(vegetables);
// var food = fruit.concat(vegetables);
// console.log(food);
// food.splice(4, 2);
// console.log(food);
// food.reverse();
// console.log(food);
// var foodString = food.join(", ");
// console.log(foodString);

// -------------------------------------------------------------------------  Function
// -------------------------------------------------------------------------  1
// function stringToArray(str) {
//     return str.split(" ");
// }
// var input = "Orange Jordan";
// var output = stringToArray(input);
// console.log(output);

// -------------------------------------------------------------------------  2
// function hidePhoneNumber(phoneNumber) {
//     return '*******' + phoneNumber.slice(7); 
// }
// var input = "0776807777";
// var output = hidePhoneNumber(input);
// console.log(output);

// -------------------------------------------------------------------------  3
// function hideEmail(email) {
//     return email.split("@")[0] + "…@orange.com";
// }
// var input = "orange_academy@orange.jo";
// var output = hideEmail(input);
// console.log(output);

// -------------------------------------------------------------------------  4
// function capitalizeFirstLetter(str) {
//     return str.charAt(0).toUpperCase() + str.slice(1);
// }
// var input = "coding academy by orange";
// var output = capitalizeFirstLetter(input);
// console.log(output);

// -------------------------------------------------------------------------  5
// function capitalizeFirstLetter(str) {
//     var words = str.split(" ");
//     for (var i = 0; i < words.length; i++) {
//         words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
//     }
//     return words.join(" ");
// }
// var input = "coding academy by orange";
// var output = capitalizeFirstLetter(input);
// console.log(output);

// -------------------------------------------------------------------------  6
// function flipNumber(number) {
//     return number.toString().split("").reverse().join("");
// }
// var input = 92485;
// var output = flipNumber(input);
// console.log(output);

// -------------------------------------------------------------------------  7
// function swapValues(a, b) {
//     var temp = a;
//     a = b;
//     b = temp;
// }
// console.log("Method 1: a = " + a + ", b = " + b);

// -------------------------------------------------------------------------  8
// function removeCharAtIndex(str, index) {
//     return str.slice(0, index) + str.slice(index + 1);
// }
// var inputString = "Orange";
// var indexToRemove = 3;
// var output = removeCharAtIndex(inputString, indexToRemove);
// console.log(output);

// -------------------------------------------------------------------------  9
// function mergeStrings(str1, str2) {
//     return str1.slice(1) + str2.slice(1);
// }
// var string1 = "lora";
// var string2 = "inge";
// var output = mergeStrings(string1, string2);
// console.log(output);

// -------------------------------------------------------------------------  10
// function checkChar(chr , str) {
//     // var str1 = str.toLowerCase();
//     // var chr1 = chr.toLowerCase();
//     for (i = 0; i < str.length; i++) {
//         if (str[i] == chr) {
//             return true;
//         }
//     }
//     return false;
// }
// var char = 'O';
// var str = 'orange';
// console.log(checkChar(char , str));

// -------------------------------------------------------------------------  11
// function stringToArray(str) {
//     return str.split(" ");
// }
// var input = "Coding Academy by Orange";
// console.log(stringToArray(input)); 

// -------------------------------------------------------------------------  12
// function sortStringAlphabetically(str) {
//     return str.split("").sort().join("");
// }
// var input = "orange";
// console.log(sortStringAlphabetically(input)); 

// -------------------------------------------------------------------------  Conditionals
// -------------------------------------------------------------------------  1
// function checkEligibility(yearOfBirth) {
//     let currentYear = new Date().getFullYear();
//     let age = currentYear - yearOfBirth;
//     if (age > 60) {
//         console.log("You may join the seniors program.");
//     } else if (age > 30) {
//         console.log("You are not eligible. You may join other programs.");
//     } else if (age >= 18) {
//         console.log("You are eligible. Start your application.");
//     } else {
//         console.log("You may join the kids program.");
//     }
// }
// checkEligibility(1995);

// -------------------------------------------------------------------------  2
// function switchCase(str) {
//     let result = "";
//     for (let i = 0; i < str.length; i++) {
//         let char = str[i];
//         result += (char === char.toUpperCase()) ? char.toLowerCase() : char.toUpperCase();
//     }
//     return result;
// }
// console.log(switchCase("OrAnGe"));

// -------------------------------------------------------------------------  3
// function toCamelCase(str) {
//     let result = "";
//     let words = str.split(" ");
//     for (let i = 0; i < words.length; i++) {
//         let word = words[i];
//         result += word.charAt(0).toUpperCase() + word.slice(1);
//     }
//     return result;
// }
// console.log(toCamelCase("Coding Academy by Orange"));

// -------------------------------------------------------------------------  4
// function removeElement(arr, element) {
//     return arr.filter(item => item !== element);
// }
// console.log(removeElement(["Coding", "Academy", "By", "Orange"], "By"));

// -------------------------------------------------------------------------  5
// function isOddOrEven(num) {
//     if (num % 2 === 0) {
//         return "Even";
//     } else {
//         return "Odd";
//     }
// }
// console.log(isOddOrEven(4));
// console.log(isOddOrEven(7));

// -------------------------------------------------------------------------  6
// function isNumber(value) {
//     if (typeof value === "number") {
//         return true;
//     } else {
//         return false;
//     }
// }
// console.log(isNumber(5));

// -------------------------------------------------------------------------  7
// function findLargest(a, b) {
//     if (a > b) {
//         return a;
//     } else {
//         return b;
//     }
// }
// console.log(findLargest(5, 10));

// -------------------------------------------------------------------------  8
// function triangleType(a, b, c) {
//     if (a === b && b === c) {
//         return "Equilateral";
//     } else if (a === b || b === c || a === c) {
//         return "Isosceles";
//     } else {
//         return "Scalene";
//     }
// }
// console.log(triangleType(3, 3, 3));
// console.log(triangleType(3, 4, 3));
// console.log(triangleType(3, 4, 5));

// -------------------------------------------------------------------------  9
// function isInRange(num, start, end) {
//     if (num >= start && num <= end) {
//         return true;
//     } else {
//         return false;
//     }
// }
// console.log(isInRange(5, 1, 10));
// console.log(isInRange(15, 1, 10));

// -------------------------------------------------------------------------  10
// function isLeapYear(year) {
//     if ((year % 4 === 0 && year % 100 !== 0) || year % 400 === 0) {
//         return true;
//     } else {
//         return false;
//     }
// }
// console.log(isLeapYear(2020));
// console.log(isLeapYear(2023));

//  ------------------------------------------------------------------------- Loop
//  -------------------------------------------------------------------------  1
// for (let i = 2; i <= 50; i += 2) {
//     console.log(i);
// }

// let i = 2;
// while (i <= 50) {
//     console.log(i);
//     i += 2;
// }

// -------------------------------------------------------------------------  2
// for (let i = 2; i <= 50; i += 2) {
//     console.log(i);
// }

// -------------------------------------------------------------------------  3
// for (let i = 2; i <= 50; i += 2) {
//     console.log(i);
// }
// for (let i = 1; i <= 50; i += 2) {
//     console.log(i);
// }

// -------------------------------------------------------------------------  4
// for (let i = 1; i <= 100; i++) {
//     if (i % 3 === 0 && i % 5 === 0) {
//         console.log("FizzBuzz");
//     } else if (i % 3 === 0) {
//         console.log("Fizz");
//     } else if (i % 5 === 0) {
//         console.log("Buzz");
//     } else {
//         console.log(i);
//     }
// }

// -------------------------------------------------------------------------  5
// function fizzBuzz(n) {
//     if (n % 3 === 0 && n % 5 === 0) {
//         console.log("FizzBuzz");
//     } else if (n % 3 === 0) {
//         console.log("Fizz");
//     } else if (n % 5 === 0) {
//         console.log("Buzz");
//     } else {
//         console.log(n);
//     }
// }

// for (let i = 1; i <= 100; i++) {
//     fizzBuzz(i);
// }

// -------------------------------------------------------------------------  6
// function fizzBuzz(n) {
//     if (n > 100) return;
    
//     if (n % 3 === 0 && n % 5 === 0) {
//         console.log("FizzBuzz");
//     } else if (n % 3 === 0) {
//         console.log("Fizz");
//     } else if (n % 5 === 0) {
//         console.log("Buzz");
//     } else {
//         console.log(n);
//     }

//     fizzBuzz(n + 1);
// }

// fizzBuzz(1);

// -------------------------------------------------------------------------  7
// function convertToBanknotes(amount, denominations) {
//     let result = [];
//     for (let i = 0; i < denominations.length; i++) {
//         while (amount >= denominations[i]) {
//             result.push(denominations[i]);
//             amount -= denominations[i];
//         }
//     }
//     return result;
// }

// console.log(convertToBanknotes(57, [25, 10, 5, 1]));

// -------------------------------------------------------------------------  8
// function countCharacterOccurrence(str, char) {
//     let count = 0;
//     str = str.toLowerCase();
//     char = char.toLowerCase();
//     for (let i = 0; i < str.length; i++) {
//         if (str[i] === char) {
//             count++;
//         }
//     }
//     return count;
// }

// console.log(countCharacterOccurrence("Coding Academy by Orange", "o"));

// -------------------------------------------------------------------------  9
// -------------------------------------------------------------------------  9 a
// for (let i = 0; i <= 20; i++) {
//     console.log(i);
// }
// -------------------------------------------------------------------------  9 b
// for (let i = 3; i <= 29; i += 2) {
//     console.log(i);
// }
// -------------------------------------------------------------------------  9 c
// for (let i = 12; i >= -14; i -= 2) {
//     console.log(i);
// }
// -------------------------------------------------------------------------  9 d
// for (let i = 50; i >= 20; i--) {
//     if (i % 3 === 0) {
//         console.log(i);
//     }
// }

// -------------------------------------------------------------------------  10
// -------------------------------------------------------------------------  10 e
// let arr = [7, 500, 'KH404', 'black', 36];

// for (let i = 0; i < arr.length; i++) {
//     console.log(arr[i]);
// }
// -------------------------------------------------------------------------  10 f
// let str = 'CodingAcademy';

// for (let i = str.length - 1; i >= 0; i--) {
//     console.log(str[i]);
// }

// -------------------------------------------------------------------------  11
// let arr = [7, 23, 18, 9, -13, 38, -10, 12, 0, 124];
// let evens = [];
// let odds = [];

// for (let i = 0; i < arr.length; i++) {
//     if (arr[i] % 2 === 0) {
//         evens.push(arr[i]);
//     } else {
//         odds.push(arr[i]);
//     }
// }

// console.log('Evens:', evens);
// console.log('Odds:', odds);

// -------------------------------------------------------------------------  12
// let proteinOptions = ['chicken', 'pork', 'tofu', 'beef', 'fish', 'beans'];
// let grainOptions = ['rice', 'pasta', 'corn', 'potato', 'quinoa', 'crackers'];
// let vegetableOptions = ['peas', 'green beans', 'kale', 'edamame', 'broccoli', 'asparagus'];
// let beverageOptions = ['juice', 'milk', 'water', 'soy milk', 'soda', 'tea'];
// let dessertOptions = ['apple', 'banana', 'more kale', 'ice cream', 'chocolate', 'kiwi'];

// function createMeals(numberOfMeals) {
//     let meals = [];
    
//     for (let i = 0; i < numberOfMeals; i++) {
//         let protein = proteinOptions[Math.floor(Math.random() * proteinOptions.length)];
//         let grain = grainOptions[Math.floor(Math.random() * grainOptions.length)];
//         let vegetable = vegetableOptions[Math.floor(Math.random() * vegetableOptions.length)];
//         let beverage = beverageOptions[Math.floor(Math.random() * beverageOptions.length)];
//         let dessert = dessertOptions[Math.floor(Math.random() * dessertOptions.length)];
        
//         let meal = [protein, grain, vegetable, beverage, dessert];
//         meals.push(meal);
//     }
    
//     return meals;
// }

// let meals = createMeals(5);
// console.log(meals);
