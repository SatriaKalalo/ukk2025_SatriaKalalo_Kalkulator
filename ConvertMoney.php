<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator dan Konverter Mata Uang</title>
</head>
    <link href="Kalkolator.css" rel="stylesheet">
<body>

    <h2>Konverter Mata Uang</h2>
    <form id="currency-form">
        <input class="nomorkonvert" type="number" id="amount" placeholder="" required>
        <div class="div">
        <select id="from-currency">
            <option value="USD">USD</option>
            <option value="IDR">IDR</option>
            <option value="EUR">EUR</option>
            <option value="JPY">JPY</option>
        </select>
        <select id="to-currency">
            <option value="USD">USD</option>
            <option value="IDR">IDR</option>
            <option value="EUR">EUR</option>
            <option value="JPY">JPY</option>
        </select>
        </div>
        <p><span id="currency-result"></span></p>
        <button type="submit">Konversi</button>
    </form>
    
    <div class="button-website">  
    <button class="button-web"><a href="Kalkolator.php">Kalkulator</a></button>
    </div>

    <script src="ConvertMoney.js">
    </script>
</body>
</html>