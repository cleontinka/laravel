<div class="bs-docs-section mar-b-30">
    <h1 id="forms" class="page-header">Добавление статьи</h1>
    <p>Заполните пожалуйста поля формы</p>
    <div class="bs-example">
        <form role="form" method="POST" action="{{ route('admin.post.add') }}">
            {{ csrf_field() }}
            <div class="form-group @if ($errors->get('title')) has-error @endif">
                <label for="inputTitle">Заголовок статьи</label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                @foreach ($errors->get('title') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
            </div>
            <div class="form-group @if ($errors->get('fulltext')) has-error @endif">
                <label for="inputFulltext">Полное описание статьи</label>
                <textarea name="fulltext" class="form-control">{{old('fulltext')}}@if (isset($post['fulltext'])){{ trim($post['fulltext']) }}@endif</textarea>
                @foreach ($errors->get('fulltext') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
            </div>
            <div class="form-group @if ($errors->get('announce')) has-error @endif">
                <label for="inputAnnounce">Краткое описание статьи</label>
                <textarea name="announce" class="form-control">@if (isset($post['announce'])){{ trim($post['announce']) }}@endif {{old('announce')}}</textarea>
                @foreach ($errors->get('announce') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

