"use strict";

let count = 0;

/**
 *
 */
function createTask(content)
{
    const task  = document.createElement("div");
    const icon  = document.createElement("button");
    const check = document.createElement("input");
    const p     = document.createElement("p");
    const text  = document.createTextNode(content);

    task.setAttribute("id", `task_${++count}`);
    task.setAttribute("class", "task");

    icon.setAttribute("type", "button");
    icon.setAttribute("title", "Remove task");
    icon.addEventListener("click", () => task.parentElement.remove());
    icon.classList.add("fas", "fa-trash-alt", "text-secondary");

    check.setAttribute("type", "checkbox");
    check.addEventListener("click", () => p.classList.toggle("complete"));

    p.appendChild(text);
    task.append(icon, check, p);

    return task;
}

/**
 *
 */
function index()
{
    const section = document.querySelector("section");

    const form  = section.querySelector("form");
    const input = section.querySelector("form input");
    const tasks = section.querySelector("ul");

    form.addEventListener("submit", (e) => e.preventDefault());

    input.addEventListener("keypress", (e) => {
        if ( e.key === "Enter" )
        {
            const task = createTask(input.value);
            const item = document.createElement("li");

            item.appendChild(task);
            tasks.appendChild(item);

            input.value = "";
            input.focus();
        }
    });
}

index();

// export { index };