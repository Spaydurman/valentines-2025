<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yowwwnnn</title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow: hidden;
            height: 100vh;
            width: 100vw;
            /* background-color: #A2C9FF; */
            background-image: url('./images/thumbnail.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div id="app">
        <accepted
            :routes="{
                message: '{{ route('message') }}',
            }"
        ></accepted>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
