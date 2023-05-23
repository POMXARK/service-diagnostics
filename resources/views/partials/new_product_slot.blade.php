<tr>
    <td>{{ $product }}</td>
    <td><img src="{{ asset( $image )}}) }}" alt="" class="img-20"></td>
    <td>
        <div><label class="badge bg-light-danger">{{ $status }}</label></div>
    </td>
    <td>{{ $price }}</td>
    <td>
        <a href="{{ $edit }}">
            <i class="icon feather icon-edit f-16 text-success"></i>
        </a>
        <a href="{{ $delete }}">
            <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
        </a>
    </td>
</tr>
