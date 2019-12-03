<div class="jumbotron  jumbotron-fluid ">
    <div class="container">
        <h1 class="display-4">Belanja Aman & Nyaman <br> <span class="text-info">Suji Shoes Indonesia <span></h1>

    </div>
</div>

<div class="row  justify-content-center mt-3">
    <div class="col-md-3">
        <form action="<?= base_url('home'); ?>" method="post">
            <div class="input-group mb-1">
                <input type="text" class="form-control" name="keyword" placeholder="Search Keyword" autofocus>
                <div class="input-group-append">

                    <input class="btn btn-info" name="submit" type="submit">
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-2 input-group mb-3">
        <select class="custom-select" id="inputGroupSelect02">
            <option selected>Short Bye..</option>
            <option value="1">Harga terendah</option>
            <option value="2">Harga Tertinggi</option>

        </select>
        <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Filter</label>
        </div>
    </div>


</div>

<div class="p-2 m-3">

    <div class="card mt-3 ml-auto">
        <div class="card-header ">
            <div class="ml-4">

                <a class=" mt-2" href="<?php echo base_url('Auth'); ?>"><i class="fas fa-cart-arrow-down fa-1x  " style="color: #000000"> <sup>2</sup></i></a>
            </div>

        </div>

        <?php if (empty($product)) : ?>
            <tr>
                <td colspan="4">
                    <div class="alert alert-danger" role="alert">
                        Data Not Found!
                    </div>
                </td>
            </tr>
        <?php endif; ?>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div class="">
                    <div class="card-group ">
                        <?php foreach ($product as $mc) : ?>
                            <div class="col-md-6 col-lg-3  ">
                                <div class="card mb-3">
                                    <div class="content-center">

                                        <img src="<?= base_url('assets/img/spt-black.jpg'); ?>" alt="..." class="img-fluid " style=" width:15rem; height: 12rem;">
                                    </div>
                                    <div class="card-body m-0 ">
                                        <h5 class="card-title"> <?= $mc['name']; ?></h5>


                                        <div>
                                            <p class="text-sm"><small> kategori : <span class="badge badge-warning text-wrap"><?= $mc['name']; ?></span></small></p>
                                        </div>
                                        <p class="card-text">
                                            <h6>
                                                <p> IDR : </p>

                                            </h6>
                                        </p>
                                        <a href="<?php echo base_url(); ?>merchandise/detail/<?= $mc['id'] ?>" class="btn btn-sm btn-info float-center ">Detail</a>

                                    </div>
                                </div>


                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?= $this->pagination->create_links(); ?>
                    <h6 class=" align-center">Result :<?= $total_rows; ?></h6>
                </div>
            </blockquote>
        </div>

    </div>
</div>