{{-- generated by command php artisan make:view cruds.show --}}

<h1>Crud Detail</h1>

<ul>
    <li>Text: {{ $crud->text }}</li>
    <li>Email: {{ $crud->email }}</li>
    <li>Date: {{ $crud->date }}</li>
    <li>Decimal: {{ $crud->decimal }}</li>
    <li>Integer: {{ $crud->integer }}</li>
    <li>Datetime: {{ $crud->datetime }}</li>
</ul>
