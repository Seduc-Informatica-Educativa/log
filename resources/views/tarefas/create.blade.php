<x-app-layout>
    <form class="formCadastrar" action="{{ route('tarefas.store')}}" method="POST">
        @csrf
        <div
            class="max-w-4xl mx-8 mt-5 border-none rounded-md shadow-md sm:mx-auto bg-none dark:bg-gray-800 md:mt-0 shadow-gray-500/50">
            <h1 class="text-lg font-bold text-white uppercase dark:text-gray-200 ">Cadastrar tarefa</h1>
            <div
                class="px-4 py-5 space-y-6 bg-white shadow sm:p-6 sm:rounded-b-md sm:overflow-hidden dark:text-white dark:bg-gray-800">
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-12 sm:gap-4">
                    <div class="col-span-2 sm:col-span-12">
                        <x-input label="titulo" name="titulo" value="{{ old('titulo', '' ) }}" class="border-gray-400"/>
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                        <x-input label="descricao" name="descricao" value="{{ old('descricao', '' ) }}" />
                    </div>
                    <div class="col-span-2 sm:col-span-12">
                        <div class="flex flex-row-reverse px-4 py-3 sm:px-6">
                            <button class="px-4 py-2 text-white bg-green-500 rounded-md id="Cadastrar" type="submit">Cadastrar</button>
                            <a class="px-4 py-2 text-white bg-gray-500 rounded-md" href="{{route('tarefas.index')}}">VOLTAR</a>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</x-app-layout>