

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
        .someDiv {
            width: 150px;
            height: 150px;
            display: inline-block;
        }
        #div1 {
            background-color: blue;
        }
        #div2 {
            background-color: green;
        }
        #div3 {
            background-color: yellow;
        }
        #div4 {
            background-color: black;
        }
        #div5 {
            background-color: darkslategray;
        }
        #modal {
            width: 400px;
            height: 400px;
            position: absolute;
            display: none;
            background-color: greenyellow;
        }
        div {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="div1" class="someDiv"></div>
<div id="div2" class="someDiv"></div>
<div id="div3" class="someDiv"></div>
<div id="div4" class="someDiv"></div>
<div id="div5" class="someDiv"></div>

<div id="modal"></div>

<footer class="footer">
    <p>&copy; 2017</p>
</footer>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>