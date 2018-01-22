
var xhr = new XMLHttpRequest();

const  api = '/api/';

var todos;

function getListTodo() {
    xhr.open("GET", api + "read.php", true);
    xhr.onload = function (e) {
        if (xhr.readyState === 4){
            if (xhr.status === 200){

                var todoEl = document.getElementsByClassName('todos')[0];

                var data = JSON.parse(xhr.responseText);
                var todoArray = data.todo;

                for (var x in todoArray) {
                    var item = todoArray[x];


                    var todo = document.createElement('div');
                    var box_line = document.createElement('div');
                    var captionT = document.createElement('div');
                    var btnTComplete = document.createElement('div');
                    var i = document.createElement('i');
                    todo.className = 'todo';
                    box_line.className = 'box-line';
                    captionT.className = 'caption-t';
                    btnTComplete.className = 'btn-t-complete';
                    i.className = 'fas fa-check';


                    todo.appendChild(box_line);
                    box_line.appendChild(captionT);
                    box_line.appendChild(btnTComplete);
                    btnTComplete.appendChild(i);

                    box_line = document.createElement('div');
                    var dateT = document.createElement('div');
                    var btnTdelete = document.createElement('div');
                    i = document.createElement('i');

                    box_line.className = 'box-line';
                    dateT.className = 'date-t';
                    btnTdelete.className = 'btn-t-delete';
                    i.className = 'fas fa-trash';

                    todo.appendChild(box_line);
                    box_line.appendChild(dateT);
                    box_line.appendChild(btnTdelete);
                    btnTdelete.appendChild(i);


                    captionT.innerHTML = item.content;
                    dateT.innerHTML = item.date;


                    var separatorTodes = document.createElement('div');
                    separatorTodes.className = 'separator-todes';

                    todoEl.appendChild(todo);
                    todoEl.appendChild(separatorTodes);

                }
            }
        }
    };

    xhr.send(null);
}


function deleteTodo(id) {
    xhr.open("GET", api + "delete.php" + '?', true);

}

window.onload = getListTodo();
