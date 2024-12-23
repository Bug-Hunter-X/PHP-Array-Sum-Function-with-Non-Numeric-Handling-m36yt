function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let result = calculateSum(numbers);
console.log(result); // Output: 15

//The bug is that the function does not handle non-numeric values in the input array.  If a string or other non-numeric value is included it will cause an error. 