<?php
  require 'collectdata.php';
?>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>SignUp</title>
<body>
    <?php if (isset($_POST['form_submitted'])):?>
            <?php if (!isset($_POST['agree'])):?>
                <h2 ><script>alert('Your are not accept our terms of services')</script></h2>
            <h2 style="text-align: center;color: red">Please Read Carefully Our terms and conditions</script></h2>

        <?php else: ?>
            <h2 style="align-items: center;color: mediumpurple"><center>
                Thank you <?php
                    echo $_POST['username'];
                ?>
                </center></h2>

    <p style="font-family: italic;text-align: center">You have been registered as
        <?php echo $_POST['email']?>
    </p>
    <p style="text-align: center"> Go <a href="/signup.html">back</a> to the form</p>
    <?php endif; ?>
    <?php  endif; ?>

</body>
</html>