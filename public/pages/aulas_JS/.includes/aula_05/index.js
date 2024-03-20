"use strict";

/**
 *
 */
function adicionar()
{
    let input = document.querySelector("#nomeOpcao");

    if ( input.value === "" )
    {
        window.alert("Preencha o campo!");

        return;
    }

    let ul = document.querySelector("output > ul");
    let li = document.createElement("li");

    li.textContent = input.value;
    ul.appendChild(li);
}

/**
 *
 */
function index()
{
    const button = document.querySelector("#btAdiciona");

    button.addEventListener("click", adicionar);
}

export { index };