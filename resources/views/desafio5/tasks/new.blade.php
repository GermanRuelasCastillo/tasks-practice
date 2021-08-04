
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
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Selecciona un Usuario</label>
                            <select class="form-control select2" name="user_id" style="width: 100%;" required>
                                <option value="">Selecciona un usuario</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="5" required></textarea>
                          </div>

                          <div class="form-group">
                            <label for="date">Fecha máxima de ejecución</label>
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="Ingresa una fecha" required >
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Guardar Tarea</button>
                        </div>
                      </form>
                </div>

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
