<form action="{{ route('user.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome completo</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nome completo" value="{{ old('name') }}"">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}"" placeholder="Email">
    <small id="emailHelp" name class="form-text text-muted">Digite um email válido.</small>
  </div>
  <div class="form-group">
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Cargo" value="{{ old('cargo') }}"">
  </div>
  <div class="form-group">
    <label for="nivel">Nível de acesso</label>
    <input type="text" name="nivel" class="form-control" id="nivel" placeholder="Nível de acesso" value="{{ old('nivel') }}"">
  </div>
  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" name="password" class="form-control" id="pssword" placeholder="Digite a nova senha se deseja mudar">
  </div>
  <button type="submit" class="btn btn-info">Cadastrar</button>
</form>