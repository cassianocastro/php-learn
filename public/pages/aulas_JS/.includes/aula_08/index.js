"use strict";

/**
 *
 */
function el(element)
{
    return document.querySelector(element)
}

/**
 *
 */
function els(element)
{
    return document.querySelectorAll(element)
}

/**
 *
 */
function digita_numero(display, valor)
{

}

/**
 *
 */
function digita_ponto(display, valor)
{

}

/**
 *
 */
function digita_limpa(display)
{

}

/**
 *
 */
function digita_bs(display)
{

}

/**
 *
 */
function digita_operacao(display, oper)
{

}

/**
 *
 */
function calcula(display)
{
    valor2 = parseFloat(display.innerText.replace(",", "."))

    switch (operacao)
    {
        case '+':
        resultado = valor1 + valor2;
        break;
        case '-':
        resultado = valor1 - valor2;
        break;
        case '*':
        resultado = valor1 * valor2;
        break;
        case '/':
        resultado = valor1 / valor2;
        break;
        default:
        resultado = valor2;
    }

    valor1 = 0;
    valor2 = 0;
    ponto  = 0;
    operacao = null;
    display.innerText = resultado.toString().replace(".", ",");
}

/**
 *
 */
function digita(e)
{
    var display = el("#display");

    switch (e.innerText)
    {
        case '+':
        case '-':
        case '*':
        case '/':
            digita_operacao(display, e.innerText);
        break;
        case 'BS':
            digita_bs(display);
        break;
        case 'Limpa':
            digita_limpa(display);
        break;
        case ',':
            digita_ponto(display, e.innerText);
        break;
        case '=':
            calcula(display);
        break;
        default:
            digita_numero(display, e.innerText);
    }
    var historico = el("#historico")

    if (operacao)
    {
        historico.innerText =
            valor1
            .toString()
            .replace(".", ",") + " " + operacao;
            // + " " + parseFloat(display.innerText.replace(",", ".")).toFixed(2).replace(".", ",")
    } else
        historico.innerHTML = "&nbsp"; //resultado.toFixed(2).replace(".", ",")
}