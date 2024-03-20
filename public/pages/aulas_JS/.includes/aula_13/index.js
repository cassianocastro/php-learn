"use strict";

/**
 *
 */
function index()
{
    let count = 0;

    const input = document.querySelector("#nova-tarefa");
    const tasks = document.querySelector("#lista-tarefas");

    input.addEventListener("keypress", (e) => {
        if ( e.key === "Enter" )
        {
            const task  = document.createElement("div");
            const icon  = document.createElement("button");
            const check = document.createElement("input");
            const p     = document.createElement("p");
            const text  = document.createTextNode(input.value);

            task.setAttribute("id", `task_${++count}`);
            task.setAttribute("class", "task");

            icon.setAttribute("type", "button");
            icon.setAttribute("title", "Remove task");
            icon.addEventListener('click', () => task.remove());
            icon.classList.add("fas", "fa-trash-alt", "text-secondary");

            check.setAttribute("type", "checkbox");
            check.addEventListener('click', () => {
                p.classList.toggle("complete");

                if ( p.classList.contains("complete") )
                    p.textContent = `(concluido) ${p.textContent}`;
                else
                    p.textContent = p.textContent.replace("(concluido) ", "");
            });

            p.appendChild(text);
            task.append(icon, check, p);
            tasks.appendChild(task);

            input.value = "";
            input.focus();
        }
    });
}

index();
// export { index };