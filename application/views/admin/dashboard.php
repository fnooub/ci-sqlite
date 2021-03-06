<h1>Admin Dashboard</h1>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Posts</h3>
    </div>
    <div class="panel-body">
        <?php foreach ($posts as $post) :?>
            <?=$post->title?><br>
        <?php endforeach; ?>
    </div>
    <div class="panel-footer">
        <a href="/admin/add_post" class="btn btn-default">Add Post</a>
    </div>
</div><!--end of panel-->

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>
    <div class="panel-body">
        <?php foreach ($categories as $category) :?>
            <?=$category->name?><br>
        <?php endforeach; ?>
    </div>
    <div class="panel-footer">
        <a href="/admin/add_category" class="btn btn-default">Add Category</a>
    </div>
</div><!--end of panel-->

<a href="/">Home</a>
