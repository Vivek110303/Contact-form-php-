function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const error = document.getElementById("error");
  
    error.textContent = "";
  
    if (!name || !email || !message) {
      error.textContent = "All fields are required.";
      return false;
    }
  
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
      error.textContent = "Please enter a valid email.";
      return false;
    }
  
    return true;
  }
  