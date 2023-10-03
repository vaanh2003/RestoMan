<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    body{
        display: flex;
        justify-content: space-between
    }
    div{
        width: 100px;
        height: 100px;
        background-color: blanchedalmond;
    }
</style>
<body>
    <a href="{{ url('table', ['id_table' => 1]) }}">
        <div>
            <span>
                BAN 1
            </span>
        </div>
    </a>
    <a href="{{ url('table', ['id_table' => 2]) }}">
        <div>
            <span>
                BAN 2
            </span>
        </div>
    </a>
    <a href="{{ url('table', ['id_table' => 3]) }}">
        <div>
            <span>
                BAN 3
            </span>
        </div>
    </a>
</body>
</html>