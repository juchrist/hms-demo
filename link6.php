<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMS Dashboard v.2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                                     </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                     </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile">Profile</a></li>
                                    <li><a href="contacts">Contacts</a></li>
                                    <li><a href="mailbox">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login">Logout</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                IN+
                            </div>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
        
                                    </ul>
                                </li>
                                <li><a href="#">Second Level Item</a></li>
                                <li>
                                    <a href="#">Second Level Item</a></li>
                                <li>
                                    <a href="#">Second Level Item</a></li>
                            </ul>
                        </li>
                    </ul>
        
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div>
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5 class="m-b-md">Server status Q12</h5>
                                <h2 class="text-navy">
                                    <i class="fa fa-play fa-rotate-270"></i> Up
                                </h2>
                                <small>Last down 42 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content ">
                                <h5 class="m-b-md">Server status Q13</h5>
                                <h2 class="text-navy">
                                    <i class="fa fa-play fa-rotate-270"></i> Up
                                </h2>
                                <small>Last down 42 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5 class="m-b-md">Server status Q42</h5>
                                <h2 class="text-danger">
                                    <i class="fa fa-play fa-rotate-90"></i> Down
                                </h2>
                                <small>Server down since 4 days</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5 class="m-b-md">Server status Q43</h5>
                                <h2 class="text-danger">
                                    <i class="fa fa-play fa-rotate-90"></i> Down
                                </h2>
                                <small>Server down since 4:32 pm.</small>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Visits in last 24h</h5>
                                <h2>198 009</h2>
                                <div id="sparkline1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Visits week</h5>
                                <h2>65 000</h2>
                                <div id="sparkline2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Last month</h5>
                                <h2>680 900</h2>
                                <div id="sparkline3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Avarage time</h5>
                                <h2>00:06:40</h2>
                                <div id="sparkline4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>65%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 68%;" class="progress-bar"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>50%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>14%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>20%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage distribution</h5>
                                <h2>42/20</h2>
                                <div class="text-center">
                                    <div id="sparkline5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage division</h5>
                                <h2>100/54</h2>
                                <div class="text-center">
                                    <div id="sparkline6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage distribution</h5>
                                <h2>685/211</h2>
                                <div class="text-center">
                                    <div id="sparkline7"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage division</h5>
                                <h2>240/32</h2>
                                <div class="text-center">
                                    <div id="sparkline8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income</h5>
                                <h1 class="no-margins">886,200</h1>
                                <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income last month</h5>
                                <h1 class="no-margins">1 738,200</h1>
                                <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income last day</h5>
                                <h1 class="no-margins">-200,100</h1>
                                <div class="stat-percent font-bold text-danger">12% <i class="fa fa-level-down"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income all</h5>
                                <h1 class="no-margins">54,200</h1>
                                <div class="stat-percent font-bold text-danger">24% <i class="fa fa-level-down"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>All new alerts</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Alerts</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>All messages</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Last notification</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>
        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                 $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#1ab394',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline2").sparkline([24, 43, 43, 55, 44, 62, 44, 72], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#1ab394',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline3").sparkline([74, 43, 23, 55, 54, 32, 24, 12], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#ed5565',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline4").sparkline([24, 43, 33, 55, 64, 72, 44, 22], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#ed5565',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline5").sparkline([1, 4], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#1ab394', '#F5F5F5']
                 });

                 $("#sparkline6").sparkline([5, 3], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#1ab394', '#F5F5F5']
                 });

                 $("#sparkline7").sparkline([2, 2], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#ed5565', '#F5F5F5']
                 });

                 $("#sparkline8").sparkline([2, 3], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#ed5565', '#F5F5F5']
                 });
            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();


        });
    </script>
</body>
</html>
