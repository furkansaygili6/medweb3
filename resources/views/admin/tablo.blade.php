<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" >
</head>
<body>

<h2>KULLANICILAR</h2>
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">Sıra No</th>
        <th scope="col">Ad Soyad</th>

        <th scope="col">Eposta</th>
    </tr>
    </thead>

    @if(count($users) > 0)
        @foreach($users as $user)
            <tr id="{{$user->user_id}}">
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>

                </td>
                <td>
                    <ul class="nav float-start">
                        <li class="nav-item">
                            <a class="nav-link " href="{{url("/user/$user->user_id/edit")}}">
                                <span data-feather="edit"></span>
                                Güncelle
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-item-delete text-black"
                               href="{{url("/user/$user->user_id")}}">
                                <span data-feather="trash-2"></span>
                                Sil
                            </a>
                        </li>


                    </ul>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="5">
                <p class="text-center">Herhangi bir kullanıcı bulunamadı.</p>
            </td>
        </tr>
    @endif
</table>
    </body>

</html>

