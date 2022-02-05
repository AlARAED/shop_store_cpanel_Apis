
<!-- BEGIN DEFAULT SIDEBAR -->
<div class="ks-column ks-sidebar ks-info">
    <div class="ks-wrapper">
        <section>
            {{--<h5 class="ks-header">Main</h5>--}}
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-item dropdown">
                    <a class="nav-link "  href="{{ url('storepanel/index') }}" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la la-dashboard"></span>
                        <span>الرئيسية</span>
                    </a>

                </li>






                <li class="nav-item dropdown">

                    <a class="nav-link "  href="{{ url('storepanel/addsubcategory') }}" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la la-flask"></span>
                        <span> انشاء تصنيف فرعى</span>
                    </a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link "  href="{{ url('storepanel/addproduct') }}" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la la-puzzle-piece"></span>
                        <span> انشاء منتج</span>
                    </a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link "  href="{{ url('storepanel/allproduct') }}" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la la-cubes"></span>
                        <span> المنتجات</span>
                    </a>


</li>


                <li class="nav-item dropdown">

                    <a class="nav-link "  href="{{ url('storepanel/addsize') }}" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la la-puzzle-piece"><span class="badge badge-pill badge-pink ks-label">2</span></span>
                        <span> الاحجام</span>
                    </a>


                </li>





            </ul>
        </section>




        <!------------------->
        {{--<section>--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link "  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-flask"></span>--}}
                        {{--<span>انشاء تصنيف</span>--}}
                    {{--</a>--}}

                {{--</div>--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-flask"></span>--}}
                        {{--<span>Projects</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="projects-kanban-board.html">Kanban Board</a>--}}
                        {{--<a class="dropdown-item" href="projects-grid-board.html">Grid Board</a>--}}
                        {{--<a class="dropdown-item" href="projects-tasks.html">Tasks</a>--}}
                        {{--<a class="dropdown-item" href="projects-task.html">Task</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-envelope-o"></span>--}}
                        {{--<span>Mail</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="mail-empty.html">Mail Empty</a>--}}
                        {{--<a class="dropdown-item" href="mail-view.html">Mail View</a>--}}
                        {{--<a class="dropdown-item" href="mail-create.html">Mail Create</a>--}}
                        {{--<a class="dropdown-item" href="mail-compact.html">Mail Compact</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-ticket"></span>--}}
                        {{--<span>Tickets</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="tickets-empty.html">Empty</a>--}}
                        {{--<a class="dropdown-item" href="tickets-list.html">List</a>--}}
                        {{--<a class="dropdown-item" href="tickets-create.html">Create</a>--}}
                        {{--<a class="dropdown-item" href="tickets-view.html">View</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-comments-o"></span>--}}
                        {{--<span>Messenger</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="messenger.html">Default</a>--}}
                        {{--<a class="dropdown-item" href="messenger-group.html">Group</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-file-archive-o"></span>--}}
                        {{--<span>File Manager</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<div class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<span>Grid</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="dropdown-item" href="filemanager-grid.html">Default</a>--}}
                                {{--<a class="dropdown-item" href="filemanager-grid-selected-items.html">Selected Items</a>--}}
                                {{--<a class="dropdown-item" href="filemanager-grid-image.html">Image</a>--}}
                                {{--<a class="dropdown-item" href="filemanager-grid-audio.html">Audio</a>--}}
                                {{--<a class="dropdown-item" href="filemanager-grid-recent.html">Recent</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<span>List</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="dropdown-item" href="filemanager-list.html">Default</a>--}}
                                {{--<a class="dropdown-item" href="filemanager-list-selected-items.html">Selected Items</a>--}}
                                {{--<a class="dropdown-item" href="filemanager-list-recent.html">Recent</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-eye"></span>--}}
                        {{--<span>Document Viewer</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="document-viewer-image.html">Image Viewer</a>--}}
                        {{--<a class="dropdown-item" href="document-viewer-pdf.html">Pdf Viewer</a>--}}
                        {{--<a class="dropdown-item" href="document-viewer-presentation.html">Presentation Viewer</a>--}}
                        {{--<a class="dropdown-item" href="document-viewer-audio.html">Audio Viewer</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="music-app.html">--}}
                        {{--<span class="ks-icon la la-music"></span>--}}
                        {{--<span>Music</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="calendar.html">--}}
                        {{--<span class="ks-icon la la-calendar-o"></span>--}}
                        {{--<span>Calendar</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</section>--}}

        {{--<section>--}}
            {{--<h5 class="ks-header">Interface</h5>--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-toggle-off"></span>--}}
                        {{--<span>Form</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="form-basic-inputs.html">Basic Inputs</a>--}}
                        {{--<a class="dropdown-item" href="form-advanced-inputs.html">Extended Inputs</a>--}}
                        {{--<a class="dropdown-item" href="form-buttons.html">Buttons</a>--}}
                        {{--<a class="dropdown-item" href="form-validation.html">Validation</a>--}}
                        {{--<a class="dropdown-item" href="form-touchspin.html">Touchspin</a>--}}
                        {{--<a class="dropdown-item" href="form-flex-labels.html">Flex Labels</a>--}}
                        {{--<a class="dropdown-item" href="form-mask-input.html">Mask Input</a>--}}
                        {{--<a class="dropdown-item" href="form-autocomplete-and-tags.html">Autocomplete &amp; Tags</a>--}}
                        {{--<div class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<span>Steps</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="dropdown-item" href="form-steps-column.html">Column Steps</a>--}}
                                {{--<a class="dropdown-item" href="form-steps-progress.html">Progress Steps</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-desktop"></span>--}}
                        {{--<span>UI Kit</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="uikit-bootstrap-ui.html">Bootstrap UI</a>--}}
                        {{--<a class="dropdown-item" href="uikit-colors.html">Colors</a>--}}
                        {{--<a class="dropdown-item" href="uikit-typography.html">Typography</a>--}}
                        {{--<a class="dropdown-item" href="uikit-cards.html">Cards</a>--}}
                        {{--<a class="dropdown-item" href="uikit-panels.html">Panels</a>--}}
                        {{--<a class="dropdown-item" href="uikit-tables.html">Tables</a>--}}
                        {{--<a class="dropdown-item" href="uikit-tabs.html">Tabs</a>--}}
                        {{--<a class="dropdown-item" href="uikit-default-alerts.html">Alerts</a>--}}
                        {{--<a class="dropdown-item" href="uikit-pagination.html">Pagination</a>--}}
                        {{--<a class="dropdown-item" href="uikit-modal.html">Modal</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-server"></span>--}}
                        {{--<span>Components</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="components-file-upload.html">File Upload</a>--}}
                        {{--<div class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<span>Select</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="dropdown-item" href="components-select-select2.html">Select2</a>--}}
                                {{--<a class="dropdown-item" href="components-select-multi.html">Multi</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<span>Wysiwyg Editors</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="dropdown-item" href="components-wysiwyg-editors-bootstrap-markdown-editor.html">Bootstrap Markdown</a>--}}
                                {{--<a class="dropdown-item" href="components-wysiwyg-editors-simplemde-markdown-editor.html">SimpleMDE Markdown</a>--}}
                                {{--<a class="dropdown-item" href="components-wysiwyg-editors-trumbowyg-editor.html">Trumbowyg Editor</a>--}}
                                {{--<a class="dropdown-item" href="components-wysiwyg-editors-summernote-editor.html">Summernote Editor</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a class="dropdown-item" href="components-alerts-and-confirm.html">Alerts &amp; Confirm</a>--}}
                        {{--<a class="dropdown-item" href="components-sweetalert.html">SweetAlert</a>--}}
                        {{--<a class="dropdown-item" href="components-bootstrap-notify.html">Bootstrap Notify</a>--}}
                        {{--<div class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<span>DatePicker</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="dropdown-item" href="components-datepicker-flatpickr.html">Flatpickr</a>--}}
                                {{--<a class="dropdown-item" href="components-datepicker-bootstrap-date-range-picker.html">Range DatePicker</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a class="dropdown-item" href="components-ion-range-slider-flat-skin-basic.html">Ion Range Slider</a>--}}
                        {{--<a class="dropdown-item" href="components-nestable.html">Nestable</a>--}}
                        {{--<a class="dropdown-item" href="components-colorpicker.html">Color Picker</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</section>--}}

        {{--<section>--}}
            {{--<h5 class="ks-header">Datatables</h5>--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="datatables-datatables-net.html">--}}
                        {{--<span class="ks-icon la la-table"></span>--}}
                        {{--<span>DataTables.net</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="datatables-bootstrap-table.html">--}}
                        {{--<span class="ks-icon la la-th"></span>--}}
                        {{--<span>Bootstrap Table</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</section>--}}

        {{--<section>--}}
            {{--<h5 class="ks-header">Other</h5>--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-file-text-o"></span>--}}
                        {{--<span>Pages</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="pages-blank.html">Blank</a>--}}
                        {{--<a class="dropdown-item" href="pages-error404.html">Error 404</a>--}}
                        {{--<a class="dropdown-item" href="pages-error500.html">Error 500</a>--}}
                        {{--<a class="dropdown-item" href="pages-contacts.html">Contacts</a>--}}
                        {{--<a class="dropdown-item" href="pages-login.html" target="_blank">Login</a>--}}
                        {{--<a class="dropdown-item" href="pages-signup.html" target="_blank">Sign Up</a>--}}
                        {{--<a class="dropdown-item" href="pages-forgot-password.html" target="_blank">Forgot Password</a>--}}
                        {{--<a class="dropdown-item" href="pages-locked-account.html" target="_blank">Locked Account</a>--}}
                        {{--<a class="dropdown-item" href="pages-confirmation.html" target="_blank">Confirmation</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-money"></span>--}}
                        {{--<span>Payment</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="payment-billing.html">Billing</a>--}}
                        {{--<a class="dropdown-item" href="payment-invoices.html">Invoices</a>--}}
                        {{--<a class="dropdown-item" href="payment-order.html">Order</a>--}}
                        {{--<a class="dropdown-item" href="payment-orders-history.html">Orders History</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="ks-icon la la-usd"></span>--}}
                        {{--<span>Pricing</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="pricing-plans.html">Plans</a>--}}
                        {{--<a class="dropdown-item" href="pricing-subscriptions.html">Subscriptions</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="email-templates.html">--}}
                        {{--<span class="ks-icon la la-envelope-o"></span>--}}
                        {{--<span>Email Templates</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</section>--}}

        {{--<section>--}}
            {{--<h5 class="ks-header">Help</h5>--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="documentation.html">--}}
                        {{--<span class="ks-icon la la-book"></span>--}}
                        {{--<span>Documentation</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link"  href="faq.html">--}}
                        {{--<span class="ks-icon la la-question-circle"></span>--}}
                        {{--<span>FAQ</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</section>--}}


        {{--<div class="ks-sidebar-extras-block">--}}
            {{--<div class="ks-extras-block-item">--}}
                {{--<div class="ks-name">Monthly Badwidth Transfer</div>--}}
                {{--<div class="ks-progress">--}}
                    {{--<div class="progress ks-progress-xs">--}}
                        {{--<div class="progress-bar bg-info" role="progressbar" style="width: 84%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="ks-description">--}}
                    {{--<span class="ks-amount">84%</span>--}}
                    {{--<span class="ks-text">(8 400 MB of 10 000)</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="ks-extras-block-item">--}}
                {{--<div class="ks-name">Disk Space Usage</div>--}}
                {{--<div class="ks-progress">--}}
                    {{--<div class="progress ks-progress-xs">--}}
                        {{--<div class="progress-bar bg-info" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="ks-description">--}}
                    {{--<span class="ks-amount">36%</span>--}}
                    {{--<span class="ks-text">(3 600 MB of 10 000)</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="ks-sidebar-copyright">© 2016 Kosmo. All right reserved</div>--}}
        {{--</div>  --}}
        <!----------------->
    </div>
</div>
<!-- END DEFAULT SIDEBAR -->