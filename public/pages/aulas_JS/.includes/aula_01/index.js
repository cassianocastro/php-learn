"use strict";

let [x, y] = [3, 4];

/**
 *
 */
function soma(a, b)
{
    return a + b;
}

/**
 *
 */
function calcula(a, b)
{
    window.alert(`O resultado do cálculo é: ${soma(a, b)}`);
}

/**
 *
 */
function minhafuncaointerna()
{
    window.alert("alert da minha funcao interna");
}

/**
 * @test
 */
function test()
{
    // alert("alert do meu arquivo html")
    // minhafuncaoexterna()
    // minhafuncaointerna()

    let z      = soma(x, y);
    let nome   = "dev WEB quinta";
    let vetor2 = new Array(1, 2, 3);

    console.log(
        `O valor de a + b é: ${z}`,
        `Letras: ${nome.length}`,
        `Novo: ${nome.replace("web", "JS")}`,
        nome
    );

    let vetor = nome.split(' ');

    console.log(
        vetor,
        `Vetor[1] é igual a: ${vetor[1]}`,
        nome.toUpperCase(),
        nome.toLowerCase(),
        vetor2,
        vetor2.indexOf(2),
        vetor2[2],
        vetor2.join(":")
    );
}

/**
 *
 */
function index()
{
    const menu = document.querySelector("#section01 menu");
    const button01 = menu.querySelector(":first-child > button");
    const button02 = menu.querySelector(":nth-child(2) > button");
    const button03 = menu.querySelector(":nth-child(3) > button");
    const button04 = menu.querySelector(":nth-child(4) > button");
    const button05 = menu.querySelector(":last-child > button");

    button01.addEventListener("click", minhafuncaointerna);
    button02.addEventListener("click", () => console.log(soma(x, y)));
    button03.addEventListener("click", () => alert(`O valor da soma é: ${soma(x, y)}`));
    button04.addEventListener("click", () => calcula(x, y));
    button05.addEventListener("click", () => x = x + 1);
}

export { index };