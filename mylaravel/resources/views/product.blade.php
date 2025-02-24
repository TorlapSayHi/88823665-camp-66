@extends('layouts.default_with_menu')


@section('content')

<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header"><h3 class="card-title">Edit Product</h3></div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('product') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category Name</label>
                                    <input type="text" name="category" class="form-control" id="category">
                                </div>
                            </div>
                        </div>
                        <button type="button" id="btn-add-product" class="btn btn-primary">
                            + เพิ่ม product
                        </button>
                        <div class="row" id='add-product'>

                        </div>
                        <div class="mt-3 row">
                            <button class="btn btn-success" type="submit">บันทึก</button>
                        </div>
                    </form>
                    <table class="mt-3 table table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Category Name</td>
                                <td>Product Name</td>
                                <td>User Name</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($c as $category)
                                @foreach($category->products as $key => $product)
                                <tr>
                                    <ul>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->user->name }}</td>
                                    </ul>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
        </div>
        <!--end::App Content-->



@endsection



@section('scripts')
<script>
    $(document).ready(function(){
        var count = 1 ;
        $('#btn-add-product').on('click', function(){
            $("#add-product").append(`
            <div class="mt-3 col-6">
                <label class="form-label product-label">${count++}. Product Name
                    <button type="button" class="btn btn-danger btn-delete-product">ลบ</button>
                </label>
                    <input type="text" name="product_name[]" class="form-control">
            </div>
            `)
        })
        // $('#btn btn-success').on('click', function(){
        // $count = 1;
        // })

        $(document).on('click','.btn-delete-product', function(){
            $(this).parent().parent().remove();

        $("#delete-product").append(`${count--};
        `)

        })
    });
</script>
@endsection
