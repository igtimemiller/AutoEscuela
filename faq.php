<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                 include "./navs/LeftSidebar.php";
            ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <?php
                         include "./navs/topbar.php";
                     ?>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">FAQ</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <h3 class="">Preguntas Frecuentes</h3>
                                    <p class="text-muted mt-3"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                                        dignissimos rem temporibus ea inventore alias!<br/> Beatae animi nemo ea
                                        tempora, temporibus laborum facilis ut!</p>
        
                                    <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline mr-1"></i>Envíanos un Email</button>
                                    <button type="button" class="btn btn-info btn-sm mt-2 ml-1"><i class="mdi mdi-instagram mr-1"></i> Envíanos un direct</button>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
        
                        <div class="row pt-5">
                            <div class="col-lg-5 offset-lg-1">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">How many variations exist?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                            </div>
                            <!--/col-md-5 -->
        
                            <div class="col-lg-5">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">When can be used?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">License &amp; Copyright</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                            </div>
                            <!--/col-md-5-->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php
                include "./navs/footer.php";
                ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="notifications-check" checked>
                        <label class="custom-control-label" for="notifications-check">Notifications</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="api-access-check">
                        <label class="custom-control-label" for="api-access-check">API Access</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-updates-check" checked>
                        <label class="custom-control-label" for="auto-updates-check">Auto Updates</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="online-status-check" checked>
                        <label class="custom-control-label" for="online-status-check">Online Status</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-payout-check">
                        <label class="custom-control-label" for="auto-payout-check">Auto Payout</label>
                    </div>

                </div>


                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3">Recent Activity</h5>
                <hr class="mb-0" />
                <div class="pl-2 pr-2">
                    <div class="timeline-alt">
                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">5 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                <small>Dave Gamache added
                                    <span class="font-weight-bold">Admin Dashboard</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">30 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                <small>Send you message
                                    <span class="font-weight-bold">"Are you there?"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">2 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                <small>Uploaded a photo
                                    <span class="font-weight-bold">"Error.jpg"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">14 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">1 day ago</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->


        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>
