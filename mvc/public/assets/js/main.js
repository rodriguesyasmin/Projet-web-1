console.log("dans main");

function calculerTempsRestant(dateFin, id) {
  var dateFin = new Date(dateFin);

  setInterval(function () {
    var dateActuelle = new Date();
    var tempsRestant = dateFin - dateActuelle;

    if (tempsRestant > 0) {
      var jours = Math.floor(tempsRestant / (1000 * 60 * 60 * 24));
      tempsRestant -= jours * (1000 * 60 * 60 * 24);
      var heures = Math.floor(tempsRestant / (1000 * 60 * 60));
      tempsRestant -= heures * (1000 * 60 * 60);
      var minutes = Math.floor(tempsRestant / (1000 * 60));
      tempsRestant -= minutes * (1000 * 60);
      var secondes = Math.floor(tempsRestant / 1000);

      document.getElementById("temp_restant_" + id).textContent =
        jours +
        " jours " +
        heures +
        " heures " +
        minutes +
        " minutes " +
        secondes +
        " secondes";
    } else {
      document.getElementById("temp_restant_" + id).textContent =
        "Le temps est écoulé.";
    }
  }, 1000);
}
