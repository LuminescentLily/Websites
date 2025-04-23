


var colors = ["grey", "aqua", "cornflowerblue", "salmon", "orange", "black", "purple", "pink"];

        function changeColor() {
            let col = document.getElementById("color");
            col.style.backgroundColor = colors[Math.floor((Math.random()* 8)+1)];
        }

        /*  Math.floor          rounds down to whole number
            Math.random()       a random number greater than zero but less than 1
            *8                  times 4 makes the number between 0 and 7
            +1                  adds 1 to the number thus between 0 and 8

        */
        