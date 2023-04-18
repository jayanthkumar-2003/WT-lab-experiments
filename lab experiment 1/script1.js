const choices = ["stone", "paper", "scissors"];
const buttons = document.querySelectorAll("button");
const result = document.getElementById("result");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let playerChoice = button.id;
        let computerChoice = choices[Math.floor(Math.random() * 3)];
        let winner = getWinner(playerChoice, computerChoice);
        result.style.color = 'black';
        result.textContent = `You choosed ${playerChoice}, computer choosed ${computerChoice}. ${winner}`;
    });
});

function getWinner(playerChoice, computerChoice) {
    if (playerChoice === computerChoice) {
        return "It's a tie!";
    } else if (
        (playerChoice === "Stone" && computerChoice === "scissors") ||
        (playerChoice === "paper" && computerChoice === "Stone") ||
        (playerChoice === "scissors" && computerChoice === "paper")
    ) {
        return "You won!";
    } else {
        return "Computer wins!";
    }
}