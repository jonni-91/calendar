<!--HEADER-->
<header id="sc-header" class="uk-sticky uk-sticky-fixed" style="top: 0px; width: 100%; border: 1px solid;">
    <div class="uk-container">
        <nav class="uk-navbar uk-navbar-container" data-uk-navbar="mode:click; duration: 250">
            <div class="uk-navbar-left nav-overlay-small uk-margin-right uk-navbar-aside">
                OneLeft
            </div>
            <div class="uk-navbar-left nav-overlay uk-margin-right uk-visible@m">
                TwoLeft
            </div>
            <div class="nav-overlay nav-overlay-small uk-navbar-right uk-flex-1" style="" hidden="">
                <a class="uk-navbar-toggle uk-visible@m"
                   data-uk-toggle="target: .nav-overlay; animation: uk-animation-slide-top" href="#" aria-expanded="true"
                   uk-icon="close">
                </a>
                <a class="uk-navbar-toggle uk-hidden@m uk-padding-remove-left"
                   data-uk-toggle="target: .nav-overlay-small; animation: uk-animation-slide-top" href="#" aria-expanded="true"
                   uk-icon="close">
                </a>
                <div class="uk-navbar-item uk-width-expand uk-padding-remove-right">
                    <form class="uk-search uk-search-navbar uk-width-1-1 uk-flex">
                        <div class="uk-flex-1 uk-position-relative">
                            <a class="uk-form-icon uk-form-icon-flip uk-icon"
                               style="display: none;"
                               href="javascript:void(0)" uk-icon="icon: close"
                               data-uk-clear-input="">
                            </a>
                            <input class="uk-search-input"
                                   type="search" placeholder="Поиск..." autofocus="">
                        </div>
                        <button class="uk-button uk-button-default uk-button-small uk-button-icon uk-button-flat uk-margin-small-left uk-border-rounded"
                                type="button" uk-icon="search"></button>
                    </form>
                </div>
            </div>
            <div class="nav-overlay nav-overlay-small uk-navbar-right">
             <ul class="uk-navbar-nav">
                 <li>
                     <a class="uk-navbar-toggle uk-visible@m"
                        href="#"
                        data-uk-toggle="target: .nav-overlay; animation: uk-animation-slide-top"
                        aria-expanded="true"
                        uk-icon="icon: search">
                     </a>
                 </li>
                 @include('component.setting_site')
                 <li>
                     <a href="#" aria-expanded="true">
                         <span class="mdi mdi-bell uk-display-inline-block uk-form-custom" uk-icon="icon: mail">
							<span class="sc-indicator md-bg-color-red-600"></span>
						</span>
                     </a>
                     <div class="uk-navbar-dropdown sc-padding-remove uk-close uk-navbar-dropdown-bottom-right" style="left: 449.2px; top: 48px;">
                         <div class="uk-panel uk-panel-scrollable uk-height-medium">
                             <ul class="uk-list uk-list-divider">
                                 <li class="sc-list-group">
                                     <div class="sc-list-addon">
                                         <span class="sc-avatar-initials md-color-white md-bg-red-500" title="faye99">MO</span>
                                     </div>
                                     <a href="#" class="sc-list-body uk-display-block">
                                         <span class="uk-text-small uk-text-muted uk-width-expand">08:42 AM</span>
                                         <span class="uk-display-block uk-text-truncate">Ducimus quas provident enim sed est omnis.</span>
                                     </a>
                                 </li>
                                 <li class="sc-list-group">
                                     <div class="sc-list-addon">
                                         <img src="" class="sc-avatar " alt="LE" data-rjs="2" data-rjs-processed="true" width="32" height="32">
                                     </div>
                                     <a href="#" class="sc-list-body uk-display-block">
                                         <div class="uk-text-small uk-text-muted uk-width-expand">Jun 19, 2021</div>
                                         <span class="uk-display-block uk-text-truncate">Sit ut eos quasi nobis vero quo eveniet similique est molestias.</span>
                                     </a>
                                 </li>
                                 <li class="sc-list-group">
                                     <div class="sc-list-addon">
                                         <span class="sc-avatar-initials md-color-white md-bg-light-green-500" title="friesen.mina">KS</span>
                                     </div>
                                     <a href="#" class="sc-list-body uk-display-block">
                                         <span class="uk-text-small uk-text-muted uk-width-expand">06:42 AM</span>
                                         <span class="uk-display-block uk-text-truncate">Esse placeat doloremque qui quasi maxime sunt.</span>
                                     </a>
                                 </li>
                                 <li class="sc-list-group">
                                     <div class="sc-list-addon">
                                         <img src="" class="sc-avatar " alt="VE" data-rjs="2" data-rjs-processed="true" width="32" height="32">
                                     </div>
                                     <a href="#" class="sc-list-body uk-display-block">
                                         <span class="uk-text-small uk-text-muted uk-width-expand">Jun 18, 2021</span>
                                         <span class="uk-display-block uk-text-truncate">Doloribus excepturi doloremque qui laborum qui ipsam velit qui temporibus consectetur.</span>
                                     </a>
                                 </li>
                                 <li class="sc-list-group">
                                     <div class="sc-list-addon">
                                         <img src="" class="sc-avatar " alt="JA" data-rjs="2" data-rjs-processed="true" width="32" height="32">
                                     </div>
                                     <a href="#" class="sc-list-body uk-display-block">
                                         <span class="uk-text-small uk-text-muted uk-width-expand">Jun 16, 2021</span>
                                         <span class="uk-display-block uk-text-truncate">Molestias quos exercitationem culpa doloribus est labore dolorum molestiae necessitatibus quia.</span>
                                     </a>
                                 </li>
                                 <li class="sc-list-group">
                                     <div class="sc-list-addon">
                                         <span class="sc-avatar-initials md-color-white md-bg-purple-500" title="miles.borer">FA</span>
                                     </div>
                                     <a href="#" class="sc-list-body uk-display-block">
                                         <span class="uk-text-small uk-text-muted uk-width-expand">Jun 14, 2021</span>
                                         <span class="uk-display-block uk-text-truncate">Nostrum aut eligendi quia accusantium enim.</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <a href="pages-mailbox.html" class="uk-flex uk-text-small sc-padding-small-ends sc-padding-medium">Show all in mailbox</a>
                     </div>
                 </li>
                 <li class="uk-visible@s">
                     <a href="#" aria-expanded="true">
						<span class="mdi mdi-bell uk-display-inline-block uk-form-custom" uk-icon="icon: bell">
							<span class="sc-indicator md-bg-color-red-600"></span>
						</span>
                     </a>
                     <div class="uk-navbar-dropdown md-bg-grey-100">
                         <div class="sc-padding-medium sc-padding-small-ends">
                             <div class="uk-text-right uk-margin-small-bottom">
                                 <button class="sc-button sc-button-default sc-button-outline sc-button-mini sc-js-clear-alerts">Clear all</button>
                             </div>
                             <ul class="uk-list uk-margin-remove" id="sc-header-alerts">
                                 <li class="sc-border sc-round md-bg-white">
                                     <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-alert-outline md-color-red-600"></i></div>
                                     <div class="uk-flex-1 uk-text-small">
                                         Information Page Not Found!
                                     </div>
                                 </li>
                                 <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                     <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-email-check-outline md-color-blue-600"></i></div>
                                     <div class="uk-flex-1 uk-text-small">
                                         A new password has been sent to your e-mail address.
                                     </div>
                                 </li>
                                 <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                     <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-alert-outline md-color-red-600"></i></div>
                                     <div class="uk-flex-1 uk-text-small">
                                         You do not have permission to access the API!
                                     </div>
                                 </li>
                                 <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                     <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-check-all md-color-light-green-600"></i></div>
                                     <div class="uk-flex-1 uk-text-small">
                                         Your enquiry has been successfully sent.
                                     </div>
                                 </li>
                             </ul>
                             <div class="uk-text-medium uk-text-center sc-js-empty-message sc-text-semibold sc-padding-ends" style="display: none">No alerts!</div>
                         </div>
                     </div>
                 </li>
                 <li>
                     <profile-component></profile-component>
                 </li>
                 <li>
                     <a href="{{ route('logout')}}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         {{ __('component.logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </li>
             </ul>
            </div>
        </nav>
    </div>
</header>
<!--/HEADER-->
