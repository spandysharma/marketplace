// This file handles the availabilty of retrieve, delete, and edit buttons
// based on input of confirmation number.

const codeApplied = document.getElementById("confirmationProductId");
const retrieveButton = document.getElementById("retrieveButton");
const deleteButton = document.getElementById("deleteButton");
const editButton = document.getElementById("editButton");

retrieveButton.setAttribute("disabled", true);
deleteButton.setAttribute("disabled", true);
editButton.setAttribute("disabled", true);

const stateHandle = () => {
    
    if (codeApplied.value.length === 8) {
        retrieveButton.removeAttribute("disabled");
        deleteButton.removeAttribute("disabled");
        editButton.removeAttribute("disabled");
    }
    else {
        retrieveButton.removeAttribute("disabled");
        deleteButton.setAttribute("disabled", true);
        editButton.setAttribute("disabled", true);
    }
}

codeApplied.addEventListener("change",stateHandle);
