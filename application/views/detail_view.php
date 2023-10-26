<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>글 상세보기 페이지입니다.</h1>

    <?php if (!empty($detail_info)): ?>
        
        <?php $id = $detail_info->id; ?>

        <?php $title = $detail_info->title; ?>

        <?php $content = $detail_info->content; ?>

        <?php echo $id . ". 제목: " . $title . " 내용: " . $content . "<br><br><br>"; ?>

    <?php else: ?>
        <p>상세 정보를 찾을 수 없습니다.</p>
    <?php endif; ?>

    <a href="../list">목록</a>

    <!-- <a href='../update/$id'>수정하기</a>

    <a href='../delete/$id'>삭제하기</a> -->

    <a href="<?= ('../update/' . $id); ?>">수정하기</a>
    <a href="<?= ('../delete/' . $id); ?>">삭제하기</a>
</body>
</html>