<x-admin-master>
@section('content')

@if(session('delMsg'))
<div class="alert alert-danger">{{session('delMsg')}}</div>
@elseif(session('updateMsg'))
<div class="alert alert-success">{{session('updateMsg')}}</div>
@endif
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Animals Table</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Animal ID</th>
            <th>Animal Name</th>
            <th>Quantity</th>
            <th>Farmers note</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>Animal ID</th>
            <th>Animal Name</th>
            <th>Quantity</th>
            <th>Farmers note</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </tfoot>

        @foreach($animals as $animal)
        <tbody>
          <tr>

            <td>{{$animal->id}}</td>
            <td>{{$animal->name}}</td>
            <td>{{$animal->quantity}}</td>
            <td>{{Str::Limit($animal->farmers_note,40,'...')}}</td>
            
            <td>
            @can('update',$animal)
              <button class="btn btn-primary">
                <a href="{{route('animal.edit',$animal->id)}}" class="text-light">update</a>
              </button>
            @endcan
    
            </td>
            
            <td>                            
                <form method="post" action="{{route('animal.destroy',$animal->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

          </tr>
        </tbody>
        @endforeach

      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



@endsection
</x-admin-master>