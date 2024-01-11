<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>


    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h2 class="text-white">Start: 02:30 pm & End: 03: 30 pm</h2>

                </div>
            </div>
        </div>

        {{-- <div class="col-lg-3">
            <div class="card">
                <div class="card-body bg-primary">
                   <h2 class="text-white text-center">MD ZEHAD ALI</h2>
                   <h4 class="text-white text-center">Web Developer</h4>
                   <h5 class="text-white text-center">
                    Phone:+880 1744 646344 <br>
                    WhatsApp:+880 1744 646344 <br>
                    Present Address: 105, Senpara, Parbata, Mirpur-10,
                    Dhaka-1216 <br>
                    Email: sehabkhanzehad@yahoo.com <br>
                    Linked-In:Linkedin.com/sehabkhanzehadbr
                   </h5>


                </div>

            </div>
        </div> --}}
        @foreach ($posts as $post)


        <div class="col-lg-3">
            <div class="card">
                <div class="card-body bg-primary">
                   <img style="width: 250px" src="{{ $post->image }}" alt="">
                   <h6>{{ Str::substr($post->title, 0, 30) }}</h6>
                   <p>{{ Str::substr($post->description, 0, 50) }}</p>



                </div>

            </div>
        </div>
        @endforeach

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-center text-white bg-primary">

                        https://github.com/sehabkhanzehad/internship
                    </p>
                </div>
            </div>
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
