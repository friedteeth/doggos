var motivo = document.getElementById('motivoAdopcion');

$(document).ready(function () {
    bsCustomFileInput.init()
})

motivo.addEventListener('keyup', function (event) {
    var len = motivo.value.length;
    console.log(len);
    document.getElementById('motivo_err').innerText = len;
});