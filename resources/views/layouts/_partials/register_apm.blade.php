
<body>
    <main class="container align-ceter p-5">
        <form method ="POST" action = "{{ route('registrar_apm') }}">
            @csrf
                    <div class="mb-3" >
                        
                        <label class="form-label"> Usuario </label>
                        <input type="usuario" class="form-control" id ="name" name="name"/><br/>
                    </div>
                    @error ('usuario')
                        <p style ="color:red;">{{ $message }}</p>
                    @enderror
                    
                    <div class="mb-3" >
                        
                        <label class="form-label"> Password </label>
                        <input type="password" class="form-control" id ="password" name="password" required autocomplete="current-password"/><br/>
                    </div>
                    @error ('password')
                        <p style ="color:red;">{{ $message }}</p>
                    @enderror


                    <div class="mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      
                    </div>




                    <div class="mb-3" >
                        
                        <label class="form-label"> Email </label>
                        <input type="email" class="form-control" id ="email" name="email"/><br/>
                    </div>
                    @error ('email')
                        <p style ="color:red;">{{ $message }}</p>
                    @enderror
                    
                    <button type="submit" class ="btn btn-primary"> Registrarse</button>
               
        </form>
    </main>
</body>