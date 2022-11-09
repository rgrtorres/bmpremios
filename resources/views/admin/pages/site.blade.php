@extends('admin.template.main')
@section('content')
    <form action="{{ route('admin.site.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="1">

        <label for="" class="form-control">
            <h3>O Prêmio</h3>
            <textarea name="award" rows="10" class="form-control">{{ $texts->award }}</textarea>
        </label>

        <label for="" class="form-control mt-3">
            <h3>Edições</h3>
            <textarea name="editions" rows="10" class="form-control">{{ $texts->editions }}</textarea>
        </label>

        <label for="" class="form-control mt-3">
            <h3>Redes Sociais</h3>
            <textarea name="social_networks" rows="10" class="form-control">{{ $texts->social_networks }}</textarea>
        </label>

        <label for="" class="form-control mt-3">
            <h3>Criador</h3>
            <textarea name="creator" rows="10" class="form-control">{{ $texts->creator }}</textarea>
        </label>

        <label for="" class="form-control mt-3">
            <h3>Patrocinadores</h3>
            <textarea name="sponsors" rows="10" class="form-control">{{ $texts->sponsors }}</textarea>
        </label>

        <hr>

        <input type="submit" value="Salvar" class="btn btn-primary mb-3">
    </form>

    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
            new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
            new nicEditor({
                fullPanel: true
            }).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
    </script>
@endsection
