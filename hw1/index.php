<!DOCTYPE html>
<html>
    <head>
        <title>Homework 1</title>
    </head>
    <body>
        <?php
        require("User.php");
        require("Profile.php");
        
        $user1 = new Profile();
        
        $user1->setUsername("besmera");
        $user1->setFirstName("Andrew");
        $user1->setLastName("Besmer");
        $user1->setEmailAddress("besmera@winthrop.edu");
        
        $user2 = new Profile();
        
        $user2->setUsername("derkseng");
        $user2->setFirstName("Gerry");
        $user2->setLastName("Derksen");
        $user2->setEmailAddress("derkseng@winthrop.edu");
        
        $usersArray = array($user1, $user2);
        
        echo "<h1>Professors</h1>";
        foreach($usersArray as $user)
        {
            echo "<h2>" . $user->getFirstName() . " " . $user->getLastName() . "</h2>";
            echo "<ul>";
            echo "<li>". "<strong>First:</strong> " .$user->getFirstName()."</li>";
            echo "<li>". "<strong>Last:</strong> ".$user->getLastName()."</li>";
            echo "<li>". "<strong>Email:</strong> ".$user->getEmailAddress()."</li>";
            echo "</ul>";
        }
       ?> 
    </body>
</html>
