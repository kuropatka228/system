document.querySelector('.button-create').addEventListener('click', function() {
    document.getElementById('form-container').style.display = 'block';
});

document.getElementById('realEstateForm').addEventListener('submit', function(event) {
    event.preventDefault();
    if (currentRow) {
        updateRow(currentRow);
    } else {
        addRowFromForm();
    }
});

document.getElementById('cancel-btn').addEventListener('click', function() {
    document.getElementById('form-container').style.display = 'none';
    document.getElementById('realEstateForm').reset();
});

function addRowFromForm() {
    var table = document.getElementById("realEstateTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow();

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);

    cell1.innerHTML = document.getElementById('name').value;
    cell2.innerHTML = document.getElementById('price').value + ' ₽';
    cell3.innerHTML = document.getElementById('owner').value;
    cell4.innerHTML = document.getElementById('date').value;
    cell5.innerHTML = document.getElementById('tenant').value;

    cell6.innerHTML = `
        <div class="button-container2">
            <button class="edit-btn" onclick="editRow(this)">Редактировать</button>
            <button class="delete-btn" onclick="deleteRow(this)">Удалить</button>
        </div>
    `;

    document.getElementById('form-container').style.display = 'none';
    document.getElementById('realEstateForm').reset();
}

let currentRow = null;

function editRow(button) {
    currentRow = button.parentNode.parentNode.parentNode;
    var cells = currentRow.getElementsByTagName('td');
    document.getElementById('name').value = cells[0].innerHTML;
    document.getElementById('price').value = cells[1].innerHTML;
    document.getElementById('owner').value = cells[2].innerHTML;
    document.getElementById('date').value = cells[3].innerHTML;
    document.getElementById('tenant').value = cells[4].innerHTML;

    document.getElementById('form-container').style.display = 'block';
}

function updateRow(row) {
    var cells = row.getElementsByTagName('td');
    cells[0].innerHTML = document.getElementById('name').value;
    cells[1].innerHTML = document.getElementById('price').value;
    cells[2].innerHTML = document.getElementById('owner').value;
    cells[3].innerHTML = document.getElementById('date').value;
    cells[4].innerHTML = document.getElementById('tenant').value;

    document.getElementById('form-container').style.display = 'none';
    document.getElementById('realEstateForm').reset();
    currentRow = null; 
}

function deleteRow(button) {
    var row = button.parentNode.parentNode.parentNode;  
    row.parentNode.removeChild(row);
}

function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.querySelector('.search-txt');
    filter = input.value.toUpperCase();
    table = document.getElementById("realEstateTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; 
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}