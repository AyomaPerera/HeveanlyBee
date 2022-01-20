<?php include('parts/menu.php'); ?>




        <!--Main Section Start-->
        <div class="main-content ">
            <div class="wrapper ">
                <h1>Dashboard</h1>

                <br><br>


                <?php
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>

                <br><br>


                <div class="Col text-center">
                    <h1>Main</h1>
                    <br></br>
                    services
                </div>

                <div class="Col text-center">
                    <h1>Main</h1>
                    <br></br>
                    services
                </div>

                <div class="clearfix"></div>

                
            </div>

        </div>
        <!--Main Section End-->

        <?php include('parts/footer.php'); ?>