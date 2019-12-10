<section>
    <div class="container" style="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form action="index.php" method="post" style="width: 30%;margin: 0 auto;">
                    <label for="login">Login</label>
                    <div class="login input_1">
                        <input type="text" name="user" id="login">
                    </div>
                    <label for="password">Password</label>
                    <div class="password">
                        <input type="password" name="password" id="password" class=" input_1">
                    </div>
                    <div class="mod">
                        <input type="hidden" value="auth" name="mod">
                    </div>
                    <div class="opt">
                        <input type="hidden" value="login" name="opt">
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn green" style="margin-top:20px"><span>Send</span></button>
                    </div>
                </form>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
