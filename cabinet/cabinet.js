function addRow() {

    var table = document.getElementById("realEstateTable").getElementsByTagName('tbody')[0];

    var newRow = table.insertRow();

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    cell1.innerHTML = "Однушка в сибири";   
    cell2.innerHTML = "2,000,000 ₽";
    cell3.innerHTML = "Новиков Н.Н.";   
    cell4.innerHTML = new Date().toLocaleDateString();
    cell5.innerHTML = "Нет";

}
