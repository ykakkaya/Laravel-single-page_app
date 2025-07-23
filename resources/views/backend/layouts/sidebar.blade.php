 <div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="24">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="24">
                                </span>
                            </a>
                        </div>

                        <ul id="side-menu">

                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="#sidebarDashboards" data-bs-toggle="collapse">
                                    <i data-feather="home"></i>
                                    <span> Dashboard </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarDashboards">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="index.html" class="tp-link">Analytical</a>
                                        </li>
                                        <li>
                                            <a href="ecommerce.html" class="tp-link">E-commerce</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                
                            <!-- <li>
                                <a href="landing.html" target="_blank">
                                    <i data-feather="globe"></i>
                                    <span> Landing </span>
                                </a>
                            </li> -->

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i data-feather="users"></i>
                                    <span> Authentication </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="auth-login.html" class="tp-link">Log In</a>
                                        </li>
                                        <li>
                                            <a href="auth-register.html" class="tp-link">Register</a>
                                        </li>
                                        <li>
                                            <a href="auth-recoverpw.html" class="tp-link">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html" class="tp-link">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="auth-confirm-mail.html" class="tp-link">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="email-verification.html" class="tp-link">Email Verification</a>
                                        </li>
                                        <li>
                                            <a href="auth-logout.html" class="tp-link">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarError" data-bs-toggle="collapse">
                                    <i data-feather="alert-octagon"></i>
                                    <span> Error Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarError">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="error-404.html" class="tp-link">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="error-500.html" class="tp-link">Error 500</a>
                                        </li>
                                        <li>
                                            <a href="error-503.html" class="tp-link">Error 503</a>
                                        </li>
                                        <li>
                                            <a href="error-429.html" class="tp-link">Error 429</a>
                                        </li>
                                        <li>
                                            <a href="offline-page.html" class="tp-link">Offline Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i data-feather="file-text"></i>
                                    <span> Utility </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="pages-starter.html" class="tp-link">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-profile.html" class="tp-link">Profile</a>
                                        </li>
                                        <li>
                                            <a href="pages-pricing.html" class="tp-link">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="pages-timeline.html" class="tp-link">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-invoice.html" class="tp-link">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="pages-faqs.html" class="tp-link">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html" class="tp-link">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="pages-maintenance.html" class="tp-link">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="pages-coming-soon.html" class="tp-link">Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="calendar.html" class="tp-link">
                                    <i data-feather="calendar"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">General</li>

                            <li>
                                <a href="#sidebarBaseui" data-bs-toggle="collapse">
                                    <i data-feather="package"></i>
                                    <span> Components </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarBaseui">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="ui-accordions.html" class="tp-link">Accordions</a>
                                        </li>
                                        <li>
                                            <a href="ui-alerts.html" class="tp-link">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="ui-badges.html" class="tp-link">Badges</a>
                                        </li>
                                        <li>
                                            <a href="ui-breadcrumb.html" class="tp-link">Breadcrumb</a>
                                        </li>
                                        <li>
                                            <a href="ui-buttons.html" class="tp-link">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="ui-cards.html" class="tp-link">Cards</a>
                                        </li>
                                        <li>
                                            <a href="ui-collapse.html" class="tp-link">Collapse</a>
                                        </li>
                                        <li>
                                            <a href="ui-dropdowns.html" class="tp-link">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="ui-video.html" class="tp-link">Embed Video</a>
                                        </li>
                                        <li>
                                            <a href="ui-grid.html" class="tp-link">Grid</a>
                                        </li>
                                        <li>
                                            <a href="ui-images.html" class="tp-link">Images</a>
                                        </li>
                                        <li>
                                            <a href="ui-list.html" class="tp-link">List Group</a>
                                        </li>
                                        <li>
                                            <a href="ui-modals.html" class="tp-link">Modals</a>
                                        </li>
                                        <li>
                                            <a href="ui-placeholders.html" class="tp-link">Placeholders</a>
                                        </li>
                                        <li>
                                            <a href="ui-pagination.html" class="tp-link">Pagination</a>
                                        </li>
                                        <li>
                                            <a href="ui-popovers.html" class="tp-link">Popovers</a>
                                        </li>
                                        <li>
                                            <a href="ui-progress.html" class="tp-link">Progress</a>
                                        </li>
                                        <li>
                                            <a href="ui-scrollspy.html" class="tp-link">Scrollspy</a>
                                        </li>
                                        <li>
                                            <a href="ui-spinners.html" class="tp-link">Spinners</a>
                                        </li>
                                        <li>
                                            <a href="ui-tabs.html" class="tp-link">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="ui-tooltips.html" class="tp-link">Tooltips</a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.html" class="tp-link">Typography</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="widgets.html" class="tp-link">
                                    <i data-feather="aperture"></i>
                                    <span> Widgets </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">
                                    <i data-feather="cpu"></i>
                                    <span> Extended UI </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAdvancedUI">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="extended-carousel.html" class="tp-link">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="extended-notifications.html" class="tp-link">Notifications</a>
                                        </li>
                                        <li>
                                            <a href="extended-offcanvas.html" class="tp-link">Offcanvas</a>
                                        </li>
                                        <li>
                                            <a href="extended-range-slider.html" class="tp-link">Range Slider</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarIcons" data-bs-toggle="collapse">
                                    <i data-feather="award"></i>
                                    <span> Icons </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarIcons">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="icons-feather.html" class="tp-link">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="icons-mdi.html" class="tp-link">Material Design Icons</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarForms" data-bs-toggle="collapse">
                                    <i data-feather="briefcase"></i>
                                    <span> Forms </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarForms">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="forms-elements.html" class="tp-link">General Elements</a>
                                        </li>
                                        <li>
                                            <a href="forms-validation.html" class="tp-link">Validation</a>
                                        </li>
                                        <li>
                                            <a href="forms-quilljs.html" class="tp-link">Quilljs Editor</a>
                                        </li>
                                        <li>
                                            <a href="forms-pickers.html" class="tp-link">Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarTables" data-bs-toggle="collapse">
                                    <i data-feather="table"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTables">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="tables-basic.html" class="tp-link">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-datatables.html" class="tp-link">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarCharts" data-bs-toggle="collapse">
                                    <i data-feather="pie-chart"></i>
                                    <span> Apex Charts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCharts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href='charts-line.html'>Line</a>
                                        </li>
                                        <li>
                                            <a href='charts-area.html'>Area</a>
                                        </li>
                                        <li>
                                            <a href='charts-column.html'>Column</a>
                                        </li>
                                        <li>
                                            <a href='charts-bar.html'>Bar</a>
                                        </li>
                                        <li>
                                            <a href='charts-mixed.html'>Mixed</a>
                                        </li>
                                        <li>
                                            <a href='charts-timeline.html'>Timeline</a>
                                        </li>
                                        <li>
                                            <a href='charts-rangearea.html'>Range Area</a>
                                        </li>
                                        <li>
                                            <a href='charts-funnel.html'>Funnel</a>
                                        </li>
                                        <li>
                                            <a href='charts-candlestick.html'>Candlestick</a>
                                        </li>
                                        <li>
                                            <a href='charts-boxplot.html'>Boxplot</a>
                                        </li>
                                        <li>
                                            <a href='charts-bubble.html'>Bubble</a>
                                        </li>
                                        <li>
                                            <a href='charts-scatter.html'>Scatter</a>
                                        </li>
                                        <li>
                                            <a href='charts-heatmap.html'>Heatmap</a>
                                        </li>
                                        <li>
                                            <a href='charts-treemap.html'>Treemap</a>
                                        </li>
                                        <li>
                                            <a href='charts-pie.html'>Pie</a>
                                        </li>
                                        <li>
                                            <a href='charts-radialbar.html'>Radialbar</a>
                                        </li>
                                        <li>
                                            <a href='charts-radar.html'>Radar</a>
                                        </li>
                                        <li>
                                            <a href='charts-polararea.html'>Polar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMaps" data-bs-toggle="collapse">
                                    <i data-feather="map"></i>
                                    <span> Maps </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMaps">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="maps-google.html" class="tp-link">Google Maps</a>
                                        </li>
                                        <li>
                                            <a href="maps-vector.html" class="tp-link">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
            
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>