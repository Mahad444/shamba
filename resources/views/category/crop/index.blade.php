<x-admin-master>
    @section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

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
            <th>Crop Id</th>
            <th>Crop Name</th>
            <th>Farmer's Note</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Crop Id</th>
            <th>Crop Name</th>
            <th>Farmer's Note</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($crops as $crop)
          <tr>
            <td>{{$crop->id}}</td>
            <td>{{$crop->name}}</td>
            <td>{{Str::Limit($crop->farmers_note,40,'...')}}</td>
            {{-- <td>
              <button class="btn btn-primary">
                <a href="{{route('crop.edit',$crop->id)}}" class="text-light">update</a>
              </button>
            </td> --}}
            <td>
              <form action="{{route('crop.destroy',$crop->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

    @endsection
</x-admin-master>