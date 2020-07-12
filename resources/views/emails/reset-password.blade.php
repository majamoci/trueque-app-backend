<!DOCTYPE html>

</html lang="es">
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">

    <title></title>
    <style>
        body {
            font-family: Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .container {
            width: 100%;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
            align-items: center;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem;
        }

        .list-inline-item {
            display: inline-block;
        }

        .text-muted {
            color: darkgrey;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <img src="https://tlr.stripocdn.email/content/guids/CABINET_dd354a98a803b60e2f0411e893c82f56/images/23891556799905703.png"
                    alt style="display: block;" width="175">
            </div>
            <div class="d-flex justify-content-center">
                <h2>Olvidaste la contraseña?</h2>
            </div>
            <div class="d-flex justify-content-center">
                <p>No te preocupes,</p>
            </div>
            <div class="d-flex justify-content-center">
                <p>Usa el código de verificación para cambiar tu contraseña.</p>
            </div>
            <div class="d-flex justify-content-center">
                <h2>{{ $msg }}</h2>
            </div>
            <div class="d-flex justify-content-center">
                <span>Siguenos en:&nbsp;</span>
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><img
                            src="https://tlr.stripocdn.email/content/assets/img/social-icons/rounded-gray/facebook-rounded-gray.png"
                            alt="Fb" title="Facebook" width="32"></li>
                    <li class="list-inline-item"><img
                            src="https://tlr.stripocdn.email/content/assets/img/social-icons/rounded-gray/twitter-rounded-gray.png"
                            alt="Tw" title="Twitter" width="32"></li>
                    <li class="list-inline-item"><img
                            src="https://tlr.stripocdn.email/content/assets/img/social-icons/rounded-gray/instagram-rounded-gray.png"
                            alt="Ig" title="Instagram" width="32"></li>
                    <li class="list-inline-item"><img
                            src="https://tlr.stripocdn.email/content/assets/img/social-icons/rounded-gray/youtube-rounded-gray.png"
                            alt="Yt" title="Youtube" width="32"></li>
                    <li class="list-inline-item"><img
                            src="https://tlr.stripocdn.email/content/assets/img/social-icons/rounded-gray/linkedin-rounded-gray.png"
                            alt="In" title="Linkedin" width="32"></li>
                </ul>
            </div>
            <div class="d-flex justify-content-center">
                <span>Contáctenos:&nbsp;</span>
                <a href="tel:+123456789" class="text-muted">123456789</a>
                <span>&nbsp;|&nbsp;</span>
                <a href="mailto:your@mail.com" class="text-muted">your@mail.com</a>
            </div>
        </div>
    </div>
</body>

</html>
