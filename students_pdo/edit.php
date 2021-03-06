<?php
        include('db.php');
        extract($_REQUEST);
        try {
            //預備陳述式
            $sql = 'SELECT * FROM students WHERE id = ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $data['name']; ?>">
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="text" name="email" value="<?php echo $data['email']; ?>">
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小" <?php if($data['edu'] == '國小'){echo 'selected'; }?>>國小</option>
                <option value="國中" <?php if($data['edu'] == '國中'){echo 'selected'; }?>>國中</option>
                <option value="高中職" <?php if($data['edu'] == '高中職'){echo 'selected'; }?>>高中職</option>
                <option value="大專院校" <?php if($data['edu'] == '大專院校'){echo 'selected'; }?>>大專院校</option>
                <option value="研究所以上" <?php if($data['edu'] == '研究所以上'){echo 'selected'; }?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <label for="male">
                <input type="radio" name="gender" value="男" id="male" <?php echo $data['gender']=='男'?'checked':'';?>>
                男
            </label>
            <label for="female">
                <input type="radio" name="gender" value="女" id="female"<?php echo $data['gender']=='女'?'checked':'';?>>
                女
            </label>
        </div>
        <div>
            <?php
                $skill = explode(',',$data['skill']);
            ?>
            <label for="">專長</label>
            <input type="checkbox" value="國文" id="chinese" name="skill[]" <?php echo in_array('國文',$skill)?'checked':'';?>>
            <label for="chinese">國文</label>
            <input type="checkbox" value="英文" id="english" name="skill[]" <?php echo in_array('英文',$skill)?'checked':'';?>>
            <label for="english">英文</label>
            <input type="checkbox" value="數學" id="math" name="skill[]" <?php echo in_array('數學',$skill)?'checked':'';?>>
            <label for="math">數學</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $data['content']; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="submit" value="送出">
    </form>
</body>
</html>