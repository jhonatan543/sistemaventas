<!-- Header -->
<div class="header bg-success pb-6">
    <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Detalle</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>ventas">Ventas</a></li>
                <li class="breadcrumb-item active">Detalle</li>
            </ol>
            </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a id="print" class="btn btn-sm btn-neutral text-primary" >Imprimir</a>
            <a href="<?php echo base_url(); ?>ventas" class="btn btn-sm btn-neutral">Volver</a>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 col-auto">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">

              <div class="row">
                <div class="col-lg-7 col-7">
                  <h5 class="h3">Sistema Ventas</h5>
                  <div class="h5 font-weight-400">
                    Av. Sistema Ventas 1001<br/>Teléfono: 100001
                  </div>
                </div>
                <div class="col-lg-5 col-5 text-right">
                  <img height="30" src="<?php echo base_url(); ?>/assets/img/logo.png"  alt="...">
                </div>

                <div class="col-lg-6 pt-3">
                  <h5>Nobres y Apellidos: <span class="font-weight-light"><?php echo $sale->name; ?></span></h5>
                  <h5><?php echo $sale->type_document; ?>: <span class="font-weight-light"><?php echo $sale->num_document; ?></span></h5>
                  <h5>Email: <span class="font-weight-light"><?php echo $sale->email; ?></span></h5>
                  <h5>N° Tel: <span class="font-weight-light"><?php echo $sale->phone_number; ?></span></h5>
                </div>

                <div class="col-lg-6 pt-3 text-right">
                  <h5><?php echo $sale->voucher; ?></h5>
                  <h5>Fecha: <span class="font-weight-light"><?php echo strftime("%d de %B  de %Y", strtotime("$sale->date"));?></span></h5>
                </div>

              </div>

            </div>

            <div class="card-body">
              <!-- Light table -->
              <div class="table-responsive">
                <table id="saleTable" class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" class="sort">N°</th>
                      <th scope="col" class="sort">Nombre</th>
                      <th scope="col" class="sort">Precio</th>
                      <th scope="col" class="sort">Cantidad</th>
                      <th scope="col" class="sort">Importe</th>
                    </tr>
                  </thead>
                  <tbody class="list">

                    <?php if(!empty($data)):?>
                      <?php $number=1; foreach($data as $value):?>
                      <tr>
                        <td><?php echo $number++; ?></td>
                        <td><?php echo $value->product_name; ?></td>
                        <td><?php echo $value->price; ?></td>
                        <td><?php echo $value->cant; ?></td>
                        <td><?php echo $value->price*$value->cant; ?></td>
                      </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    
                  </tbody>
                </table>
              </div>

              <div class="row pt-4">

                <div class="col-lg-3 col-md-6">
                  <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Subtotal</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" value="<?php echo $sale->subtotal ?>" aria-describedby="inputGroup-sizing-default" disabled>
                      </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Descuento</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Sizing example input" value="<?php echo $sale->discount ?>" aria-describedby="inputGroup-sizing-default" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Igv</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Sizing example input" value="<?php echo $sale->igv ?>" aria-describedby="inputGroup-sizing-default" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Total</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Sizing example input" value="<?php echo $sale->total ?>" aria-describedby="inputGroup-sizing-default" disabled>
                        </div>
                    </div>
                </div>
                

              </div>           
            </div>


          </div>
        </div>
      </div>
