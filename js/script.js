let guesses = 0;
let user = "";
let word;

class Fetch {
    async fetch() {
        return fetch("/WORDLE/words.json")
            .then(
                function (response) {
                    return response.json();
                }
            )
    }
}

async function getWord() {
    let fetch = new Fetch();
    const data = await fetch.fetch();

    let number = Math.floor(Math.random() * 50) + 1;
    let word = (data.words[number]);
    let letters = word.split("");
    console.log(letters);
}

getWord();

var inputs = document.getElementsByClassName('tile');

const rows = [];
const inputrow = document.getElementsByClassName("input-row");
rows.push(inputrow);

console.log(rows);

var tile = document.getElementsByClassName('tile')


Array.from(tile).forEach(function (tile) {
    tile.addEventListener("keyup", function (event) {
        if (tile.value.length == 1) {
            tile.nextElementSibling.focus()
        }
    });
})