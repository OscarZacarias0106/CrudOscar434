@extends('layauts.base') <!--para heredar de base los estilos-->
@section('title','Lista Estudiantes') <!--titulo, nombre de esta seccion-->
@section('navbar')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">Estudiantes</h1>

                <a class="btn btn-outline-success mb-3 btn-lg" href="{{url('/formStuden')}}">AGREGAR</a>

                <!--Mensaje de Eliminado-->
                @if(session('studenEliminado'))
                    <div class="alert alert alert-primary text-dark" style="background-color: #F1D914 ;">
                        {{session('studenEliminado')}}
                    </div>
                @endif

            <!--Mensaje de Modificado-->
                @if(session('studenModificado'))
                    <div class="alert alert-primary">
                        {{session('studenModificado')}}
                    </div>
                @endif

            <!--Mensaje de Guardado-->
                @if(session('studenGuardado'))
                    <div class="alert alert-success">
                        {{session('studenGuardado')}}
                    </div>
                @endif

                <div class="col-xl-30">
                    <table class="table table-dark table-hover text-dark">
                        <thead>
                        <tr style="background-color: #DD4455;">
                            <th>Carne</th>
                            <th>Foto</th>
                            <th>Alias</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha de nacimiento</th>
                            <th>Telefono</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody style="background-color: #455464 ;">
                        @foreach($studen as $studens)
                            <tr>
                                <td class="text-white text-center ">{{$studens->carne}}</td>
                                <td>
                                    <img src="{{ asset('storage').'/'. $studens->foto}}" class="img-fluid img-thumbnail"  width="100px" high="100px">
                                </td>

                                <td class="text-white">{{$studens->alias}}</td>
                                <td class="text-white">{{$studens->nombre}}</td>
                                <td class="text-white">{{$studens->correo}}</td>
                                <td class="text-white text-center">{{$studens->fecha_nacimiento}}</td>
                                <td class="text-white">{{$studens->telefono}}</td>
                                <td class="text-white">{{$studens->descripcion}}</td>

                                <td>

                                    <div class="btn-group">

                                        <a href="{{ route('editFormS', $studens->carne) }}" class="btn btn-primary mb-3 mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form action="{{route('delete', $studens->carne)}}" method="POST">
                                            @csrf @method('DELETE')

                                            <button type="submit" onclick="return confirm('¿Desea eliminar al estudiante?');" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>

                <!--paginas-->
                {{ $studen->links() }}

            </div>
        </div>
    </div>

@endsection
