@extends ('layouts.landing')
@section('title','Centros')
@section('subtitle','EDICION DE CENTROS')

@section('content')

<form method ="POST" action ="{{route('centros.update', $centro->id)}}">
    
    @method('PUT')
    @csrf
    
        <div class="container">
        <label> CENTROS  </label>
        <input type="text" name="nombre_centro" value="{{ $centro->nombre_centro }}"/>
        </div>
        @error ('nombre_centro')
        <p style ="color:red;">{{ $message }}</p>
        @enderror

        <div class="container">
        <label> TIPO_VIA  </label>
        <input type="text" name="tipo_via" value="{{ $centro->tipo_via }}"/>
        </div>
        @error ('tipo_via')
        <p style ="color:red;">{{ $message }}</p>
        @enderror

            <div class="container">
                <label> DIRECCION  </label>
                <input type="text" name="direccion" value="{{ $centro->direccion }}"/>
            </div>
                @error ('direccion')
                <p style ="color:red;">{{ $message }}</p>
                @enderror
            
            <div class="container">
                <label> NUMERO  </label>
                <input type="text" name="numero" value="{{ $centro->numero }}"/>
            </div>
                @error ('numero')
                <p style ="color:red;">{{ $message }}</p>
                @enderror

            <div class="container">
                <label> PLANTA  </label>
                <input type="text" name="planta" value="{{ $centro->planta }}"/>
            </div>
                @error ('planta')
                <p style ="color:red;">{{ $message }}</p>
                @enderror

                <div class="container">
                    <label> POBLACION  </label>
                    <input type="text" name="poblacion" value="{{ $centro->poblacion }}"/>
                    </div>
                    @error ('poblacion')
                    <p style ="color:red;">{{ $message }}</p>
                    @enderror

                    <div class="container">
                        <label> PROVINCIA  </label>
                        <input type="text" name="provincia" value="{{ $centro->provincia }}"/>
                        </div>
                        @error ('provincia')
                        <p style ="color:red;">{{ $message }}</p>
                        @enderror


                        <div class="container">
                            <label> CODIGO_POSTAL  </label>
                            <input type="text" name="codigo_postal" value="{{ $centro->codigo_postal }}"/>
                            </div>
                            @error ('codigo_postal')
                            <p style ="color:red;">{{ $message }}</p>
                            @enderror

                            <div class="container">
                                <label> TELEFONO  </label>
                                <input type="text" name="telefono" value="{{ $centro->telefono }}"/>
                                </div>
                                @error ('telefono')
                                <p style ="color:red;">{{ $message }}</p>
                                @enderror
                                <div class="container">
                                    <label> TELEFONO2  </label>
                                    <input type="text" name="telefono2" value="{{ $centro->telefono2 }}"/>
                                    </div>
                                    @error ('telefono2')
                                    <p style ="color:red;">{{ $message }}</p>
                                    @enderror

                                    <div class="container">
                                        <label> FAX  </label>
                                        <input type="text" name="fax" value="{{ $centro->fax }}"/>
                                        </div>
                                        @error ('fax')
                                        <p style ="color:red;">{{ $message }}</p>
                                        @enderror

                                        <div class="container">
                                            <label> FAX2  </label>
                                            <input type="text" name="fax2" value="{{ $centro->fax2 }}"/>
                                            </div>
                                            @error ('fax2')
                                            <p style ="color:red;">{{ $message }}</p>
                                            @enderror

                                            <div class="container">
                                                <label> CORREO_ELECTRONICO  </label>
                                                <input type="text" name="correo_electronico" value="{{ $centro->correo_electronico }}"/>
                                                </div>
                                                @error ('correo_electronico')
                                                <p style ="color:red;">{{ $message }}</p>
                                                @enderror
                                            
                                                <div class="container">
                                                    <label> OBSERVACIONES  </label>
                                                    <input type="text" name="observaciones" value="{{ $centro->observaciones }}"/>
                                                    </div>
                                                    @error ('fax2')
                                                    <p style ="color:red;">{{ $message }}</p>
                                                    @enderror

                                                    
                                            

    <input type="submit" value="Actualizar Aseguradora"/>

</form>

@endsection