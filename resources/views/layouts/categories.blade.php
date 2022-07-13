@extends('panel')
@section('content')
    <section class="bg-light" style="width: 78%">
        @if (!empty($id))
            <div class="modal" id="myModal" style="display: block;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('editcategories', ['id' => $id]) }}" method="POST">
                                @csrf
                                <div class="d-flex w-100">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Enter the category name"
                                            name="name" value="{{ $id->name }}">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Understood</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div style="padding: 33px 30px 15px 30px">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
                <form action="{{ route('storecategories') }}" method="POST">
                    @csrf
                    <div class="d-flex w-100">
                        <div class="col-md-11">
                            <input type="text" class="form-control" placeholder="Enter the category name" name="name">
                        </div>
                        <button type="submit" class="btn btn-outline-success col-md-1 pr-1">Submit</button>
                    </div>
                </form>
            </div>
            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100">
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="column1">ID</th>
                                        <th class="column2">Name</th>
                                        <th class="column3">Created</th>
                                        <th class="column3">Updated</th>
                                        <th class="column4">Edit</th>
                                        <th class="column5">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $list)
                                        <tr>
                                            <td class="column1">{{ $list->id }}</td>
                                            <td class="column2">{{ $list->name }}</td>
                                            <td class="column3">{{ $list->created_at }}</td>
                                            <td class="column3">{{ $list->updated_at }}</td>
                                            <td class="column4"><a href="/categories/update/{{ $list->id }}"
                                                    onclick="" class="btn btn-info"><i class="far fa-edit"></i> Edit</a>
                                            </td>
                                            <td class="column5"><a href="/categories/delete/{{ $list->id }}"
                                                    onclick="return confirm('Are you sure to remove <{{ $list->name }}> category?')"
                                                    class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
