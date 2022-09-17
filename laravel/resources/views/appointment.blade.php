<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="appointment/insert">
        @csrf
        <div>
            <input type="radio" value="exam" name="target" id="" style="">
            <label>exam</label>
        </div>
        <div>
            <input type="radio" value="braces" name="target" id="" style="">
            <label>braces</label>
        </div>
        <div>
            <input type="radio" value="whitening" name="target" id="" style="">
            <label>whitening</label>
        </div>
        <div>
            <input type="radio" value="filling" name="target" id="" style="">
            <label>filling</label>
        </div>
        <button>Записаться</button>
    </form>
</body>
</html>