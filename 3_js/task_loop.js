// // -------------------------------------------------------------------------  1
// for (let i = 1; i <= 10; i++) {
//     console.log(i);
// }

// // -------------------------------------------------------------------------  2
// let i = 1;
// while (i <= 10) {
//     console.log(i);
//     i++;
// }

// // -------------------------------------------------------------------------  3
// let arr = [1, 2, 3, 4, 5];
// for (let i = 0; i < arr.length; i++) {
//     console.log(arr[i]);
// }

// // -------------------------------------------------------------------------  4
// for (let i = 0; i <= 10; i += 2) {
//     console.log(i);
// }

// // -------------------------------------------------------------------------  5
// let sum = 0;
// for (let i = 1; i <= 10; i++) {
//     sum += i;
// }
// console.log(sum);

// // -------------------------------------------------------------------------  6
// let numbers = [1, 2, 3, 4, 5];
// let max = numbers[0];
// for (let i = 1; i < numbers.length; i++) {
//     if (numbers[i] > max) {
//         max = numbers[i];
//     }
// }
// console.log(max);

// // -------------------------------------------------------------------------  7
// let min = numbers[0];
// for (let i = 1; i < numbers.length; i++) {
//     if (numbers[i] < min) {
//         min = numbers[i];
//     }
// }
// console.log(min);

// // -------------------------------------------------------------------------  8
// let total = numbers.reduce((sum, num) => sum + num, 0);
// let average = total / numbers.length;
// console.log(average); 

// // -------------------------------------------------------------------------  9
// function factorial(n) {
//     let result = 1;
//     for (let i = 1; i <= n; i++) {
//         result *= i;
//     }
//     return result;
// }
// console.log(factorial(5));

// // -------------------------------------------------------------------------  10
// function fibonacci(n) {
//     let a = 0, b = 1, temp;
//     console.log(a);
//     console.log(b);
//     for (let i = 2; i < n; i++) {
//         temp = a + b;
//         console.log(temp);
//         a = b;
//         b = temp;
//     }
// }
// fibonacci(10);

// // -------------------------------------------------------------------------  11
// function isPrime(num) {
//     if (num < 2) return false;
//     for (let i = 2; i <= Math.sqrt(num); i++) {
//         if (num % i === 0) return false;
//     }
//     return true;
// }

// function printPrimes(n) {
//     for (let i = 2; i <= n; i++) {
//         if (isPrime(i)) console.log(i);
//     }
// }
// printPrimes(20);

// // -------------------------------------------------------------------------  12
// function multiplicationTable(n) {
//     for (let i = 1; i <= 10; i++) {
//         console.log(`${n} x ${i} = ${n * i}`);
//     }
// }
// multiplicationTable(5);

// // -------------------------------------------------------------------------  13
// let matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
// for (let row of matrix) {
//     for (let num of row) {
//         console.log(num);
//     }
// }

// // -------------------------------------------------------------------------  14
// for (let i = numbers.length - 1; i >= 0; i--) {
//     console.log(numbers[i]);
// }

// // -------------------------------------------------------------------------  15
// function printRange(arr, start, end) {
//     for (let i = start; i <= end; i++) {
//         console.log(arr[i]);
//     }
// }
// printRange([1, 2, 3, 4, 5], 2, 4);

// // -------------------------------------------------------------------------  16
// function printWithStep(arr, step) {
//     for (let i = 0; i < arr.length; i += step) {
//         console.log(arr[i]);
//     }
// }
// printWithStep([1, 2, 3, 4, 5], 2);

// // -------------------------------------------------------------------------  17
// function contains(arr, num) {
//     for (let i = 0; i < arr.length; i++) {
//         if (arr[i] === num) return true;
//     }
//     return false;
// }
// console.log(contains([1, 2, 3, 4, 5], 4));

// // -------------------------------------------------------------------------  18
// function countOccurrences(arr, num) {
//     let count = 0;
//     for (let i = 0; i < arr.length; i++) {
//         if (arr[i] === num) count++;
//     }
//     return count;
// }
// console.log(countOccurrences([1, 2, 1, 3, 2, 1], 1));