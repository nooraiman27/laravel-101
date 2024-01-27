{{-- generated by php artisan make:view cruds/form --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Form</title>
</head>
<body>
    <h2>Crud Form</h2>

    <form action="{{ $formAction }}" method="post">
        @csrf

        @isset($crud)
            @method('PUT');
        @endisset

        <!-- Text Input -->
        <label for="textInput">Text Input:</label>
        <input type="text" id="textInput" name="text" value="{{ $crud->text ?? NULL }}" required>
        <br>

        <!-- Email Input -->
        <label for="emailInput">Email Input:</label>
        <input type="email" id="emailInput" name="email" value="{{ $crud->email ?? NULL }}" required>
        <br>

        <!-- Date Input -->
        <label for="dateInput">Date Input:</label>
        <input type="date" id="dateInput" name="date" value="{{ $crud->date ?? NULL }}" required>
        <br>

        <!-- Decimal Input -->
        <label for="decimalInput">Decimal Input:</label>
        <input type="number" id="decimalInput" name="decimal" step="0.01" value="{{ $crud->decimal ?? NULL }}" required>
        <br>

        <!-- Number Input -->
        <label for="numberInput">Number Input:</label>
        <input type="number" id="numberInput" name="integer" value="{{ $crud->integer ?? NULL }}" required>
        <br>

        <!-- Datetime Input -->
        <label for="datetimeInput">Datetime Input:</label>
        <input type="datetime-local" id="datetimeInput" name="datetime" value="{{ $crud->datetime ?? NULL }}" required>
        <br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>