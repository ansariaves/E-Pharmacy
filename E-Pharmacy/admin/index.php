<?php 


include('includes/header.php');
include('../middleware/adminMiddleware.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row mt-4">
            <div class="col-lg-5 col-sm-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                            <h4 class="mb-0">&#8377; 55,798</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                    </div>
                </div>
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                            <h4 class="mb-0">2,300</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">New Clients</p>
                            <h4 class="mb-0 ">1099</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3">
                        <p class="mb-0 "><span class="text-danger text-sm font-weight-bolder">-1% </span>than yesterday</p>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Sales</p>
                            <h4 class="mb-0">&#8377; 2,411,111</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>
