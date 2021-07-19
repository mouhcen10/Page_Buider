<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Funnel Builder</title>

        <!-- style -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ml-5">
                    <div class="px-0 pt-4 pb-0 ml-5 my-3">
                        
                        <form action="{{ route('funnels.store') }}" method="POST" id="form" enctype="multipart/form-data">
                            <ul id="progressbar" class="col-md-10">
                                <li class="active" id="step1">
                                    <strong>Step 1</strong>
                                </li>
                                <li id="step2"><strong>Step 2</strong></li>
                                <li id="step3"><strong>Step 3</strong></li>
                                <li id="step4"><strong>Step 4</strong></li>
                            </ul>
                            <div class="col-md-10">
                                <h5 class="text-muted float-left">FUNNEL DETAILS :</h5>
                                <fieldset class="bg-white">
                                    @foreach (App\Models\Funnel::all() as $funnel)
                                        <div class="col-md-3 d-inline-flex float-left">
                                            <div class="card w-100 h-100 mt-3 shadow">
                                                <div class="d-flex justify-content-center ml-3">
                                                    <input class="form-check-input" style="width: 20px;height: 20px;top: 0;" type="radio" name="radio" value="option1">
                                                </div>
                                                <div class="card-body">
                                                    <div class="mt-5 py-5">
                                                        <a class="" href="#"> 
                                                            {{ $funnel->type }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <input type="button" name="next-step" class="next-step" value="Next ->" />
                                </fieldset>
                                <fieldset class="pr-5 bg-white">
                                    <div class="col-md-12 d-inline-flex mt-4">
                                        <div class="input-group flex-nowrap col-md-5">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text bg-white border-right-0" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                                                </svg>
                                              </span>
                                            </div>
                                            <input class="form-control border-left-0" name="name" type="text" placeholder="Funnel Name" aria-label="funnel name" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="input-group flex-nowrap ml-5 pr-0 col-md-6">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text bg-white border-right-0" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                                    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                    <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                                </svg>
                                              </span>
                                            </div>
                                            <input class="form-control border-left-0" name="tag" type="text" placeholder="Funnel Tag" aria-label="funnel name" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-5 ml-3">
                                        <input class="form-control w-100 p-4" name="logo" type="file" placeholder="logo">
                                    </div>
                                    <div class="input-group mt-5 col-md-12 ml-3">
                                        <input type="text" class="form-control border-right-0" placeholder="Subdomain" aria-label="Subdomain" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <span style="color: mediumorchid" class="input-group-text bg-white border-left-0" id="basic-addon2">.zkart.com</span>
                                        </div>
                                    </div>
                                    <input type="button" name="next-step" class="next-step" value="Next ->" />
                                    <input type="button" name="previous-step" class="previous-step" value="<- Previous" />
                                </fieldset>
                                <fieldset class="bg-white">
                                    <div class="col-md-12 d-flex flex-row">
                                        <ul class="list-group col-md-12 d-inline-flex justify-content-lg-center">
                                            @foreach (App\Models\Funnel::all() as $funnel)
                                            <li class="list-group-item mt-3 shadow"> 
                                                <a class="float-left text-secondary">
                                                    <strong class="badge">{{ $funnel->steps }}</strong><br>
                                                    <span class="badge text-muted">{{ $funnel->tag }}</span>
                                                </a>
                                                <a class="float-right text-secondary m-3" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                    </svg>
                                                </a>
                                                <a class="float-right text-danger m-3" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                                    </svg>
                                                </a>
                                                <a class="float-right text-warning m-3" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                                    </svg>
                                                </a>
                                                <a class="float-right text-success m-3" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                                                        <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <input type="button" name="next-step" class="next-step mr-4" value="Next ->" />
                                    <input type="button" name="previous-step" class="previous-step mr-4" value="<- Previous" />
                                </fieldset>
                                <fieldset class="bg-white">
                                    <input type="button" name="previous-step" class="previous-step" value="<- Previous" />
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>