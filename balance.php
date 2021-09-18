<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Kent Kart Bakiye Sorgu</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <center id="center">
        <input type="text" id="text">
        <button id="button" onclick="getBalanceInfoBySerialNumber()">Sorgula</button>
        <div id="content">

        </div>
    </center>

    <script>
        function getBalanceInfoBySerialNumber() {
            let text = $("#text").val()
            $.ajax({
                method: "POST",
                url: "api.php",
                data: {
                    process: "balance",
                    serialNumber: text
                },
                success: (data) => {
                    data = JSON.parse(data)

                    if (data.status !== true) {
                        $("#content").html(
                            "<br> <span>Hata: " + data.desc + "</span>"
                        )
                        return;
                    } else {
                        $("#content").html(
                            "<br> <span>Kalan Bakiye: " + data.result[0].balance + "</span>"
                        )
                    }
                },
                error: (err) => {
                    alert(err)
                }
            })
        }
    </script>
</body>

</html>