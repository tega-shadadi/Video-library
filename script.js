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

document.addEventListener("DOMContentLoaded", () => {

    const text = "🎬 SEMM Video Library";
    let index = 0;
    let isDeleting = false;

    function typeEffect() {
        const element = document.getElementById("typewriter");

        if (!isDeleting) {
            // Typing
            element.innerHTML = text.substring(0, index + 1);
            index++;

            if (index === text.length) {
                isDeleting = true;
                setTimeout(typeEffect, 1500); // pause before deleting
                return;
            }

        } else {
            // Deleting
            element.innerHTML = text.substring(0, index - 1);
            index--;

            if (index === 0) {
                isDeleting = false;
            }
        }

        setTimeout(typeEffect, isDeleting ? 40 : 80);
    }

    typeEffect();

});

const toggle = document.getElementById("menu-toggle");
const navLinks = document.getElementById("nav-links");

toggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});





