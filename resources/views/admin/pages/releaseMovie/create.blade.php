@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div id="base-style" class="card">
    <!-- .card-body -->
    <!-- .form -->
    <form action="{{route('releaseMovie.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <!-- .fieldset -->
      <div class="row page-section">
        <legend>Release Movie Manage</legend> <!-- .form-group -->
        <div class="col-md-12 mb-3">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="control-label" for="select2-single">Select Category</label>
          <abbr title="Required">*</abbr>
          <select id="select2-single" class="form-control" data-toggle="select2" name="category_id" data-placeholder="Select a Category" data-allow-clear="true">
            @foreach ($category as $categorys)
            <option value="{{$categorys->id}}">{{$categorys->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Movie Title</label>
          <abbr title="Required">*</abbr>
          <input type="text" class="form-control" id="tfDefault" name="title" placeholder="Enter releaseMovie Name">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Actor Name</label>
          <abbr title="Required">*</abbr>
          <input type="text" class="form-control" id="tfDefault" name="actor" placeholder="Enter Actor Name">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Released In:</label>
          <abbr title="Required">*</abbr>
          <input type="datetime-local" class="form-control" id="tfDefault" name="time">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label for="tf3">Poster</label>
          <abbr title="Required">*</abbr>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="tf3" name="poster"><label class="custom-file-label" for="tf3">Choose file</label>
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-12 mb-3">
          <label for="tf6">Description</label>
          <abbr title="Required">*</abbr>
          <textarea class="form-control" id="tf6" rows="4" name="description" placeholder="Movie Description"></textarea>
        </div><!-- /.form-group -->

        <div class="col-md-12 mb-3">
          <span>Is Active:</span>
          <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>
        </div><!-- /.form-group -->
      </div><!-- /.fieldset -->
      <div class="form-actions">
        <button class="btn btn-primary" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
      </div>
  </div>
  </form><!-- /.form -->

</div>
</div>


@endsection