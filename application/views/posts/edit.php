<h2><?= $title ?></h2>

<?php echo validation_errors();?>

<?php echo form_open('posts/update'); ?>
  <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $post['id'];?>">
    <label>Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Add title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="editor1" name="body" rows="3" placeholder="Add body"><?php echo $post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>