<?php
foreach ($query->result() as $row){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo"$row->topic"; ?></title>
</head>

<body>
<center>
  <form action='<?php echo base_url("/home_g/repress_news?id= $id");?>' method="post" name="new">
    <p>
        <input name="topic" type="text" id="topic" value='<?php echo "$row->topic"; ?>' size="50" />
      </p>
    <p>
        <textarea name="content" id="content" cols="40" rows="5"><?php echo "$row->content"; ?></textarea>
    </p>
    <p>
      <input name="author" type="text" id="author" value='<?php echo "$row->author"; ?>' size="50" />
    </p>
      <p>
        <input type="submit" name="button" id="button" value="发布" />&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="button2" id="button2" value="重置" />
      </p>
    </form>
</center>
</body>
</html>
<?php
}
?>
