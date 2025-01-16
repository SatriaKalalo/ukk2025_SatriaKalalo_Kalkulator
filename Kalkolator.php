<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator dan Konverter Mata Uang</title>
</head>
    <link href="Kalkolator.css" rel="stylesheet">
<body>

    <h2>Kalkulator</h2>
    <form id="calculator-form">
        <input class="nomor1" type="number" id="num1" placeholder="" required>
        <div class="div">
        <input class="nomor2" type="number" id="num2" placeholder="" required>
        <select id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </div>
        <p><span id="calc-result"></span></p>
        <button class="button" type="submit">Hitung</button>
    </form>
    <div class="button-website">  
        <button class="button-web"><a href="ConvertMoney.php">Convert Money</a></button>
    </div>
    <script src="Kalkolator.js">
    </script>
</body>
</html>
