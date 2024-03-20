"use strict";

let [x, y] = [1, 1];

let obj = {
    tipo     : "humano",
    operacao : soma,
    alerta   : (msg) => {
        window.alert(msg);
    }
}

/**
 *
 */
function verifica(a, b)
{
    if (a > b)
        console.log("O primeiro é maior.");
    else if (a < b)
        console.log("O segundo é maior.");
    else
        console.log("São iguais.");
}

/**
 *
 */
function escolhe(a, b)
{
    return (a > b) ? a : b;
}

/**
 *
 */
function escreveopcao(a)
{
    switch (a)
    {
        case 1:
            console.log("opção 1");
            break;
        case 2:
        case 3:
            console.log("opção 2 ou 3");
            break;
        case 4:
            console.log("opção 4");
            break;
        default:
            console.log("nenhuma das opções");
    }
}

/**
 *
 */
function escreveFor(qtd)
{
    for ( let i = 1; i <= qtd; ++i )
    {
        document.write(`<p>paragrafo ${i}</p>`);

        if ( i >= 10 ) break;
    }
}

/**
 *
 */
function escreveWhile(qtd)
{
    let i = 0;

    while ( i <= qtd )
    {
        i++;

        if ( i % 2 === 1 ) continue;

        document.write(`<p>paragrafo ${i}</p>`);

        if ( i >= 10 ) break;
    }
}

/**
 *
 */
function escreveDo(qtd)
{
    let i = 1;

    do
    {
        document.write(`<p>paragrafo ${i}</p>`);
        if ( i >= 10 ) break;
        i++;
    } while ( i <= qtd );
}

/**
 *
 */
function operatudo()
{
    if (arguments.length === 2)
    {
        return soma(arguments[0], arguments[1]);
    }
    else if (arguments.length === 3)
    {
        return multiplica(multiplica(arguments[0], arguments[1]), arguments[2]);
    }

    return -1;
}

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
function multiplica(a, b)
{
    return a * b;
}

/**
 *
 */
function operacao(op, p1, p2)
{
    return console.log(`O resultado é: ${op(p1, p2)}`);
}

/**
 * @test
 */
function test()
{
    let vfunc    = (msg) => console.log(msg);
    let xfunc    = vfunc;
    let xescreve = escreveopcao;

    vfunc("teste de funcao");
    xfunc("teste de outra funcao");
    xescreve(1);

    console.log(obj.tipo);

    alert(operatudo(2, 2, 3));
    alert(operatudo(2, 3));
}

/**
 *
 */
function index()
{
    const menu = document.querySelector("#section02 menu");
    const button01 = menu.querySelector(":first-child > button");
    const button02 = menu.querySelector(":nth-child(2) > button");
    const button03 = menu.querySelector(":nth-child(3) > button");
    const button04 = menu.querySelector(":nth-child(4) > button");

    button01.addEventListener("click", () => operacao(soma, x, y));
    button02.addEventListener("click", () => operacao(multiplica, x, y));
    button03.addEventListener("click", () => obj.alerta('olá pessoal'));
    button04.addEventListener("click", () => alert(obj.operacao(x, y)));
}

export { index };