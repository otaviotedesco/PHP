<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="to-do-styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>
        <form id="task-form">
            <input type="text" id="task-input" placeholder="Adicionar nova tarefa" required>
            <button type="submit">Adicionar</button>
        </form>
        <ul id="task-list"></ul>
    </div>
</body>
</html>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const taskForm = document.getElementById('task-form');
        const taskInput = document.getElementById('task-input');
        const taskList = document.getElementById('task-list');

        taskForm.addEventListener('submit', (e) => {
            e.preventDefault();
            addTask(taskInput.value);
            taskInput.value = '';
        });

        function addTask(task) {
            const li = document.createElement('li');
            li.className = 'task-item';
            li.innerHTML = `
                <span>${task}</span>
                <div class="task-actions">
                    <button class="complete">Concluir</button>
                    <button class="cancel">Cancelar</button>
                    <button class="hold">Em Espera</button>
                    <button class="urgent">Urgente</button>
                    <button class="important">Importante</button>
                    <button class="delete">Excluir</button>
                </div>
            `;
            taskList.appendChild(li);

            li.querySelector('.complete').addEventListener('click', () => {
                li.classList.toggle('completed');
            });
            li.querySelector('.cancel').addEventListener('click', () => {
                li.classList.toggle('cancelled');
            });
            li.querySelector('.hold').addEventListener('click', () => {
                li.classList.toggle('on-hold');
            });
            li.querySelector('.urgent').addEventListener('click', () => {
                li.classList.toggle('urgent');
            });
            li.querySelector('.important').addEventListener('click', () => {
                li.classList.toggle('important');
            });
            li.querySelector('.delete').addEventListener('click', () => {
                taskList.removeChild(li);
            });
        }
    });
</script>