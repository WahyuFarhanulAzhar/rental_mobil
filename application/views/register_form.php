<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- tab icon -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/bg/rent-car.svg">

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/psuedo.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Login</title>
</head>
<body>
    
    <section class="sec-login">
        <div class="container">
            <div class="login-wrapper login grid-12">
                <div class="login-content">
                    <div class="login-content-left grid-4">
                        <div class="login-content-left-item">
                            <div class="login-left-list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="23" viewBox="0 0 21 23" fill="none">
                                    <path d="M16.7954 4.1079C16.6973 4.02381 16.5825 3.96409 16.4597 3.93313C16.3368 3.90216 16.2089 3.90073 16.0855 3.92895C15.1824 4.12932 14.2501 4.13188 13.346 3.93645C12.4419 3.74103 11.5852 3.35177 10.8285 2.79264C10.6871 2.68873 10.519 2.63306 10.3468 2.63306C10.1746 2.63306 10.0065 2.68873 9.86504 2.79264C9.10841 3.35177 8.25167 3.74103 7.34759 3.93645C6.4435 4.13188 5.5112 4.12932 4.60808 3.92895C4.48463 3.90073 4.35678 3.90216 4.23392 3.93313C4.11107 3.96409 3.99632 4.02381 3.89814 4.1079C3.80008 4.19211 3.72109 4.29851 3.66698 4.41928C3.61286 4.54005 3.58499 4.67213 3.58542 4.8058V11.4716C3.58467 12.7544 3.87343 14.0189 4.42767 15.1597C4.9819 16.3004 5.78555 17.2845 6.77172 18.03L9.85659 20.3563C9.99973 20.4642 10.1711 20.5222 10.3468 20.5222C10.5225 20.5222 10.6938 20.4642 10.837 20.3563L13.9219 18.03C14.908 17.2845 15.7117 16.3004 16.2659 15.1597C16.8201 14.0189 17.1089 12.7544 17.1082 11.4716V4.8058C17.1086 4.67213 17.0807 4.54005 17.0266 4.41928C16.9725 4.29851 16.8935 4.19211 16.7954 4.1079ZM15.4178 11.4716C15.4185 12.469 15.1941 13.4522 14.7634 14.3392C14.3326 15.2263 13.708 15.9917 12.9415 16.5716L10.3468 18.5311L7.75211 16.5716C6.98558 15.9917 6.36095 15.2263 5.93022 14.3392C5.49949 13.4522 5.27512 12.469 5.27576 11.4716V5.83474C7.0476 5.99529 8.82213 5.56008 10.3468 4.59106C11.8714 5.56008 13.646 5.99529 15.4178 5.83474V11.4716Z" fill="#FD9800"/>
                                  </svg>
                                <span>Secure payments</span>
                            </div>
                            <div class="login-left-list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="22" viewBox="0 0 19 22" fill="none">
                                    <path d="M15.1614 7.85281C15.1053 7.69956 15.0142 7.56804 14.8985 7.47316C14.7828 7.37827 14.647 7.32382 14.5065 7.31597H11.059L12.015 3.07491C12.0454 2.9422 12.0497 2.80293 12.0275 2.66793C12.0054 2.53292 11.9573 2.40582 11.887 2.29649C11.8169 2.18822 11.7269 2.10047 11.6238 2.03998C11.5207 1.9795 11.4073 1.94787 11.2924 1.94755H6.02331C5.85337 1.94063 5.68647 2.0023 5.54979 2.12253C5.4131 2.24276 5.31469 2.41445 5.27058 2.60965L3.25328 11.557C3.22283 11.6897 3.21854 11.829 3.24073 11.964C3.26293 12.099 3.31101 12.2261 3.38124 12.3354C3.45214 12.4449 3.5434 12.5334 3.64787 12.5939C3.75235 12.6545 3.8672 12.6854 3.98342 12.6844H6.89647L5.53404 18.7149C5.4894 18.9094 5.50131 19.1161 5.56784 19.3015C5.63436 19.4869 5.75161 19.6401 5.90058 19.7365C6.04955 19.8328 6.22152 19.8664 6.38861 19.8321C6.5557 19.7977 6.70813 19.6972 6.8212 19.547L15.0259 8.81018C15.1236 8.68302 15.1883 8.52505 15.2124 8.35524C15.2364 8.18542 15.2187 8.01096 15.1614 7.85281ZM7.79221 15.6191L8.59763 12.0402C8.62807 11.9075 8.63237 11.7682 8.61018 11.6332C8.58798 11.4982 8.5399 11.3711 8.46967 11.2618C8.39954 11.1535 8.30949 11.0657 8.20641 11.0052C8.10333 10.9448 7.98997 10.9131 7.87501 10.9128H4.98455L6.59538 3.73702H10.3063L9.35035 7.97807C9.31966 8.11323 9.31608 8.25506 9.33989 8.39216C9.36371 8.52926 9.41426 8.6578 9.48747 8.76746C9.56068 8.87711 9.65452 8.96482 9.76144 9.02352C9.86836 9.08222 9.98538 9.11028 10.1031 9.10544H12.7903L7.79221 15.6191Z" fill="#FD9800"/>
                                  </svg>
                                <span>Fast services</span>
                            </div>
                            <div class="login-left-list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="22" viewBox="0 0 19 22" fill="none">
                                    <path d="M6.04424 9.83574C6.49087 9.83574 6.92746 9.67832 7.29882 9.38337C7.67018 9.08843 7.95961 8.66921 8.13053 8.17874C8.30144 7.68826 8.34616 7.14856 8.25903 6.62787C8.1719 6.10718 7.95683 5.6289 7.64102 5.25351C7.3252 4.87812 6.92284 4.62247 6.48479 4.5189C6.04675 4.41533 5.59271 4.46849 5.18008 4.67165C4.76745 4.87481 4.41477 5.21885 4.16664 5.66027C3.91851 6.10168 3.78607 6.62065 3.78607 7.15153C3.78672 7.86319 4.02485 8.54548 4.44819 9.0487C4.87154 9.55192 5.44554 9.83497 6.04424 9.83574ZM6.04424 6.2568C6.19312 6.2568 6.33865 6.30927 6.46244 6.40759C6.58622 6.5059 6.6827 6.64564 6.73967 6.80913C6.79664 6.97262 6.81155 7.15253 6.78251 7.32609C6.75346 7.49965 6.68177 7.65908 6.5765 7.78421C6.47123 7.90934 6.33711 7.99455 6.19109 8.02908C6.04508 8.0636 5.89373 8.04588 5.75619 7.97816C5.61865 7.91044 5.50109 7.79576 5.41838 7.64862C5.33567 7.50148 5.29152 7.3285 5.29152 7.15153C5.29165 6.91428 5.371 6.6868 5.51213 6.51903C5.65327 6.35127 5.84465 6.25696 6.04424 6.2568ZM12.4307 12.0586C11.984 12.0586 11.5474 12.216 11.1761 12.511C10.8047 12.8059 10.5153 13.2251 10.3444 13.7156C10.1735 14.2061 10.1287 14.7458 10.2159 15.2665C10.303 15.7872 10.5181 16.2655 10.8339 16.6408C11.1497 17.0162 11.5521 17.2719 11.9901 17.3755C12.4281 17.479 12.8822 17.4259 13.2948 17.2227C13.7074 17.0195 14.0601 16.6755 14.3083 16.2341C14.5564 15.7927 14.6888 15.2737 14.6888 14.7428C14.6882 14.0312 14.4501 13.3489 14.0267 12.8457C13.6034 12.3424 13.0294 12.0594 12.4307 12.0586ZM12.4307 15.6376C12.2818 15.6376 12.1362 15.5851 12.0125 15.4868C11.8887 15.3885 11.7922 15.2487 11.7352 15.0852C11.6783 14.9217 11.6633 14.7418 11.6924 14.5683C11.7214 14.3947 11.7931 14.2353 11.8984 14.1101C12.0037 13.985 12.1378 13.8998 12.2838 13.8653C12.4298 13.8308 12.5812 13.8485 12.7187 13.9162C12.8563 13.9839 12.9738 14.0986 13.0565 14.2457C13.1392 14.3929 13.1834 14.5659 13.1834 14.7428C13.1832 14.9801 13.1039 15.2076 12.9628 15.3753C12.8216 15.5431 12.6302 15.6374 12.4307 15.6376ZM15.0387 4.05144C14.9688 3.96834 14.8859 3.90241 14.7945 3.85743C14.7032 3.81246 14.6053 3.78931 14.5065 3.78931C14.4077 3.78931 14.3098 3.81246 14.2185 3.85743C14.1271 3.90241 14.0442 3.96834 13.9743 4.05144L3.43615 16.5778C3.36554 16.6606 3.30942 16.7593 3.27101 16.8681C3.2326 16.9768 3.21267 17.0936 3.21236 17.2115C3.21205 17.3295 3.23137 17.4463 3.2692 17.5554C3.30704 17.6644 3.36264 17.7635 3.43281 17.8469C3.50298 17.9303 3.58634 17.9964 3.67808 18.0414C3.76983 18.0864 3.86815 18.1093 3.96738 18.1089C4.06662 18.1086 4.16481 18.0849 4.25632 18.0392C4.34782 17.9936 4.43082 17.9268 4.50055 17.8429L15.0387 5.3166C15.1086 5.23354 15.1641 5.13493 15.2019 5.02639C15.2397 4.91785 15.2592 4.80151 15.2592 4.68402C15.2592 4.56653 15.2397 4.45019 15.2019 4.34165C15.1641 4.23311 15.1086 4.1345 15.0387 4.05144Z" fill="#FD9800"/>
                                  </svg>
                                <span>Fair Commisions</span>
                            </div>
                            <div class="login-left-list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="23" viewBox="0 0 19 23" fill="none">
                                    <path d="M10.7429 10.5265H7.732C7.33273 10.5265 6.94981 10.338 6.66749 10.0024C6.38516 9.66679 6.22655 9.21163 6.22655 8.73703C6.22655 8.26244 6.38516 7.80728 6.66749 7.47169C6.94981 7.13609 7.33273 6.94756 7.732 6.94756H11.4956C11.6953 6.94756 11.8867 7.04183 12.0279 7.20962C12.169 7.37742 12.2484 7.605 12.2484 7.8423C12.2484 8.0796 12.3277 8.30718 12.4688 8.47497C12.61 8.64277 12.8014 8.73703 13.0011 8.73703C13.2007 8.73703 13.3922 8.64277 13.5333 8.47497C13.6745 8.30718 13.7538 8.0796 13.7538 7.8423C13.7538 7.1304 13.5159 6.44766 13.0924 5.94427C12.6689 5.44089 12.0945 5.15809 11.4956 5.15809H9.99018V3.36861C9.99018 3.13131 9.91087 2.90373 9.76971 2.73594C9.62855 2.56814 9.43709 2.47388 9.23745 2.47388C9.03782 2.47388 8.84636 2.56814 8.7052 2.73594C8.56403 2.90373 8.48473 3.13131 8.48473 3.36861V5.15809H7.732C6.93346 5.15809 6.16763 5.53515 5.60297 6.20634C5.03832 6.87752 4.7211 7.78784 4.7211 8.73703C4.7211 9.68623 5.03832 10.5965 5.60297 11.2677C6.16763 11.9389 6.93346 12.316 7.732 12.316H10.7429C11.1422 12.316 11.5251 12.5045 11.8074 12.8401C12.0897 13.1757 12.2484 13.6309 12.2484 14.1055C12.2484 14.5801 12.0897 15.0352 11.8074 15.3708C11.5251 15.7064 11.1422 15.8949 10.7429 15.8949H6.97928C6.77964 15.8949 6.58818 15.8007 6.44702 15.6329C6.30586 15.4651 6.22655 15.2375 6.22655 15.0002C6.22655 14.7629 6.14725 14.5353 6.00608 14.3675C5.86492 14.1997 5.67346 14.1055 5.47383 14.1055C5.27419 14.1055 5.08273 14.1997 4.94157 14.3675C4.8004 14.5353 4.7211 14.7629 4.7211 15.0002C4.7211 15.7121 4.95901 16.3948 5.3825 16.8982C5.80599 17.4016 6.38037 17.6844 6.97928 17.6844H8.48473V19.4739C8.48473 19.7112 8.56403 19.9388 8.7052 20.1066C8.84636 20.2743 9.03782 20.3686 9.23745 20.3686C9.43709 20.3686 9.62855 20.2743 9.76971 20.1066C9.91087 19.9388 9.99018 19.7112 9.99018 19.4739V17.6844H10.7429C11.5414 17.6844 12.3073 17.3073 12.8719 16.6362C13.4366 15.965 13.7538 15.0547 13.7538 14.1055C13.7538 13.1563 13.4366 12.2459 12.8719 11.5748C12.3073 10.9036 11.5414 10.5265 10.7429 10.5265Z" fill="#FD9800"/>
                                  </svg>
                                <span>Best Available Rates</span>
                            </div>
                            <div class="login-left-list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="22" viewBox="0 0 19 22" fill="none">
                                    <path d="M16.2487 9.43996C16.0372 9.13812 15.7725 8.89514 15.4734 8.72817C15.1742 8.56121 14.8479 8.47432 14.5174 8.47365H11.085L11.5065 7.19417C11.6819 6.63396 11.7403 6.03156 11.6767 5.43863C11.6131 4.8457 11.4295 4.27995 11.1416 3.7899C10.8537 3.29986 10.47 2.90015 10.0236 2.62506C9.57718 2.34997 9.08127 2.20771 8.57843 2.21049C8.43363 2.21085 8.292 2.26084 8.1705 2.35447C8.04901 2.4481 7.95281 2.5814 7.89345 2.73838L5.74818 8.47365H3.97928C3.38037 8.47365 2.80599 8.75645 2.3825 9.25983C1.95901 9.76322 1.7211 10.446 1.7211 11.1579V17.421C1.7211 18.1329 1.95901 18.8157 2.3825 19.319C2.80599 19.8224 3.38037 20.1052 3.97928 20.1052H13.5615C14.0897 20.105 14.6012 19.8847 15.0069 19.4825C15.4127 19.0804 15.6869 18.5219 15.782 17.9042L16.738 11.641C16.7971 11.2539 16.7839 10.8561 16.6994 10.4758C16.6148 10.0954 16.461 9.74181 16.2487 9.43996ZM5.48473 18.3158H3.97928C3.77964 18.3158 3.58818 18.2215 3.44702 18.0537C3.30586 17.8859 3.22655 17.6583 3.22655 17.421V11.1579C3.22655 10.9206 3.30586 10.693 3.44702 10.5252C3.58818 10.3574 3.77964 10.2631 3.97928 10.2631H5.48473V18.3158ZM15.2702 11.3189L14.3142 17.5821C14.2821 17.7905 14.1889 17.9786 14.051 18.113C13.9132 18.2474 13.7397 18.3192 13.5615 18.3158H6.99018V9.55628L9.03759 4.08049C9.24834 4.15352 9.44407 4.2777 9.61241 4.44517C9.78076 4.61264 9.91807 4.81978 10.0157 5.05351C10.1133 5.28724 10.1691 5.54248 10.1795 5.80313C10.19 6.06377 10.1548 6.32416 10.0764 6.56786L9.67741 7.84733C9.5924 8.11777 9.5637 8.40864 9.59376 8.69512C9.62382 8.9816 9.71175 9.25518 9.85003 9.49252C9.98832 9.72985 10.1729 9.9239 10.3879 10.0581C10.603 10.1923 10.8421 10.2626 11.085 10.2631H14.5174C14.628 10.2629 14.7373 10.2917 14.8375 10.3473C14.9376 10.403 15.0263 10.4842 15.097 10.5852C15.1695 10.6848 15.2227 10.8022 15.2526 10.9291C15.2825 11.0559 15.2885 11.189 15.2702 11.3189Z" fill="#FD9800"/>
                                  </svg>
                                <span>Convenience</span>
                            </div>
                        </div>
                    </div>
                    <div class="login-content-right grid-8">
                        <div class="login-content-right-head grid-12">
                            <img src="<?= base_url('assets/') ?>img/login/accountIcon.svg" alt="">
                            <h2>Sign up </h2>
                        </div>
                        <div class="sec-signup grid-12">
                            <form class="signup-wrapper signup grid-12" method="POST" action="<?= base_url('register'); ?>">
                              <div class="d-flex grid-12">
                                <div class="form-group grid-6">
                                  <label for="nama">Nama</label>
                                  <input id="nama" type="text" class="form-control" name="nama" autofocus>
                                  <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group grid-6">
                                  <label for="username">Username</label>
                                  <input id="username" type="text" class="form-control" name="username">
                                  <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                              </div>
                              <div class="form-group grid-12">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat">
                                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                                <div class="invalid-feedback"></div>
                              </div>
                              <div class="d-flex grid-12">
                                <div class="form-group grid-6">
                                  <label for="gender" class="d-block">Gender</label>
                                  <select name="gender" id="" class="form-control">
                                    <option value="">--Pilih Gender--</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                  </select>
                                  <?= form_error('gender', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group grid-6">
                                  <label for="no_telepon" class="d-block">No. Telepon</label>
                                  <input id="no_telepon" type="text" class="form-control" name="no_telepon">
                                  <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                              </div>
                              <div class="d-flex grid-12">
                                <div class="form-group grid-6">
                                  <label>No. KTP</label>
                                  <input type="text" name="no_ktp" class="form-control">
                                  <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group grid-6">
                                  <label>Password</label>
                                  <input type="password" id="password" name="password" class="form-control">
                                  <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                                  <i toggle="#password" class="fa fa-fw fa-eye-slash field-icon toggle-password"></i>
                                </div>     
                              </div>
                              <div class="d-flex fd-column jc-center mt-2 align-item-center grid-12">
                                <button type="submit" class="btn btn-primary grid-8">
                                  Register
                                </button>
                                <span>
                                already have a account ? <a href="<?= base_url('auth/login') ?>">Sing In</a>
                                </span>
                              </div>                        
                            </form>
                        </div>
                </div>
            </div>
        </div>

    </section>

      <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

  <script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>
</html>