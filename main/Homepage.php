<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../style/Homepage.css">
</head>
<body>
    <?php include("Navigate_bar.php") ?>

    
    <section class="section">
        <h2>Recommendation</h2>
        <?php for($i=0; $i<3; $i++): ?>
            <div class="tour_cards">
                <div class="tour_image">
                    <img src="../image/LOGO.png" alt="">
                </div>

                <div class="tour_detail">
                    <p class="place_name"><b>Name</b></p>
                    <p class="place_detail"><b>Detail</b></br>
                        แมวเดินเล่นในสวนและพบกับนกที่กำลังบินอยู่บนฟ้าในตอนเช้า.
                        แมวเดินเล่นในสวนและพบกับนกที่กำลังบินอยู่บนฟ้าในตอนเช้า.
                        แมวเดินเล่นในสวนและพบกับนกที่กำลังบินอยู่บนฟ้าในตอนเช้า.</p>
                    <p class="location"><b>Location</b></p>
                </div>
            </div>
        <?php endfor; ?>
    </section>
</body>
</html>