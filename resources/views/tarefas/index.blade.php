<x-app-layout>
    <div class="flex justify-end p-2 m-2">
        <a  class="px-4 py-2 text-white bg-green-500 rounded-md" href="{{route('tarefas.create')}}">Nova tarefa</a>
    </div>
    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-md">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-sky-600 dark:bg-gray-900">
                        <tr>
                            <th>ID</th>
                            <th>Tarefa</th>
                            <th>Descrição</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tarefas as $tarefa)
                        <tr>
                            <td>{{$tarefa->id}}</td>
                            <td>{{$tarefa->titulo}} </td>     
                            <td>{{$tarefa->descricao}}  </td>    
                            <td class="flex flex-row-reverse space-x-4 space-x-reverse">
                                <form class="formEliminar" action="{{ route('tarefas.destroy', $tarefa->id) }}"
                                    method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit"
                                    class="px-3 py-2 my-auto text-sm font-medium leading-4 text-center text-red-700 border border-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 hover:text-white focus:ring-red-700 hover:bg-red-800"
                                    value="Excluir">
                                </form>
                                <a indigo href="{{route('tarefas.edit', $tarefa->id)}}">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
