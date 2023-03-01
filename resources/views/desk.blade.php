<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>Доски</title>
</head>
<body>
    <div>
      @foreach ($desks as $desk)
      <div class="block">{{ $desk->id . " " . $desk->name }}</div>
        @endforeach
    </div>
</body>
</html>
<style>
    .block{
    background-color: rgb(159, 142, 255);
    margin: 2vw;
    padding: 2vw;
    width: 20vw;
}
</style>
