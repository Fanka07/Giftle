let purchaseNum = document.getElementById("purchaseNum");

let newValue

document.getElementById("upArrow").addEventListener("click", function() {
	newValue = parseInt(purchaseNum.value) + 1;
	console.log(newValue)
	purchaseNum.value = JSON.stringify(newValue);
})

document.getElementById("downArrow").addEventListener("click", function() {
	newValue = parseInt(purchaseNum.value) - 1;
	console.log(newValue)
	purchaseNum.value = JSON.stringify(newValue);
})