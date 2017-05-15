<form action="/comments/add" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="John Smith" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="john.smith@gmail.com" required>
    </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control" name="comment" rows="10" required></textarea>
    </div>

    {{ csrf_field() }}

    <button type="submit" class="btn btn-success">Submit</button>
</form>
