@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Personal Information</h4>
                                    </div>
                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Full Name</span>
                                            <span class="data-value">{{ Auth::user()->name }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Display Name</span>
                                            <span class="data-value">{{ Auth::user()->profile->display_name }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                    </div><!-- data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Phone Number</span>
                                            <span class="data-value text-soft">{{ Auth::user()->profile->phone_no }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Date of Birth</span>
                                            <span class="data-value">{{ Auth::user()->profile->date_of_birth }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">Address</span>
                                            <span class="data-value">{{ Auth::user()->profile->address1 }} <br> {{ Auth::user()->profile->address2 }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                </div><!-- data-list -->
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Preferences</h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Language</span>
                                            <span class="data-value">English (United State)</span>
                                        </div>
                                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change Language</a></div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Date Format</span>
                                            <span class="data-value">M d, YYYY</span>
                                        </div>
                                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Timezone</span>
                                            <span class="data-value">Bangladesh (GMT +6)</span>
                                        </div>
                                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                    </div><!-- data-item -->
                                </div><!-- data-list -->
                            </div><!-- .nk-block -->
                        </div>
                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="card-inner-group" data-simplebar>
                                <div class="card-inner">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{ Auth::user()->name }}</span>
                                            <span class="sub-text">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="user-action">
                                            <div class="dropdown">
                                                <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .user-card -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <ul class="link-list-menu">
                                        <li><a class="active" href="{{ route('admin.profile') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                        <li><a href="html/user-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                        <li><a href="{{ route('account.activity') }}"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                        <li><a href="{{ route('admin.change.password') }}"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                    </ul>
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- card-aside -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
<!-- content @e -->

<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <form action="{{ route('admin.profile.update') }}" method="post">
                    @csrf
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" id="full-name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Display Name</label>
                                    <input type="text" class="form-control form-control-lg" id="display_name" name="display_name" value="{{ Auth::user()->profile->display_name }}" placeholder="Enter display name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" id="phone_no" name="phone_no" value="{{ Auth::user()->profile->phone_no }}" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of Birth</label>
                                    <input type="text" class="form-control form-control-lg date-picker" id="date_of_birth" name="date_of_birth" value="{{ Auth::user()->profile->date_of_birth }}" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="latest-sale">
                                    <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control form-control-lg" id="address1" name="address1" value="{{ Auth::user()->profile->address1 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">Address Line 2</label>
                                    <input type="text" class="form-control form-control-lg" id="address2" name="address2" value="{{ Auth::user()->profile->address2 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control form-control-lg" id="state" name="state" value="{{ Auth::user()->profile->state }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">Country</label>
                                    <select class="form-select" id="country" name="country" data-ui="lg">
                                        <option value="canada" {{ Auth::user()->profile->country == 'canada'? 'selected' :'' }}>Canada</option>
                                        <option value="united_state" {{ Auth::user()->profile->country == 'united_state'? 'selected' :'' }}>United State</option>
                                        <option value="united_kingdom" {{ Auth::user()->profile->country == 'united_kingdom'? 'selected' :'' }}>United Kingdom</option>
                                        <option value="australia" {{ Auth::user()->profile->country == 'australia'? 'selected' :'' }}>Australia</option>
                                        <option value="india" {{ Auth::user()->profile->country == 'india'? 'selected' :'' }}>India</option>
                                        <option value="bangladesh" {{ Auth::user()->profile->country == 'bangladesh'? 'selected' :'' }}>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-lg btn-primary">Update Address</button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                </div><!-- .tab-content -->
                </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->


@include('admin/layouts/footer_scripts')
