<h1> Create a Post</h1>
<form method="POST" action ="/blog/create">
    <input type="hidden" value="" name="csrf">
    <label for="title">Title</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="author">Author</label>
    <input type="text" id="author" name="author">
    <label for="content">Content</label>
    <textarea name="content" id="content"></textarea>
    <input type = "submit">
</form>
