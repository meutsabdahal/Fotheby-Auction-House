<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <?php
            foreach ($categories as $category) {
        ?>
                <li class="nav-item">
                    <a class="nav-link" href="productByCategory?cId=<?php echo $category['categoryId'];?>"><?php echo $category['label']; ?></a>
                </li>
                
        <?php
            }
        ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <a href="signIn"><button class="btn btn-info ml-3">SignIn/SignUp</button></a>

</nav>