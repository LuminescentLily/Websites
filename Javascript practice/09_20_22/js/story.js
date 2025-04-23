alert("By continuing you agree to see this silly story! Press OK you were warned!");

var yname = prompt("Please type your name");
var ybeach = prompt("Please type the name of a beach");
var yverb = prompt("Please type a beach activity");
var yhotel = prompt("Please type in a hotel");

alert("You're done! Press OK to see your story!");

document.getElementById('aname').innerHTML = "by: " + yname;

document.getElementById('ahotel').innerHTML = "location: " + yhotel;

document.getElementById('zname').innerHTML = yname;

function story() {

document.write("<p>" + "Once upon a time" + " " +  "<span>" + yname + "</span>" + 
" went to  " + "<span>" + ybeach + "</span>" + " beach. " + "<span>" + yname + "</span>" + " wanted to " + "<span>" + yverb + "</span>" + ". " + "<span>" + yname + "</span>" + " " + "stayed at the " + "<span>" + yhotel + "</span>" + " hotel." + " " + "Unfortunetly " + "<span>" + yname + "</span>" + " " + "encountered a shark and was sharknadoed." + " " + "<span>" + yname + "</span>" + " survived the attack." + "</p>"); 
}

story();