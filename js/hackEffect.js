document.addEventListener("DOMContentLoaded", loadPage);

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

let word;

let elements = document.querySelectorAll('.hacked');
elements.forEach(event => event.addEventListener('mouseover', () => {
    let interval = null;

    let iteration = 0;

        clearInterval(interval);

        if (event.dataset.value === undefined)
        {
            event.dataset.value = event.innerHTML;
        }

        interval = setInterval(()=> {
            event.innerHTML = event.innerHTML
                .split("")
                .map((letter, index) => {
                    if (index < iteration)
                    {
                        return event.dataset.value[index];
                    }
                    return letters[Math.floor(Math.random()*26)]

                })
                .join("");

            if (iteration >= event.dataset.value.length)
            {
                clearInterval(interval);
            }

            iteration += 1 / 3;
        }, 30);
    })
);

let elements2 = document.querySelectorAll('.fastHacked');

function loadPage()
{
    elements2.forEach(event => {
        let interval = null;

        let iteration = 0;

        clearInterval(interval);

        if (event.dataset.value === undefined)
        {
            event.dataset.value = event.innerHTML;
        }

        interval = setInterval(()=> {
            event.innerHTML = event.innerHTML
                .split("")
                .map((letter, index) => {
                    if (index < iteration)
                    {
                        return event.dataset.value[index];
                    }
                    return letters[Math.floor(Math.random()*26)]

                })
                .join("");

            if (iteration >= event.dataset.value.length)
            {
                clearInterval(interval);
            }

            iteration += 1 / 3;
        }, 10);
    })
}

// let elements3 = document.querySelectorAll('.fasterHacked');
//
// function loadPage()
// {
//     elements3.forEach(event => {
//         let interval = null;
//
//         let iteration = 0;
//
//         clearInterval(interval);
//
//         if (event.dataset.value === undefined)
//         {
//             event.dataset.value = event.innerHTML;
//         }
//
//         interval = setInterval(()=> {
//             event.innerHTML = event.innerHTML
//                 .split("")
//                 .map((letter, index) => {
//                     if (index < iteration)
//                     {
//                         return event.dataset.value[index];
//                     }
//                     return letters[Math.floor(Math.random()*26)]
//
//                 })
//                 .join("");
//
//             if (iteration >= event.dataset.value.length)
//             {
//                 clearInterval(interval);
//             }
//
//             iteration += 1;
//         }, 1);
//     })
// }