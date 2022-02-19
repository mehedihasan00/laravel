<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <!-- {{ __('Dashboard') }} -->
      All Faculty<b></b>
        
    </h2>
  </x-slot>

  <div class="py-12">
    <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
      <!-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <x-jet-welcome />
      </div> -->
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session('success') }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
              <div class="card-header">All Facutly</div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Faculty Name</th>
                      <th scope="col">Faculty Image</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- @php($i=1) -->
                    @foreach($feculties as $feculty)
                    <tr>
                      <th scope="row">{{ $feculties->firstItem()+$loop->index }}</th>
                      <td>{{ $feculty->feculty_name }}</td>
                      <td><img src="{{ asset($feculty->feculty_image) }}" style="height: 40px; width: 60px"></td>
                      <td>
                        @if($feculty->created_at == NULL)
                        <span class="text-danger">No date set</span>
                        @else
                        {{ Carbon\Carbon::parse($feculty->created_at)->diffForHumans() }}
                        @endif
                      </td>
                      <td>
                        <a href="{{ url('feculty/edit/'.$feculty->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('feculty/delete/'.$feculty->id) }}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr> 
                    @endforeach   
                  </tbody>
                </table>
                {{ $feculties->links() }}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">Add Faculty</div>
              <div class="card-body">
                <form action="{{ route('store.feculty') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Faculty Name</label>
                    <input type="text" name="feculty_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('feculty_name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Faculty image</label>
                    <input type="file" name="feculty_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('feculty_image')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Add Faculty</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- </div> -->

     
    <!-- End Trash -->
  </div>
</x-app-layout>
