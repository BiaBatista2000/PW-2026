document.getElementById('calcularBtn').addEventListener('click', function() {
    const anoNascimento = document.getElementById('anoNascimento').value;
    const anoAtual = new Date().getFullYear();
    const idade = anoAtual - anoNascimento;

    const resultado = document.getElementById('resultadoIdade');
    if (idade >= 0 && anoNascimento <= anoAtual) {
        resultado.innerHTML = `Sua idade é ${idade} anos.`;
    } else {
        resultado.innerHTML = 'Insira um ano de nascimento válido.';
    }
});
