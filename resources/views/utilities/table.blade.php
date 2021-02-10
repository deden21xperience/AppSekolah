<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href=""><i class="fas fa-plus"></i>Tambah data</a>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          @foreach ($item_judul as $judul => $value)
          <th>
            {{ $value}}
          </th>
          @endforeach
        </tr>
      </thead>
      <tbody>

        @foreach ($item_data as $item)
        <tr>
          <td>{{$item}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>