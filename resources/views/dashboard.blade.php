@extends('/layout.main')

@section('content')

  <div class="col-12">
    <div class="card my-32 mx-14">
      <div class="card-body mx-10">
        <h2 class="card-title mb-3 text-4xl">Dashboard</h2>
        <h4 class="text-xl">Welcome back, Admin</h4>
        <div class="my-24">
          <div class="container my-16 mx-auto text-center">
            <a class="border-4 border-cyan-300 text-center align-middle m-10 py-3 px-72 rounded-3xl text-xl font-bold hover:bg-cyan-300  hover:text-black" href="/dashboard/manageUser">Manage User</a>                      
          </div>
          <div class="container my-16 mx-auto text-center">
            <a class="border-4 border-cyan-300 text-center align-middle m-10 py-3 px-72 rounded-3xl text-xl font-bold hover:bg-cyan-300  hover:text-black" href="/dashboard/manageMovie">Manage Movie</a>                      
          </div>
          <div class="container my-16 mx-auto text-center">
            <a class="border-4 border-cyan-300 text-center align-middle m-10 py-3 px-72 rounded-3xl text-xl font-bold hover:bg-cyan-300  hover:text-black" href="/dashboard/manageTicket">Manage Ticket</a>                      
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection