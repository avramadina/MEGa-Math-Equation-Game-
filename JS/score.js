function setJson(exercitiu, raspuns, scor) {
    localStorage.setItem("exercitiu", exercitiu);
    localStorage.setItem("raspuns", raspuns);
    localStorage.setItem("scor", scor);
}

function getExercitiu() {
    return localStorage.getItem("exercitiu");
}

function getRaspuns() {
    return localStorage.getItem("raspuns");
}

function getScor() {
    return localStorage.getItem("scor");
}