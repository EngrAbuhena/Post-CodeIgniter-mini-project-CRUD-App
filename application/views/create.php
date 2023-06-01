<?php include_once 'header.php'?>
<br>
<?=form_open('welcome/save', ['class'=>'form-horizontal col-lg-12 offset-2'])?>
    <fieldset>
        <legend>Create A New Post</legend>
        <?=anchor('welcome', 'Back', array('class' => 'btn btn-primary'))?>
        <div class="form-group">
            <div class="col-lg-5">
            <label for="exampleInputPassword1">Title</label>
            <?=form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Title'])?>
            </div>
            <div class="col-lg-5"><?=form_error('title','<div class="text-danger">','</div>')?></div>
        </div>

        <div class="form-group">
            <div class="col-lg-5">
            <label for="exampleTextarea">Description</label>
            <?=form_textarea(['name'=>'description','class'=>'form-control','rows'=>'3','placeholder'=>'Description'])?>
            </div>
            <div class="col-lg-5"><?=form_error('description','<div class="text-danger">','</div>')?></div>
        </div>
        <?=form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary'])?>
        <?=form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default'])?>
    </fieldset>
<?=form_close()?>
<br>
<?php include_once 'footer.php'?>
