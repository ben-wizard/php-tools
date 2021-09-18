<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Otobüs Rota Sorgula</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <center id="center">
        <input type="text" id="text">
        <button id="button" onclick="getRouteInfoByRouteNumber()">Sorgula</button>
        <div id="content">

        </div>
    </center>

    <script>
        function getRouteInfoByRouteNumber() {
            let text = $("#text").val()
            $.ajax({
                method: "POST",
                url: "api.php",
                data: {
                    process: "searchRoute",
                    routeNumber: text
                },
                success: (data) => {
                    data = JSON.parse(data)

                    if (data.direct0 === "Gidiş Yönü" && data.direct1 === "Dönüş Yönü") {
                        $("#content").html(
                            "<br> <span>Hata: Rota Bulunamadı!</span>"
                        )
                        return;
                    } else {
                        $("#content").html(
                            "<br> <span>Gidiş Yönü Rota Bilgisi: " + data.direct0 + "</span> <br> <span>Dönüş Yönü Rota Bilgisi: " + data.direct1 + "</span>"
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