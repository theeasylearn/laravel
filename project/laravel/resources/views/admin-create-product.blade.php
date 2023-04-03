@component("header")
@endcomponent

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        @component("menu")
        @endcomponent
        <div class="main">
            @component("switch-button")
            @endcomponent
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Product management</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Add new product</h5>
                                </div>
                                <div class="card-body">
                                    <form method="post" action='/admin-create-category'>
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Category Title">
                                                    <label for="title">product title</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="price" name="price" placeholder="Product Price">
                                                    <label for="price">product price</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Product stock">
                                                    <label for="stock">product stock</label>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="photo" class="form-label">Select product Photo</label>
                                        <input id='photo' name="photo" class="form-control mb-3" type="file" accept="image/*">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Category description" style="height: 100px" id="detail" class='detail'></textarea>
                                            <label for="detail">product detail</label>
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-end">
                                                <input type="submit" value="Save" class="btn btn-primary">
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @component("script")
    @endcomponent
</body>

</html>