/*********************
Name: Jacob Wallace
Coding 07-09
Purpose: JavaScript for use on all pages
**********************/

//random advice api
const resDiv = document.querySelector('.results');

fetch('	https://api.adviceslip.com/advice').then(response => {
    return response.json();
}).then(adviceData => {
    const Adviceobj = adviceData.slip;
    resDiv.innerHTML = `<p>${Adviceobj.advice}</p>`;
}).catch(error => {
    console.log(error);
});

//map api

   