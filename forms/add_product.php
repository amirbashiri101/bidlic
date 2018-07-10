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