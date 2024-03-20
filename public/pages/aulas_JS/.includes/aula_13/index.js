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

            let task = document.createElement("div");
            task.classList.add("row", "m-2");
            task.setAttribute("id", `linha_${count}`);

            let coluna1 = document.createElement("div");
            coluna1.classList.add("col-1");

            let coluna2 = document.createElement("div");
            coluna2.classList.add("col-1");

            let coluna3 = document.createElement("div");
            coluna3.classList.add("col-10");

            let icon = document.createElement("i");
            icon.classList.add("fas", "fa-trash-alt", "text-secondary");
            icon.setAttribute("linha", `linha_${count}`);

            icon.addEventListener('click', () => {
                let line = document.querySelector(`#${icon.getAttribute("linha")}`);
                line.remove();
            });

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

            let span = document.createElement("span");
            span.innerText = edit.value;

            coluna1.appendChild(icon);
            coluna2.appendChild(input);
            coluna3.appendChild(span);

            task.append(coluna1, coluna2, coluna3);
            list.appendChild(task);

            edit.value = "";
            edit.focus();
        }
    });
}

index();
// export { index };