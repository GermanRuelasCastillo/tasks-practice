
@extends('layouts.appAdmin')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">

            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title alternTitle">Listado de Facturas</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <a href="#!" class="btn btn-sm btn-info filter" data-type="cantidad">Cantidad > 100</a>&nbsp;&nbsp;
                  <a href="#!" class="btn btn-sm btn-info filter" data-type="total">Total > $1.000.000</a>
                  <a href="{{ url('') }}/desafio1" class="btn btn-sm btn-info filter" data-type="total">Todo</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th id="Folio">Folio</th>
                      <th id="cantidad">Productos Incluidos</th>
                      <th id="precio">Cantidad Productos</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody id="bodyInvoices">
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td>FA-{{ $invoice->id }}</td>
                                <td>{{ count($invoice->productos) }}</td>
                                <td>{{ $invoice->cantidad($invoice->id) }}</td>
                                <td>{{ $invoice->total($invoice->id) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $invoices->links() }}
                </div>
                <!-- /.table-responsive -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
    <!-- Custom Operations -->
    <script src="{{ url('') }}/js/custom.js"></script>
@endsection
