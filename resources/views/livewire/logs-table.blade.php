<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <div class="flex justify-between px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                        <input wire:model="search"
                            class="block mt-1 border border-gray-200 rounded-md shadow-sm form-input w-96" type="text"
                            placeholder="Pesquisar..">
                        @if($search !== '')
                        <button wire:click="clear"
                            class="block mt-1 ml-6 border border-gray-200 rounded-md shadow-sm form-input ">
                            <span class="fa fa-trash"></span>
                        </button>
                        @endif
                        <select wire:model='escola_id'
                            class="block mt-1 ml-6 border border-gray-200 rounded-md shadow-sm">
                            <option value="">Selecione a escola..</option>
                            <option value="1" @if (old('escola_id', '' )=="1" ) {{ 'selected' }} @endif>Adolfina Leonor
                                Soares Dos Santos</option>
                            <option value="2" @if (old('escola_id', '' )=="2" ) {{ 'selected' }} @endif>Adriana
                                Aparecida Cassiano</option>
                            <option value="3" @if (old('escola_id', '' )=="3" ) {{ 'selected' }} @endif>Aida de Almeida
                                Castro Grazioli</option>
                            <option value="4" @if (old('escola_id', '' )=="4" ) {{ 'selected' }} @endif>Alaor Xavier
                                Junqueira</option>
                            <option value="5" @if (old('escola_id', '' )=="5" ) {{ 'selected' }} @endif>Antonia Antunes
                                Arouca</option>
                            <option value="6" @if (old('escola_id', '' )=="6" ) {{ 'selected' }} @endif>Antonia Ribeiro
                                Da Silva</option>
                            <option value="7" @if (old('escola_id', '' )=="7" ) {{ 'selected' }} @endif>Antonio De
                                Freitas Avelar</option>
                            <option value="8" @if (old('escola_id', '' )=="8" ) {{ 'selected' }} @endif>Aparecida Maria
                                Pires De Meneses</option>
                            <option value="9" @if (old('escola_id', '' )=="9" ) {{ 'selected' }} @endif>Benedito Inacio
                                Soares</option>
                            <option value="10" @if (old('escola_id', '' )=="10" ) {{ 'selected' }} @endif>Bernardo
                                Ferreira Louzada</option>
                            <option value="11" @if (old('escola_id', '' )=="11" ) {{ 'selected' }} @endif>Carlos Altero
                                Ortega</option>
                            <option value="12" @if (old('escola_id', '' )=="12" ) {{ 'selected' }} @endif>Carlos De
                                Almeida Rodrigues Dr.</option>
                            <option value="13" @if (old('escola_id', '' )=="13" ) {{ 'selected' }} @endif>CEI do Bairro
                                Poiares</option>
                            <option value="14" @if (old('escola_id', '' )=="14" ) {{ 'selected' }} @endif>Celia Rocha
                                Lobo</option>
                            <option value="15" @if (old('escola_id', '' )=="15" ) {{ 'selected' }} @endif>Creche Santo
                                Antonio</option>
                            <option value="16" @if (old('escola_id', '' )=="16" ) {{ 'selected' }} @endif>Edna Maria
                                Nogueira Ferraz</option>
                            <option value="17" @if (old('escola_id', '' )=="17" ) {{ 'selected' }} @endif>Elisa
                                Butschkau</option>
                            <option value="18" @if (old('escola_id', '' )=="18" ) {{ 'selected' }} @endif>Ester Nunes De
                                Souza</option>
                            <option value="19" @if (old('escola_id', '' )=="19" ) {{ 'selected' }} @endif>Euclydes
                                Ferreira</option>
                            <option value="20" @if (old('escola_id', '' )=="20" ) {{ 'selected' }} @endif>Francisco
                                Assis De Carvalho</option>
                            <option value="21" @if (old('escola_id', '' )=="21" ) {{ 'selected' }} @endif>Geraldo De
                                Lima</option>
                            <option value="22" @if (old('escola_id', '' )=="22" ) {{ 'selected' }} @endif>Honorina
                                Pacheco Correa</option>
                            <option value="23" @if (old('escola_id', '' )=="23" ) {{ 'selected' }} @endif>Jane Urbano
                                Focesi</option>
                            <option value="24" @if (old('escola_id', '' )=="24" ) {{ 'selected' }} @endif>Joao Baptista
                                Gardelin</option>
                            <option value="25" @if (old('escola_id', '' )=="25" ) {{ 'selected' }} @endif>Joao Benedito
                                Marcondes</option>
                            <option value="26" @if (old('escola_id', '' )=="26" ) {{ 'selected' }} @endif>Joao Lino Da
                                Cruz</option>
                            <option value="27" @if (old('escola_id', '' )=="27" ) {{ 'selected' }} @endif>Joao Thimoteo
                                Do Rosario</option>
                            <option value="28" @if (old('escola_id', '' )=="28" ) {{ 'selected' }} @endif>Jorge Passos
                            </option>
                            <option value="29" @if (old('escola_id', '' )=="29" ) {{ 'selected' }} @endif>Leonor Mendes
                                De Barros</option>
                            <option value="30" @if (old('escola_id', '' )=="30" ) {{ 'selected' }} @endif>Lucio Jacinto
                                Dos Santos</option>
                            <option value="31" @if (old('escola_id', '' )=="31" ) {{ 'selected' }} @endif>Luiz Ribeiro
                                Muniz</option>
                            <option value="32" @if (old('escola_id', '' )=="32" ) {{ 'selected' }} @endif>Luiz Silvar Do
                                Prado</option>
                            <option value="33" @if (old('escola_id', '' )=="33" ) {{ 'selected' }} @endif>Maria
                                Aparecida De Carvalho</option>
                            <option value="34" @if (old('escola_id', '' )=="34" ) {{ 'selected' }} @endif>Maria
                                Aparecida Ujio</option>
                            <option value="35" @if (old('escola_id', '' )=="35" ) {{ 'selected' }} @endif>Maria Carlita
                                Saraiva Guedes</option>
                            <option value="36" @if (old('escola_id', '' )=="36" ) {{ 'selected' }} @endif>Maria De
                                Lourdes Lucarelli Perez</option>
                            <option value="37" @if (old('escola_id', '' )=="37" ) {{ 'selected' }} @endif>Maria Elma
                                Mansano</option>
                            <option value="38" @if (old('escola_id', '' )=="38" ) {{ 'selected' }} @endif>Maria Eugenia
                                Aranha Chodounsky</option>
                            <option value="39" @if (old('escola_id', '' )=="39" ) {{ 'selected' }} @endif>Maria Moraes
                                De Oliveira</option>
                            <option value="40" @if (old('escola_id', '' )=="40" ) {{ 'selected' }} @endif>Maria Onicie
                                Dias Pereira</option>
                            <option value="41" @if (old('escola_id', '' )=="41" ) {{ 'selected' }} @endif>Maria Thereza
                                De Souza Castro</option>
                            <option value="42" @if (old('escola_id', '' )=="42" ) {{ 'selected' }} @endif>Masako Sone
                            </option>
                            <option value="43" @if (old('escola_id', '' )=="43" ) {{ 'selected' }} @endif>Meimei
                            </option>
                            <option value="44" @if (old('escola_id', '' )=="44" ) {{ 'selected' }} @endif>Messias Mendes
                                De Souza</option>
                            <option value="45" @if (old('escola_id', '' )=="45" ) {{ 'selected' }} @endif>Oswaldo
                                Ferreira</option>
                            <option value="46" @if (old('escola_id', '' )=="46" ) {{ 'selected' }} @endif>Pedro Joao De
                                Oliveira</option>
                            <option value="47" @if (old('escola_id', '' )=="47" ) {{ 'selected' }} @endif>Regina Celia
                                Santos Chapira Blaustein</option>
                            <option value="48" @if (old('escola_id', '' )=="48" ) {{ 'selected' }} @endif>Ricardo Luques
                                Sammarco Serra</option>
                            <option value="49" @if (old('escola_id', '' )=="49" ) {{ 'selected' }} @endif>Santina Nardi
                                Marques</option>
                            <option value="50" @if (old('escola_id', '' )=="50" ) {{ 'selected' }} @endif>Severino
                                Vitoriano Dos Santos</option>
                            <option value="51" @if (old('escola_id', '' )=="51" ) {{ 'selected' }} @endif>Telma Do
                                Amarante Veiga Santos</option>
                            <option value="52" @if (old('escola_id', '' )=="52" ) {{ 'selected' }} @endif>Thereza
                                Yanesse Schmidt Cardozo</option>
                            <option value="53" @if (old('escola_id', '' )=="53" ) {{ 'selected' }} @endif>Vera Da Silva
                                Santos</option>
                            <option value="54" @if (old('escola_id', '' )=="54" ) {{ 'selected' }} @endif>Yasutada Nasu
                            </option>
                            <option value="55" @if (old('escola_id', '' )=="55" ) {{ 'selected' }} @endif>Seduc</option>
                        </select>
                        <select wire:model="perPage"
                            class="block w-48 mt-1 ml-2 border border-gray-200 rounded-md shadow-sm">
                            <option value="10">10 por página</option>
                            <option value="25">25 por página</option>
                            <option value="50">50 por página</option>
                            <option value="100">100 por página</option>
                            <option value="200">200 por página</option>
                        </select>
                    </div>
                    @if ($logs->count())
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase bg-blue-500 text-gray-50">
                                    Id
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 space-x-1 text-xs font-medium tracking-wider text-left uppercase bg-blue-500 text-gray-50">
                                    Usuário
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 space-x-1 text-xs font-medium tracking-wider text-left uppercase bg-blue-500 text-gray-50">
                                    Escola
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 space-x-1 text-xs font-medium tracking-wider text-left uppercase bg-blue-500 text-gray-50">
                                    AÇÃO
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase bg-blue-500 text-gray-50">
                                    Id da tarefa
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase bg-blue-500 text-gray-50">
                                    DATA
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($logs as $log )
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $log->id }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 uppercase whitespace-nowrap">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        <a href="#" rel="noopener noreferrer"
                                            class="text-blue-800 hover:text-blue-600 hover:underline">{{
                                            $log->user_name }}</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $log->escola->escola }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $log->acao }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $log->id_objeto }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $log->updated_at }}
                                </td>
                            </tr>
                            @endforeach
                            <!-- More people... -->
                        </tbody>
                    </table>
                    <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                        {!! $logs->links() !!}
                    </div>
                    @else
                    <div class="px-4 py-3 text-gray-500 bg-white border-t border-gray-200 sm:px-6">
                        Não há resultados nesta pesquisa "{{$search}}"
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
