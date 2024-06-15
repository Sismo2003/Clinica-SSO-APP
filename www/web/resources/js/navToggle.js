
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('menuBtn').addEventListener('click', function() {
        $("#openMenu").css("display", "none");
    });
});



document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('openMenuBtn').addEventListener('click', function() {
        $("#openMenu").css("display", "flex");
    });
});