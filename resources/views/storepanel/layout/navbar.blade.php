<nav class="nav navbar-nav">
    <!-- BEGIN NAVBAR MENU -->
    <div class="ks-navbar-menu">


        <div class="nav-item nav-link ks-btn-action">
            <a class="btn btn-info btn-live" href="#.">  <i>
   آخر دخول:  {{ Auth::User()->last_login_at  }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18">
                       sdfdsfdsfds <g fill="#FFFFFF" fill-rule="evenodd">
                            fgfdgd
                            <ellipse cx="12" cy="8.705" rx="3" ry="3"/>
                            <path id="on-air-out" d="M3.51471863.219669914C-1.17157288 4.90596141-1.17157288 12.5039412 3.51471863 17.1902327 3.80761184 17.4831259 4.28248558 17.4831259 4.5753788 17.1902327 4.86827202 16.8973394 4.86827202 16.4224657 4.5753788 16.1295725.474873734 12.0290674.474873734 5.38083515 4.5753788 1.28033009 4.86827202.987436867 4.86827202.512563133 4.5753788.219669914 4.28248558-.0732233047 3.80761184-.0732233047 3.51471863.219669914zM20.4852814 17.1902327C25.1715729 12.5039412 25.1715729 4.90596141 20.4852814.219669914 20.1923882-.0732233047 19.7175144-.0732233047 19.4246212.219669914 19.131728.512563133 19.131728.987436867 19.4246212 1.28033009 23.5251263 5.38083515 23.5251263 12.0290674 19.4246212 16.1295725 19.131728 16.4224657 19.131728 16.8973394 19.4246212 17.1902327 19.7175144 17.4831259 20.1923882 17.4831259 20.4852814 17.1902327z"/>
                            <path id="on-air-in" d="M17.3033009 14.0082521C18.7217837 12.5897693 19.4928584 10.6983839 19.4999509 8.73215792 19.507111 6.74721082 18.7352286 4.8335782 17.3033009 3.40165043 17.0104076 3.10875721 16.5355339 3.10875721 16.2426407 3.40165043 15.9497475 3.69454365 15.9497475 4.16941738 16.2426407 4.4623106 17.3890249 5.6086948 18.0056933 7.13752465 17.9999607 8.72674718 17.9942823 10.30094 17.3782748 11.8119579 16.2426407 12.947592 15.9497475 13.2404852 15.9497475 13.7153589 16.2426407 14.0082521 16.5355339 14.3011454 17.0104076 14.3011454 17.3033009 14.0082521zM6.69669914 3.40165043C3.76776695 6.33058262 3.76776695 11.07932 6.69669914 14.0082521 6.98959236 14.3011454 7.46446609 14.3011454 7.75735931 14.0082521 8.05025253 13.7153589 8.05025253 13.2404852 7.75735931 12.947592 5.41421356 10.6044462 5.41421356 6.80545635 7.75735931 4.4623106 8.05025253 4.16941738 8.05025253 3.69454365 7.75735931 3.40165043 7.46446609 3.10875721 6.98959236 3.10875721 6.69669914 3.40165043z"/>
                        </g>
                    </svg>

                </i> <span> </span> </a>
        </div>
    </div>
    <!-- END NAVBAR MENU -->

    <!-- BEGIN NAVBAR ACTIONS -->
    <div class="ks-navbar-actions">
        <!-- BEGIN NAVBAR ACTION BUTTON -->
        <div class="nav-item nav-link btn-action-block">
            <button class="btn btn-danger ks-izi-modal-trigger" data-target="#ks-izi-modal-danger">
                <span class="ks-action"><i style="font-size: 20px" class="ks-icon la la-fire"></i> </span>
            </button>
        </div>
        <!-- END NAVBAR ACTION BUTTON -->

        <!-- BEGIN NAVBAR MESSAGES -->
        <div class="nav-item dropdown ks-messages">

            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Preview">
                <section class="ks-tabs-actions">
                    <a href="#"><i class="la la-plus ks-icon"></i></a>
                    <a href="#"><i class="la la-search ks-icon"></i></a>
                </section>
                <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-toggle="tab" data-target="#ks-navbar-messages-inbox" role="tab">Inbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-sent" role="tab">Sent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-archive" role="tab">Archive</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane ks-messages-tab active" id="ks-navbar-messages-inbox" role="tabpanel">
                        <div class="ks-wrapper ks-scrollable">
                            <a href="#" class="ks-message">
                                <div class="ks-avatar ks-online">
                                    <img src="{{ asset('uploads/' .Auth::User()->image) }}" width="36" height="36">
                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">Emily Carter</div>
                                    <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                    <div class="ks-datetime">1 minute ago</div>
                                </div>
                            </a>
                            <a href="#" class="ks-message">

                                <div class="ks-avatar ks-online">
                                    <img src="{{ asset('uploads/' .Auth::User()->image) }}" width="36" height="36">

                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">Emily Carter</div>
                                    <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                    <div class="ks-datetime">1 minute ago</div>
                                </div>
                            </a>
                            <a href="#" class="ks-message">
                                <div class="ks-avatar ks-offline">
                                    <img src="{{ asset('uploads/' .Auth::User()->image) }}" width="36" height="36">
                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">Emily Carter</div>
                                    <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                    <div class="ks-datetime">1 minute ago</div>
                                </div>
                            </a>
                            <a href="#" class="ks-message">
                                <div class="ks-avatar ks-offline">
                                    <img src="{{ asset('uploads/' .Auth::User()->image) }}" width="36" height="36">
                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">Emily Carter</div>
                                    <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                    <div class="ks-datetime">1 minute ago</div>
                                </div>
                            </a>
                        </div>
                        <div class="ks-view-all">
                            <a href="#">View all</a>
                        </div>
                    </div>
                    <div class="tab-pane ks-empty" id="ks-navbar-messages-sent" role="tabpanel">
                        There are no messages.
                    </div>
                    <div class="tab-pane ks-empty" id="ks-navbar-messages-archive" role="tabpanel">
                        There are no messages.
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAVBAR MESSAGES -->

        <!-- BEGIN NAVBAR NOTIFICATIONS -->
        <div class="nav-item dropdown ks-notifications">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-bell ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">7</span>
                        </span>
                <span class="ks-text">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Preview">
                <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-notifications-all" role="tab">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-activity" role="tab">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-comments" role="tab">Comments</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane ks-notifications-tab active" id="navbar-notifications-all" role="tabpanel">
                        <div class="ks-wrapper ks-scrollable">
                            <a href="#" class="ks-notification">
                                <div class="ks-avatar">
                                    <img src="assets/img/avatars/avatar-3.jpg" width="36" height="36">
                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">Emily Carter <span class="ks-description">has uploaded 1 file</span></div>
                                    <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                    <div class="ks-datetime">1 minute ago</div>
                                </div>
                            </a>
                            <a href="#" class="ks-notification">
                                <div class="ks-action">
                                            <span class="ks-default">
                                                <span class="la la-briefcase ks-icon"></span>
                                            </span>
                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">New project created</div>
                                    <div class="ks-text">Dashboard UI</div>
                                    <div class="ks-datetime">1 minute ago</div>
                                </div>
                            </a>
                            <a href="#" class="ks-notification">
                                <div class="ks-action">
                                            <span class="ks-error">
                                                <span class="la la-times-circle ks-icon"></span>
                                            </span>
                                </div>
                                <div class="ks-info">
                                    <div class="ks-user-name">File upload error</div>
                                    <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                    <div class="ks-datetime">10 minutes ago</div>
                                </div>
                            </a>
                        </div>

                        <div class="ks-view-all">
                            <a href="#">Show more</a>
                        </div>
                    </div>
                    <div class="tab-pane ks-empty" id="navbar-notifications-activity" role="tabpanel">
                        There are no activities.
                    </div>
                    <div class="tab-pane ks-empty" id="navbar-notifications-comments" role="tabpanel">
                        There are no comments.
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAVBAR NOTIFICATIONS -->

        <!-- BEGIN NAVBAR USER -->
        <div class="nav-item dropdown ks-user">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-avatar">
                            <img src="{{ asset('uploads/' .Auth::User()->image) }}" width="36" height="36">
                        </span>



                <span class="ks-info">
                            <span class="ks-name">Robert Dean</span>
                            <span class="ks-description">Premium User</span>
                        </span>{{ Auth::User()->name }}
            </a>


            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Preview">

                <a class="dropdown-item" href="{{ url('storepanel/settingaccountvendor') }}">
                    <span class="la la-wrench ks-icon" aria-hidden="true"></span>
                    <span>
                        الإعدادات</span>
                </a>
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<span class="la la-question-circle ks-icon" aria-hidden="true"></span>--}}
                    {{--<span>مساعدة</span>--}}
                {{--</a>--}}
                <a class="dropdown-item" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <span class="la la-sign-out ks-icon" aria-hidden="true"></span>
                    <span>                    تسجيل خروج
</span>
                </a>
            </div>
        </div>
        <!-- END NAVBAR USER -->
    </div>
    <!-- END NAVBAR ACTIONS -->
</nav>