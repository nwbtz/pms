@extends('layouts.calendar')

@section('style')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}"> <!-- Original -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/fullcalendar/fullcalendar.min.css')}}"> <!-- Original -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/libs/fullcalendar/fullcalendar.min.css')}}"> <!-- Customization -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/apps/calendar.min.css')}}"> <!-- Customization -->



@endsection

@section('content')

 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

<!-- Row -->
     
    <!-- <div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Calendar</h3>

                <div class="ks-controls">
                    <nav class="breadcrumb ks-default">
                        <a class="breadcrumb-item ks-breadcrumb-icon" href="#">
                            <span class="la la-home ks-icon"></span>
                        </a>
                        <a class="breadcrumb-item" href="#">Apps</a>
                        <span class="breadcrumb-item active" href="#">Calendar</span>
                    </nav>

                    <button class="btn btn-outline-primary ks-light ks-calendar-info-block-toggle" data-block-toggle=".ks-calendar-container > .ks-info">Info</button>
                </div>
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-calendar">
                <div class="ks-calendar-body">
                    <div class="ks-calendar-container">
                        <div class="ks-calendar-container-wrap">
                    {!! $calendar->calendar() !!}
                </div>
</div> -->
<!-- </div>
</div>
</div>
</div> -->
<div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Calendar</h3>

                <div class="ks-controls">
                    <nav class="breadcrumb ks-default">
                        <a class="breadcrumb-item ks-breadcrumb-icon" href="#">
                            <span class="la la-home ks-icon"></span>
                        </a>
                        <a class="breadcrumb-item" href="#">Apps</a>
                        <span class="breadcrumb-item active" href="#">Calendar</span>
                    </nav>

                    <button class="btn btn-outline-primary ks-light ks-calendar-info-block-toggle" data-block-toggle=".ks-calendar-container > .ks-info">Info</button>
                </div>
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-calendar">
                <div class="ks-calendar-body">
                    <div class="ks-calendar-container">
                        <div class="ks-calendar-container-wrap">
                            <div id="ks-calendar">
                            {!! $calendar->calendar() !!}
                            </div>
                        </div>

                        <div class="ks-calendar-container-info" data-auto-height>
                            <div class="ks-datepicker">
                                <div class="flatpickr" data-inline=true>           
                                </div>
                            </div>
                            <div class="ks-events">
                                <div class="ks-header">
                                    <span class="ks-text">Events</span>
                                    <a href="#" class="ks-control"><span class="ks-icon">+</span></a>
                                </div>
                                <div class="ks-body">
                                    <ul>
                                        <li class="ks-primary">
                                            <a>Primary event</a>
                                        </li>
                                        <li class="ks-danger">
                                            <a>All day event</a>
                                        </li>
                                        <li class="ks-warning">
                                            <a>Birthday party</a>
                                        </li>
                                        <li class="ks-success">
                                            <a>Repeating event</a>
                                        </li>
                                        <li class="ks-info">
                                            <a>Meeting</a>
                                        </li>
                                        <li class="ks-grey">
                                            <a>Launch</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ks-statistics">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="ks-amount">8</span>
                                            <span class="ks-status">Open</span>
                                        </td>
                                        <td>
                                            <span class="ks-amount">5</span>
                                            <span class="ks-status">Calls Out</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="ks-amount">1,204</span>
                                            <span class="ks-status">Scheduled</span>
                                        </td>
                                        <td>
                                            <span class="ks-amount">129</span>
                                            <span class="ks-status">Checked In</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="ks-amount">530</span>
                                            <span class="ks-status">Closed</span>
                                        </td>
                                        <td>
                                            <span class="ks-amount">17</span>
                                            <span class="ks-status">Missed</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script') 

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

 <!-- <script >
      $('.ks-datepicker .flatpickr').flatpickr();

if (Response.band(0, 780) || Response.wave(0, 790)) {
    Kosmo.makeScrollable('.ks-calendar-container > .ks-info');
}
});
     </script> -->

{!! $calendar->script() !!}
@endsection