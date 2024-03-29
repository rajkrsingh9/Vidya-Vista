// JavaScript code for handling team details toggle
document.getElementById("worked_with_team").addEventListener("change", function() {
    var teamDetails = document.getElementById("team_details");
    if (this.checked) {
        teamDetails.style.display = "block";
    } else {
        teamDetails.style.display = "none";
    }
});