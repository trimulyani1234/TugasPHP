<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loop While</title>
</head>
<body>

<p> Tugas </p>
<p>
    <p>1 Tampilkan perulangan bilangan genap dari 100 -> 0</p>
    <p>Jawaban: </p>

    <p>
        <?php
        $i = 100;
        while($i >= 0)
        {
            echo $i;
            echo "<br />";
            $i-=2;
        }
        ?>
    </p>

        <p>2. Tampilkan bilangan yang mempunyai angka 8, bilangan maksimal 100 contoh 8, 18, 28, dll</p>
        <p>Jawaban: </p>

        <p>
            <?php
            for ($i= 8; $i <= 100; $i=$i+10)
            {
                echo $i;
                echo "<br />";
            }
            ?>
        </p>

</body>
</html>
