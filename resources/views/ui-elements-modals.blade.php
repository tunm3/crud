@extends('layout.master')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Modals</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>UI Elements</span></li>
                <li><span>Modals</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Basic</h2>
                    <p class="panel-subtitle">Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                </header>
                <div class="panel-body">

                    <!-- Modal Basic -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalBasic">Basic</a>

                    <div id="modalBasic" class="modal-block mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Icon -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalIcon">Icon</a>

                    <div id="modalIcon" class="modal-block modal-block-primary mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-question-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Center Icon -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalCenterIcon">Center Icon</a>

                    <div id="modalCenterIcon" class="modal-block modal-block-primary mfp-hide">
                        <section class="panel">
                            <div class="panel-body text-center">
                                <div class="modal-wrapper">
                                    <div class="modal-icon center">
                                        <i class="fa fa-question-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Are you sure?</h4>
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal No Title -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalNoTitle">No Title</a>

                    <div id="modalNoTitle" class="modal-block mfp-hide">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal No Footer -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalNoFooter">No Footer</a>

                    <div id="modalNoFooter" class="modal-block mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Modal Center -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalCenter">Center</a>

                    <div id="modalCenter" class="modal-block mfp-hide">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text text-center">
                                        <p>Are you sure that you want to delete this image?</p>
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Modal Bootstrap -->
                    <a class="mb-xs mt-xs mr-xs btn btn-default" data-toggle="modal" data-target="#modalBootstrap">Bootstrap</a>

                    <div class="modal fade" id="modalBootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure that you want to delete this image?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Confirm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Contextual</h2>
                    <p class="panel-subtitle">You can use any of the avaible contextual classes to create a styled modal.</p>
                </header>
                <div class="panel-body">

                    <!-- Modal Primary -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalPrimary">Primary</a>

                    <div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-question-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Primary</h4>
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Success -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modalSuccess">Success</a>

                    <div id="modalSuccess" class="modal-block modal-block-success mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Success!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Success</h4>
                                        <p>This is a successfull message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-success modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Info -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-info" href="#modalInfo">Info</a>

                    <div id="modalInfo" class="modal-block modal-block-info mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Information</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-info-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Info</h4>
                                        <p>This is a information message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-info modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Warning -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-warning" href="#modalWarning">Warning</a>

                    <div id="modalWarning" class="modal-block modal-block-warning mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Warning!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-warning"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Warning</h4>
                                        <p>This is a warning message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-warning modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Danger -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalDanger">Danger</a>

                    <div id="modalDanger" class="modal-block modal-block-danger mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Danger!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-times-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Danger</h4>
                                        <p>This is a danger message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-danger modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Header Color</h2>
                    <p class="panel-subtitle">Colored Header Modals</p>
                </header>
                <div class="panel-body">

                    <!-- Modal Primary -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalHeaderColorPrimary">Primary</a>

                    <div id="modalHeaderColorPrimary" class="modal-block modal-header-color modal-block-primary mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-question-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Primary</h4>
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Success -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modalHeaderColorSuccess">Success</a>

                    <div id="modalHeaderColorSuccess" class="modal-block modal-header-color modal-block-success mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Success!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Success</h4>
                                        <p>This is a successfull message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-success modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Info -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-info" href="#modalHeaderColorInfo">Info</a>

                    <div id="modalHeaderColorInfo" class="modal-block modal-header-color modal-block-info mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Information</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-info-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Info</h4>
                                        <p>This is a information message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-info modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Warning -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-warning" href="#modalHeaderColorWarning">Warning</a>

                    <div id="modalHeaderColorWarning" class="modal-block modal-header-color modal-block-warning mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Warning!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-warning"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Warning</h4>
                                        <p>This is a warning message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-warning modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Danger -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalHeaderColorDanger">Danger</a>

                    <div id="modalHeaderColorDanger" class="modal-block modal-header-color modal-block-danger mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Danger!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-times-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Danger</h4>
                                        <p>This is a danger message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-danger modal-dismiss">OK</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Full Color</h2>
                    <p class="panel-subtitle">Full Colored Modals</p>
                </header>
                <div class="panel-body">

                    <!-- Modal Primary -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalFullColorPrimary">Primary</a>

                    <div id="modalFullColorPrimary" class="modal-block modal-full-color modal-block-primary mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-question-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Primary</h4>
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Success -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modalFullColorSuccess">Success</a>

                    <div id="modalFullColorSuccess" class="modal-block modal-full-color modal-block-success mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Success!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Success</h4>
                                        <p>This is a successfull message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Info -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-info" href="#modalFullColorInfo">Info</a>

                    <div id="modalFullColorInfo" class="modal-block modal-full-color modal-block-info mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Information</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-info-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Info</h4>
                                        <p>This is a information message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Warning -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-warning" href="#modalFullColorWarning">Warning</a>

                    <div id="modalFullColorWarning" class="modal-block modal-full-color modal-block-warning mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Warning!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-warning"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Warning</h4>
                                        <p>This is a warning message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Danger -->
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalFullColorDanger">Danger</a>

                    <div id="modalFullColorDanger" class="modal-block modal-full-color modal-block-danger mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Danger!</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-times-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <h4>Danger</h4>
                                        <p>This is a danger message.</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Sizes</h2>
                    <p class="panel-subtitle">Set the size of the modal using a CSS class.</p>
                </header>
                <div class="panel-body">

                    <!-- Modal XS -->
                    <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-default" href="#modalXS">Extra Small</a>

                    <div id="modalXS" class="modal-block modal-block-xs mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal SM -->
                    <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-default" href="#modalSM">Small</a>

                    <div id="modalSM" class="modal-block modal-block-sm mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal MD -->
                    <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-default" href="#modalMD">Medium</a>

                    <div id="modalMD" class="modal-block modal-block-md mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal LG -->
                    <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-default" href="#modalLG">Large</a>

                    <div id="modalLG" class="modal-block modal-block-lg mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                    <!-- Modal Full -->
                    <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-default" href="#modalFull">Full</a>

                    <div id="modalFull" class="modal-block modal-block-full mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Modal with CSS animation</h2>
                    <p class="panel-subtitle">Animations are added with simple CSS transitions, you can make them look however you wish.</p>
                </header>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default" href="#modalAnim">Open with fade-zoom animation</a>
                        </div>
                        <div class="col-md-6">
                            <a class="mb-xs mt-xs mr-xs modal-with-move-anim btn btn-default" href="#modalAnim">Open with fade-slide animation</a>
                        </div>
                    </div>

                    <!-- Modal Animation -->
                    <div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Are you sure?</h2>
                            </header>
                            <div class="panel-body">
                                <div class="modal-wrapper">
                                    <div class="modal-icon">
                                        <i class="fa fa-question-circle"></i>
                                    </div>
                                    <div class="modal-text">
                                        <p>Are you sure that you want to delete this image?</p>
                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Confirm</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Form</h2>
                    <p class="panel-subtitle">Modal with a form and buttons.</p>
                </header>
                <div class="panel-body">
                    <a class="modal-with-form btn btn-default" href="#modalForm">Open Form</a>

                    <!-- Modal Form -->
                    <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Registration Form</h2>
                            </header>
                            <div class="panel-body">
                                <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                    <div class="form-group mt-lg">
                                        <label class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" placeholder="Type your name..." required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" placeholder="Type your email..." required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">URL</label>
                                        <div class="col-sm-9">
                                            <input type="url" name="url" class="form-control" placeholder="Type an URL..." />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Comment</label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control" placeholder="Type your comment..." required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary modal-confirm">Submit</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>

                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Ajax</h2>
                    <p class="panel-subtitle">You have full control of what is displayed in modal, align it to any side via CSS, enable or disable scroll on right side of window.</p>
                </header>
                <div class="panel-body">
                    <a class="simple-ajax-modal btn btn-default" href="assets/ajax/ui-elements-modals-ajax.html">Load Ajax Content</a>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
@endsection
