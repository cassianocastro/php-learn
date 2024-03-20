"use strict";

/**
 *
 */
function index()
{
    let contador = 0;
    let edit     = document.querySelector("#nova-tarefa");
    let lista    = document.querySelector("#lista-tarefas");

    edit.addEventListener('keypress', (event) => {
        if (event.key === "Enter")
        {
            contador++;

            let linha = document.createElement("div");
            linha.classList.add("row", "m-2");
            linha.setAttribute("id", `linha_${contador}`);

            let coluna1 = document.createElement("div");
            coluna1.classList.add("col-1");

            let trashIcon = document.createElement("i");
            trashIcon.classList.add("fas", "fa-trash-alt", "text-secondary");
            trashIcon.setAttribute("linha", `linha_${contador}`);

            trashIcon.addEventListener('click', () => {
                let line = document.querySelector(`#${this.getAttribute("linha")}`);
                line.remove();
            });

            coluna1.appendChild(trashIcon);

            let coluna2 = document.createElement("div");
            coluna2.classList.add("col-1");

            let input = document.createElement("input");
            input.setAttribute("type", "checkbox");
            input.setAttribute("linha", `linha_${contador}`);
            input.addEventListener('click', () => {
                let s = document.querySelector(`#${this.getAttribute("linha")} > div > span`);
                s.classList.toggle("tarefa-completa");

                if (s.classList.contains("tarefa-completa"))
                    s.textContent = `(concluido) ${s.textContent}`;
                else
                    s.textContent = s.textContent.replace("(concluido) ", "");
            });

            coluna2.appendChild(input);

            let coluna3 = document.createElement("div");
            let span    = document.createElement("span");

            coluna3.classList.add("col-10");
            span.innerText = edit.value;
            coluna3.appendChild(span);

            linha.appendChild(coluna1);
            linha.appendChild(coluna2);
            linha.appendChild(coluna3);
            lista.appendChild(linha);

            edit.value = "";
            edit.focus();
        }
    });
}

export { index };