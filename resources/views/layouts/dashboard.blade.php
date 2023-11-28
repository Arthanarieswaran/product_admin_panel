<table class="table">
    <thead>
      <tr>
        <th scope="col">sno</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->product_img }}</td>

            <td><img style="height:10vh;width:10vh;" class="bd-placeholder-img"src="{{ url('image/'.$item->product_img) }}"></td>
            {{-- <td>{{ $item->section }}</td> --}}
            <td>
                <a href="/update" class="btn btn-primary btn-sm">Edit</a>
            </td>
            <td>
                <a href="/delete" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
