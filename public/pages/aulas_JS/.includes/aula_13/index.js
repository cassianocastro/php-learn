"use strict";

/**
 *
 */
function index()
{
    let count = 0;
    let edit  = document.querySelector("#nova-tarefa");
    let list  = document.querySelector("#lista-tarefas");

    edit.addEventListener('keypress', (e) => {
        if (e.key === "Enter")
        {
            count++;

            let linha = document.createElement("div");
            linha.classList.add("row", "m-2");
            linha.setAttribute("id", `linha_${count}`);

            let coluna1 = document.createElement("div");
            coluna1.classList.add("col-1");

            let trashIcon = document.createElement("i");
            trashIcon.classList.add("fas", "fa-trash-alt", "text-secondary");
            trashIcon.setAttribute("linha", `linha_${count}`);

            trashIcon.addEventListener('click', () => {
                let line = document.querySelector(`#${trashIcon.getAttribute("linha")}`);
                line.remove();
            });

            coluna1.appendChild(trashIcon);

            let coluna2 = document.createElement("div");
            coluna2.classList.add("col-1");

            let input = document.createElement("input");
            input.setAttribute("type", "checkbox");
            input.setAttribute("linha", `linha_${count}`);
            input.addEventListener('click', () => {
                let s = document.querySelector(`#${input.getAttribute("linha")} > div > span`);
                s.classList.toggle("tarefa-completa");

                if (s.classList.contains("tarefa-completa"))
                    s.textContent = `(concluido) ${s.textContent}`;
                else
                    s.textContent = s.textContent.replace("(concluido) ", "");
            });

            coluna2.appendChild(input);

            let span = document.createElement("span");
            span.innerText = edit.value;

            let coluna3 = document.createElement("div");
            coluna3.classList.add("col-10");
            coluna3.appendChild(span);

            linha.append(coluna1, coluna2, coluna3);
            list.appendChild(linha);

            edit.value = "";
            edit.focus();
        }
    });
}

index();
// export { index };