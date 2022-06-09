<form action="{{ route('user.store')}}" method="POST">
    @csrf
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-4">
              <label for="name" class="block text-sm font-medium text-gray-700">Nome completo</label>
              <input type="text" name="name" id="name" value="{{ old('name') }}" autocomplete="given-name" 
              class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>

            <div class="col-span-6 sm:col-span-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
              <input type="email" name="email" id="email"  value="{{ old('email') }}" autocomplete="email" class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
            <div class="col-span-6 sm:col-span-4">
              <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo</label>
              <input type="text" name="cargo" id="cargo"  value="{{ old('cargo') }}" autocomplete="cargo" class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
            <div class="col-span-6 sm:col-span-4">
              <label for="nivel" class="block text-sm font-medium text-gray-700">Nível de acesso</label>
              <input type="text" name="nivel" id="nivel"  value="{{ old('nivel') }}" autocomplete="nivel" class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>

            <div class="col-span-6 sm:col-span-4">
              <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
              <input type="password" name="password" id="postal-code" autocomplete="postal-code" class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
          </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cadastrar</button>
        </div>
      </div>
    </form>