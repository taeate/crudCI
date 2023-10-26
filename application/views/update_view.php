<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
        제목: <input type="text" name="title" value="<?php echo $record['title']; ?>">
        내용: <input type="text" name="content" value="<?php echo $record['content']; ?>">
        <input type="submit" name="submit">
        
        </form>
        
        <?php 
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        
        echo 'ID: ' . $id . '<br>';
        echo 'Title: ' . $title . '<br>';
        echo 'Content: ' . $content . '<br>';
        ?>
        
</body>
</html>