<!-- Link to Material Symbols Outlined for icon styling -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<!-- Inline CSS for search bar styling -->
<style>
    #search {
        width: max-content;
        display: flex;
        align-items: center;
        padding: 14px;
        border-radius: 28px;
        background: #e8e8e8;
        margin-right: 10px;
        transition: width 0.2s ease; 
    }
    #search-input {
        font-size: 16px;
        font-family: 'Lexend', sans-serif;
        color: #333333;
        margin-left: 14px;
        outline: none;
        border: none;
        background: transparent;
        width: 100%;
    }
</style>

<!-- Navbar for website navigation -->
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient" style="background-color: rgba(0, 0, 139, 0.8);">
        <div class="container">
            <a class="navbar-brand" href="home.php">CarVilla</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right: 15px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="Home" href="indexuser.php" style="padding-left: 15px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="LiveNews" href="Tables.php" style="padding-left: 15px;">Manage Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="Sport" href="AddCar.php" style="padding-left: 15px;">Add a New Car</a>
                    </li>
                </ul>
            </div>
            <!-- Dropdown menu for user actions -->
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgb(123, 104, 238);">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="login.php">LogOut</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="aboutUs.php">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
