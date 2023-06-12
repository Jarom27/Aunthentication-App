<header class="container w-100 d-flex justify-content-between align-items-center">
    <div>
        <img src="../../public/devchallenges.svg">
    </div>
    <nav class="dropdown">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $user->getName() == "" ? $user->getEmail() : $user->getName() ?>
        </button>
        <ul class="dropdown-menu">
            <li class="dropdown-item"><a class="text-decoration-none" href=""><img src="../../public/icons/account-icon.svg" class="icon">My Profile</a></li>
            <li class="dropdown-item"><a class="text-decoration-none" href=""><img src="../../public/icons/group-icon.svg" class="icon"> Chat</a></li>
            <li class="dropdown-item">
                <form action=<?php echo "/profile/".$user->getId()?> method="post">
                    <button type="submit" class="p-0 btn btn-link text-decoration-none" name="logout">
                        <img src="../../public/icons/logout-icon.svg" class="icon">Logout</button>
                </form>
                
            </li>
        </ul>
        
    </nav>
</header>