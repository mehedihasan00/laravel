<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <b>All Image</b>
        
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
              <div class="card-header">All Image</div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Image</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- @php($i=1) -->
                    <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td><img src="" style="height: 40px; width: 60px"></td>
                      <td>
                        
                      </td>
                      <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">Add Images</div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="multiImageName" class="form-label">Images Name</label>
                    <input type="text" name="multiImageName" class="form-control" id="multiImageName" aria-describedby="multiImageName">
                    @error('multiImageName')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="multiImage" class="form-label">multiImage</label>
                    <input type="file" name="multiImage" class="form-control" id="multiImage" aria-describedby="multiImage">
                    @error('multiImage')
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
