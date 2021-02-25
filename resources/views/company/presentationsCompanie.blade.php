@extends('layout.menu')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="showimages"></div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">Introduceti datele companiei</h6>
                </div>
                <div class="card-body">
                    <form class="image-upload" method="post" action="/companies/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>ID:</label>
                            <input name="company_id"  value={{$company_id}} rows="15" cols="40" class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Nume Companie:</label>
                            <input name="company_name"  value={{$company_name}} rows="15" cols="40" class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Descriere:</label>
                            <textarea name="company_description" rows="15" cols="40" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Servicii:</label>
                            <textarea name="company_services" rows="15" cols="40" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Management:</label>
                            <textarea name="company_management_team" value="10000" rows="15" cols="40" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Adresa:</label>
                            <textarea name="company_address" rows="15" cols="40" class="form-control"/></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contact:</label>
                            <textarea name="company_contact" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
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

@endsection
