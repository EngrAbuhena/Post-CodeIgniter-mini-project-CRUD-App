<?php include_once 'header.php'?>

<h3>View All Posts</h3>
<?=anchor('welcome/create', 'Add Post', array('class' => 'btn btn-primary'))?>
<?php if ($msg = $this->session->flashdata('msg')):?>
    <?php echo $msg;?>
<?php endif;?>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($posts)):?>
        <?php foreach ($posts as $post):?>
    <tr class="table-primary">
        <th scope="row"><?=$post->title?></th>
        <td><?=$post->description?></td>
        <td><?=$post->date_created?></td>
        <td>
            <?=anchor("welcome/view/{$post->id}", 'View', ['class' => 'badge badge-primary'])?>
            <?=anchor("welcome/update/{$post->id}", 'Update', ['class' => 'badge badge-success'])?>
            <?=anchor("welcome/delete/{$post->id}", 'Delete', ['class' => 'badge badge-danger'])?>
        </td>
    </tr>
    <?php endforeach;?>
         <?php else:?>
        <tr>
            <td>NO Records found!</td>
        </tr>
    <?php endif;?>
    </tbody>
</table>

<?php include_once 'footer.php'?>
