"use strict";

var hasFloatPoint = false;
var operacao  	  = null;
var valor1 	  	  = 0;
var valor2 	  	  = 0;
var resultado     = 0;

/**
 *
 */
function digitar(valor)
{
	if (resultado > 0)
    {
		resultado = 0;
		display.innerText = "0";
	}

    if ( display.innerText === '0' )
	    display.innerText = valor
	else
	    display.innerText += valor
}

/**
 *
 */
function setFloatingPoint(valor)
{
	if ( hasFloatPoint ) return;

    display.innerText += valor
    hasFloatPoint = true
}

/**
 *
 */
function limpar()
{
	operacao 		  = null
	hasFloatPoint	  = false
	valor1 			  = 0
	valor2 			  = 0
	resultado 		  = 0
	display.innerText = "0";
}

/**
 *
 */
function desfazer()
{
	if (resultado != 0)
    	display.innerText = "0"
	else
    {
		if ( display.innerText > 1 )
	    	display.innerText =
                display.innerText.substring(
                    0,
                    display.innerText.length - 1
                )
		else
		    display.innerText = "0"
	}
}

/**
 *
 */
function operar(signal)
{
	if (operacao != null)
    {
		var backup = display.innerText;
		calcular();

		display.innerText = backup;
		valor1    = resultado;
		resultado = 0;
	}
    else
    {
		if (resultado != 0)
        {
			valor1 = resultado
			resultado = 0
		}
        else
		    valor1 = parseFloat(display.innerText.replace(",", "."))
	}
	hasFloatPoint	  = false;
	display.innerText = "0";
	operacao 		  = signal;
}

/**
 *
 */
function calcular()
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
	valor1   	  = 0;
	valor2   	  = 0;
	hasFloatPoint = false;
	operacao 	  = null;
	display.innerText = resultado.toString().replace(".", ",");
}

/**
 *
 */
function main(element)
{
	var display   = document.querySelector("#display");
	var historico = document.querySelector("#historico");
	text = element.innerText;

	switch (text)
    {
		case '+':
		case '-':
		case '*':
		case '/':
			operar(text);
		break;
		case 'BS':
			desfazer();
		break;
		case 'Limpa':
			limpar();
		break;
		case ',':
			setFloatingPoint(text);
		break;
		case '=':
			calcular();
		break;
		default:
			digitar(text);
	}

    if (operacao != null)
	    historico.innerText = valor1.toString().replace(".", ",") + " " + operacao;
	// + " " + parseFloat(display.innerText.replace(",", ".")).toFixed(2).replace(".", ",")
	else
	    historico.innerHTML = "&nbsp";
	//resultado.toFixed(2).replace(".", ",")
}