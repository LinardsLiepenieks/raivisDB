<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">


</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="flex w-75" style="">
        <div class="data-container w-50"
             style="overflow: scroll; overflow-x: hidden;overflow-y: auto; max-height: 525px;">
            <h5>Produktu saraksts</h5>
            <!---------Product container----->
            @foreach($products as $product)

                <div class="">
                    <form action="{{url('products/'.$product->id.'/update')}}" method="patch">
                        @method('patch')

                        <div class="accordion" id="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$product->id}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{$product->id}}" aria-expanded="false"
                                            aria-controls="collapse{{$product->id}}">
                                        <div>ID: {{$product->productID}} Nosaukums: {{$product->name}}</div>

                                    </button>
                                </h2>
                                <div id="collapse{{$product->id}}" class="accordion-collapse collapse"
                                     aria-labelledby="heading{{$product->id}}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group row justify-content-around ">

                                            <div class="align-middle"><label class="" for="id">ID:</label></div>
                                            <input class="" type="number" name="productId" value="{{$product->productID}}">
                                            {{$errors->has('productId') ? 'Lūdzu korekti aizpildiet id lauku':''}}
                                            <label for="name">Nosaukums:</label>
                                            <input type="text" class="" name="productName" value="{{$product->name}}">
                                            {{$errors->has('productName') ? 'Lūdzu korekti aizpildiet nosaukuma lauku':''}}
                                        </div>


                                        <div class="form-group ">
                                            <label class="m-1" for="category">Kategorija</label>
                                            <br>
                                            <select class=" w-100" name="productCategory" id="category">
                                                <option value="none"
                                                        {{$product->category_id == null?"selected":""}} disabled hidden>
                                                    Izvēlēties kategoriju
                                                </option>
                                                <option
                                                    value="1"{{$product->category_id == 1?"selected":""}}{{$product->category_id == null?"selected":""}}>
                                                    Pārtika
                                                </option>
                                                <option value="2"{{$product->category_id == 2?"selected":""}}>
                                                    Rotaļlietas
                                                </option>
                                                <option value="3"{{$product->category_id == 3?"selected":""}}>
                                                    Drēbes
                                                </option>
                                                <option value="4"{{$product->category_id == 4?"selected":""}}>
                                                    Mēbeles
                                                </option>
                                            </select>
                                            {{$errors->has('productCategory') ? 'Lūdzu izvēlaties pieejamu kategoriju':''}}
                                        </div>


                                        <div class="form-group sm:text-left mt-2">
                                            <input type="radio" id="{{$product->id}}warehouse1"
                                                   name="{{$product->id}}warehouse"
                                                   value="1" {{$product->warehouse_id == 1?"checked":""}}>
                                            <label for="warehouse1">Imantas noliktava</label><br>
                                            <input type="radio" id="{{$product->id}}warehouse2"
                                                   name="{{$product->id}}warehouse"
                                                   value="2" {{$product->warehouse_id == 2?"checked":""}}>
                                            <label for="warehouse2">Teikas noliktava</label><br>
                                            <input type="radio" id="{{$product->id}}warehouse3"
                                                   name="{{$product->id}}warehouse"
                                                   value="3" {{$product->warehouse_id == 3?"checked":""}}>
                                            <label for="warehouse3">Jūrmalas noliktava</label><br>
                                            <div>{{$errors->has($product->id.'warehouse') ? 'Lūdzu izvēlaties pieejamu noliktavu':''}}</div>


                                        </div>

                                        <div class="form-group">
                                            <label for="desc">Apraksts</label>
                                            <br>
                                            <textarea id="productDesc" name="productDesc">{{$product->desc}}</textarea>
                                            {{$errors->has('productDesc') ? 'Lūdzu izveidojiet aprakstu':''}}
                                        </div>

                                        <input type="submit" value="Iesniegt">
                                        <a href="{{ url('/products/' . $product->id . '/delete') }}">
                                            <button type="button" class="m-1 btn btn-danger">Dzēst</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
        @endforeach
        <!---------Product container end-------->
        </div>
        <form class="input-form text-center" action="{{url('addProduct')}}" method="post">
            @csrf

            <div class="form-group m-2">
                <label for="id">ID</label>
                <br>
                <input class="" type="number" name="id">
                <br>
                <div>{{$errors->has('id') ? 'Lūdzu korekti aizpildiet id lauku':''}}</div>

            </div>

            <div class="form-group mb-1">
                <label for="name">Nosaukums</label>
                <br>
                <input type="text" class="" name="name">
                <br>
                <div>{{$errors->has('name') ? 'Lūdzu korekti aizpildiet nosaukuma lauku':''}}</div>
            </div>


            <div class="form-group ">
                <label class="m-1" for="category">Kategorija</label>
                <br>
                <select class=" w-100" name="category" id="category">
                    <option value="none" selected disabled hidden>Izvēlēties kategoriju</option>
                    <option value="1">Pārtika</option>
                    <option value="2">Rotaļlietas</option>
                    <option value="3">Drēbes</option>
                    <option value="4">Mēbeles</option>
                </select>
                <div>{{$errors->has('category') ? 'Lūdzu izvēlaties pieejamu kategoriju':''}}</div>
            </div>


            <div class="form-group sm:text-left mt-2">
                <input type="radio" id="warehouse1" name="warehouse" value="1">
                <label for="warehouse1">Imantas noliktava</label><br>
                <input type="radio" id="warehouse2" name="warehouse" value="2">
                <label for="warehouse2">Teikas noliktava</label><br>
                <input type="radio" id="warehouse3" name="warehouse" value="3">
                <label for="warehouse3">Jūrmalas noliktava</label><br>
                <div>{{$errors->has('warehouse') ? 'Lūdzu izvēlaties pieejamu noliktavu':''}}</div>

            </div>

            <div class="form-group">
                <label for="desc">Apraksts</label>
                <br>
                <textarea id="desc" name="desc"></textarea>
                {{$errors->has('desc') ? 'Lūdzu izveidojiet aprakstu':''}}
            </div>

            <input type="submit" value="Iesniegt">


        </form>
    </div>

</div>
<!-- JavaScript Bundle with Popper -->


</body>
</html>
