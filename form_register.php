<body class="bg-dark">
    <div class="container">
        <div class="row">
        <div class="col-md-4"></div>    
        <div class="col-md-4 bg-light rounded mt-5 p-3 ">
            <h1>Register Form</h1>
            <hr>
            <form action="form_data.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username:" required>
                </div>
                <div class="form-group">
                    <select name="gender" id="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email:" name="email" class="form-control" required>
                </div>
                <input type="submit" value="Register" class="btn btn-success" name="submit">
            </form>
        </div>    
        <div class="col-md-4"></div>    
        </div>
    </div>
</body>
