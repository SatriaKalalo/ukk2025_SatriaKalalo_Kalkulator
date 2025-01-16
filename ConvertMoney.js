document.getElementById('currency-form').addEventListener('submit', async function (event) {
    event.preventDefault();
    const amount = parseFloat(document.getElementById('amount').value);
    const fromCurrency = document.getElementById('from-currency').value;
    const toCurrency = document.getElementById('to-currency').value;

    const exchangeRates = {
        USD: { IDR: 16358, EUR: 0.97, JPY: 115 },
        IDR: { USD: 0.000061, EUR: 0.000059, JPY: 0.0096 },
        EUR: { USD: 1.03, IDR: 16650, JPY: 160.57 },
        JPY: { USD: 0.0064, IDR: 104, EUR: 0.0062 }
    };

    let result;
    if (!exchangeRates[fromCurrency] || !exchangeRates[fromCurrency][toCurrency]) {
        result = 'Invalid currency conversion';
    } else {
        const rate = exchangeRates[fromCurrency][toCurrency];
        result = amount * rate;
    }

    document.getElementById('currency-result').textContent = result;
});