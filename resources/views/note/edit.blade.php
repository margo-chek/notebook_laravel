@extends('note.main')

@section('rightContainer')
<div class="rightContainerEdit">
    <div class="noteHeaderBlockEdit">
        <span class="noteEditBlock">Edit mode</span>
    </div>
    <form id=form action="{{url ('note')}}" class="formBlock" method="post">
        {{csrf_field()}}
        <input placeholder="Note 3" class="noteNameBlockEdit editName inputForm" name="inputNoteName" type="text" required value="{{ $note->note_name }}">
        <input placeholder="02.10.2019" class="noteDateBlockEdit editDate inputForm" name="inputNoteDate" type="date" required value="{{ $note->use_date }}">
        <textarea placeholder="Line 1" class="infoBlockEdit editContent inputForm" name="inputNoteContent" required>{{ $note->content }}</textarea>
        <div class="buttonBlock">
            <a class="buttonCancel" href="{{url ('note')}}">Cancel</a>
            <a class="buttonSave" type="submit" name="buttonSaveChanges" href="{{url ('note/edit/{note}')}}">Save changes</a>
        </div>
    </form>
</div>
@endsection