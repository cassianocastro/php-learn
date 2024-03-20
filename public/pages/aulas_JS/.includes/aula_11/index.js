"use strict";

/**
 *
 */
function index()
{
    // NOTE: Ocorre quando toda a pagina foi carregada, incluindo imagens, css

    window.addEventListener('load', (e) => console.log("addEventListener:load", e));

    window.onload = (e) => console.log("window.onload", e);

    document.addEventListener('DOMContentLoaded', (e) => {
        console.log("addEventListener:DOMContentLoaded", e);
    });

    document.addEventListener('readystatechange', (e) => {
        console.log("addEventListener:statechange", document.readyState);
    });

    document.onreadystatechange = (e) => {
        console.log("document.onreadystatechange", document.readyState);
    };

    // NOTE: Esse vai substituir o anterior:
    document.onreadystatechange = (e) => {
        console.log("document.onreadystatechange2", document.readyState);
    };

    document.addEventListener('readystatechange', (e) => {
        console.log("addEventListener2:statechange", document.readyState);
    });

    document.addEventListener('readystatechange', (e) => {
        console.log("addEventListener3:statechange", document.readyState);
    });
}

export { index };