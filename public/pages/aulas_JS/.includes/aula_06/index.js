"use strict";

/**
 *
 */
function calc()
{
    let op     = document.querySelector("#operation");
    let first  = document.querySelector("#firstValue");
    let last   = document.querySelector("#lastValue");
    let output = document.querySelector("output > p");

    let f = parseFloat(first.value, 10);
    let l = parseFloat(last.value, 10);

    output.textContent = `O resultado é: ${(( op.value === "+" ) ? f + l : f * l)}`;
}

/**
 *
 */
function index()
{
    const button = document.querySelector("#section06 button");

    button.addEventListener("click", calc);
}

export { index };