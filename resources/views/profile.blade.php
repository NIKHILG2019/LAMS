<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Profile Page</title>
    <!-- <link rel="stylesheet" href="styles.css" /> -->

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/profile.css" />
</head>

<body>
<div>
    <nav
        style="position: sticky"
        class="navbar navbar-expand-md navbar-dark bg-dark"
    >
        <a href="/DashboardStudent" class="navbar-brand">LAMS</a>
        <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarCollapse"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="/DashboardStudent" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link active">Profile</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="text-decoration-none text-light" href="/"
                    >Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img
                        src="https://gravatar.com/avatar/31b64e4876d603ce78e04102c67d6144?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png"
                        class="img-responsive"
                        alt=""
                    />
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">User1</div>
                    <div class="profile-usertitle-job">D12C</div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu"></div>
                <!-- END MENU -->

                <div class="portlet light bordered">
                    <!-- STAT -->
                    <div class="row list-separated profile-stat">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title">37</div>
                            <div class="uppercase profile-stat-text">Total</div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title">51</div>
                            <div class="uppercase profile-stat-text">Attend</div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title">61</div>
                            <div class="uppercase profile-stat-text">Average</div>
                        </div>
                    </div>
                    <!-- END STAT -->
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <div class="infoview">
                    <span class="label"> Name </span>
                    <input
                        class="form-control"
                        id="info"
                        type="text"
                        placeholder="Readonly input here…"
                        value="usertesing"
                        readonly
                    />
                </div>
                <div class="infoview">
                    <span class="label">Class </span>
                    <input
                        class="form-control"
                        id="info"
                        type="text"
                        placeholder="Readonly input here…"
                        value="D12C"
                        readonly
                    />
                </div>
                <div class="infoview">
                    <span class="label">Email </span>
                    <input
                        class="form-control"
                        id="info"
                        type="text"
                        placeholder="Readonly input here…"
                        value="abe@ypmail.com"
                        readonly
                    />
                </div>
                <div class="infoview">
                    <span class="label">Mobile </span>
                    <input
                        class="form-control"
                        id="info"
                        type="text"
                        placeholder="Readonly input here…"
                        value="9876543210"
                        readonly
                    />
                </div>
                <div class="infoview">
                    <span class="label">Address </span>
                    <input
                        class="form-control"
                        id="info"
                        type="text"
                        placeholder="Readonly input here…"
                        value="404notfound"
                        readonly
                    />
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
