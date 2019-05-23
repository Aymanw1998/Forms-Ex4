<!DOCTYPE html>
    <html>
        <head>
            <?php
            if($_GET["mail"]=="aymanw199816@hotmail.com" && $_GET["pass"]=="209138155")
                echo "<title>Sign Up Form </title>";
            else echo "<title>ERORR</title>";
            ?>
            <!-- CSS's bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!-- JavaScripte's bootstrap -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" async></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" async></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> async</script>
    
            <!-- My CSS -->
            <?php echo '<link rel="stylesheet" href="includes/styles.css">';?>
        </head>
        <body>
               <?php
                if($_GET["mail"]=="aymanw199816@hotmail.com" && $_GET["pass"]=="209138155")
                {echo ' <h1 class="ribbon">
                            <strong class="ribbon-content">
                                <h1>Welcome to the page<br><b>Ayman Wahbani</b></h1> 
                            </strong>
                        </h1>
                        <div class="eye"></div><div class="eye"></div>';}
            else echo '<div class="wrapperphp"><h1>ERORR!!!</h1> <p>Who are you????<p></div>
                        <div class="vampire-box">
                            <div class="vampire-box__bg">
                                <span class="moon"> </span>
                                <span class="bat bat--one">
                                    <span class="bat__left-wing"> </span>
                                    <span class="bat__body"> </span>
                                    <span class="bat__right-wing"> </span>
                                </span>
                                <span class="bat bat--two">
                                    <span class="bat__left-wing"> </span>
                                    <span class="bat__body"> </span>
                                    <span class="bat__right-wing"> </span>
                                </span>
                                <span class="bat bat--three">
                                    <span class="bat__left-wing"> </span>
                                    <span class="bat__body"> </span>
                                    <span class="bat__right-wing"> </span>
                                </span>
                                <span class="bat bat--four">
                                    <span class="bat__left-wing"> </span>
                                    <span class="bat__body"> </span>
                                    <span class="bat__right-wing"> </span>
                                </span>
                                <span class="vampire">
                                    <span class="vampire__hair">
                                        <span class="hair__one"></span>
                                        <span class="hair__two"></span>
                                        <span class="hair__three"></span>
                                    </span>
                                    <span class="vampire__face">
                                        <span class="eyes eyes--left">
                                            <span class="eyes__red"> 
                                                <span class="eyes__black"></span>
                                            </span>
                                        </span>
                                        <span class="eyes eyes--right">
                                            <span class="eyes__red">
                                                <span class="eyes__black"></span>
                                            </span>
                                        </span>
                                        <span class="vampire__nose"></span>
                                        <span class="vampire__nose vampire__nose--second"> </span>
                                        <span class="vampire__mouth">
                                            <span class="lip lip--top">		
                                                    <span class="upper-lip upper-lip--left"> </span>
                                                    <span class="upper-lip upper-lip--right"> </span>
                                            </span>
                                            <span class="teeth"> 
                                                <span class="left--teeth"> </span>
                                                <span class="right--teeth"> </span>
                                            </span>	 
                                            <span class="lip lip--bottom"></span>						
                                    </span>
                                        <span class="vampire__neck"></span>
                                        <span class="vampire__neck vampire__neck--second"></span>
                                </span>
                                <span class="vampire__shoulders"> </span>
                                <span class="vampire__dress"> </span>
                                <span class="vampire__dress vampire__dress--right"> </span>
                                <span class="blood"> 
                                    <span class="blood__drop"> </span>
                                    <span class="blood__drop blood__drop--second"> </span>
                                    <span class="blood__drop blood__drop--third"> </span>
                                </span>        
                            </div>                        
                        </div>';
               ?>
        </body>
    </html>