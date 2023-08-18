document.addEventListener("DOMContentLoaded", function() {
    var resultElement = document.getElementById("result");
    var numberButtons = document.querySelectorAll(".number");
    var operatorButtons = document.querySelectorAll(".operator");
    var calculateButton = document.getElementById("calculate");
    var clearButton = document.getElementById("clear");

    var currentInput = "";

    numberButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            currentInput += button.textContent;
            resultElement.value = currentInput;
        });
    });

    operatorButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            currentInput += " " + button.textContent + " ";
            resultElement.value = currentInput;
        });
    });

    calculateButton.addEventListener("click", function() {
        try {
            var result = eval(currentInput);
            resultElement.value = result;
            currentInput = result;
        } catch (error) {
            resultElement.value = "Virhe";
        }
    });

    clearButton.addEventListener("click", function() {
        currentInput = "";
        resultElement.value = "";
    });
});