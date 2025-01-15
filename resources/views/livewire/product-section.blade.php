<div class="px-10 md:px-20 sm:px-30 py-3">
    {{-- product new --}}
    @include('components.navigation.view-all',[
        'Category' => 'Brand New'
    ])
    <livewire:product-listing :category_id="0" :current_product_id="0"/>

    {{-- analgesik new --}}
    @include('components.navigation.view-all',[
            'Category' => 'Antihistamin'
    ])
    <livewire:product-listing :category_id="2" :current_product_id="0" />

    {{-- antasida new --}}
    @include('components.navigation.view-all',[
            'Category' => 'Antasida'
    ])
    <h2 class="font-medium text-[20px] my-3">Antasida</h2>
    <livewire:product-listing :category_id="3" :current_product_id="0" />
    
    {{-- analgesik new --}}
    @include('components.navigation.view-all',[
            'Category' => 'Analgesik'
    ])
    <h2 class="font-medium text-[20px] my-3">Analgesik</h2>
    <livewire:product-listing :category_id="5" :current_product_id="0" />
</div>
