<form action="{{ route('users.updateUser', $user->id) }}" method="post">
  @method('PUT')
  @csrf
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">Nome completo</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nome completo" value="{{ $user->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email }}" placeholder="Email">
    <small id="emailHelp" name class="form-text text-muted">Digite um email válido.</small>
  </div>
  <div class="form-group">
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Cargo" value="{{ $user->cargo }}">
  </div>
  <div class="form-group">
    <label for="nivel">Nível de acesso</label>
    <input type="text" name="nivel" class="form-control" id="nivel" placeholder="Nível de acesso" value="{{ $user->nivel }}">
  </div>
  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" autocomplete="off" autocapitalize="off" name="password" class="form-control" id="pssword" placeholder="Digite a nova senha se deseja mudar">
  </div>
  <button type="submit" class="btn btn-info">Atualizar usuário</button>
</form>