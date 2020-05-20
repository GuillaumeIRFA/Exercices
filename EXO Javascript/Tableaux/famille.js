let famille = {
    moi: "José",
    mere: "Josianne",
    pere: "Josué",
    frere: "Juan",
    soeur: "Joseline"
};

for (let id in famille) {
    alert("Le membre de la famille \"" + id + "\" est " + famille[id]);
}