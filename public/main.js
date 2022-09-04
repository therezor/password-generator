function copyPassword() {
    /* Get the text field */
    var copyText = document.getElementById('generated');

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
}

function generatePassword() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'generate', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({
        words: document.getElementById('words').value,
        separator: document.getElementById('separator').value,
        caps: document.getElementById('caps').value,
        numbers: document.getElementById('numbers').value
    }));
    xhr.onload = function() {
        var data = JSON.parse(this.responseText);
        document.getElementById('generated').value = data.password;
    }
}

window.onload = function() {
    var slider = document.getElementById('words');
    var sliderValue = document.getElementById('words-value');
    sliderValue.innerHTML = slider.value;
    slider.oninput = function() {
        sliderValue.innerHTML = this.value;
    }

    generatePassword();
}

