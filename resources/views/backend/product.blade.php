@extends('backend.adindex')
@section('admincontent')
    <section class="mt-5">
        <div class="container pt-5">
            <div class="d-flex justify-content-between align-content-center">
                <h2>products</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    add product
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action={{ route('products.store') }} method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="file" name="image" class="form-control" id="exampleInputfile"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control"  id="exampleInputName"
                                            placeholder="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="description" class="form-control"  id="exampleInputDescr"
                                            placeholder="description" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="stock" class="form-control"  id="exampleInputStock"
                                            placeholder="stock" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="prix" class="form-control"  id="exampleInputPrix"
                                            placeholder="prix" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="type" class="form-control"  id="exampleInputType"
                                            placeholder="type" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">image</th>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">stock</th>
                        <th scope="col">prix</th>
                        <th scope="col">type</th>
                        <th scope="col">update</th>
                        <th scope="col">delete</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td><img src={{ asset('storage/img/adminproduct/' . $product->image) }} alt=""
                                    width="40" height="40" srcset=""></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->prix }}</td>
                            <td>{{ $product->type }}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{$product->id}}">
                                    update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{$product->id}}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop{{$product->id}}Label"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdrop{{$product->id}}Label">update</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action={{ route('products.update', $product->id) }} method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <input type="file" name="image" class="form-control"
                                                            id="exampleInputfile" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleInputName" placeholder="name" value={{old('name',$product->name)}} required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" name="description" class="form-control"
                                                            id="exampleInputDescr" placeholder="description" value={{old('description',$product->description)}} required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" name="stock" class="form-control"
                                                            id="exampleInputStock" placeholder="stock" value={{old('stock',$product->stock)}} required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" name="prix" class="form-control"
                                                            id="exampleInputPrix" placeholder="prix" value={{old('prix',$product->prix)}} required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" name="type" class="form-control"
                                                            id="exampleInputType" placeholder="type" value={{old('type',$product->type)}} required>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action={{ route('products.deleteitem', $product->id) }} method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border border-0">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @method('DELETE')
                    <button type="submit" class="border border-0"></button>
                    </form>
                </tbody>
            </table>
        </div>
    </section>
@endsection
