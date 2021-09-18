<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Wizard</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js"></script>

    <style>
        * {
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <ul>
            <li>
                <a href="./balance.html">
                    Kent Kart Bakiye Sorgula
                </a>
            </li>
            <li>
                <a href="./route.html">
                    Otobüs Rota Sorgula
                </a>
            </li>
        </ul>
    </center>

    <script>
        window.onload = () => {
            responsiveVoice.speak("hey selam, ben mustafa ve bunu ben kodladım!", "TR Turkish Male")
        }
    </script>
</body>

</html>