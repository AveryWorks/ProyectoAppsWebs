import {saveTask} from './firebase.js'

window.addEventListener('DOMContentLoaded', () => {console.log('works')})

const LoginForm = document.getElementById('Login__Form')
LoginForm.addEventListener("submit",(e) =>{
    e.preventDefault()

    const email = LoginForm['Email']
    const contrasena = LoginForm['Contrasena']

    saveTask(email.value,contrasena.value);
})

/***const email = document.getElementById("Email");
const password = document.getElementById("Contrasena");
const loginbtn = document.getElementById("buttonlogin");

loginbtn.addEventListener("click", (e) => {
  e.preventDefault();
  const data = {
    email: email.value,
    password: password.value,
  };
  console.log(data);
});**/
