<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"> <img src="{{ asset('/assets/images/logo/mysemia1.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <router-link class="nav-link active" aria-current="page" to="/">Home</router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Why Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rooms & Suites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Enjoy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities & Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Photo Gallery</a>
                </li>
                <li class="nav-item" v-if="user != null">
                    <router-link class="nav-link" to="find-service">Find Service</router-link>
                </li>
            </ul>
            <ul class="navbar-nav  mb-2 mb-lg-0 nav-right">
                <li class="nav-item" v-if="user == null">
                    <router-link class="nav-link" to="/signup">Sign Up</router-link>
                </li>
                <li class="nav-item" v-if="user == null">
                    <router-link class="nav-link" to="/signin">Login</router-link>
                </li>
                 <li class="nav-item dropdown" v-if="user != null">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img style="width:50px;height:50px;" :src="url+'/uploads/user/'+user.user.photo" alt="">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><router-link class="dropdown-item" to="#" @click.native="signOut()">Logout</router-link></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>