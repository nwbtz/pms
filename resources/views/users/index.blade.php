@extends('layouts.admin')

@section('content')

<!-- Bootstrap Colorpicker CSS -->

     <link href="{{ asset('assets/libs/datatables-net/media/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/libs/datatables-net/extensions/buttons/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">





    <div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Employees</h3>

                <div class="ks-controls">
                    <nav class="breadcrumb ks-default">
                        <a class="breadcrumb-item ks-breadcrumb-icon" href="index.html">
                            <span class="la la-home ks-icon"></span>
                        </a>
                        <a href="#" class="breadcrumb-item">Add User</a>
                        <span class="breadcrumb-item active" href="#">Add Department</span>
                    </nav>
                    <button class="btn btn-outline-primary ks-light ks-content-nav-toggle" data-block-toggle=".ks-content-nav > .ks-nav">Menu</button>
                </div>
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-page-content-body ks-content-nav">
                <div class="ks-nav">
                    <ul class="m-menu is-collapsed">

                         @foreach ($department as $row)
                         <li class="m-menu__item">
                         <a href="{{ url('deptusers/'.$row->dept_id) }}" class="m-menu__toggle"> {{ $row->dept_name }}</a>
                         </li>
                     @endforeach
   
    
   
</ul>
                </div>
                <div class="ks-nav-body">
                    <div class="ks-nav-body-wrapper">
                        <div class="container-fluid">
                            <table id="ks-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>

                      
                       
                        </tfoot>
                        <tbody>
                     @foreach ($users as $row)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td><a href="#">{{ $row->name }}</a></td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->dept_name }} </td>
                            <td>{{ $row->status }} </td>
                            <td>
                                <form action="{{ route('users.destroy' ,$row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete"  ><i class="fa fa-user"></i>Delete</button>
                                </form>
                         </td>
                        </tr>
                         @endforeach
                      
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  


     <script src="{{ asset('assets/libs/datatables-net/media/js/jquery.dataTables.min.js') }}" ></script>
     <script src="{{ asset('assets/libs/datatables-net/media/js/dataTables.bootstrap4.min.js') }}" ></script>
     <script src="{{ asset('assets/libs/datatables-net/extensions/buttons/js/dataTables.buttons.min.js') }}" ></script>
     <script src="{{ asset('assets/libs/datatables-net/extensions/buttons/js/buttons.bootstrap4.min.js') }}" defer></script>
     <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
     <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}" defer></script>
     <script src="{{ asset('assets/libs/datatables-net/extensions/buttons/js/buttons.html5.min.js') }}" defer></script>
     <script src="{{ asset('assets/libs/datatables-net/extensions/buttons/js/buttons.print.min.js') }}" defer></script>
     <script src="{{ asset('assets/libs/datatables-net/extensions/buttons/js/buttons.colVis.min.js') }}" defer></script>

     <script type="application/javascript">
(function ($) {
    $(document).ready(function() {
        var table = $('#ks-datatable').DataTable({
            lengthChange: false,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'colvis'
            ],
            initComplete: function () {
                $('.dataTables_wrapper select').select2({
                    minimumResultsForSearch: Infinity
                });
            }
        });

        table.buttons().container().appendTo( '#ks-datatable_wrapper .col-md-6:eq(0)' );
    });
})(jQuery);
</script>



@endsection
