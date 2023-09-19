<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Sobre o DocthorSys') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto bg-white sm:px-6 rounded-lg shadow-md lg:px-8">
            <div class="bg-grey-100 overflow-hidden">
                <div class="font-bold py-6 text-xl text-gray-900">
                    {{ __("O DocthorSys") }}
                </div>
                <div class="px-4 text-justify text-gray-800">
                    <p>✦ Lorem ipsum dolor sit amet. Vel laboriosam modi ut quia molestiae id quas cumque in galisum autem non placeat debitis sit quae internos? Eum possimus corporis ut fugit nihil non nihil perferendis. Est voluptatum voluptas aut quia omnis ex unde tempore aut provident amet est asperiores maxime aut iste consequuntur. Est suscipit voluptatibus vel distinctio repellendus eum quam provident et nesciunt quaerat et facere illo quo earum libero At aperiam praesentium. Et minus enim in nesciunt possimus est quam maxime. Sed omnis deleniti cum voluptatibus harum est corrupti iusto aut voluptatem ducimus.</p>
                </div>
                <div class="font-bold py-6 text-xl text-gray-900">
                    {{ __("O que fazemos") }}
                </div>
                <div class="px-4 text-justify text-gray-800">
                    <p>✦ Lorem ipsum dolor sit amet. Et nulla consequuntur sit alias repellat et tempora laborum et fugit praesentium non deleniti laborum ut consequatur esse a ratione sunt. Id consequatur quas nam voluptatem veniam eum dolor velit non maiores harum. Hic explicabo doloribus est nemo ratione non eligendi autem ut voluptatem ducimus est soluta repellat. Et quasi velit nam blanditiis enim sit voluptatem enim. Aut iusto galisum qui magnam asperiores non quasi sapiente ea omnis omnis quo dolorum doloremque ea quia sequi quo cupiditate sint! Cum sunt enim qui </p>
                </div>
                <div class="font-bold py-6 text-xl text-gray-900">
                    {{ __("Diferencial da DocthorSys") }}
                </div>
                <div class="px-4 text-justify text-gray-800">
                    <p>✦ Lorem ipsum dolor sit amet. Non voluptatem tenetur qui soluta ipsa non optio pariatur ut nesciunt suscipit et minima possimus qui unde molestiae. Eos quod excepturi sit modi magni ut facere eligendi aut ducimus aliquid ad nihil quia ea inventore voluptas aut galisum distinctio. Qui reprehenderit quia et quia quia rem itaque autem et veniam porro qui repellendus maxime? </p>
                </div>
                <div class="font-bold py-6 text-xl text-gray-900">
                    {{ __("Equipe") }}
                </div>
                <div class="row">
                    <div class="col-md-6 text-center d-flex align-items-center">
                        <div class="inline-flex">
                            <div class="px-4">
                                <img style="border-radius: 100%; max-width: 100%" src="{{asset('diogo.png')}}" alt="Diogo Ariel Torres" width="100">
                            </div>
                            <div class="px-4">
                                <img style="border-radius: 100%; max-width: 100%" src="{{asset('gustavo.png')}}" alt="Gustavo Castagnara Pinto" width="100">
                            </div> 
                            <div class="px-4">
                                <img style="border-radius: 100%; max-width: 100%" src="{{asset('felipe.png')}}" alt="Felipe" width="100">
                            </div>
                            <div class="px-4">
                                <img style="border-radius: 100%; max-width: 100%" src="{{asset('alisson.jpeg')}}" alt="Alisson Porto" width="100">
                            </div>
                            <div class="px-4">
                                <img style="border-radius: 100%; max-width: 100%" src="{{asset('logo.png')}}" alt="Nathan Cabral Broca" width="100">
                            </div>
                            <div class="px-4">
                                <img style="border-radius: 100%; max-width: 100%" src="{{asset('logo.png')}}" alt="Cristian" width="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
