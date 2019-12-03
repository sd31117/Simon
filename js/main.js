//used to set css properties of html elements

// var title = document.getElementById("instructions");
// title.setAttribute("style", "color: green; left: 10px;");
//
// title.style.color = "blue";
// title.style.backgroundColor = "red";


var clickOrderValues = [];
var generatedOrder = [];
var difficulty = 1;

//random number generator between two values
function getRandomNumber(start,range){
    let getRandom = Math.floor((Math.random() * (range - start)) + start);
    return getRandom;
}

//generates the click order on start button press
function generateClickOrder(){
    document.getElementById("level").innerHTML = "Level: " + difficulty;

    //generates number with getRandomNumber function, then adds to the array
    for (k=0; k < difficulty; k++){
        generatedOrder.push(getRandomNumber(1, 4));
    }

    var text = "<ul>";
    for (i=0; i < generatedOrder.length; i++){
        text += "<li>" + generatedOrder[i] + "</li>";
    }
    text += "</ul>";
    document.getElementById("debug-order").innerHTML = text;

}

//function to flash the buttons color in the order of generatedOrder
function colorFlasher(){
    
}

//used to detect clicks on elements
document.getElementById("start").onclick = function() {generateClickOrder()};
document.getElementById("btn1").onclick = function() {clickOrder(1)};
document.getElementById("btn2").onclick = function() {clickOrder(2)};
document.getElementById("btn3").onclick = function() {clickOrder(3)};
document.getElementById("btn4").onclick = function() {clickOrder(4)};

//used to compare two arrays
function arrayMatch(arr1,arr2){
    // Check if the arrays are the same length
	if (arr1.length !== arr2.length) return false;

	// Check if all items exist and are in the same order
	for (var i = 0; i < arr1.length; i++) {
		if (arr1[i] !== arr2[i]) return false;
	}

	// Otherwise, return true
	return true;
}


//records the order of users button clicks into the clickOrderValues array
function clickOrder(number){

    clickOrderValues.push(number);

    if (clickOrderValues.length == difficulty){
        var text = "<ul>";
        for (i=0; i < clickOrderValues.length; i++){
            text += "<li>" + clickOrderValues[i] + "</li>";
        }
        text += "</ul>";
        document.getElementById("debug").innerHTML = text;

        //checks if users clicks matchs generated order
        if (arrayMatch(clickOrderValues, generatedOrder)){
            document.getElementById("msg").innerHTML = "you are correct";

            //clears debug and debug-order text before new generation
            document.getElementById("debug").innerHTML = "";
            document.getElementById("debug-order").innerHTML = "";

            //clears the click values and generated values
            clickOrderValues = [];
            generatedOrder = [];

            //ups the difficulty and generates a new order
            difficulty = difficulty + 1;
            generateClickOrder();
        }else{
            document.getElementById("msg").innerHTML = "you failed to remember";

            //clears the click values and generated values
            clickOrderValues = [];
            generatedOrder = [];
        }


    }else{
        document.getElementById("debug").innerHTML = "btn " + number + " clicked";
    }



}
