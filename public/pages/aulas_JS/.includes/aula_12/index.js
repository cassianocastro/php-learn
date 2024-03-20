"use strict";

/**
 *
 */
function minhafuncao(event)
{
    window.alert("chamei minha funcao 1");
}

/**
 *
 */
function minhafuncao2(event)
{
    window.alert("chamei minha funcao 2");
}

/**
 *
 */
function index()
{
    // document.addEventListener('DOMContentLoaded', (e) => {
        let bt1 = document.querySelector("#bt1");
        let bt2 = document.querySelector("#bt2");
        let bt3 = document.querySelector("#bt3");
        let bt4 = document.querySelector("#bt4");

        bt1.onclick = minhafuncao;
        bt1.onclick = minhafuncao2;

        bt2.onclick = minhafuncao;
        bt2.onclick = minhafuncao2;

        bt3.addEventListener('click', minhafuncao);
        bt3.addEventListener('click', minhafuncao2);

        bt4.addEventListener('click', (e) => alert("chamei evento 1"));
        bt4.addEventListener('click', (e) => alert("chamei evento 2"));
    // });
}

export { index };