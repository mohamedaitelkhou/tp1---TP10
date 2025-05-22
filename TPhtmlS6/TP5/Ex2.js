
let randomNumber = Math.floor(Math.random() * 10) + 1;
let attempts = 0;
let guessed = false;

while (!guessed) {
    let guess = parseInt(prompt("Propose un nombre entre 1 et 10:"));
    attempts++;
    
    if (guess === randomNumber) {
        alert(`Choix correct (${randomNumber}) dans ${attempts} Choix incorrec.`);
        guessed = true;
    } else if (guess < randomNumber) {
        alert("Le nombre est plus grand que la proposition");
    } else {
        alert("Le nombre est plus petit que la proposition");
    }
}