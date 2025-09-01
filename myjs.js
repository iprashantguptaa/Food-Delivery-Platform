const loginForm = document.getElementById('login-form');
const emailPhoneInput = document.getElementById('email-phone');
const passwordInput = document.getElementById('password');
const loginBtn = document.getElementById('login-btn');
const googleLoginBtn = document.getElementById('google-login-btn');

loginBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const emailPhone = emailPhoneInput.value.trim();
    const password = passwordInput.value.trim();

    // Validate input
    if (emailPhone === '' || password === '') {
        alert('Please fill in both email/phone and password');
        return;
    }

    // Login logic here (e.g., API call to server)
    // For demo purposes, just redirect to index.html
    window.location.href = 'index.html';
});

googleLoginBtn.addEventListener('click', () => {
    // Google OAuth logic here (e.g., using Google Sign-In API)
    // For demo purposes, just redirect to index.html
    window.location.href = 'index.html';
});