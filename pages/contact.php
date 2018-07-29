<div class="row py-5">



<div class="col-md-2"></div>
<div class="col-md-8">
        <form class="" action="/save.php" method="POST">
            <div class="form-group row">
                <div class="col-6">
                <label for="firstname">Firstname</label>
                <input class="form-control" name="firstname" type="text">
                </div>
                <div class="col-6">
                <label for="lastname">Lastname</label>
                <input class="form-control" name="lastname" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" type="email">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit">Send It</button>
                <button class="btn btn-secondary" type="submit">Admin's Page</button>
            </div>
        </form>
</div>
<div class="col-md-2"></div>

</div>