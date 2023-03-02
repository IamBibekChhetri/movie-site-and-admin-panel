@extends('admin.layout.master')
@section('content')

<a href="{{route('releaseMovie.create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
  <!-- .card-header -->
  <div class="card-header"> Manage Release Movie </div><!-- /.card-header -->
  <!-- .card-body -->
  <div class="card-body">
    <!-- .table -->
    <table id="dataTables" class="table">
      <!-- thead -->
      <thead>
        <tr>
          <th> SN </th>
          <th> Movie Poster </th>
          <th> category </th>
          <th> Title </th>
          <th> Actor </th>
          <th> Description </th>
          <th> Time </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead><!-- /thead -->
      <tbody>
        @foreach($releaseMovie as $releaseMovies)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{asset('public/image/releaseMovie/'.$releaseMovies->poster)}}" alt="" height="50px"></td>
          <td>{{$releaseMovies->category->name}}</td>
          <td>{{$releaseMovies->title}}</td>
          <td>{{$releaseMovies->actor}}</td>
          <td>{{$releaseMovies->description}}</td>
          <td>{{$releaseMovies->time}}</td>
          <td>{{$releaseMovies->status}}</td>
          <td class="centre" style="display:flex;">

            @if($releaseMovies['status']=='on')
            <a href="{{ url('releaseMovie/offStatus',$releaseMovies->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

            @else($releaseMovies['status']=='off')
            <a href="{{ url('releaseMovie/onStatus',$releaseMovies->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

            @endif
            &nbsp;
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewreleaseMovie{{$releaseMovies->id}}"><i class="fas fa-eye"></i></button>
            &nbsp;
            <a href="{{ route('releaseMovie.edit',$releaseMovies->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
            &nbsp;
            <form action="{{ route('releaseMovie.destroy',$releaseMovies->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <div class="modal fade" id="viewreleaseMovie{{$releaseMovies->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Displaying Release Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">

                <div class="form-group">
                  <label>Category</label><br>
                  {{$releaseMovies->category->name}}
                </div>

                <hr>

                <div class="form-group">
                  <label>Movie Name</label><br>
                  {{$releaseMovies->name}}
                </div>


                <hr>


                <div class="form-group">
                  <label>Total Released Movie</label><br>
                  {{$releaseMovies->count()}}
                </div>

                <hr>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
          @endforeach
      </tbody>
    </table><!-- /.table -->
  </div><!-- /.card-body -->
</div><!-- /.card -->
@endsection