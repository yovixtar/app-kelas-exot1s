<script>
function topnav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active_accordion");
        var panel_accordion = this.nextElementSibling;
        if (panel_accordion.style.display === "block") {
            panel_accordion.style.display = "none";
        } else {
            panel_accordion.style.display = "block";
        }
    });
}
</script>