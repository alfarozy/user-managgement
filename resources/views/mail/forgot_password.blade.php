<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>E-waste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Version" content="v4.3.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/dist/assets/images/favicon.ico" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
</head>

<body style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400;">

    <!-- Hero Start -->
    <div style="margin-top: 50px;">
        <table cellpadding="0" cellspacing="0"
            style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
            <thead>
                <tr
                    style="background-color: #2f55d4; padding: 3px 0; line-height: 68px; text-align: center; color: #fff; font-size: 24px; font-weight: 700; letter-spacing: 1px;">
                    <th scope="col">E-waste</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">
                        Hello, {{ $user->name }}
                    </td>
                </tr>
                <tr>
                    <td style="padding: 15px 24px 15px; color: #8492a6;">
                        Untuk memperbaharui passowrd, silahkan klik tombol berikut
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px;">
                        <a href="{{ route('edit.password', $user->token) }}"
                            style="padding: 8px 20px; outline: none; text-decoration: none; font-size: 16px; letter-spacing: 0.5px; transition: all 0.3s; font-weight: 600; border-radius: 6px; background-color: #2f55d4; border: 1px solid #2f55d4; color: #ffffff;">Ubah
                            Password</a>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px 0; color: #8492a6;">
                        Jika Anda tidak melakukannya, silahkan abaikan email ini atau
                        hubungi customer service kami.
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px 15px; color: #8492a6;">
                        E-waste <br> Support Team
                    </td>
                </tr>

                <tr>
                    <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> E-waste. Power by G-Tech
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Hero End -->
</body>

</html>
