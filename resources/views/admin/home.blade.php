@extends('admin.app')
@section('content')
<style type="text/css">
  table tr td a{
    color: black;
  }
</style>
<!-- Main content -->
<section class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="font-size: 30px;">List of BLogs</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Blogs</th>
              <th class="text-center">Brief description</th>
              <th colspan="2"></th>
            </tr>
            </thead>
            <tbody>
              @foreach ($blogs as $blog)
            <tr>
              <td>{{$blog->title}}</td>
              <td>{{$blog->description}}</td>
              <td><a href="{{ route('blog.edit', $blog->id)}}"><span class="glyphicon glyphicon-edit">Edit</span></a></td>
              
              <form id="delete-form-{{ $blog->id }}" method="POST" action="{{ route('blog.destroy', $blog->id) }}" style="display: none;">
                @csrf
                {{ method_field('DELETE') }}
              </form>
              <td><a href="" onclick="if(confirm('Delete this item???')){event.preventDefault();document.getElementById('delete-form-{{ $blog->id }}').submit();}else{event.preventDefault();}"><span class="glyphicon glyphicon-trash">Delete</span></a></td>
            </tr>
              @endforeach
  
            </tbody>
            <tfoot>
            <tr>
              <th>Blogs</th>
              <th>Brief description</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection