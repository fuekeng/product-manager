
                <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="#" >Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{route('listuser')}}">Users</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-light " href="{{route('listproduct')}}">Product</a>
                            </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" method="POST" action="{{route('logout')}}">
                                 @csrf   
                                <button type="submit" class="btn btn-primary">Logout</button>
                            </form>
                        </div>
                 </nav>