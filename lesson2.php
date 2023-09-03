<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson2</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Lesson2</h1>
        <p>6402202057006 Miss.Jinnita Karanpiriya</p>
    </div>

    <?php
    require "connect.php";
    $sql = "SELECT * FROM tb_section ORDER BY SECT_NAME ASC"; // Replace with your table name
    $stmt = $pdo->query($sql);

    // Fetch all results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container mt-3">
        <h2>Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z</h2>
        <p>Section Data Details</p>

        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-secondary" onclick="window.location.href ='lesson1.php'">Lesson 1 : แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href ='index.php'">กลับไปยังหน้าหลัก</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href ='lesson3.php'">Lesson 3 :แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A
            </button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>SECT_NAME</th>

                    <th>SECT_TELEPHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row) { ?>
                    <tr>

                        <td><?php echo $row['SECT_NAME']; ?></td>

                        <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>