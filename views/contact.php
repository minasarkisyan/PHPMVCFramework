<div class="col-4">
    <h1>Contact</h1>
    <form action="/contact" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Subject</label>
            <input name="subject" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label  for="exampleInputPassword1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
