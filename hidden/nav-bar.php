<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    echo "<nav>
    <div class='nav-btn' onclick='openNav()'></div>
    <a href='#'>
        <div class='nav-headrer-desktop'>
            <div class='nav-logo'></div>
            <div class='nav-name'>
                <h1>CESAR’S PLUMBING LLC</h1>
                <p class='nav-under-text'>
                    LICENSED, BONDED AND INSURED &nbsp; CCB#230832
                </p>
            </div>
        </div>
    </a>
    <div class='nav-menu-desktop'>
        <div class='desktop-nav-tabs'>
            <a href='#'>
                <p>Services</p>
            </a>
            <a href='#'>
                <p>Contact</p>
            </a>
            <a href='#'>
                <p>Testimonials</p>
            </a>
        </div>
        <div class='nav-menu-desktop-btns'>
            <p class='phone-nbr'>
                <img src='/images/svg/phone.svg' alt='phone' width='15vw'>
                <a href='tel:+15033388032'> <span>1 (503) 338 8032</span> </a>
            </p>
            <a href='#'>
                <div class='call-now-btn'>
                    <p>Call now</p>
                </div>
            </a>
            <a href='#'>
                <div class='emergency-btn'>
                    <p>EMERGENCY</p>
                </div>
            </a>
        </div>
    </div>
</nav>
<div class='menu' id='menu'>
    <div class='menu-1'>
        <div class='menu-top'></div>
        <div class='menu-main'>
            <a href='#'>
                <p>Services</p>
            </a>
            <a href='#'>
                <p>Contact</p>
            </a>
            <a href='#'>
                <p>Testimonials</p>
            </a>
        </div>
        <div class='menu-footer'>
            <p class='phone-nbr'>
                <img src='/images/svg/phone.svg' alt='phone' width='15vw'>
                <a href='tel:+15033388032'> <span>1 (503) 338 8032</span> </a>
            </p>
            <a href='#'>
                <div class='call-now-btn'>
                    <p>Call now</p>
                </div>
            </a>
            <a href='#'>
                <div class='emergency-btn'>
                    <p>EMERGENCY</p>
                </div>
            </a>
        </div>
    </div>
    <div class='menu-2' onclick='closeNav()'></div>
</div>";
    ?>

</body>

</html>