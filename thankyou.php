<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1
        {
            text-transform: uppercase;
            font-size: 10em;
            color:#ffffff;
            letter-spacing:5px;
        }

        .thankyou_container
        {
            position: absolute;
            left: 50%;
            top: 50%; 
            transform: translate(-50%, -50%);
            background:#3d1f4d;
            opacity: 0.8;
            text-align:center;
        }

        body
        {
            background-image: url(../images/main_banner.png);
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat:no-repeat;
            /* text-align:center; */
            overflow:hidden;
        }

        .main_banner_logo
{
   margin-left: 50px;
   margin-top: 60px;
   animation-name: updown_animation;
   animation-duration: 1s !important;
   animation-iteration-count: infinite;
   animation-direction: alternate;
   animation-fill-mode: both;
}


@keyframes updown_animation {
from {
    transform: translateY(0%);
    }
to {transform: translateY(-6%)}
}

        @media screen(min-width:320px) and (max-width:425) {  
            h1
        {
            text-transform: uppercase;
            font-size: 3em;
            color:#ffffff;
            letter-spacing:5px;
        } 
        }
    </style>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <img class="main_banner_logo" src="../images/logo.png" alt="">
                </div>
            </div>
        </div>
    <div class="container thankyou_container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>thank You</h1>
            </div>
        </div>
    </div>
</body>
</html>