<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'];?></small><br/>
<div class="post-body">

  <?php echo $post['body'];?>
</div>
<hr>
<a href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>" class="btn btn-default pull-left">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" class="btn btn-danger" value="Delete" id="delete"/>
<?php echo form_close();?>
