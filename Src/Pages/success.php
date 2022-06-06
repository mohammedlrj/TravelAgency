<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="success">
        <div class="center">
            <div class="icon">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="title">
            Success !
        </div>
        <div class="description">
            You subscribed successfully now you can receive our news and special offers !
        </div>
    </div>
    <style>
        body{
            background: #111;
            font-family: "Raleway";
        }

        .success{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 300px;
            padding: 30px 20px;
            background: #324A60;
            border-radius: 10px;
            box-sizing: border-box;
            z-index: 2;
            text-align: center;
        }

        .success .center .icon{
            margin: 5px 0px;
            width: 50px;
            height: 50px;
            border: 2px solid #B68D40;
            text-align: center;
            display: inline-block;
            border-radius: 50%;
            line-height: 60px;
        }

        .success .center .icon i.fas{
            font-size: 30px;
            color: #B68D40;
        }

        .success .title{
            margin: 5px 0px;
            font-size: 30px;
            font-weight: 600;
            color: #b1cfc6;
        }

        .success .description{
            margin: 25px;
            font-size: 25px;
            color: #ffffff;
        }
    </style>
</body>
</html>