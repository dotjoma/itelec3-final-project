document.getElementById("toggleSearchBtn").addEventListener("click", function() {
    let searchBar = document.getElementById("mobileSearchBar");
    searchBar.classList.toggle("d-none");
});

window.addEventListener("resize", function() {
    if (this.window.innerWidth >= 768) {
        this.document.getElementById("mobileSearchBar").classList.add("d-none");
    }
})