<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Management</title>
    @vite('resources/css/app.css')
    @inertiaHead
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="text-xl font-bold">Clients Management</a>
                <div>
                    <a href="/#" class="text-gray-700 hover:text-gray-900 ml-4">Clients</a>
                 
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        @inertia
    </div>

    @vite('resources/js/app.js')
</body>
</html>