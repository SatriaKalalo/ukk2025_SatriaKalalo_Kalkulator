// Kalkulator
document.getElementById('calculator-form').addEventListener('submit', function (event) {
    event.preventDefault();
    const num1 = parseFloat(document.getElementById('num1').value);
    const operator = document.getElementById('operator').value;
    const num2 = parseFloat(document.getElementById('num2').value);

    let result;
    switch (operator) {
        case '+': result = num1 + num2; break;
        case '-': result = num1 - num2; break;
        case '*': result = num1 * num2; break;
        case '/': result = num2 !== 0 ? num1 / num2 : 'Error: Division by zero'; break;
        default: result = 'Invalid operator';
    }

    document.getElementById('calc-result').textContent = result;
});