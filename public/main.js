function copyPassword() {
    var copyText = document.getElementById('generated');
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
    navigator.clipboard.writeText(copyText.value);
}

function generatePassword(dictionary, words, separator, caps, numbers) {
    let password = '';
    const lastKey = dictionary.length - 1;
    for (let i = 1; i <= words; i++) {
        const randomKey = randomNumber(0, lastKey);
        password += caps
            ? capitalize(dictionary[randomKey])
            : dictionary[randomKey];

        if (separator && i !== words) {
            password += separator;
        }
    }

    if (numbers) {
        password += randomNumber(1, 99);
    }

    return password;
}

function fetchDictionary(url) {
    return fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch dictionary');
            }
            return response.text();
        });
}

function randomNumber(from, to) {
    return Math.floor(Math.random() * (to - from + 1)) + from;
}

function capitalize(word) {
    return word.charAt(0).toUpperCase() + word.slice(1);
}

async function generateAndDisplayPassword() {
    try {
        const dictionary = await fetchDictionary('dictionaries/corncob_lowercase.txt');
console.log(dictionary);
        const words = parseInt(document.getElementById('words').value);
        const separator = document.getElementById('separator').value;
        const caps = document.getElementById('caps').checked;
        const numbers = document.getElementById('numbers').checked;

        document.getElementById('generated').value = generatePassword(dictionary.split('\n'), words, separator, caps, numbers);;
    } catch (error) {
        console.error(error);
    }
}

window.onload = function() {
    generateAndDisplayPassword();
}
