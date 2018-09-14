@extends('admin/layouts.admin')

  @section('content')

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


<div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Create New Project</h3>
            </section>
        </div>

        <div class="ks-page-content">
            <form action="{{ route('projects.store') }}" method="POST">
            @csrf
                <div class="ks-page-content-body ks-content-nav">
                    
                    <div class="ks-nav-body">
                        <div class="ks-nav-body-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3">
                                            <h4 id="form-validation-basic-demo">Project Category</h4>
                                            <div class="card panel">
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <label>Select Project Category</label>
                                                        @foreach( $category as $row)
                                                        <div>                                                            
                                                            <div class="custom-control custom-checkbox">
                                                                <input value ="{{ $row->id }}" id="{{ $row->id }}" type="checkbox" class="custom-control-input" name="p_category[]" 
                                                                    data-validation="checkbox_group"
                                                                    data-validation-qty="1-3">
                                                                <label class="custom-control-label" for="{{ $row->id }}">{{ $row->name }}</label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 id="form-validation-basic-demo">Project Owner</h4>
                                            <div class="card panel">
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <label>Select Project Owner</label>
                                                        <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="p_owner">
                                                        <option>Project Owner</option>
                                                        @foreach( $users as $row)                                                        
                                                        <option value = "{{ $row->id }}"><!-- // take id from db -->
                                                            {{ $row->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>                            
                                    <!-- <div class="col-lg-4">
                                        <h4 id="form-validation-basic-demo">Project Client's Details</h4>
                                        <div class="card panel">
                                            <div class="card-block">
                                            
                                                    <div class="form-group">
                                                        <label>Client's Name</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            placeholder="Clients Name"
                                                            data-validation="length alphanumeric"
                                                            data-validation-length="3-12"
                                                            data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label>Tittle</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            placeholder="Tittle"
                                                            data-validation="length alphanumeric"
                                                            data-validation-length="3-12"
                                                            data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            placeholder="Company Name"
                                                            data-validation="length alphanumeric"
                                                            data-validation-length="3-12"
                                                            data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Country"
                                                            data-validation="country">
                                                    </div>                                                
                                                                                                    
                                            </div>
                                        </div>    
                                    </div> -->
                                    <div class="col-lg-5">
                                        <h4 id="form-validation-length">    Project Details</h4>
                                        <div class="card panel">
                                            <div class="card-block">
                                            
                                                    <div class="form-group">
                                                        <label>Project Name</label>
                                                        <input type="text" class="form-control" aria-describedby="emailHelp" 
                                                        placeholder="Enter project name" data-validation="name"
                                                        name="name">
                                                        
                                                    </div>                                                    
                                                    
                                                    <div class="form-group">
                                                    <label>Client Name</label>
                                                        <select class="form-control" name="client">
                                                            <option>Select Client's Name</option>
                                                            @foreach( $client as $row)                                                        
                                                            <option value = "{{ $row->id }}"><!-- // take id from db -->
                                                                {{ $row->cname }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Start date</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Start date"
                                                            name="start_date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deadline Date</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Deadline date"
                                                            name="end_date">
                                                    </div>                                                
                                                    <div class="form-group">
                                                        <label>Project Descriptions (<span id="ks-maxlength-label">500</span> characters left)</label>
                                                        <textarea rows="3" id="ks-maxlength-area" class="form-control"
                                                        name="description"></textarea>
                                                    </div> 
                                                    <div class="form-group row">
                                                        <label for="default-input-rounded" class="col-sm-2 form-control-label">Project File</label>
                                                        <div class="col-sm-10">
                                                            <label class="btn btn-primary ks-btn-file">
                                                                <span class="la la-cloud-upload ks-icon"></span>
                                                                <span class="ks-text">Choose file</span>
                                                                <input type="file">
                                                            </label>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ks-form-column-steps-controls ks-space-between">                       
                        <button class="btn btn-primary ks-next">Submit</button>
                    </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>

  @endsection