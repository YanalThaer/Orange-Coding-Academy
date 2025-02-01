// // -------------------------------------------------------------------------  1
// // let person = {
// //     name: "Adam",
// //     age: 25,
// //     gender: "male"
// // };
// // console.log(person.name, person.age, person.gender);

// // -------------------------------------------------------------------------  2
// // let person = {
// //     name: "Adam",
// //     age: 25
// // };
// // person.gender = "male";
// // console.log(person);

// // -------------------------------------------------------------------------  3
// let person = {
//     name: "Adam",
//     age: 25
// };
// person["gender"] = "male";
// console.log(person);

// // -------------------------------------------------------------------------  4
// console.log(person.name);

// // -------------------------------------------------------------------------  5
// console.log(person["name"]);

// // -------------------------------------------------------------------------  6
// for (let key in person) {
//     console.log(`${key}: ${person[key]}`);
// }

// // -------------------------------------------------------------------------  7
// console.log(Object.keys(person));

// // -------------------------------------------------------------------------  8
// console.log(Object.values(person));

// // -------------------------------------------------------------------------  9
// console.log(Object.entries(person));

// // -------------------------------------------------------------------------  10
// let obj1 = { 
//     name: "Adam",
//     age: 25
// };
// let obj2 = { 
//     gender: "male" 
// };
// let mergedObj = Object.assign({}, obj1, obj2);
// console.log(mergedObj);

// // -------------------------------------------------------------------------  11
// let frozenObj = { 
//     name: "Adam", 
//     age: 25 
// };
// Object.freeze(frozenObj);
// frozenObj.age = 30;
// console.log(frozenObj);

// // -------------------------------------------------------------------------  12
// let sealedObj = { 
//     name: "Adam", 
//     age: 25 
// };
// Object.seal(sealedObj);
// sealedObj.age = 30;
// sealedObj.gender = "male";
// console.log(sealedObj);