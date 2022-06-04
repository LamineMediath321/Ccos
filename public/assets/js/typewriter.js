const textAnim = document.querySelector('#titre');


new Typewriter(textAnim, {
    deleteSpeed: 50,
    // loop: true
})
    .changeDelay(100)
    .typeString("La plateforme d'accompagnement des étudiants de l'Université Gaston Berger ")
    .pause(3000)
    .deleteChars(30)
    .typeString("dans leur<strong style='color: #b35c35'> insertion</strong>")
    .pauseFor(3000)
    .start()