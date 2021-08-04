
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
                <h3 class="card-title alternTitle">Listado de Tareas</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <a href="{{ url('') }}/desafio5/tasks/create" class="btn btn-sm btn-info" data-type="total">Nueva Tarea</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Usuario</th>
                      <th>Detalle</th>
                      <th>Fecha</th>
                      <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody id="bodyInvoices">
                        @foreach ($tasks as $key => $task)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $task->user->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td class="{{ $task->verifyDate($task->id) == true ? '' : 'danger'  }}">{{ $task->date }}</td>
                                <td>
                                    @if(Auth::user()->id == $task->user->id)
                                        <a href="#!" class="btn btn-info log-details" data-id="{{ $task->id }}" data-name="{{ $task->user->name }}" data-task="{{ $task->description }}" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $tasks->links() }}
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
    @include('desafio5.tasks/modal')
    <!-- /.content -->
@endsection
@section('scripts')
    <!-- Custom Operations -->
    <script src="{{ url('') }}/js/custom.js"></script>
@endsection
