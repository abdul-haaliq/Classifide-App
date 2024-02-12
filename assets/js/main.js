function showLogInModal(){

const loginModal = document.getElementById('login-modal')
const bootsrapModal =new bootstrap.Modal(loginModal)
bootsrapModal.show();
}

function logIn() {
  let email = document.getElementById('login-email').value;
  let password = document.getElementById('login-password').value;

 const form = new FormData();
 form.append("email",email);
 form.append("password",password);

 const request = new XMLHttpRequest();
 request.onreadystatechange = function() {
    if (request.readyState == 4){
        const response = request.responseText;
        if(response === 'success'){
            alert("Log In Success");
        }else{
            alert(response);
        }
    }
 };
 request.open("post","logInProcess.php",true);
 request.send(form);
}