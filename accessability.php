<?php include 'sidebar.php' ?>

    <div class="accessability-left">
        <div class="container-new-users">
            <div class="new-users">
                <div class="header-new-users"><span><h3>Create New User</h3></span></div>
                <form class="create-new-user">

                    <label for="floatingInput new-username">Create Username</label>
                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter new Username" required>
                    
                    <label for="floatingInput new-password">Create Password</label>
                    <input type="password" class="form-control" id="floatingInput" placeholder="Enter new Password" required>
                    
                    <!-- <label for="select-usertype" class="select-usertype">Select a usertype</label> -->
                    <form action="">
                        <!-- <select name="usertypes" id="usertypes"> -->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select Usertype:
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="#" class="dropdown-item">Administrator</a>
                                    <a href="#" class="dropdown-item">Manager</a>
                                    <a href="#" class="dropdown-item">Supervisor</a>
                                    <a href="#" class="dropdown-item">Staff</a>
                                </div>
                            </div>
                            <!-- <option value="Administrator">Administrator</option>
                            <option value="Administrator">Manager</option>
                            <option value="Administrator">Supervisor</option>
                            <option value="Administrator">Staff</option>
                         </select> -->
                        <button type="register" class="btn btn-primary btn-register">
                        <span>Register</span>
                        </button>

                    </form>
                </form>
            </div>
        </div>

        <div class="container-current-users">
            <div class="current-users"> 
                <div class="header-current-users">
                    <span><h3>Current Users</h3></span>
                </div>
                <!-- 4 rows 1 column table for existing users -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Usertype</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td scope="row">1</td>
                            <td>maryll</td>
                            <td>test123</td>
                            <td>administrator</td>
                            <td><i class="bi bi-trash"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</body>
</html>