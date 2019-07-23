document.addEventListener('DOMContentLoaded', function () {
    // When the event DOMContentLoaded occurs, it is safe to access the DOM

    // When the user scrolls the page, execute myFunction 
    window.addEventListener('scroll', myFunctionForSticky);

    // Get the navbar
    let navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    let sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. 
    // Remove "sticky" when you leave the scroll position

    function myFunctionForSticky() {
        if (window.pageYOffset >= sticky) {
            console.log("window.pageYOffset >= sticky");
        } else {
            console.log("Not window.pageYOffset >= sticky");
        }
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }

})
