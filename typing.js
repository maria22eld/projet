document.addEventListener('DOMContentLoaded', function () {
    // Get the text content of the <p> element
    var text = "Vous etes malades...Vous ne pouvez pas se déplacer...HomeMed est à votre disposition!";
    // Get the <p> element
    var paragraph = document.querySelector('.content p');
    // Set the initial content of the <p> element to an empty string
    paragraph.innerHTML = '';

    // Delay the typewriter effect by 1 second (1000 milliseconds)
    setTimeout(function () {
        // Call the typewriter function after the delay
        typewriterEffect(paragraph, text);
    }, 300);
});

function typewriterEffect(element, text) {
    var speed = 58; // Adjust the speed (milliseconds) to control the typing speed
    var i = 0;

    function type() {
        if (i < text.length) {
            // Append the next character to the <p> element
            element.innerHTML += text.charAt(i);
            i++;
            // Call the function recursively after the specified speed
            setTimeout(type, speed);
        }
    }

    // Initial call to start the typewriter effect
    type();
}