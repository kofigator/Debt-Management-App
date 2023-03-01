let tableBody = document.getElementById("tableBody");
let addBtn = document.getElementById("addBtn");
let nameInput = document.getElementById("name");
let emailInput = document.getElementById("email");

let data = [
	{name: "John Doe", email: "john.doe@example.com"},
	{name: "Jane Doe", email: "jane.doe@example.com"},
	{name: "Bob Smith", email: "bob.smith@example.com"}
];

function renderTable() {
	tableBody.innerHTML = "";
	for(let i = 0; i < data.length; i++) {
		let tr = document.createElement("tr");
		let nameTd = document.createElement("td");
		nameTd.textContent = data[i].name;
		let emailTd = document.createElement("td");
		emailTd.textContent = data[i].email;
		let editTd = document.createElement("td");
		let editBtn = document.createElement("button");
		editBtn.innerHTML = "<i class='fas fa-edit'></i>";
        editBtn.addEventListener("click", function() {
			editData(i);
		});
		editTd.appendChild(editBtn);
		let deleteTd = document.createElement("td");
		let deleteBtn = document.createElement("button");
		deleteBtn.innerHTML = "<i class='fas fa-trash-alt'></i>";
		deleteBtn.addEventListener("click", function() {
			deleteData(i);
		});

		deleteTd.appendChild(deleteBtn);
		tr.appendChild(nameTd);
		tr.appendChild(emailTd);
		tr.appendChild(editTd);
		tr.appendChild(deleteTd);
		tableBody.appendChild(tr);
	}
}

function addData() {
	let name = nameInput.value;
	let email = emailInput.value;
	if(name !== "" && email !== "") {
		data.push({name: name, email: email});
		nameInput.value = "";
		emailInput.value = "";
		renderTable();
	} else {
		alert("Please enter a name and email.");
	}
}

function editData(index) {
	let name = prompt("Enter the new name:", data[index].name);
	let email = prompt("Enter the new email:", data[index].email);
	if(name !== null && email !== null) {
		data[index].name = name;
		data[index].email = email;
		renderTable();
	}
}

function deleteData(index) {
	if(confirm("Are you sure you want to delete this record?")) {
		data.splice(index, 1);
		renderTable();
	}
}


addBtn.addEventListener("click", function(event) {
	event.preventDefault();
	addData();
});

renderTable();