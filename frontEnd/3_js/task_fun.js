// // -------------------------------------------------------------------------  1
// function findSmallest(array){
//     let smallest = array[0];
//     for (let i = 1; i < array.length; i++) {
//         if (array[i] < smallest) {
//             smallest = array[i];
//         }
//     }
//     return smallest;
// }

// function findSmallestTwo(array){
//     return Math.min(...array);
// }

// console.log(findSmallest([30, 45, 60, 7]));
// console.log(findSmallestTwo([30, 45, 60, 7]));

// // -------------------------------------------------------------------------  2
// function alphabeticalOrder(str) {
//     return str.split('').sort().join('');
// }

// console.log(alphabeticalOrder('hello')); 

// // -------------------------------------------------------------------------  3
// function factorial(n) {
//     if (n === 0) return 1;
//     return n * factorial(n - 1);
// }
// console.log(factorial(8));

// // -------------------------------------------------------------------------  4
// function oddOrEven(num) {
//     if (typeof(num) !== 'number') {
//         return 'wrong input';
//     }
//     if (num % 2 === 0) {
//         return 'even';
//     } else {
//         return 'odd';
//     }
// }

// console.log(oddOrEven(9));
// console.log(oddOrEven(8));
// console.log(oddOrEven('s'));

// // -------------------------------------------------------------------------  5
// function evenNum(array) {
//     return array.filter(num => num % 2 === 0);
// }
// console.log(evenNum([1, 2, 3, 4, 5, 6, 7, 8, 9]));

// // -------------------------------------------------------------------------  6
// function numbersOnly(array) {
//     return array.filter(num => typeof num === 'number');
// }
// console.log(numbersOnly(['Ayham', 3, 7, 'Alaa', 13, 'coding']));

// // -------------------------------------------------------------------------  7
// function addUp(n) {
//     return (n * (n + 1)) / 2;
// }
// console.log(addUp(8));

// // -------------------------------------------------------------------------  8
// function minMaxLengthAverage(arr) {
//     let min = Math.min(...arr);
//     let max = Math.max(...arr);
//     let length = arr.length;
//     let avg = arr.reduce((sum, num) => sum + num, 0) / length;
//     return [min, max, length, avg];
// }
// console.log(minMaxLengthAverage([7, 13, 3, 77, 100]));

// // -------------------------------------------------------------------------  9
// function romanNumbers(num) {
//     let roman = {M:1000,CM:900,D:500,CD:400,C:100,XC:90,L:50,XL:40,X:10,IX:9,V:5,IV:4,I:1};
//     let result = "";
//     for (let key in roman) {
//         while (num >= roman[key]) {
//             result += key;
//             num -= roman[key];
//         }
//     }
//     return result;
// }
// console.log(romanNumbers(1989));

// // -------------------------------------------------------------------------  10
// function countWords(str) {
//     let count = 0;
//     for (let i = 0; i < str.length; i++) {
//         if (str[i] === ' ') {
//             count++;
//         }
//     }
//     return count + 1;
// }
// console.log(countWords('hello from CodingAcademy!'));

// // -------------------------------------------------------------------------  11
// function MultiplyByLength(arr) {
//     return arr.map(num => num * arr.length);
// }
// console.log(MultiplyByLength([4,2,5]));

// // -------------------------------------------------------------------------  12
// function checkEnding(str1, str2) {
//     return str1.endsWith(str2);
// }
// console.log(checkEnding("CodingSchool", "ol"));

// // -------------------------------------------------------------------------  13
// function doubleChar(str) {
//     return str.split('').map(char => char + char).join('');
// }
// console.log(doubleChar('Coding'));

// // -------------------------------------------------------------------------  14
// function findIndex(arr, element) {
//     return arr.indexOf(element);
// }
// console.log(findIndex(['Ali', 'Mazen', 'Ayham', 'Murad'], 'Ali'));

// // -------------------------------------------------------------------------  15
// function getAbsSum(arr) {
//     return arr.reduce((sum, num) => sum + Math.abs(num), 0);
// }
// console.log(getAbsSum([-1, -3, -5, -4, -10, 0]));