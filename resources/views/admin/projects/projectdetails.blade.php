@extends('admin/layouts.admin')

@section('content')

    <div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Projects Dashboard</h3>
            </section>
        </div>
          @foreach($projects as $row)
        <div class="ks-page-content">
            <div class="ks-page-content-body ks-projects-dashboard-page">
                <div class="ks-header">
                    <div class="ks-project">
                        <img src="assets/img/profile/ph-4.png" class="ks-logo">
                        <span class="ks-name">{{ $row->name }}</span>
                    </div>
                    <div class="ks-extras">
                        <form class="ks-search">
                            <div class="input-icon icon-right icon icon-lg">
                                <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                <span class="icon-addon">
                                    <span class="la la-search"></span>
                                </span>
                            </div>
                        </form>
                        <div class="ks-users">
                            <a href="#" class="ks-add">+</a>
                            <a href="#" class="ks-image">
                                <img class="ks-avatar" src="{{asset('assets/img/avatars/avatar-1.jpg')}}" width="26" height="26">
                            </a>
                            <a href="#" class="ks-image">
                                <img class="ks-avatar" src="assets/img/avatars/avatar-2.jpg" width="26" height="26">
                            </a>
                            <a href="#" class="ks-image">
                                <img class="ks-avatar" src="assets/img/avatars/avatar-3.jpg" width="26" height="26">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ks-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 ks-panels-column-section">
                                <div class="card ks-panel">
                                    <h5 class="card-header">
                                        Project info
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-text-block">
                                            <div class="ks-name">Description</div>
                                            <p class="ks-text">{{ $row->description }}</p>
                                        </div>
                                        <div class="ks-text-block">
                                            <div class="ks-name">Teams</div>
                                            <div class="ks-tags">
                                                <span class="badge badge-success-outline">Design</span>
                                                <span class="badge badge-info-outline">Development</span>
                                                <span class="badge badge-pink-outline">front-end</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card ks-panel ks-widget-progress-chart-statistics">
                                    <h5 class="card-header">
                                        Project progress
                                    </h5>
                                    <div class="card-block">
                                        <table class="ks-statistics">
                                            <tbody>
                                            <tr>
                                                <td rowspan="2" class="ks-chart">
                                                    <div id="ks-projects-progress-chart" class="ks-radial-progress-chart ks-success"></div>
                                                </td>
                                                <td class="ks-statistic-item">
                                                    <span class="ks-amount">1</span>
                                                    <span class="ks-text">Overdue</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-statistic-item">
                                                    <span class="ks-amount">2</span>
                                                    <span class="ks-text">Soon deadline</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card ks-card-widget ks-widget-tasks-table">
                                    <h5 class="card-header">
                                        Important Upcoming Tasks

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">View All Tasks</a>
                                            <a href="#" class="ks-control-icon">
                                                <span class="la la-plus-circle ks-icon"></span>
                                            </a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table ks-table-tasks">
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <div class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input id="c1" type="checkbox" class="custom-control-input">
                                                        <label class="custom-control-label" for="c1"></label>
                                                    </div>
                                                </td>
                                                <td>Create new prototype for the landing page</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-cranberry">Out today</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <div class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input id="c2" type="checkbox" class="custom-control-input">
                                                        <label class="custom-control-label" for="c2"></label>
                                                    </div>
                                                </td>
                                                <td>Add new Google Analitics code to all files</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Due in 3 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <div class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input id="c3" type="checkbox" class="custom-control-input">
                                                        <label class="custom-control-label" for="c3"></label>
                                                    </div>
                                                </td>
                                                <td>Finish dashboard UI Kit</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Due in 5 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <div class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input id="c4" type="checkbox" class="custom-control-input">
                                                        <label class="custom-control-label" for="c4"></label>
                                                    </div>
                                                </td>
                                                <td>Update parallax scroll on team page</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Due in 7 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <div class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input id="c5" type="checkbox" class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="c5"></label>
                                                    </div>
                                                </td>
                                                <td class="ks-cell-checked" colspan="2">Add new Google Analitics code to all files</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 ks-panels-column-section">
                                <div class="card ks-panel ks-widget-activity-stream">
                                    <h5 class="card-header">
                                        Activity Stream
                                    </h5>
                                    <div class="card-block ks-scrollable" data-auto-height data-min-height="260" data-fix-height="32">
                                        <div class="ks-activity-stream-items">
                                            <h4 class="ks-header">Today</h4>

                                            <div class="ks-body">
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-1.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">closed the task in the project <a href="#" class="ks-color-info ks-closed">Website redesign</a></span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-6.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a task
                                                            <a href="#" class="ks-color-success">Do Something</a> to <a href="#" class="ks-color-info">Make a wireframe</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-9.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a task
                                                            <a href="#" class="ks-color-success">UI Kit</a> to <a href="#" class="ks-color-info">Make a wireframe</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-9.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added the comment to <a href="#" class="ks-color-info">Make a wireframe</a></span>
                                                        <div class="ks-comment">
                                                            It had to end sometime. Apple’s incredible growth that saw the company report record quarterly earnings over a span of 13 years was untenable.
                                                            Any one company would be thrilled by the success brought by the Apple II, the Mac, the iPod, the iPhone, or even the iPad.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-1.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">closed the task in the project <a href="#" class="ks-color-info ks-closed">Website redesign</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="ks-header">Yesterday</h4>

                                            <div class="ks-body">
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-6.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a task
                                                            <a href="#" class="ks-color-success">Do Something</a> to <a href="#" class="ks-color-info">Make a wireframe</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-1.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">closed the task in the project <a href="#" class="ks-color-info ks-closed">Website redesign</a></span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-6.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a task
                                                            <a href="#" class="ks-color-success">Do Something</a> to <a href="#" class="ks-color-info">Make a wireframe</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-9.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a task
                                                            <a href="#" class="ks-color-success">UI Kit</a> to <a href="#" class="ks-color-info">Make a wireframe</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-9.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added the comment to <a href="#" class="ks-color-info">Make a wireframe</a></span>
                                                        <div class="ks-comment">
                                                            It had to end sometime. Apple’s incredible growth that saw the company report record quarterly earnings over a span of 13 years was untenable.
                                                            Any one company would be thrilled by the success brought by the Apple II, the Mac, the iPod, the iPhone, or even the iPad.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-1.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">closed the task in the project <a href="#" class="ks-color-info ks-closed">Website redesign</a></span>
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <span class="ks-datetime">6:37 pm</span>
                                                    <img src="assets/img/avatars/avatar-6.jpg" class="ks-avatar" width="36" height="36">
                                                    <div class="ks-action">
                                                        <a href="#" class="ks-name">Anna Vlasova</a>
                                                        <span class="ks-description">added a task
                                                            <a href="#" class="ks-color-success">Do Something</a> to <a href="#" class="ks-color-info">Make a wireframe</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
