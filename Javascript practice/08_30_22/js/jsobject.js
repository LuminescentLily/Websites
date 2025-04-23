// JS Object

var person = {
    name: "Peter",
    age: 28,
    gender: "Male",
    displayName: function() {
    alert(this.name);
    }
};
    
document.write(person.name + "<br />"); // Prints: Peter
document.write(person.age + "<br />"); // Prints: 28
document.write(person.gender); // Prints: Male
console.log(person); 