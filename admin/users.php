<?php include "../inc/header.php" ?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content"> <?php

            if(isset($_GET['do'])){
                $do = $_GET['do'];


                if($do == 'Manage'){
                    echo '
                    <div class="alert alert-outline-success shadow-sm alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-success">Success Alerts</h6>
                                <div>A simple success alert—check it out!</div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                elseif($do == 'Add'){
    
                }
                elseif($do == 'Store'){
                    
                }
                elseif($do == 'Edit'){
                    
                }
                elseif($do == 'Update'){
                    
                }
                elseif($do == 'Delete'){
                    
                }
    
                else{
                    echo '
                    <div class="alert alert-outline-danger shadow-sm alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-danger"><i class="fadeIn animated bx bx-user-x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-danger">Wrong URL</h6>
                                <div>Navigate to <a href="http://localhost/rubiksui/admin/dashboard.php">dashboard</a></div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }

            
        
        ?> </div>
</div>
<!--end page wrapper -->
<!--start overlay--> <?php include "../inc/footer.php" ?>