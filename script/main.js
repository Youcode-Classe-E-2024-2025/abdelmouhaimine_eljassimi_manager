let signinForm = document.getElementById('signinFrom');
let signinFromBtn = document.getElementById('signinFromBtn');
let signupForm = document.getElementById('signupFrom');
let signupFormBtn = document.getElementById('signupFromBtn');

signinFromBtn.addEventListener('click', function(){
    signinForm.classList.remove("hidden");
    signupForm.classList.add("hidden");
});

signupFromBtn.addEventListener('click', function(){
    signinForm.classList.add("hidden");
    signupForm.classList.remove("hidden");
});

