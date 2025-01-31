const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})

document.querySelector('.register-btn').addEventListener('click', function () {
    document.querySelector('.login').style.display = 'none';
    document.querySelector('.register').style.display = 'block';
    document.querySelector('.toggle-left').style.display = 'none';
    document.querySelector('.toggle-right').style.display = 'flex';
});

document.querySelector('.login-btn').addEventListener('click', function () {
    document.querySelector('.login').style.display = 'block';
    document.querySelector('.register').style.display = 'none';
    document.querySelector('.toggle-left').style.display = 'flex';
    document.querySelector('.toggle-right').style.display = 'none';
});

const loginToggle = document.querySelector('.form-box.login .toggle-button');
const registerToggle = document.querySelector('.form-box.register .toggle-button');
const loginForm = document.querySelector('.form-box.login');
const registerForm = document.querySelector('.form-box.register');

loginToggle.addEventListener('click', () => {
    loginForm.classList.add('hidden');
    registerForm.classList.remove('hidden');
});

registerToggle.addEventListener('click', () => {
    registerForm.classList.add('hidden');
    loginForm.classList.remove('hidden');
});

// pada file JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Kode JavaScript dijalankan');
    const chevronButton = document.querySelector('.toggle-button a');
    console.log('Elemen HTML ditemukan:', chevronButton);
    
    chevronButton.addEventListener('click', function(event) {
      event.preventDefault();
      if (!isLoggedIn) {
        console.log('SweetAlert dijalankan');
        Swal.fire({
          title: 'Anda belum login!',
          text: 'Silakan login terlebih dahulu untuk melanjutkan.',
          icon: 'error',
          confirmButtonText: 'Login'
        });
      } else {
        window.location.href = chevronButton.href;
      }
    });
  });