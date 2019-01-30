<!DOCTYPE html>
<html>
<head>
    <title>Skolas galerija</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<div class="header">
    <h2>Skolas galerija</h2>

</div>

<div class="gallery">

    <style>
        #gallery5 {
            position: relative;
            padding-top: 50%;
            -moz-user-select: none;
            user-select: none;
        }

        #gallery5 img {
            position: absolute;
            top: 12.5%;
            left: 12.5%;
            max-width: 22.5%;
            max-height: 35.5%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            cursor: zoom-in;
            transition: .2s;
        }

        #gallery5 img:nth-child(2) {
            top: 17.5%;
        }

        #gallery5 img:nth-child(1) {
            top: 17.5%;
        }

        #gallery5 img:nth-child(3) {
            top: 17.5%;
        }

        #gallery5 img:nth-child(4) {
            top: 17.5%;
        }

        #gallery5 img:nth-child(2) {
            left: 37.5%;
        }

        #gallery5 img:nth-child(6) {
            left: 37.5%;
        }

        #gallery5 img:nth-child(10) {
            left: 37.5%;
        }

        #gallery5 img:nth-child(3) {
            left: 62.5%;
        }

        #gallery5 img:nth-child(7) {
            left: 62.5%;
        }

        #gallery5 img:nth-child(9) {
            left: 62.5%;
        }

        #gallery5 img:nth-child(4) {
            left: 87.5%;
        }

        #gallery5 img:nth-child(8) {
            left: 87.5%;
        }

        #gallery5 img:nth-child(12) {
            left: 87.5%;
        }

        #gallery5 img:nth-child(5) {
            top: 50%;
        }

        #gallery5 img:nth-child(6) {
            top: 50%;
        }

        #gallery5 img:nth-child(7) {
            top: 50%;
        }

        #gallery5 img:nth-child(8) {
            top: 50%;
        }

        #gallery5 img:nth-child(9) {
            top: 82%;
        }

        #gallery5 img:nth-child(10) {
            top: 82%
        }

        #gallery5 img:nth-child(11) {
            top: 82%;
        }

        #gallery5 img:nth-child(12) {
            top: 82%;
        }


        #gallery5 img:focus {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            max-width: 100%;
            max-height: 100%;
            outline: none;
            pointer-events: none;
        }

        #gallery5 img:focus ~ div {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #fff;
            cursor: zoom-out;
        }

    </style>

    <section class="intro4">

        <div id="gallery5">
            <img src="images/222.jpg" tabindex="0"/>
            <img src="images/333.png" tabindex="0"/>
            <img src="images/444.jpg" tabindex="0"/>
            <img src="images/555.jpg" tabindex="0"/>
            <img src="images/666.jpg" tabindex="0"/>
            <img src="images/777.png" tabindex="0"/>
            <img src="images/888.jpg" tabindex="0"/>
            <img src="images/999.jpg" tabindex="0"/>
            <img src="images/1111.jpg" tabindex="0"/>
            <img src="images/2222.jpg" tabindex="0"/>
            <img src="images/3333.jpg" tabindex="0"/>
            <img src="images/4444.jpeg" tabindex="0"/>
        </div>

    </section>
    <style> a {
            color: inherit;
    </style>
</div>
<div class="copyright">&copy;2018 - <strong>Danils Grics</strong></div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

<div class="fixed_button" onclick="goBack()">Atpakaļ</a></div>

</body>
</html>