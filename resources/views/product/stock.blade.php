@extends('layouts.master')

@section('main')
    <div id="main">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <button type="button" class="btn shadow btn-outline-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Add +
            </button>

            <!-- Modal ADD DATA -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action={{ url('/store-stock') }} enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Name *</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                                        placeholder="Name">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Stock *</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Stock" name="stock">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Price *</label>
                                    <input type="number" name="price" class="form-control" id="formGroupExampleInput"
                                        placeholder="price">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Description *</label>
                                    <input type="text" name="desc" class="form-control" id="formGroupExampleInput"
                                        placeholder="Description">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal ADD DATA -->

            {{-- Modal Edit Data --}}
            @foreach ($data as $d)
                <div class="modal fade" id="edit-keluar{{ $d->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action={{ url('/stock/edit/' . $d->id) }} method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Name *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Input Name" name="name"
                                            value="{{ $d->name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Stock *</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Input Stock" name="stock" value="{{ $d->stock }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Price *</label>
                                        <input type="text" min="1" name="spl_address" class="form-control"
                                            id="formGroupExampleInput" placeholder="Input Address"
                                            onkeyup="formatbaru(event)" autocomplete="off" value="{{ $d->price }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Description *</label>
                                        <input type="text" min="1" name="desc" class="form-control"
                                            id="formGroupExampleInput" placeholder="Input Description"
                                            onkeyup="formatbaru(event)" autocomplete="off" value="{{ $d->desc }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Modal Edit Data --}}

            {{-- Modal Delete --}}
            @foreach ($data as $d)
                <div class="modal fade" id="delete-keluar{{ $d->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action={{ url('/stock/delete/' . $d->id) }} method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <center class="mt-3">
                                        <h5>
                                            Do you want to delete this data?
                                        </h5>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Modal Delete --}}
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->stock }}</td>
                                <td>{{ $p->price }}</td>
                                <td>{{ $p->desc }}</td>
                                <td>
                                    <a class="btn shadow btn-outline-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#edit-keluar{{ $p->id }}"><i class="badge-circle badge-circle-ligh font-medium-1"
                                            data-feather="edit"></i></a>

                                    <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#delete-keluar{{ $p->id }}"><i class="badge-circle badge-circle-ligh font-medium-1"
                                            data-feather="trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ url('/assets/js/bootstrap.js') }}"></script>
    <script src="{{ url('/assets/js/app.js') }}"></script>

    <script src="{{ url('/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ url('/assets/js/pages/simple-datatables.js') }}"></script>
@endsection
