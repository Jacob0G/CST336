    // Your JavaScript goes here
            var randomNumber =  Math.floor(Math.random()*99)+1;
            var guesses = $("#guesses");
            // var lastResult = document.querySelector("#lastResult");
            var lastResult = $("#lastResult");
            var lowOrHi = $("#lowOrHi");
            
            var guessSubmit = $(".guessSubmit");
            var guessField = $(".guessField");
            
            var guessCount = 1;
            var resetButton = $("#reset");
            resetButton.style.display = "none";
            var resetButton;
            guessField.focus();
            
            function checkGuess() {
                var userGuess = Number(guessField.value);
                if (guessCount === 1) {
                    guesses.HTML = "Previous guesses: ";
                }
                guesses.HTML += userGuess + " ";
                
                if(userGuess === randomNumber) {
                    lastResult.HTML = "Congratulations! you got it right!";
                    lastResult.style.backgroundColor = "green";
                    lowOrHi.HTML = "";
                    setGameOver();
                } else if (guessCount === 7) {
                        lastResult.HTML = "Sorry, you lost!";
                        setGameOver()
                } else {
                        lastResult.HTML = "Wrong!";
                        lastResult.style.backgroundColor = "red";
                    if(userGuess < randomNumber) {
                            lowOrHi.HTML = "Last guess was too low!";
                    } else if(userGuess > randomNumber) {
                            lowOrHi.HTML = "Last guess was too high!";
                      }
                    }
                    
                guessCount++;
                guessField.value = "";
                guessField.focus();
            }
            
        guessSubmit.addEventListener("click", checkGuess);
        
        function setGameOver() {
            guessField.disabled = true;
            guessSubmit.disabled = true;
            resetButton.style.display = "inline";
            resetButton.addEventListener("click", resetGame);
        }
        function resetGame() {
            guessCount = 1;
            
            var resetParas = $(".resultParas p");
            for (var i = 0 ; i < resetParas.length ; i++) {
                resetParas[i].textContent = "";
            }
            
            resetButton.style.display = "none";
            
            guessField.disabled = false;
            guessSubmit.disabled = false;
            guessField.value = "";
            guessField.focus();
            
            lastResult.style.backgroundColor = "white";
            
            randomNumber = Math.floor(Math.random() * 99) + 1;
        }