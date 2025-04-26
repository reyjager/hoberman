
<style>
    /* body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #0d6efd;
      padding: 10px 20px;
      color: white;
    } */
    /* .left, .center, .right {
      display: flex;
      align-items: center;
    } */
    /* .close-icon {
      font-size: 24px;
      cursor: pointer;
    } */
    /* .search-bar input {
      padding: 5px;
      border-radius: 4px;
      border: none;
      outline: none;
    } */
    /* .profile {
      position: relative;
      margin-left: 20px;
      cursor: pointer;
    } */
    .dropdown {
      display: none;
      position: absolute;
      top: 40px;
      right: 0;
      background-color: white;
      color: black;
      min-width: 120px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 4px;
      overflow: hidden;
    }
    .dropdown a {
      padding: 10px;
      display: block;
      text-decoration: none;
      color: black;
    }
    .dropdown a:hover {
      background-color: #ddd;
    }
    .profile:hover .dropdown {
      display: block;
    }
  </style>

<header class="mainHeader">

    <div class="header-left">
        <i class="fas fa-bars header__menu"></i>
    <div class="header__search">
      <input class="header__input" placeholder="Search..." />
    </div>
    </div>
    
    <div class="header-right">
        <div class="header__avatar">
            <div class="dropdown">
              <ul class="dropdown__list">
                <li class="dropdown__list-item">
                  <span class="dropdown__icon"><i class="far fa-user"></i></span>
                  <span class="dropdown__title">my profile</span>
                </li>
                <li class="dropdown__list-item">
                  <span class="dropdown__icon"><i class="fas fa-clipboard-list"></i></span>
                  <span class="dropdown__title">my account</span>
                </li>
                <li class="dropdown__list-item">
                  <span class="dropdown__icon"><i class="fas fa-sign-out-alt"></i></span>
                  <span class="dropdown__title">log out</span>
                </li>
              </ul>
            </div>
          </div>
    </div>
  </header>