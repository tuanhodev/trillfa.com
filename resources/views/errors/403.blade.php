{{-- Page: errors.403 --}}

<x-layouts.app>

    <x-slot name="pageTitle">Trang 404</x-slot>

    <section class="content">

        <div class="content-body">
            
            <div class="container mx-auto min-h-50 errors-container">
                
                <h2>Không thể truy cập địa chỉ <b>{{ request()->path() }}</b> !</h2>
                
            </div>
            
        </div>

    </section>

</x-layouts.app>
