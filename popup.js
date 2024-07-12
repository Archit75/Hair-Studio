window.addEventListener("load", function () {
    setTimeout
        (
            function open(event) {
                document.querySelector(".popup").style.top = "30%";
                document.querySelector(".banner-text").style.padding = "270px 0 0 0";
            },
            1000
        )
})