<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
</head>
<body>

    <script>
        window.onload = function() {
            let basebill = "{{ $basebillformat }}";
            let totalbill = "{{ $totalbillformat }}";
            alert("Base Bill: " + basebill + "\nTotal Bill: " + totalbill);
        }
    </script>

</body>
</html>