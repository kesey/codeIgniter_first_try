<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 11/12/2016
 * Time: 18:09
 */
?>

<h3><?php echo $title; ?></h3>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">Title</label>
<input type="input" name="title" /><br />

<label for="text">Text</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Create news item"  class="btn btn-default2 text-uppercase"/>

</form>