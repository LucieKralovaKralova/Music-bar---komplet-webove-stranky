const toggleButton = document.querySelector(".navbar-toggle")
const menuIcon = document.querySelector(".fa-solid")
const navbarLinks = document.querySelectorAll(".navbar-links")
const rezervace = document.querySelector(".rezervace")


toggleButton.addEventListener("click", function(){
    
    navbarLinks.forEach(function(oneLi){
        oneLi.classList.toggle("active")
    })

    if (menuIcon.classList[1]=="fa-bars") {
        menuIcon.classList.remove("fa-bars")
        menuIcon.classList.add("fa-xmark")
    } else {
        menuIcon.classList.remove("fa-xmark")
        menuIcon.classList.add("fa-bars")
    }
})

// ***************AKTUALITY******************

const akce1 = document.querySelector(".akce1")
const akce2 = document.querySelector(".akce2")

akce1.addEventListener("click", function(){
    // akce1.style.width = ("100%")
    console.log("Bylo kliknuto");
        // zvětšení o 110%
    // akce1.style.transform = "scale(1.1)"

    if (akce1.style.transform == "scale(1.2)") {akce1.style.transform = "scale(1)"
        
    } else {
        akce1.style.transform = "scale(1.2)"
    } 
})

akce2.addEventListener("click", function(){
    // akce1.style.width = ("100%")
    console.log("Bylo kliknuto");
        // zvětšení o 110%
    // akce1.style.transform = "scale(1.1)"

    if (akce2.style.transform == "scale(1.2)") {akce2.style.transform = "scale(1)"
        
    } else {
        akce2.style.transform = "scale(1.2)"
    } 
})