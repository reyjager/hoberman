
    <div class="mainHeader__left">
        <i class="fas fa-bars"></i>
        <div class="mainHeader__search">
            <input class="mainHeader__search__input" placeholder="Search..." />
        </div>
    </div>

    <div class="mainHeader__right">
        <div class="mainHeader__avatar"></div>
        <div class="dropdown">
            <i class="fas fa-caret-down"></i>
            <ul>
                <li class="dropdown-header">
                    <h6>Name</h6>
                    <span>Web/Mobile Developer</span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="dropdown-item-hover">
                    <a class="dropdown-item d-flex align-items-center" href="">
                        <i class="bi bi-person pe-2"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="dropdown-item-hover">
                    <a class="dropdown-item d-flex align-items-center" href="">
                        <i class="bi bi-gear pe-2"></i>
                        <span>Account Settings</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="dropdown-item-hover">
                    <form action="" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-box-arrow-right pe-2"></i>
                            <span>Sign Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
