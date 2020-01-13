@extends('note.main')

@section('rightContainer')
<div class="rightContainerEdit">
    <div class="noteHeaderBlockEdit">
        <span class="noteEditBlock">Edit mode</span>
    </div>
    <form id=form action="{{url ('note')}}" class="formBlock" method="post">
        {{csrf_field()}}
        <input placeholder="Note 3" class="noteNameBlockEdit editName inputForm" name="inputNoteName" type="text" required>
        <input placeholder="02.10.2019" class="noteDateBlockEdit editDate inputForm" name="inputNoteDate" type="date" required>
        <textarea placeholder="Line 1" class="infoBlockEdit editContent inputForm" name="inputNoteContent" required></textarea>
        <div class="buttonBlock">
            <button class="buttonCancel" onclick="onClose()">Cancel</button>
            <input class="buttonSave" type="submit" name="buttonSaveChanges" onclick="sendChanges(event)" value="Save changes"/>
        </div>
    </form>
</div>
@endsection