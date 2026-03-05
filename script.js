function saveComment() {
 let comment = document.getElementById("comment").value;
 // Save comment (persistent storage)
 localStorage.setItem("userComment", comment);
 displayComment();
}
function displayComment() {
 let storedComment = localStorage.getItem("userComment");
 // ❌ VULNERABLE LINE (no sanitization)
 document.getElementById("output").innerHTML =
 "<div class='comment'>" + storedComment + "</div>";
}
// Load stored comment on page refresh
displayComment();


//Input
//<img src=x onerror=alert('XSS')>