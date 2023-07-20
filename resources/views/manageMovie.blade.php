@extends('/layout.main')

@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <div class="mb-5">
        <h2 class="card-title text-4xl ml-3">Manage Movie</h2>
      </div>
      <div class="mx-10 mb-10">
        <table class="w-full">
          <tr>
            <td class="w-1/2">
              <form class="mt-2 mt-md-0 text-white  d-none d-lg-flex">
                <input class="w-9/12 text-white bg-transparent border-2 border-gray-600 px-3 py-2 rounded-md focus:border-cyan-300 hover:border-cyan-300 form-control " type="text" placeholder="Search products">
              </form>
            </td>
            <td>
              <a class="float-right mr-10 px-10 py-2 border-2 rounded-md border-cyan-300 hover:bg-cyan-300 hover:text-blue-950 hover:font-bold" href="">Tambah</a>
            </td>
          </tr>
        </table>
      </div>
      <table class="w-full mx-2 border-gray-700">
        <thead class="bg-cyan-300 text-black font-semibold py-3 pt-10 text-xl text-center">
          <td class="py-2 rounded-s-2xl">No</td>
          <td>Title</td>
          <td>Genre</td>
          <td>Rating</td>
          <td>Poster</td>
          <td class="rounded-e-2xl">Action</td>
        </thead>
        <tbody class="text-center">
          <tr class="border-b-2">
            <td class="py-4">1</td>
            <td>Halim</td>
            <td>Halim123</td>
            <td>12/09/2003</td>
            <td>
              <img class="w-36 mx-auto my-2 rounded-md" src="{{ mix('/resources/img/poster/pt_insidious_the_red_door.png') }}" alt="">
            </td>
            <td>
              <br>
              <a class="py-2 px-4 border-2 rounded-2xl border-green-500 hover:bg-green-500 hover:text-white" href="">Edit</a><br><br>
              <a class="py-2 px-4 border-2 rounded-2xl border-red-500 hover:bg-red-500 hover:text-white" href="">Hapus</a><br><br>
            </td>
          </tr>
          <tr class="border-b-2">
            <td class="py-4">2</td>
            <td>Halim</td>
            <td>Halim123</td>
            <td>12/09/2003</td>
            <td>
              <img class="w-36 mx-auto my-2 rounded-md" src="{{ mix('/resources/img/poster/pt_insidious_the_red_door.png') }}" alt="">
            </td>
            <td>
              <br>
              <a class="py-2 px-4 border-2 rounded-2xl border-green-500 hover:bg-green-500 hover:text-white" href="">Edit</a><br><br>
              <a class="py-2 px-4 border-2 rounded-2xl border-red-500 hover:bg-red-500 hover:text-white" href="">Hapus</a><br><br>
            </td>
          </tr>
          <tr class="border-b-2">
            <td class="py-4">3</td>
            <td>Halim</td>
            <td>Halim123</td>
            <td>12/09/2003</td>
            <td >
              <img class="w-36 mx-auto my-2 rounded-md" src="{{ mix('/resources/img/poster/pt_insidious_the_red_door.png') }}" alt="">
            </td>
            <td>
              <br>
              <a class="py-2 px-4 border-2 rounded-2xl border-green-500 hover:bg-green-500 hover:text-white" href="">Edit</a><br><br>
              <a class="py-2 px-4 border-2 rounded-2xl border-red-500 hover:bg-red-500 hover:text-white" href="">Hapus</a><br><br>
            </td>
          </tr>
        </tbody>
      </table>
      
      
    </div>
  </div>
</div>
@endsection