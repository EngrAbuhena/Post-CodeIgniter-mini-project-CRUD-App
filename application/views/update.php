<?php include_once 'header.php'?>
<br>
<?=form_open("welcome/change/{$post->id}", ['class'=>'form-horizontal col-lg-12 offset-2'])?>
    <fieldset>
        <legend>Update Post</legend>
        <?=anchor('welcome', 'Back', array('class' => 'btn btn-primary'))?>

        <div class="form-group">
            <div class="col-lg-5">
            <label for="exampleInputPassword1">Title</label>
            <?=form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Title','value'=>set_value('title',$post->title)])?>
            </div>
            <div class="col-lg-5"><?=form_error('title','<div class="text-danger">','</div>')?></div>
        </div>

        <div class="form-group">
            <div class="col-lg-5">
            <label for="exampleTextarea">Description</label>
            <?=form_textarea(['name'=>'description','class'=>'form-control','rows'=>'3','placeholder'=>'Description','value'=>set_value('description',$post->description)])?>
            </div>
            <div class="col-lg-5"><?=form_error('description','<div class="text-danger">','</div>')?></div>
        </div>

        <?=form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary'])?>
        <?=form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default'])?>
    </fieldset>
<?=form_close()?>
<br>
<?php include_once 'footer.php'?>
