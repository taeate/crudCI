<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    controller 연결 완료

    <div>list 보여줄거임</div>

    <button>
        <a href="create">글작성</a>
    </button>
    <br>

    <?php foreach ( $get_list as  $row): ?>

    <?php $id = $row-> id; ?>

    <?php $title = $row-> title; ?>

    <?php echo $id."."; ?>

    <?php echo "<a href='detail/$id'>$title</a><br>"; ?>


    
    <?php endforeach; ?>
</body>
</html>