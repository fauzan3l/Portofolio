document.addEventListener("DOMContentLoaded", function() {
    new TypeIt(".typing-text span", {
        speed: 80,
        loop: false,
        waitUntilVisible: true
    })
    .type("Developer Website")
    .go();

});