<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .w-5 {
            display: none;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Likes</th>
                <th scope="col">Views</th>
                <th scope="col">Body</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->likes }}</td>
                    <td>{{ $post->views }}</td>
                    <td>{{ $post->body }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{ $posts->links() }}
        </ul>
    </nav>
</body>


</html>
