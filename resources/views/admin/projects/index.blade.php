
  @extends('admin/layouts.admin')

  @section('content')


     <link href="{{ asset('assets/styles/apps/projects/grid-board.min.css') }}" rel="stylesheet">

    <div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Projects</h3>
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-page-content-body ks-projects-grid-board">
                <div class="ks-projects-grid-board-projects">
                    <div class="ks-projects-grid-board-header">
                        <div class="ks-search">
                            <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                <span class="icon-addon">
                                    <span class="la la-search"></span>
                                </span>
                            </div>
                        </div>
                        <div class="ks-controls">
                            <div class="dropdown ks-dropdown-filter">
                                <button class="btn btn-outline-primary ks-light dropdown-toggle ks-no-text" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="la la-filter ks-icon"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <div class="ks-header">Filters</div>
                                    <form class="ks-filters">
                                        <div class="custom-control custom-checkbox ks-filter">
                                            <input id="c1" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="c1">Design</label>
                                        </div>
                                        <div class="custom-control custom-checkbox ks-filter">
                                            <input id="c2" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="c2">Development</label>
                                        </div>
                                        <div class="custom-control custom-checkbox ks-filter">
                                            <input id="c3" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="c3">Front-End</label>
                                        </div>
                                        <div class="custom-control custom-checkbox ks-filter">
                                            <input id="c4" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="c4">Marketing</label>
                                        </div>
                                        <button type="reset" class="btn btn-outline-primary btn-block ks-light">Clear</button>
                                    </form>
                                </div>
                            </div>
                            <a href="{{route('projects.create')}}">
                            <button class="btn btn-primary">

                                <span class="la la-plus ks-icon"></span>
                                <span class="ks-text">Add project</span>
                            </button></a>
                        </div>
                    </div>
                    <div class="ks-projects-grid-board-body ks-scrollable">
                        <div class="ks-scroll-wrapper ks-rows-section">
                            <div class="row"> 
                                @foreach( $projects as $row)  
                                <div class="col-xl-4 col-lg-12">
                                    <div class="card panel panel-default ks-project">
                                        <div class="ks-project-header">
                                            <a href="#" class="la la-star ks-favorite ks-active"></a>
                                            <div class="dropdown ks-control">
                                                <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="la la-ellipsis-h ks-icon"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Add Card</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ks-project-body">
                                            <a href="{{url('projectdetail/'.$row->id)}}" class="ks-name">
                                                <img src="assets/img/avatars/avatar-7.jpg" width="55" height="55" class="ks-image">
                                                <span class="ks-text">{{ $row->name }}</span>
                                            </a>
                                            <div class="ks-description" style="max-height:50px; height:50px ;overflow:hidden">
                                            
                                            {{ $row->description }}
                                            </div>
                                            <div class="ks-meta">
                                                <div class="ks-item">
                                                    <div class="ks-name">
                                                        Deadline
                                                    </div>
                                                    <div class="ks-description">
                                                    {{ $row->end_date }}
                                                    </div>
                                                </div>
                                                <div class="ks-item">
                                                    <div class="ks-name">
                                                        Progress
                                                    </div>
                                                    <div class="ks-description">
                                                        <div class="ks-progress ks-progress-inline">
                                                            <div class="progress ks-progress-xs">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="ks-amount">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ks-item ks-images"style="max-height:50px; height:50px">
                                                    <div class="ks-name">
                                                        Project Owner
                                                    </div>
                                                   
                                                    
                                                    <div class="ks-description">
                                                    {{ $row->uname }}
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="ks-tags"style="max-height:50px; height:50px">
                                                <span class="badge badge-success-outline">Design</span>
                                                <span class="badge badge-info-outline">Development</span>
                                                <span class="badge badge-pink-outline">front-end</span>
                                                <span class="badge badge-info-outline">Development</span>
                                            </div>
                                            <div class="ks-controls">
                                                <a href="#" class="ks-control" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comments">
                                                    <span class="la la-comment-o ks-icon"></span>
                                                    <span class="ks-amount">2</span>
                                                </a>
                                                <a href="#" class="ks-control" data-toggle="tooltip" data-placement="top" title="" data-original-title="Documents">
                                                    <span class="la la-file-o ks-icon"></span>
                                                    <span class="ks-amount">16</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="ks-projects-grid-board-tasks">
                    <div class="ks-projects-grid-board-tasks-list">
                        <div class="ks-projects-grid-board-tasks-header">
                            <span class="ks-text">Today’s tasks</span>
                            <div class="ks-progress ks-progress-inline">
                                <div class="progress ks-progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="ks-amount">75%</span>
                            </div>
                        </div>
                        <div class="ks-projects-grid-board-tasks-body ks-scrollable">
                            <div class="jspPane-padding">
                                <div class="custom-control custom-checkbox ks-checkbox ks-checkbox-success">
                                    <input id="c5" type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label" for="c5">Meeting CEO</label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <table class="ks-projects-grid-board-tasks-statistics">
                        <tr>
                            <td rowspan="2" class="ks-chart">
                                <div id="ks-projects-progress-chart" class="ks-radial-progress-chart ks-purple"></div>
                            </td>
                            <td class="ks-statistic-item">
                                <span class="ks-amount">22</span>
                                <span class="ks-text">projects finished</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ks-statistic-item">
                                <span class="ks-amount">4</span>
                                <span class="ks-text">projects in progress</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
