<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="m-4">
            <div class="table100">
                @if(!$tourists->isEmpty())
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Name</th>
                        <th class="column2">Phone</th>
                        <th class="column3">Email</th>
                        <th class="column4">Type</th>
                        <th class="column5">created_at</th>
                        <th class="column6">uploaded_at</th>
                        <th class="column7"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tourists as $tourist)
                    <tr>


                        <td class="column1">{{$tourist->user->name}}</td>
                        <td class="column2">{{$tourist->user->phone}}</td>
                        <td class="column3">{{$tourist->user->email}}</td>
                        <td class="column4">{{$tourist->type}}</td>
                        <td class="column5">{{$tourist->user->created_at}}</td>
                        <td class="column6">{{$tourist->user->updated_at}}</td>
                        <td class="column7"><form method="post" action="{{url("/admin/tourist/{$tourist->id}")}}">
                                @method("DELETE")
                                @csrf
                                <button class="btn btn-block btn-danger" type="submit">{{ __('Delete') }}</button></form></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
                    @else
                        <P>No tourists</P>
                    @endif

            </div>
        </div>
</div>




<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>

</body>
</html>
