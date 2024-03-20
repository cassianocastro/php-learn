"use strict";

/**
 *
 */
function digita(e)
{
    let display     = document.getElementById("display");
    let textDisplay = display.innerText;

    switch ( e.innerText )
    {
        case 'BS':
            if ( display.length > 1 )
                textDisplay = display.substring(0, display.length - 1);
            else
                textDisplay = "0";
            break;
        case 'Limpa':
            textDisplay = "0";
            break;
        default:
            if ( textDisplay == '0' )
                textDisplay = e.innerText;
            else
                textDisplay += e.innerText;
    }
}