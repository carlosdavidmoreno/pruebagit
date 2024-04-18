"<!DOCTYPE html>
                <html>
                <head>
                    <title>Amigos</title>
                </head>
                <body>
                    <h1>Los números $num1 y $num2 son amigos.</h1>
                </body>
                </html>";
    } else {
        $html = "<!DOCTYPE html>
                <html>
                <head>
                    <title>Amigos</title>
                </head>
                <body>
                    <h1>Los números $num1 y $num2 no son amigos.</h1>
                </body>
                </html>";
    }

    return response($html);
});
