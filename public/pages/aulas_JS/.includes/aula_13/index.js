"use strict";

/**
 *
 */
function index()
{
    let count = 0;
    let edit  = document.querySelector("#nova-tarefa");
    let list  = document.querySelector("#lista-tarefas");

    edit.addEventListener("keypress", (e) => {
        if ( e.key === "Enter" )
        {
            let id = `task_${++count}`;

            let task = document.createElement("div");
            task.classList.add("row", "m-2");
            task.setAttribute("id", id);

            let icon = document.createElement("button");

            icon.classList.add("fas", "fa-trash-alt", "text-secondary");
            icon.setAttribute("type", "button");
            icon.setAttribute("title", "Remove task");
            icon.addEventListener('click', () => {
                let line = document.querySelector(`#${id}`);
                line.remove();
            });

            let input = document.createElement("input");

            input.setAttribute("type", "checkbox");
            input.addEventListener('click', () => {
                let p = document.querySelector(`#${id} > p`);

                p.classList.toggle("tarefa-completa");

                if ( p.classList.contains("tarefa-completa") )
                    p.textContent = `(concluido) ${p.textContent}`;
                else
                    p.textContent = p.textContent.replace("(concluido) ", "");
            });

            let p    = document.createElement("p");
            let text = document.createTextNode(edit.value);

            p.appendChild(text);

            task.append(icon, input, p);
            list.appendChild(task);

            edit.value = "";
            edit.focus();
        }
    });
}

index();
// export { index };