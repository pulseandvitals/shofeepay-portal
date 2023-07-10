<section>
    <table class="table datatable">
        <thead>
          <tr>
              <th scope="col">Item No.</th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Store</th>
              <th scope="col">Published</th>
              <th scope="col">Availability</th>
              <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
          <tr>
            <th scope="row">
              <div class="fw-bold">
                {{ $item->item_number }}
              </div>
            </th>
            <td>{{ $item->item_name }}</td>
            <td>{{ $item->item_quantity }}</td>
            <td>{{ $item->store->store_name ?? '' }}</td>
            <td>
              <div class="text-muted">
                {{ $item->item_date }}
              </div>
            </td>
            <td>
              <div class="text text-light {{ $item->is_available ? 'badge bg-success' : '' }}">
                {{ $item->is_available ? 'Available' : '' }}
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-end">
                <button class="btn btn-light" title="View item">
                <i class="bi bi-eye"> </i>
              </button>
              <div class="d-flex justify-content-end" title="Edit item">
                <button class="btn btn-light">
                  <i class="bi bi-pencil-square"> </i>
                </button>
                <button class="btn btn-light" title="Delete item"
                  onclick="return confirm('Do you want to delete this?')">
                  <i class="bi bi-trash"> </i>
                </button>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</section>

