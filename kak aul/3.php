<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST["nilai"];

            if ($nilai >= 85) {
                $grade = 'A';
            } elseif ($nilai >= 70) {
                $grade = 'B';
            } elseif ($nilai >= 55) {
                $grade = 'C';
            } elseif ($nilai >= 40) {
                $grade = 'D';
            } else {
                $grade = 'E';
            }
        }
        ?>
        <form action="" method="post">
            <label for="nilai">Nilai:</label>
            <input type="number" id="nilai" name="nilai" required>
            <button type="submit">Calculate</button>
        </form>
        <?php if (isset($grade)) : ?>
            <div class="result">
                <p><strong>Grade:</strong> <?php echo $grade; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
