<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-home-cog"></i>
        </span>
        <span class="nav-link-title">
            Setting
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <?php menu_a("School", "school"); ?>
                <?php menu_a("Education year & semester", "education-year-semester"); ?>
                <div class="dropend">
                    <a class="dropdown-item dropdown-toggle"  data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" role="button" aria-expanded="false">
                        Permission
                    </a>
                    <div class="dropdown-menu">
                        <?php menu_a("Menu", "Menu"); ?>
                        <?php menu_a("Users", "users"); ?>
                    </div>
                    <?php menu_a("Class level", "/"); ?>
                    <?php menu_a("Rooms", "/"); ?>
                    <?php menu_a("Homeroom teacher", "/"); ?>
                    <?php menu_a("Subject teacher", "/"); ?>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-books"></i>
        </span>
        <span class="nav-link-title">
            Course
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <?php menu_a("Syllabus", "/"); ?>
                <?php menu_a("Course", "/"); ?>
                <?php menu_a("Course register", "/"); ?>
            </div>
        </div>
    </div>
</li>
<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-users-group"></i>
        </span>
        <span class="nav-link-title">
            Personnel
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <?php menu_a("Personnel", "personnel"); ?>
            </div>
        </div>
    </div>
</li>
<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-school"></i>
        </span>
        <span class="nav-link-title">
            Student
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <?php menu_a("Student information", "student"); ?>
                <?php menu_a("Student promote", "/"); ?>
                <?php menu_a("Student report", "/"); ?>
            </div>
        </div>
    </div>
</li>
<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-table-options"></i>
        </span>
        <span class="nav-link-title">
            Timetable
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <?php menu_a("Timetable config", "/"); ?>
                <?php menu_a("Timetable setting", "/"); ?>
            </div>
        </div>
    </div>
</li>