"use strict";

/**
 * @test
 */
function canAppendChild()
{
    let element = document.getElementById("target");
    let li      = document.createElement("li");

    li.innerText = "Opção";
    element.appendChild(li);
}

/**
 * @test
 */
function canSayHello()
{
    let button = document.querySelector("button");

    button.addEventListener("click", () => {
        let name = prompt("Qual é o seu nome? ");

        alert(`Olá ${name}, é um prazer te ver!`);
    });
}

/**
 * @test
 */
function canUseUndeclaredVariable()
{
    myName = "Test";

    function logName()
    {
        console.log(myName);
    }

    logName();

    let myName;
}

/**
 * @test
 */
function foo2()
{
    function updateButton()
    {
        if (button.textContent === "Iniciar Máquina")
        {
            button.textContent = "Parar Máquina";
            text.textContent   = "A máquina está funcionando.";

            return;
        }

        button.textContent = "Iniciar Máquina";
        text.textContent   = "A máquina está parada.";
    }

    let button = document.querySelector("button:nth-of-type(2)");
    let text   = document.querySelector("p");

    button.addEventListener("click", updateButton);
}

/**
 * @test
 */
function canLogTypes()
{
    console.log(typeof "string", typeof Number("123"));
}

/**
 * @test
 */
function canAssertEquality()
{
    function assertEqualsCassiano(str = "", str2 = "")
    {
        const name = "Foo";

        return str || str2 === name;
    }

    console.log(assertEqualsCassiano("Bar", "Foo"));
}

/**
 * @test
 */
function canUpdateColors()
{
    function updateColorsFromElement(element, bg = "white", fg = "black")
    {
        element.style.backgroundColor = bg;
        element.style.color = fg;
    }

    let select = document.querySelector("select");
    let html   = document.querySelector("html");

    document.body.style.padding = "10px";

    select.addEventListener("change", () => {
        if (select.value === "black")
            updateColorsFromElement(html, "black", "white");
        else
            updateColorsFromElement(html, "white", "black");
    });
}

/**
 * @test
 */
function canReplaceStringPieces()
{
    let browser = "Mozilla";

    browser = browser.replace("Moz", "Van");

    console.log(browser, browser.indexOf('n'));
}

/**
 * @test
 */
function canDisplayMessage()
{
    function fooInner(msgText, msgType)
    {
        let html  = document.querySelector("html");
        let div   = document.createElement("div");
        let p     = document.createElement("p");
        let close = document.createElement("button");

        p.textContent     = msgText;
        close.textContent = "x";

        switch (msgType)
        {
            case "warning":
                p.style.backgroundImage   = "url(res/code.svg)";
                div.style.backgroundColor = "red";
                break;
            case "chat":
                p.style.backgroundImage   = "url(res/programming.svg)";
                div.style.backgroundColor = "aqua";
                break;
            default:
                p.style.paddingLeft = "20px";
        }

        close.addEventListener("click", () => {
            div.parentNode.removeChild(div);
        });

        div.setAttribute("class", "msgBox");
        div.appendChild(p);
        div.appendChild(close);

        html.appendChild(div);
    }

    let input  = document.querySelector("input");
    let button = document.querySelector("button");

    button.addEventListener("click", () => {
        fooInner(input.value, "chat");
    });
}

/**
 * @test
 */
function canCalculate()
{
    function squared(number = 0)
    {
        return number ** 2;
    }

    function cubed(number = 0)
    {
        return number ** 3;
    }

    function factorial(number = 0)
    {
        function alternativeFactorial()
        {
            let x = number;

            while ( x > 1 )
            {
                number *= x - 1;
                x--;
            }

            return number;
        }

        for (let i = number, min = 1; i > min; i--)
        {
            number *= i - 1;
        }

        return number;
    }

    let input  = document.querySelector("input");
    let button = document.querySelector("button");
    let p      = document.querySelector("p");
    let isNan  = false;

    input.addEventListener("change", () => {
        isNan = isNaN(input.value);

        if ( isNan )
            p.textContent = "Digite um número.";
        else
            p.textContent = "";
    });

    button.addEventListener("click", () => {
        if ( ! isNan )
        {
            let number = input.value;

            p.textContent = `Squared: ${squared(number)}, Cubed: ${cubed(number)}, Factorial: ${factorial(number)}.`;
        }
    });
}

/**
 * @test
 */
function canChangeBackgroundColor()
{
    function random(number = 0)
    {
        return Math.floor(Math.random() * number);
    }

    const randomCol = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;

    document.body.style.backgroundColor = randomCol;
}

/**
 * @test
 */
function canAddEventsToButton()
{
    let button = document.querySelector('button');

    button.addEventListener("dblclick", canChangeBackgroundColor);
    button.addEventListener("mouseover", canChangeBackgroundColor);
    button.addEventListener("mouseout", canChangeBackgroundColor);
}

/**
 * @test
 */
function canAddEventsToWindow()
{
    window.addEventListener("keypress", canChangeBackgroundColor);
    window.addEventListener("keydown", canChangeBackgroundColor);
    window.addEventListener("keyup", canChangeBackgroundColor);
}

/**
 * @test
 */
function canCreatePerson()
{
    return {
        name: ["Bob", "Smith"],
        age: 32,
        sex: "Masculino",
        interests: ["música", "esquiar"],
        bio: () => {
            alert(`${this.name.join(" ")} tem ${this.age} anos de idade e ele gosta de ${this.interests.join(" e ")}.`);
        },
        sayHello: () => {
            alert(`Oi! Eu sou ${this.name[0]}.`);
        }
    };
}