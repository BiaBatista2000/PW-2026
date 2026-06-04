document.getElementById('verificarBtn').addEventListener('click', function() {
    const numero = document.getElementById('numero').value;
    const resultado = document.getElementById('resultadoNumero');
    
    if (numero % 2 === 0) {
        resultado.innerHTML = `${numero} é um número par.`;
    } else {
        resultado.innerHTML = `${numero} é um número ímpar.`;
    }
});
