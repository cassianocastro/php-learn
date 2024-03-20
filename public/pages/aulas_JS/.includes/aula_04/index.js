"use strict";

/**
 *
 */
function substituiTexto(id, texto)
{
    let e = document.getElementById(id);
    e.textContent = texto;
}

/**
 *
 */
function substituiTudo(texto)
{
    let e = document.getElementsByClassName("mensagem");

    for ( let i = 0, size = e.length - 1; i <= size; ++i )
    {
        e[i].textContent = `texto ${(i + 1)}`;
    }
}

/**
 *
 */
function substituiParagrafos(texto)
{
    let e = document.getElementsByTagName("p");

    for ( let i = 0, size = e.length - 1; i <= size; ++i )
    {
        e[i].textContent = `texto ${(i + 1)}`;
    }
}

/**
 *
 */
function substituiNegritos(texto)
{
    let e = document.querySelectorAll("p > strong");

    for ( let i = 0, size = e.length - 1; i <= size; ++i )
    {
        e[i].textContent = `texto ${(i + 1)}`;
    }
}

/**
 *
 */
function index()
{
    const menu = document.querySelector("#section04 menu");
    const button01 = menu.querySelector(":first-child > button");
    const button02 = menu.querySelector(":nth-child(2) > button");
    const button03 = menu.querySelector(":nth-child(3) > button");
    const button04 = menu.querySelector(":nth-child(4) > button");
    const button05 = menu.querySelector(":last-child > button");

    button01.addEventListener("click", () => substituiTexto('teste','novo texto 1'));
    button02.addEventListener("click", () => substituiTexto('teste2','novo texto 2'));
    button03.addEventListener("click", () => substituiTudo('novo texto 2'));
    button04.addEventListener("click", () => substituiParagrafos('novo texto 2'));
    button05.addEventListener("click", () => substituiNegritos('novo texto 2'));
}

export { index };