<?php include('parts/menu.php'); ?>


        <!--Main Section Start-->
        <div class="main-content ">
            <div class="wrapper ">
                <h1>Manage Admin</h1>
                <br />
                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];//Display the session message
                        unset($_SESSION['add']);//removing session message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }
                
                ?>

                <br />
                <br />
                <br />

                <!--Button to add admin-->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br />
                <br />
                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>UserName</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                        //querry to Get all Admins
                        $sql="SELECT * FROM admin";
                        //Execute the querry
                        $res=mysqli_query($conn, $sql);

                        //check whether the query is executed or not
                        if($res==TRUE)
                        {
                            //Count rows check whether we have data in database or not
                            $count = mysqli_num_rows($res);//function to get all the rows in database

                            $AN=1;//Create a variable and Assign the value



                            //Check the num_of rows
                            if($count > 0)
                            {
                                //We have data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //Using while loop to get the all data from database
                                    //And while loop will run as long as we have data in database

                                    //Get individual data
                                    $ID=$rows['ID'];
                                    $Name=$rows['Name'];
                                    $UserName=$rows['UserName'];

                                    //Display the value in our table
                                ?>

                                <tr>
                                    <td><?php echo $AN++; ?>.</td>
                                    <td><?php echo $Name; ?></td>
                                    <td><?php echo $UserName; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-password.php?ID=<?php echo $ID; ?>" class="btn-pri">Change Password</a>
                                        <a href="<?php echo SITEURL; ?>admin/update-admin.php?ID=<?php echo $ID; ?>" class="btn-secondary">Update Admin</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-admin.php?ID=<?php echo $ID; ?>" class="btn-trinary">Delete Admin</a>
                                    </td>
                                 </tr>

                                <?php
                                }
                            }
                            else
                            {
                                //we do not have data in database
                            }
                        }
                    ?>

                    
                </table>
                
                
                
            </div>

        </div>
        <!--Main Section End-->

        <?php include('parts/footer.php'); ?>