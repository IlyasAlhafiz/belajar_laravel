// resources/js/auth.js

const urlParams = new URLSearchParams(window.location.search);
const type = urlParams.get('type');

if (type === 'login') {
    document.querySelector('.form-box.login').style.display = 'block';
    document.querySelector('.form-box.register').style.display = 'none';
} else if (type === 'register') {
    document.querySelector('.form-box.login').style.display = 'none';
    document.querySelector('.form-box.register').style.display = 'block';
}

// tambahkan kode JavaScript untuk mengatur tombol panah kiri dan kanan
document.querySelector('.toggle-button').addEventListener('click', function() {
    if (type === 'login') {
        window.location.href = '{{ route('auth') }}?type=register';
    } else if (type === 'register') {
        window.location.href = '{{ route('auth') }}?type=login';
    }
});