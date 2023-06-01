<?php include_once 'header.php'?>

<h3>View Post</h3>
<?=anchor('welcome', 'Back', array('class' => 'btn btn-primary'))?>
    <h4><?='Title: '.$post->title?></h4>
    <p><?='Description: '.$post->description?></p>
    <p><?='Created At: '.$post->date_created?></p>

<?php include_once 'footer.php'?>
