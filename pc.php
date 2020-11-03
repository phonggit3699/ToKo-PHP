<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
        }

        header {
            width: 100%;
            height: 100px;
            box-shadow: 0 1px 10px #888888;
            background-color: red;
        }

        .slide{
            height: 200px;
            width: 100%;
            background-color: palevioletred;
        }

        .main {
            margin-top: 10px;height: 300px;
        }

        .bgColor {
            background-color: aqua;
        }

        .main .bgColorMN {
            background-color: pink;
            height: 300px;
            width: 100%;
        }

        .main .content {
            background-color: yellow;
            height: 300px;
            width: 100%;
        }

        .main .menuLeft{
            background-color: purple;
            height: 300px;
            width: 100%;
        }
        footer {
            width: 100%;
            height: 300px;
            background-color: green;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <header>
        <h3>Header: Duy</h3>

    </header>

    <div class="container bgColor">
        <div class="row">
            <div class="slide">
            <h3>Slide: Long</h3>
            </div>
        </div>

        <div class="row main">
            <div class="col-sm-3">
                <div class="menuLeft">
                <h3>MenuLeft: Long</h3>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">
                <h3>Content: Phương</h3>
                </div>
            </div>
        </div>
    </div>

    <footer>
    <h3>Footer: Ngọc</h3>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>