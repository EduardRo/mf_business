@extends('layout.menu')
@section('content')


    <head>
        <title>Comunicat de Presa</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="showimages"></div>
                </div>
                <div class="col-md-6 offset-3 mt-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h6 class="text-white">Comunicat de presa nou</h6>
                        </div>
                        <div class="card-body">
                            <form class="image-upload" method="post" action="/pressrelease/create" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Company Id</label>
                                    <input type="text" name="company_id" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Company Id: {{company_id}}</label>
                                    <label>Company_name: {{company_name}} </label>
                                </div>
                                <div class="form-group">
                                    <label>title</label>
                                    <input type="text" name="title" class="form-control" />
                                </div>
                                
                                <div class="form-group">
                                    <label>Continut</label>
                                    <textarea name="text" rows="15" cols="40"
                                        class="form-control tinymce-editor"></textarea>
                                </div>
                                
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Salveaza</button>
                                </div>

                                <div class="form-group">
                                    
                                    <input type="text" value={{$company_id}} name="company_id" class="form-control" hidden/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript">
        </script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: 'textarea.tinymce-editor',
                height: 100,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_css: '//www.tiny.cloud/css/codepen.min.css'
            });

        </script>
    </body>



@endsection
