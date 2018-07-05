<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>قالب مدیریتی Elite</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="assets/plugins/animate/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="assets/plugins/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- Icons -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/linea-icons/css/linea-icons.css" rel="stylesheet">
    <link href="assets/plugins/material-design-iconic-font/css/material-design-iconic-font.css" rel="stylesheet">
    <link href="assets/plugins/weather-icons/css/weather-icons.css" rel="stylesheet">
    <link href="assets/plugins/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewbox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
</div>
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="index.html"><b><img src="assets/images/eliteadmin-logo.png" alt="home"></b><span class="hidden-xs"><img src="assets/images/eliteadmin-text.png" alt="home"></span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-right-circle ti-menu"></i></a></li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="جستجو ..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-left">
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox scale-up">
                        <li>
                            <div class="drop-title">شما 4 پیام جدید دارید</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="assets/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-left"></span> </div>
                                    <div class="mail-content">
                                        <h5>بابک جهانبخش</h5>
                                        <span class="mail-desc">ادمین پنل شما بسیار زیباست!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="assets/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-left"></span> </div>
                                    <div class="mail-content">
                                        <h5>محمد علیزاده</h5>
                                        <span class="mail-desc">آهنگ جدید مرا دریافت کنید!</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="assets/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-left"></span> </div>
                                    <div class="mail-content">
                                        <h5>سپهر آریا</h5>
                                        <span class="mail-desc">من یک خواننده هستم!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="assets/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-left"></span> </div>
                                    <div class="mail-content">
                                        <h5>بابک جهانبخش</h5>
                                        <span class="mail-desc">ادمین پنل شما بسیار زیباست!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);"> <strong>مشاهده همه پیام ها</strong> <i class="fa fa-angle-left"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks scale-up">
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>وظیفه 1</strong> <span class="pull-left text-muted">40% انجام شده</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">پیشرفت 40% (موفقیت)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>وظیفه 2</strong> <span class="pull-left text-muted">20% انجام شده</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% انجام شده</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>وظیفه 3</strong> <span class="pull-left text-muted">60% انجام شده</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% پیشرفت (هشدار)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>وظیفه 4</strong> <span class="pull-left text-muted">80% انجام شده</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% انجام شده (اخطار)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a class="text-center" href="#"> <strong>مشاهده همه وظایف</strong> <i class="fa fa-angle-left"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="assets/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">استیو جابز</b> </a>
                    <ul class="dropdown-menu dropdown-user scale-up">
                        <li><a href="#"><i class="ti-user"></i> پروفایل من</a></li>
                        <li><a href="#"><i class="ti-wallet"></i> معاملات من</a></li>
                        <li><a href="#"><i class="ti-email"></i> لیست پیام ها</a></li>
                        <li role="separator" class="divider"> </li>
                        <li><a href="#"><i class="ti-settings"></i> تنظیمات حساب</a></li>
                        <li role="separator" class="divider"> </li>
                        <li><a href="#"><i class="fa fa-power-off"></i> خروج</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- .Megamenu -->
                <li class="mega-dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">مگامنو</span> <i class="icon-options-vertical"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">فرم ها</li>
                                <li><a href="form-basic.html">فرم های پایه</a></li>
                                <li><a href="form-layout.html">طرح های فرم</a></li>
                                <li><a href="form-advanced.html">افزونه های فرم</a></li>
                                <li><a href="form-material-elements.html">فرم متریال</a></li>
                                <li><a href="form-float-input.html">فرم با ورودی شناور</a></li>
                                <li><a href="form-upload.html">آپلود فایل</a></li>
                                <li><a href="form-mask.html">ماسک فرم</a></li>
                                <li><a href="form-img-cropper.html">برش تصویر</a></li>
                                <li><a href="form-validation.html">اعتبارسنجی فرم</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">فرم های پیشرفته</li>
                                <li><a href="form-dropzone.html">رهاسازی فایل</a></li>
                                <li><a href="form-pickers.html">انتخاب‌گرهای فرم</a></li>
                                <li><a href="icheck-control.html">کنترل های فرم iCheck</a></li>
                                <li><a href="form-wizard.html">فرم مرحله‌ای</a></li>
                                <li><a href="form-typeahead.html">Typeahead</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-bootstrap-wysihtml5.html">ویرایشگر متن بوت استرپ</a></li>
                                <li><a href="form-tinymce-wysihtml5.html">ویرایشگر متن Tinymce</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">نمونه جدول</li>
                                <li><a href="basic-table.html">جدول‌های پایه</a></li>
                                <li><a href="table-layouts.html">طرح‌های جداول</a></li>
                                <li><a href="data-table.html">جدول اطلاعات</a></li>
                                <li><a href="bootstrap-tables.html">جدول‌های بوت‌استرپ</a></li>
                                <li><a href="responsive-tables.html">جدول‌های واکنشگرا</a></li>
                                <li><a href="editable-tables.html">جداول قابل ویرایش</a></li>
                                <li><a href="foo-tables.html">جدول های FooTables</a></li>
                                <li><a href="jsgrid.html">جدول‌های JsGrid</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">نمودار ها</li>
                                <li> <a href="flot.html">نمودارهای Flot</a> </li>
                                <li><a href="morris-chart.html">نمودارهای Morris</a></li>
                                <li><a href="chart-js.html">نمودارهای Chart-js</a></li>
                                <li><a href="peity-chart.html">نمودارهای Peity</a></li>
                                <li><a href="knob-chart.html">نمودارهای دستگیره‌ای</a></li>
                                <li><a href="sparkline-chart.html">نمودارهای Sparkline</a></li>
                                <li><a href="extra-charts.html">نمودارهای بیشتر</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-12 m-t-40 demo-box">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-purple"><a href="#" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br>گزینه نمایشی 1</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-success"><a href="#" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br>گزینه نمایشی 2</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-info"><a href="#" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br>گزینه نمایشی 3</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-inverse"><a href="#" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br>گزینه نمایشی 4</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-warning"><a href="#" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br>گزینه نمایشی 5</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-danger"><a href="#" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br>خرید قالب</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- /.Megamenu -->
                <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="جستجو ...">
                        <span class="input-group-btn">
								<button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
							</span> </div>
                    <!-- /input-group -->
                </li>
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img src="assets/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> استیو جابز<span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> پروفایل من</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> معاملات من</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> لیست پیام ها</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> تنظیمات حساب</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> خروج</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">--- منوی اصلی</li>
                <li> <a href="index.html" class="waves-effect"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw fa-fw"></i> <span class="hide-menu"> داشبورد <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-left">4</span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="index.html">دموگرافیک</a> </li>
                        <li> <a href="index2.html">ساده</a> </li>
                        <li> <a href="index3.html">تحلیلی</a> </li>
                        <li> <a href="index4.html">ساده تر</a> </li>
                    </ul>
                </li>
                <li><a href="inbox.html" class="waves-effect"><i class="zmdi zmdi-apps zmdi-hc-fw fa-fw"></i> <span class="hide-menu">اپ ها <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="chat.html">پیام چت</a></li>
                        <li><a href="javascript:void(0)" class="waves-effect">لیست پیام ها<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="inbox.html">لیست پیام ها</a></li>
                                <li> <a href="inbox-detail.html">جزئیات پیام</a></li>
                                <li> <a href="compose.html">نوشتن پیام</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="waves-effect">مخاطبین<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="contact.html">مخاطبین 1</a></li>
                                <li> <a href="contact2.html">مخاطبین 2</a></li>
                                <li> <a href="contact-detail.html">جزئیات مخاطب</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a href="#" class="waves-effect"><i class="zmdi zmdi-format-color-fill zmdi-hc-fw fa-fw"></i> <span class="hide-menu">رابط کاربری<span class="fa arrow"></span> <span class="label label-rouded label-info pull-left">13</span> </span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="cards.html">کارت ها</a></li>
                        <li><a href="panels-wells.html">پنل ها و ولز</a></li>
                        <li><a href="panel-ui-block.html">پنل با قابلیت بلاک</a></li>
                        <li><a href="panel-draggable.html">پنل قابل جابجایی</a></li>
                        <li><a href="portlet-draggable.html">بلوک قابل جابجایی</a></li>
                        <li><a href="buttons.html">دکمه ها</a></li>
                        <li><a href="bootstrap-switch.html">سوییچ بوت استرپ</a></li>
                        <li><a href="date-paginator.html">صفحه گذار تقویمی</a></li>
                        <li><a href="sweetalert.html">Sweet Alert</a></li>
                        <li><a href="typography.html">تایپوگرافی</a></li>
                        <li><a href="grid.html">سایزبندی</a></li>
                        <li><a href="tabs.html">تب ها</a></li>
                        <li><a href="tab-stylish.html">تب های شیک</a></li>
                        <li><a href="modals.html">مدال ها</a></li>
                        <li><a href="progressbars.html">نوارهای پیشرفت</a></li>
                        <li><a href="notification.html">اطلاعیه ها</a></li>
                        <li><a href="carousel.html">اسلایدر</a></li>
                        <li><a href="list-style.html">لیست و مدیا</a></li>
                        <li><a href="user-cards.html">کارت‌های کاربر</a></li>
                        <li><a href="timeline.html">خط زمانی</a></li>
                        <li><a href="timeline-horizontal.html">خط زمانی افقی</a></li>
                        <li><a href="nestable.html">زیرمجموعه ها</a></li>
                        <li><a href="range-slider.html">انتخاب‌گر بازه</a></li>
                        <li><a href="ribbons.html">روبان ها</a></li>
                        <li><a href="steps.html">قدم ها</a></li>
                        <li><a href="session-idle-timeout.html">محدودیت زمان بیکاری</a></li>
                        <li><a href="session-timeout.html">محدودیت زمان جلسه</a></li>
                        <li><a href="bootstrap.html">رابط کاربری بوت‌استرپ</a></li>
                        <li><a href="tooltip-stylish.html">تولتیپ های شیک</a></li>
                    </ul>
                </li>
                <li> <a href="forms.html" class="waves-effect active"><i class="zmdi zmdi-comment-alt-text zmdi-hc-fw fa-fw"></i> <span class="hide-menu">فرم ها<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="form-basic.html">فرم های پایه</a></li>
                        <li><a href="form-layout.html">طرح های فرم</a></li>
                        <li><a href="form-advanced.html">افزونه های فرم</a></li>
                        <li><a href="form-material-elements.html">فرم متریال</a></li>
                        <li><a href="form-float-input.html">فرم با ورودی شناور</a></li>
                        <li><a href="form-upload.html">آپلود فایل</a></li>
                        <li><a href="form-mask.html">ماسک فرم</a></li>
                        <li><a href="form-img-cropper.html">برش تصویر</a></li>
                        <li><a href="form-validation.html">اعتبارسنجی فرم</a></li>
                        <li><a href="form-dropzone.html">رهاسازی فایل</a></li>
                        <li><a href="form-pickers.html">انتخاب‌گرهای فرم</a></li>
                        <li><a href="icheck-control.html">کنترل های فرم iCheck</a></li>
                        <li><a href="form-wizard.html">فرم مرحله‌ای</a></li>
                        <li><a href="form-typeahead.html">Typeahead</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-bootstrap-wysihtml5.html">ویرایشگر متن بوت استرپ</a></li>
                        <li><a href="form-tinymce-wysihtml5.html">ویرایشگر متن Tinymce</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- حرفه ای</li>
                <li> <a href="#" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">صفحات نمونه<span class="fa arrow"></span><span class="label label-rouded label-purple pull-left">30</span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="starter-page.html">صفحه شروع</a></li>
                        <li><a href="blank.html">صفحه خالی</a></li>
                        <li><a href="javascript:void(0)" class="waves-effect">قالب های ایمیل<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="email-templates/basic.html">پایه</a></li>
                                <li> <a href="email-templates/alert.html">هشدار</a></li>
                                <li> <a href="email-templates/billing.html">صورتحساب</a></li>
                                <li> <a href="email-templates/password-reset.html">بازنشانی رمز عبور</a></li>
                            </ul>
                        </li>
                        <li><a href="lightbox.html">پاپ‌آپ لایت باکس</a></li>
                        <li><a href="treeview.html">مشاهده درختی</a></li>
                        <li><a href="search-result.html">نتایج جستجو</a></li>
                        <li><a href="utility-classes.html">کلاس های کاربردی</a></li>
                        <li><a href="custom-scroll.html">اسکرول سفارشی</a></li>
                        <li><a href="login.html">صفحه ورود</a></li>
                        <li><a href="login2.html">صفحه ورود 2</a></li>
                        <li><a href="animation.html">انیمیشن ها</a></li>
                        <li><a href="profile.html">پروفایل</a></li>
                        <li><a href="invoice.html">فاکتور</a></li>
                        <li><a href="faq.html">سوالات متداول</a></li>
                        <li><a href="gallery.html">گالری</a></li>
                        <li><a href="pricing.html">قیمت ها</a></li>
                        <li><a href="register.html">ثبت نام</a></li>
                        <li><a href="register2.html">ثبت نام 2</a></li>
                        <li><a href="register3.html">ثبت نام سه مرحله‌ای</a></li>
                        <li><a href="recoverpw.html">بازیابی رمز عبور</a></li>
                        <li><a href="lock-screen.html">قفل صفحه</a></li>
                        <li><a href="400.html">خطای 400</a></li>
                        <li><a href="403.html">خطای 403</a></li>
                        <li><a href="404.html">خطای 404</a></li>
                        <li><a href="500.html">خطای 500</a></li>
                        <li><a href="503.html">خطای 503</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="waves-effect"><i class="zmdi zmdi-chart zmdi-hc-fw fa-fw"></i> <span class="hide-menu">نمودار ها<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="flot.html">نمودارهای Flot</a> </li>
                        <li><a href="morris-chart.html">نمودارهای Morris</a></li>
                        <li><a href="chart-js.html">نمودارهای Chart-js</a></li>
                        <li><a href="peity-chart.html">نمودارهای Peity</a></li>
                        <li><a href="knob-chart.html">نمودارهای دستگیره‌ای</a></li>
                        <li><a href="sparkline-chart.html">نمودارهای Sparkline</a></li>
                        <li><a href="extra-charts.html">نمودارهای بیشتر</a></li>
                    </ul>
                </li>
                <li> <a href="tables.html" class="waves-effect"><i class="zmdi zmdi-border-all zmdi-hc-fw fa-fw"></i> <span class="hide-menu">جدول‌ها<span class="fa arrow"></span><span class="label label-rouded label-danger pull-left">7</span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="basic-table.html">جدول‌های پایه</a></li>
                        <li><a href="table-layouts.html">طرح‌های جداول</a></li>
                        <li><a href="data-table.html">جدول اطلاعات</a></li>
                        <li><a href="bootstrap-tables.html">جدول‌های بوت‌استرپ</a></li>
                        <li><a href="responsive-tables.html">جدول‌های واکنشگرا</a></li>
                        <li><a href="editable-tables.html">جداول قابل ویرایش</a></li>
                        <li><a href="foo-tables.html">جدول های FooTables</a></li>
                        <li><a href="jsgrid.html">جدول‌های JsGrid</a></li>
                    </ul>
                </li>
                <li> <a href="widgets.html" class="waves-effect"><i class="zmdi zmdi-settings zmdi-hc-fw fa-fw"></i> <span class="hide-menu">ویجت‌ها</span></a> </li>
                <li> <a href="#" class="waves-effect"><i class="zmdi zmdi-mood zmdi-hc-fw fa-fw"></i> <span class="hide-menu">آیکن‌ها<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="fontawesome.html">آیکن‌های FontAwesome</a> </li>
                        <li> <a href="themifyicon.html">آیکن‌های Themify</a> </li>
                        <li> <a href="simple-line.html">آیکن‌های Simple line</a> </li>
                        <li> <a href="material-icons.html">آیکن‌های متریال</a> </li>
                        <li><a href="linea-icon.html">آیکن‌های Linea</a></li>
                        <li><a href="weather.html">آیکن‌های آب و هوا</a></li>
                    </ul>
                </li>
                <li> <a href="map-google.html" class="waves-effect"><i class="zmdi zmdi-pin-drop zmdi-hc-fw fa-fw"></i> <span class="hide-menu">نقشه گوگل</span></a> </li>
                <li> <a href="map-vector.html" class="waves-effect"><i class="zmdi zmdi-pin zmdi-hc-fw fa-fw"></i> <span class="hide-menu">نقشه وکتور</span></a> </li>
                <li> <a href="calendar.html" class="waves-effect"><i class="zmdi zmdi-calendar-check zmdi-hc-fw fa-fw"></i> <span class="hide-menu">تقویم</span></a></li>
                <li> <a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-view-list zmdi-hc-fw fa-fw"></i> <span class="hide-menu">کشویی چند مرحله‌ای<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="javascript:void(0)">آیتم سطح دوم</a> </li>
                        <li> <a href="javascript:void(0)">آیتم سطح دوم</a> </li>
                        <li> <a href="javascript:void(0)" class="waves-effect">سطح سوم <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="javascript:void(0)">آیتم سطح سوم</a> </li>
                                <li> <a href="javascript:void(0)">آیتم سطح سوم</a> </li>
                                <li> <a href="javascript:void(0)">آیتم سطح سوم</a> </li>
                                <li> <a href="javascript:void(0)">آیتم سطح سوم</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="login.html" class="waves-effect"><i class="zmdi zmdi-power zmdi-hc-fw fa-fw"></i> <span class="hide-menu">خروج</span></a></li>
                <li class="nav-small-cap">--- پشتیبانی</li>
                <li><a href="used-plugins.html" class="waves-effect"><i class="fa fa-circle-o fa-fw text-danger"></i> <span class="hide-menu">لیست افزونه‌ها</span></a></li>
                <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o fa-fw text-info"></i> <span class="hide-menu">گالری</span></a></li>
                <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o fa-fw text-success"></i> <span class="hide-menu">سوالات متداول</span></a></li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-12">
                    <h4 class="page-title">صفحه اعتبارسنجی فرم ها</h4>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <a href="#" target="_blank" class="btn btn-danger pull-left m-r-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">خرید قالب</a>
                    <ol class="breadcrumb">
                        <li><a href="#">داشبورد</a></li>
                        <li><a href="#">فرم ها</a></li>
                        <li class="active">صفحه اعتبارسنجی فرم ها</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">اعتبارسنجی فرم</h3>
                        <p class="text-muted m-b-30"> Bootstrap Form Validation</p>
                        <form data-toggle="validator">
                            <div class="form-group">
                                <label for="inputName1" class="control-label">نام</label>
                                <input type="text" class="form-control" id="inputName1" placeholder="Cina Saffary" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="control-label">ایمیل</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-required-error="وارد کردن این قسمت الزامی است" data-error="ایمیل وارد شده نامعتبر است" required>
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="form-group">
                                <label for="textarea" class="control-label">ورودی متن</label>
                                <textarea id="textarea" class="form-control" data-required-error="وارد کردن این قسمت الزامی است" required></textarea>
                                <small class="help-block with-errors">متن کمکی برای این فیلد!</small>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="control-label">رمز عبور</label>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" data-required-error="وارد کردن این قسمت الزامی است" data-minlength-error="وارد کردن حداقل 6 کاراکتر الزامی است" required>
                                        <small class="help-block with-errors">حداقل 6 کاراکتر</small>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="رمز عبور های وارد شده مطابقت ندارند" data-required-error="وارد کردن این قسمت الزامی است" placeholder="Confirm" required>
                                        <small class="help-block with-errors"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <input type="radio" name="underwear" id="out" required>
                                    <label for="out"> Boxers </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="underwear" id="in" required>
                                    <label for="in"> Briefs </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input type="checkbox" id="terms" data-error="انتخاب این گزینه الزامی است!" required>
                                    <label for="terms"> انتخاب کنید </label>
                                </div>
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">اعتبارسنجی فرم</h3>
                        <p class="text-muted m-b-30"> Bootstrap Form Validation</p>
                        <form data-toggle="validator">
                            <div class="form-group">
                                <label for="inputName" class="control-label">نام</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail2" class="control-label">ایمیل</label>
                                <input type="email" class="form-control" id="inputEmail2" placeholder="Email" data-required-error="وارد کردن این قسمت الزامی است" data-error="ایمیل وارد شده نامعتبر است" required>
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword2" class="control-label">رمز عبور</label>
                                <div class="row">
                                    <div class="form-group col-sm-6 m-0">
                                        <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword2" placeholder="Password" data-required-error="وارد کردن این قسمت الزامی است" data-minlength-error="وارد کردن حداقل 6 کاراکتر الزامی است" required>
                                        <small class="help-block with-errors">حداقل 6 کاراکتر</small>
                                    </div>
                                    <div class="form-group col-sm-6 m-0">
                                        <input type="password" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword2" data-match-error="رمز عبور های وارد شده مطابقت ندارند" data-required-error="وارد کردن این قسمت الزامی است" placeholder="Confirm" required>
                                        <small class="help-block with-errors"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input type="checkbox" id="terms2" data-error="انتخاب این گزینه الزامی است!" required>
                                    <label for="terms2"> به خاطر سپاری؟</label>
                                </div>
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">اعتبارسنجی فرم افقی</h3>
                        <p class="text-muted m-b-30"> Bootstrap Form Validation </p>
                        <form data-toggle="validator" class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName4" class="control-label col-sm-3">نام</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName4" placeholder="Cina Saffary" data-required-error="وارد کردن این قسمت الزامی است" required>
                                    <small class="help-block with-errors"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail4" class="control-label col-sm-3">ایمیل</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" data-required-error="وارد کردن این قسمت الزامی است" data-error="ایمیل وارد شده نامعتبر است" required>
                                    <small class="help-block with-errors"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword4" class="control-label col-sm-3">رمز عبور</label>
                                <div class="form-group col-sm-4 m-0">
                                    <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword4" placeholder="Password" data-required-error="وارد کردن این قسمت الزامی است" data-minlength-error="وارد کردن حداقل 6 کاراکتر الزامی است" required>
                                    <small class="help-block with-errors">حداقل 6 کاراکتر</small>
                                </div>
                                <div class="form-group col-sm-4 m-0">
                                    <input type="password" class="form-control" id="inputPasswordConfirm4" data-match="#inputPassword4" data-match-error="رمز عبور های وارد شده مطابقت ندارند" data-required-error="وارد کردن این قسمت الزامی است" placeholder="Confirm" required>
                                    <small class="help-block with-errors"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3"></label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <input type="checkbox" id="terms4" data-error="انتخاب این گزینه الزامی است!" required>
                                        <label for="terms4"> به خاطر سپاری؟</label>
                                    </div>
                                    <small class="help-block with-errors"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-info">ثبت</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollleft">
                    <div class="rpanel-title"> پنل سرویس <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>اختیارات طرح</b></li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> سرصفحه ثابت </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" class="fxsdr">
                                    <label for="checkbox2"> نوار کناری ثابت </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> تغییر حالت نوار کناری </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li><b>نوار کناری روشن</b></li>
                            <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                            <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                            <li><b>نوار کناری تیره</b></li>
                            <br>
                            <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>اختیارات چت</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>سامان جلیلی <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>احسان خواجه امیری <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>حمید هیراد <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>سپهر آریا <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>امین رستمی <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>بهنام بانی<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/john.jpg" alt="user-img" class="img-circle"> <span>مازیار فلاحی<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>بنیامین بهادری <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center">ارائه شده در وب‌سایت <a href="https://www.rtl-theme.com" target="_blank">راست‌چین</a></footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/plugins/bootstrap/dist/js/tether.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="assets/plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="assets/plugins/jquery.slimscroll/jquery.slimscroll.min.js"></script>
<!--Wave Effects -->
<script src="assets/plugins/waves/waves.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="assets/js/custom.js"></script>
<script src="assets/plugins/bootstrap-validator/bootstrap-validator.min.js"></script>
<!--Style Switcher -->
<script src="assets/js/style-switcher.js"></script>
</body>

</html>