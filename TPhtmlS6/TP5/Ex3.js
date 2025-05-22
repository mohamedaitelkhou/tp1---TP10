
const QUESTIONS = [
    ["Quelle est la capitale de la France ?", "Paris"],
    ["Combien de planètes y a-t-il dans le système solaire ?", "8"],
    ["Quel est le langage de programmation utilisé dans les pages web interactives ?", "JavaScript"]
];

function lancerQuiz() {
    let score = 0;
    
    for (let i = 0; i < QUESTIONS.length; i++) {
        let userAnswer = prompt(QUESTIONS[i][0]);
        
        if (userAnswer.toLowerCase() === QUESTIONS[i][1].toLowerCase()) {
            alert(" Bonne réponse !");
            score++;
        } else {
            alert(` Mauvaise réponse!   : ${QUESTIONS[i][1]}`);
        }
    }
    
    alert(`Votre score : score sur{QUESTIONS.length}`);
}