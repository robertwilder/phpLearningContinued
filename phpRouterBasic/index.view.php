<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href ="/about.php">About Page</a> </li>

            <li><a href ="/contact.php">Contact Page</a></li>

<!-- This method is only really useful for simply static pages but it can be an effective method in certain circumstances.  -->

        </ul>
    
    </nav>


<ul>
    <?php foreach ($tasks as $task) : ?>

            <li>
                <?php if ($task->completed) : ?>
                    
                    <!-- this is ment to have a strike out in it but it is not obsolite and need to find an alternative method -->
                    <!-- there is also an else method  -->

                <?php endif; ?>

                    <?= $task->description; ?>

                <?php if ($task->completed) : ?>

                    <!-- this is ment to have a strike out in it but it is not obsolite and need to find an alternative method -->

                <?php endif; ?>

            
            </li>

    <?php endforeach; ?>

</ul>
    
</body>
</html>