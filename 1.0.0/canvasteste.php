<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#mycanvas {
    border: 1px solid black;
}
</style>
<body>
    <canvas id="mycanvas" width="500px" height="500px"></canvas>
</body>
</html>

<script>
    const canvas = document.getElementById("mycanvas");
    const ctx2D = canvas.getContext("2d");
    ctx2D.fillStyle = "red";
    ctx2D.fillRect(0,0,150,75);
</script>