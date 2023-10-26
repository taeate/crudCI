<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 목록 페이지</title>
</head>
<body>
    <h1>글 목록 페이지</h1>
    
    <br>
    <br>
    <!-- Loop through and display the list of articles here -->
    <?php foreach ($crud_data as $row): ?>

        <?php $id = $row->id; ?>

        <?php $title = $row->title; ?>

        <?php echo $id . '.'; ?>
        <?php echo '<a href="welcome">' . $title . '</a><br>'; ?>
        
    <?php endforeach; ?>
</body>
</html>
