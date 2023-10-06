const iconPass = document.getElementById('eyePass');
const tipoInput = document.getElementById('inputPass');

iconPass.addEventListener('click',(e) => {
    if (tipoInput.type === "password") {
        tipoInput.type = "text";
        iconPass.classList.remove('bi-eye-slash');
        iconPass.classList.add('bi-eye')
    } else {
        tipoInput.type = "password";
        iconPass.classList.add('bi-eye-slash');
        iconPass.classList.remove('bi-eye');
    }
})