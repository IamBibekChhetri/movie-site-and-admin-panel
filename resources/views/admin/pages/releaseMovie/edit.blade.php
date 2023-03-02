@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->
  <div id="base-style" class="card">
    <!-- .card-body -->
      <!-- .form -->
      <form action="{{route('releaseMovie.update',$releaseMovie->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- .fieldset -->
        <div class="row page-section">
          <legend>releaseMovie Manage</legend> <!-- .form-group -->
          <div class="col-md-10 mb-3">
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
          <label class="control-label" for="select2-single">Select category</label>
          <abbr title="Required">*</abbr>
          <select id="select2-single" class="form-control" data-toggle="select2" name="category_id" data-placeholder="Select a category" data-allow-clear="true">
            @foreach ($category as $categorys)
            <option value="{{$categorys->id}}">{{$categorys->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Movie Title</label>
          <abbr title="Required">*</abbr>
          <input type="text" class="form-control" id="tfDefault" value="{{$releaseMovie->title}}" name="title" placeholder="Enter releaseMovie Name">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Actor Name</label>
          <abbr title="Required">*</abbr>
          <input type="text" class="form-control" id="tfDefault" value="{{$releaseMovie->actor}}" name="actor" placeholder="Enter Actor Name">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Released In:</label>
          <abbr title="Required">*</abbr>
          <input type="datetime-local" class="form-control" id="tfDefault" name="time" value="{{$releaseMovie->time}}">
        </div><!-- /.form-group -->

          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label for="tf3">Poster</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="tf3" name="poster"> <label class="custom-file-label" for="tf3">Choose file</label>
              <img src="../../../public/image/releaseMovie/{{ $releaseMovie->poster }}" height="50px" width="50px">
            </div>
          </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-12 mb-3">
          <label for="tf6">Description</label>
          <abbr title="Required">*</abbr>
          <textarea class="form-control" id="tf6" rows="4" name="description" placeholder="Movie Description">{{$releaseMovie->description}}</textarea>
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