<div class="col-md-7">
    <h1><i class="fa-regular fa-circle-plus"></i> Add New To-Do</h1>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="td-title">Title:</label>
            <input name="td-title" class="form-control" id="td-title" placeholder="Enter Title" required>
            <small id="titleHelp" class="form-text text-muted">Enter the Title for To-Do title.</small>
        </div>
        <div class="form-group">
            <label for="td-desc">Description:</label>
            <textarea class="form-control" name="td-desc" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create To-Do Task</button>


    </form>
</div>