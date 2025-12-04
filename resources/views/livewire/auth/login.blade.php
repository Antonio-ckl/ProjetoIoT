<div class="d-flex align-items-center justify-content-center vh-100 bg-ligth">
    <div class="card shadow-sm p-4" style="width: 400px; background-color:#986745">
        <h2 class="text-center mb-4" style="color:#5e391f; font-family: 'Franklin Gothic Medium'">Login</h2>

        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class='mb-3'>
                <label for='email' class='form-label' style="color:#fffeed">Email</label>
                <input type='email' id='email' wire:model='email' class='form-control' placeholder='Insira seu Email' style="background-color: #fffeed; border-radius:100px">
                @error('email')
                    <span class='text-danger small'>{{ $message }}</span>
                @enderror
            </div>
            <div class='mb-3'>
                <label for='password' class='form-label' style="color:#fffeed">Senha</label>
                <input type='password' id='password' wire:model='password' class='form-control' placeholder='Insira sua senha' style="background-color: #fffeed; border-radius:100px">
                @error('password')
                    <span class='text-danger small'>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn w-100" style="background-color: #5e391f; border-radius:100px; color:#fffeed">Entrar</button>
            </div>
    </div>
    
</div>