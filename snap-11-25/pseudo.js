// const array = "Ensign Babyface! Your shields were failing, sir. This should be interesting. Your head is not an artifact! What's a knock-out like you doing in a computer-generated gin joint like this? Why don't we just give everybody a promotion and call it a night - 'Commander'? But the probability of making a six is no greater than that of rolling a seven. What? We're not at all alike! I recommend you don't fire until you're within 40,000 kilometers. Wouldn't that bring about chaos? Flair is what marks the difference between artistry and mere competence.";
//
// const vowels = array.split().filter(array=>array.toLowerCase()[0] !='a','e','i','o','u').join(' ');

const array ="Ensign Babyface! Your shields were failing, sir. This should be interesting. Your head is not an artifact! What's a knock-out like you doing in a computer-generated gin joint like this? Why don't we just give everybody a promotion and call it a night - 'Commander'? But the probability of making a six is no greater than that of rolling a seven. What? We're not at all alike! I recommend you don't fire until you're within 40,000 kilometers. Wouldn't that bring about chaos? Flair is what marks the difference between artistry and mere competence.";

//splits the string and then returns new array without vowels
const vowels = array.split();

newArray = vowels.map(array=>array.replace( /[aeiou]/g, '' ));

console.log(newArray);
// pauls answer
function removeVowels(string to remove) {
	let vowels = ['a','e','i','o','u'];
	forEach(character in string to remove){
		if ( vowels contains character)
	}
}




//takes and array of numbers and returns the greatest
const numberArray = [2,5,8,34,47,83,24,6,45];

console.log(Math.max(...numberArray));

//fibonacci sequence
// function fibonacci(num){
// 	let a = 1, b = 0, temp;
//
// 	while (num >= 0){
// 		temp = a;
// 		a = a + b;
// 		b = temp;
// 		num--;
// 	}
//
// 	return b;
// }
//
// console.log(fibonacci(1,2,3,4,5,6,7,8))


const fibonacci = function(n) {
	let a = 0, b = 1, f = 1;
	for(let i = 2; i <= n; i++) {
		f = a + b;
		a = b;
		b = f;
	}
	return f;
};

console.log(fibonacci());