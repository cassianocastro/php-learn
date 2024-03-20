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
            let id = `linha_${++count}`;

            let task = document.createElement("div");
            task.classList.add("row", "m-2");
            task.setAttribute("id", id);

            let coluna1 = document.createElement("div");
            coluna1.classList.add("col-1");

            let coluna2 = document.createElement("div");
            coluna2.classList.add("col-1");

            let coluna3 = document.createElement("div");
            coluna3.classList.add("col-10");

            let icon = document.createElement("span");

            icon.classList.add("fas", "fa-trash-alt", "text-secondary");
            icon.addEventListener('click', () => {
                let line = document.querySelector(`#${id}`);
                line.remove();
            });

            let input = document.createElement("input");

            input.setAttribute("type", "checkbox");
            input.addEventListener('click', () => {
                let p = document.querySelector(`#${id} > div > p`);

                p.classList.toggle("tarefa-completa");

                if (p.classList.contains("tarefa-completa"))
                    p.textContent = `(concluido) ${p.textContent}`;
                else
                    p.textContent = p.textContent.replace("(concluido) ", "");
            });

            let p    = document.createElement("p");
            let text = document.createTextNode(edit.value);

            p.appendChild(text);

            coluna1.appendChild(icon);
            coluna2.appendChild(input);
            coluna3.appendChild(p);

            task.append(coluna1, coluna2, coluna3);
            list.appendChild(task);

            edit.value = "";
            edit.focus();
        }
    });
}

index();
// export { index };