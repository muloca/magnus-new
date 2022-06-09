<form action="{{ route('users.updateUser', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 xl:w-96">
        <label for="name" class="form-label inline-block mb-2 text-gray-700">Nome completo</label>
        <input type="text" name="name" id="name"
            class="
    form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
  "
    value="{{ $user->name }}" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="email" class="form-label inline-block mb-2 text-gray-700">Email</label>
        <input type="email" name="email" id="email"
            class="
    form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
  "
  value="{{ $user->email }}" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="cargo" class="form-label inline-block mb-2 text-gray-700">Cargo</label>
        <input type="text" name="cargo" id="cargo"
            class="
    form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
  "
  value="{{ $user->cargo }}" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="nivel" class="form-label inline-block mb-2 text-gray-700">Nível de acesso</label>
        <input type="text" name="nivel" id="nivel"
            class="
    form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
  "
  value="{{ $user->nivel }}" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="password" class="form-label inline-block mb-2 text-gray-700">Nível de acesso</label>
        <input type="password" name="password" id="password"
            class="
    form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
  "
            placeholder="Digite uma senha para trocar a senha" />
    </div>


    <button type="submit" type="button"
        class="inline-flex justify-center py-2 px-4 border border-transparent 
    shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 
    hover:bg-indigo-700 focus:outline-none focus:ring-2 
    focus:ring-offset-2 focus:ring-indigo-500">Atualizar
        usuário</button>
</form>