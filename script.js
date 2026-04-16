const movies = document.querySelectorAll(".movie-card");

movies.forEach(movie => {
    movie.addEventListener("click", function () {
        const title = this.querySelector("h3").innerText;
        console.log("Selected movie: " + title);
        alert("You selected: " + title);
    });
});


// MEMBERSHIP FORM VALIDATION
document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("membershipForm");

    if (form) {
        form.addEventListener("submit", function(event) {
            event.preventDefault();

            const fullname = document.getElementById("fullname").value;
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const membershipType = document.getElementById("membershipType").value;

            if(fullname === "" || email === ""){
                alert(" Please fill in all required fields!");
            }
            else{
                alert(
                    " Registration Successful!\n\n" +
                    "Name: " + fullname + "\n" +
                    "Email: " + email + "\n" +
                    "Phone: " + phone + "\n" +
                    "Type: " + membershipType
                );
            }
        });
    }

});



const toggle = document.getElementById("menu-toggle");
const navLinks = document.getElementById("nav-links");

toggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});





