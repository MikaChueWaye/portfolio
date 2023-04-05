const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

let interval = null;
let word;

document.querySelector(".hacked").onmouseover = event => {
    let iteration = 0;

    // word = event.target.innerText;

    clearInterval(interval);

    interval = setInterval(()=> {
        event.target.innerText = event.target.innerText
            .split("")
            .map((letter, index) => {
                if (index < iteration)
                {
                    return event.target.dataset.value[index];
                    // return word.charAt(index);
                }
                return letters[Math.floor(Math.random()*26)]

            })
            .join("");

        if (iteration >= event.target.dataset.value.length)
            // if (iteration >= word.length)
        {
            clearInterval(interval);
        }

        iteration += 1 / 3;
    }, 30);
}

