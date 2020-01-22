@extends('note.main')

@section('rightContainer')
<div class="rightContainerEdit">
    <div class="noteHeaderBlockEdit">
        <span class="noteEditBlock">Edit mode</span>
    </div>
    <form id=form action="{{url ('note/edit/it/'. $note->id )}}" class="formBlock" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="username" value="{{Auth::user()->username}}" />
        <input placeholder="Note 3" class="noteNameBlockEdit editName inputForm"
            name="note_name" type="text" required value="{{ $note->note_name }}">
        <input placeholder="02.10.2019" class="noteDateBlockEdit editDate inputForm"
            name="use_date" type="date" required value="{{ $note->use_date }}">
        <textarea placeholder="Line 1" class="infoBlockEdit editContent inputForm"
            name="content" required>{{ $note->content }}</textarea>
        <div class="buttonBlock">
            <a class="buttonCancel" href="{{url ('note')}}">Cancel</a>
            <button class="buttonSave" type="submit" name="buttonSaveChanges">Save changes</button>
        </div>
    </form>
</div>
@endsection