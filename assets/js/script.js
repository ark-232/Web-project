function validateContact() {
    const errorContainer = document.querySelector("#errorContainer");
    errorContainer.innerHTML = "";

    const form = document.forms["contactForm"];

    const name = form["name"];
    const email = form["email"];
    const message = form["message"];
    

    //const usernameValue = usernameInput.value;
    //const messageValue = messageInput.value;
    const nameValue = name.value;
    const emailValue = monthInput.value;
    const messageValue = message.value;
    
  


    if (nameValue.trim().length > 50) {
        errorContainer.innerHTML += getError("Name cannot be longer than 50 characters");
        return false;
    }
    if (nameValue.trim().length > 100) {
        errorContainer.innerHTML += getError("Email cannot be longer than 100 characters");
        return false;
    }
    if (nameValue.trim().length > 200) {
        errorContainer.innerHTML += getError("Message cannot be longer than 200 characters");
        return false;
    }
   
   
  


    return true;
}

function getError(errorMessage) {
    return `
    <div class="my-3 mx-3 p-2 bg-danger text-white card">${errorMessage}</div>
    `;
}